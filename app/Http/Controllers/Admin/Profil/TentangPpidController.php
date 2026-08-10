<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\TentangPpidBagian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangPpidController extends Controller
{
    /**
     * Menampilkan daftar bagian Tentang PPID
     */
    public function index()
    {
        $data = TentangPpidBagian::orderBy('urutan')
            ->orderBy('id')
            ->paginate(10);

        return view('admin.profil.tentang-ppid.index', compact('data'));
    }

    /**
     * Form tambah
     */
    public function create()
    {
        return view('admin.profil.tentang-ppid.create');
    }

    /**
     * Simpan data baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required', 'max:255'],
            'isi' => ['required'],
            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
            'urutan' => ['nullable', 'integer'],
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')
                ->store('tentang-ppid', 'public');
        }

        TentangPpidBagian::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambar,
            'urutan' => $request->urutan ?? 0,
        ]);

        return redirect()
            ->route('admin.profil.tentang-ppid.index')
            ->with('success', 'Bagian Tentang PPID berhasil ditambahkan.');
    }

    /**
     * Form edit
     */
    public function edit(TentangPpidBagian $tentang_ppid)
    {
        return view('admin.profil.tentang-ppid.edit', [
            'data' => $tentang_ppid,
        ]);
    }

    /**
     * Update data
     */
    public function update(
        Request $request,
        TentangPpidBagian $tentang_ppid
    ) {
        $request->validate([
            'judul' => ['required', 'max:255'],
            'isi' => ['required'],
            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
            'urutan' => ['nullable', 'integer'],
        ]);

        $gambar = $tentang_ppid->gambar;

        /*
        |--------------------------------------------------------------------------
        | Jika upload gambar baru
        |--------------------------------------------------------------------------
        */
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if (
                $gambar &&
                Storage::disk('public')->exists($gambar)
            ) {
                Storage::disk('public')->delete($gambar);
            }

            // Simpan gambar baru
            $gambar = $request->file('gambar')
                ->store('tentang-ppid', 'public');
        }

        $tentang_ppid->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambar,
            'urutan' => $request->urutan ?? $tentang_ppid->urutan,
        ]);

        return redirect()
            ->route('admin.profil.tentang-ppid.index')
            ->with('success', 'Bagian Tentang PPID berhasil diperbarui.');
    }

    /**
     * Hapus data
     */
    public function destroy(TentangPpidBagian $tentang_ppid)
    {
        if (
            $tentang_ppid->gambar &&
            Storage::disk('public')->exists($tentang_ppid->gambar)
        ) {
            Storage::disk('public')->delete($tentang_ppid->gambar);
        }

        $tentang_ppid->delete();

        return redirect()
            ->route('admin.profil.tentang-ppid.index')
            ->with('success', 'Bagian Tentang PPID berhasil dihapus.');
    }
}
