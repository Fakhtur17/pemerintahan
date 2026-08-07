<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\TentangKabupatenBagian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangKabupatenController extends Controller
{
    public function index()
    {
        $data = TentangKabupatenBagian::orderBy('urutan')->orderBy('id')->paginate(10);

        return view('admin.profil.tentang-kabupaten.index', compact('data'));
    }

    public function create()
    {
        return view('admin.profil.tentang-kabupaten.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'  => ['required', 'max:255'],
            'isi'    => ['required'],
            'gambar' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'urutan' => ['nullable', 'integer'],
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('tentang-kabupaten', 'public');
        }

        TentangKabupatenBagian::create([
            'judul'  => $request->judul,
            'isi'    => $request->isi,
            'gambar' => $gambar,
            'urutan' => $request->urutan ?? 0,
        ]);

        return redirect()
            ->route('admin.profil.tentang-kabupaten.index')
            ->with('success', 'Bagian berhasil ditambahkan');
    }

    public function edit(TentangKabupatenBagian $tentang_kabupaten)
    {
        return view('admin.profil.tentang-kabupaten.edit', [
            'data' => $tentang_kabupaten,
        ]);
    }

    public function update(Request $request, TentangKabupatenBagian $tentang_kabupaten)
    {
        $request->validate([
            'judul'  => ['required', 'max:255'],
            'isi'    => ['required'],
            'gambar' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'urutan' => ['nullable', 'integer'],
        ]);

        $gambar = $tentang_kabupaten->gambar;

        if ($request->hasFile('gambar')) {
            if ($gambar && Storage::disk('public')->exists($gambar)) {
                Storage::disk('public')->delete($gambar);
            }

            $gambar = $request->file('gambar')->store('tentang-kabupaten', 'public');
        }

        $tentang_kabupaten->update([
            'judul'  => $request->judul,
            'isi'    => $request->isi,
            'gambar' => $gambar,
            'urutan' => $request->urutan ?? $tentang_kabupaten->urutan,
        ]);

        return redirect()
            ->route('admin.profil.tentang-kabupaten.index')
            ->with('success', 'Bagian berhasil diperbarui');
    }

    public function destroy(TentangKabupatenBagian $tentang_kabupaten)
    {
        if ($tentang_kabupaten->gambar && Storage::disk('public')->exists($tentang_kabupaten->gambar)) {
            Storage::disk('public')->delete($tentang_kabupaten->gambar);
        }

        $tentang_kabupaten->delete();

        return redirect()
            ->route('admin.profil.tentang-kabupaten.index')
            ->with('success', 'Bagian berhasil dihapus');
    }
}