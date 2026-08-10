<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\ProfilPimpinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilPimpinanController extends Controller
{
    /**
     * Menampilkan data pimpinan.
     */
    public function index()
    {
        $data = ProfilPimpinan::latest()->get();

        return view('admin.profil.profil-pimpinan.index', compact('data'));
    }

    /**
     * Form tambah pimpinan.
     */
    public function create()
    {
        return view('admin.profil.profil-pimpinan.create', [
            'data' => ProfilPimpinan::latest()->get(),
            'item' => null,
        ]);
    }

    /**
     * Simpan data pimpinan.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',

            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'nip' => 'nullable|string|max:100',
            'pangkat' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|string|max:50',
            'agama' => 'nullable|string|max:100',
            'status_perkawinan' => 'nullable|string|max:100',

            'riwayat_pendidikan' => 'nullable|string',
            'riwayat_jabatan' => 'nullable|string',

            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'facebook' => 'nullable|string|max:500',
            'twitter' => 'nullable|string|max:500',
            'instagram' => 'nullable|string|max:500',
            'youtube' => 'nullable|string|max:500',
            'tiktok' => 'nullable|string|max:500',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request
                ->file('foto')
                ->store('pimpinan', 'public');
        }

        ProfilPimpinan::create($validated);

        return redirect()
            ->route('admin.profil.profil-pimpinan.index')
            ->with('success', 'Profil pimpinan berhasil ditambahkan.');
    }

    /**
     * Form edit pimpinan.
     */
    public function edit(ProfilPimpinan $profilPimpinan)
    {
        return view('admin.profil.profil-pimpinan.edit', [
            'data' => ProfilPimpinan::latest()->get(),
            'profilPimpinan' => $profilPimpinan,
        ]);
    }

    /**
     * Update data pimpinan.
     */
    public function update(Request $request, ProfilPimpinan $profilPimpinan)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',

            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'nip' => 'nullable|string|max:100',
            'pangkat' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|string|max:50',
            'agama' => 'nullable|string|max:100',
            'status_perkawinan' => 'nullable|string|max:100',

            'riwayat_pendidikan' => 'nullable|string',
            'riwayat_jabatan' => 'nullable|string',

            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'facebook' => 'nullable|string|max:500',
            'twitter' => 'nullable|string|max:500',
            'instagram' => 'nullable|string|max:500',
            'youtube' => 'nullable|string|max:500',
            'tiktok' => 'nullable|string|max:500',
        ]);

        if ($request->hasFile('foto')) {

            if ($profilPimpinan->foto) {
                Storage::disk('public')->delete($profilPimpinan->foto);
            }

            $validated['foto'] = $request
                ->file('foto')
                ->store('pimpinan', 'public');
        }

        $profilPimpinan->update($validated);

        return redirect()
            ->route('admin.profil.profil-pimpinan.index')
            ->with('success', 'Profil pimpinan berhasil diperbarui.');
    }

    /**
     * Hapus data pimpinan.
     */
    public function destroy(ProfilPimpinan $profilPimpinan)
    {
        if ($profilPimpinan->foto) {
            Storage::disk('public')->delete($profilPimpinan->foto);
        }

        $profilPimpinan->delete();

        return redirect()
            ->route('admin.profil.profil-pimpinan.index')
            ->with('success', 'Profil pimpinan berhasil dihapus.');
    }
}
