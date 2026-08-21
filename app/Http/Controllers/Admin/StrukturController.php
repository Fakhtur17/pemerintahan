<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    /**
     * Menampilkan data struktur.
     */
    public function index()
    {
        $struktur = Struktur::first();

        return view('admin.struktur.index', compact('struktur'));
    }

    /**
     * Halaman tambah struktur.
     */
    public function create()
    {
        return view('admin.struktur.create');
    }

    /**
     * Menyimpan struktur baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        // Karena struktur hanya satu data,
        // cegah admin menambahkan data kedua.
        if (Struktur::exists()) {
            return redirect()
                ->route('admin.struktur.index')
                ->with('error', 'Data struktur sudah tersedia. Silakan edit data yang sudah ada.');
        }

        $gambar = $request->file('gambar')
            ->store('struktur', 'public');

        Struktur::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()
            ->route('admin.struktur.index')
            ->with('success', 'Struktur berhasil ditambahkan.');
    }

    /**
     * Halaman edit struktur.
     */
    public function edit(Struktur $struktur)
    {
        return view('admin.struktur.edit', compact('struktur'));
    }

    /**
     * Memperbarui struktur.
     */
    public function update(Request $request, Struktur $struktur)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $struktur->judul = $request->judul;
        $struktur->deskripsi = $request->deskripsi;

        // Kalau upload gambar baru
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if ($struktur->gambar) {
                Storage::disk('public')->delete($struktur->gambar);
            }

            // Simpan gambar baru
            $struktur->gambar = $request->file('gambar')
                ->store('struktur', 'public');
        }

        $struktur->save();

        return redirect()
            ->route('admin.struktur.index')
            ->with('success', 'Struktur berhasil diperbarui.');
    }

    /**
     * Menghapus struktur.
     */
    public function destroy(Struktur $struktur)
    {
        if ($struktur->gambar) {
            Storage::disk('public')->delete($struktur->gambar);
        }

        $struktur->delete();

        return redirect()
            ->route('admin.struktur.index')
            ->with('success', 'Struktur berhasil dihapus.');
    }
}
