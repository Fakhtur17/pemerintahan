<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\AlamatDinas;
use Illuminate\Http\Request;

class AlamatDinasController extends Controller
{
    public function index()
    {
        $data = AlamatDinas::latest()->first();

        return view('admin.profil.alamat-dinas.index', compact('data'));
    }

    public function create()
    {
        return view('admin.profil.alamat-dinas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'alamat' => 'required|string',
            'google_maps_url' => 'nullable|url|max:1000',
        ]);

        AlamatDinas::create($validated);

        return redirect()
            ->route('admin.profil.alamat-dinas.index')
            ->with('success', 'Alamat dinas berhasil ditambahkan.');
    }

    public function edit(AlamatDinas $alamatDina)
    {
        return view('admin.profil.alamat-dinas.edit', [
            'data' => $alamatDina,
        ]);
    }

    public function update(Request $request, AlamatDinas $alamatDina)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'alamat' => 'required|string',
            'google_maps_url' => 'nullable|url|max:1000',
        ]);

        $alamatDina->update($validated);

        return redirect()
            ->route('admin.profil.alamat-dinas.index')
            ->with('success', 'Alamat dinas berhasil diperbarui.');
    }

    public function destroy(AlamatDinas $alamatDina)
    {
        $alamatDina->delete();

        return redirect()
            ->route('admin.profil.alamat-dinas.index')
            ->with('success', 'Alamat dinas berhasil dihapus.');
    }
}
