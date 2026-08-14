<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMerta;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiSertaMerta\JenisInformasiSertaMerta;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JenisInformasiSertaMertaController extends Controller
{
    /**
     * Form tambah jenis informasi.
     */
    public function create()
    {
        return view(
            'admin.informasi-publik.informasi-serta-merta.jenis.create'
        );
    }

    /**
     * Simpan jenis informasi baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jenis' => [
                'required',
                'string',
                'max:255',
                'unique:jenis_informasi_serta_merta,nama_jenis',
            ],

            'deskripsi' => [
                'nullable',
                'string',
            ],

            'aktif' => [
                'nullable',
                'boolean',
            ],

            'urutan' => [
                'nullable',
                'integer',
                'min:0',
            ],
        ], [
            'nama_jenis.required' =>
            'Nama jenis informasi wajib diisi.',

            'nama_jenis.unique' =>
            'Jenis informasi tersebut sudah tersedia.',
        ]);

        JenisInformasiSertaMerta::create([
            'nama_jenis' =>
            $validated['nama_jenis'],

            'deskripsi' =>
            $validated['deskripsi'] ?? null,

            'aktif' =>
            $request->boolean('aktif'),

            'urutan' =>
            $validated['urutan'] ?? 0,
        ]);

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-serta-merta.index'
            )
            ->with(
                'success',
                'Jenis informasi serta merta berhasil ditambahkan.'
            );
    }

    /**
     * Detail jenis informasi.
     */
    public function show(
        JenisInformasiSertaMerta $jenisInformasiSertaMerta
    ) {
        $jenisInformasiSertaMerta->loadCount('data');

        return view(
            'admin.informasi-publik.informasi-serta-merta.jenis.show',
            compact('jenisInformasiSertaMerta')
        );
    }

    /**
     * Form edit.
     */
    public function edit(
        JenisInformasiSertaMerta $jenisInformasiSertaMerta
    ) {
        return view(
            'admin.informasi-publik.informasi-serta-merta.jenis.edit',
            compact('jenisInformasiSertaMerta')
        );
    }

    /**
     * Update jenis informasi.
     */
    public function update(
        Request $request,
        JenisInformasiSertaMerta $jenisInformasiSertaMerta
    ) {
        $validated = $request->validate([
            'nama_jenis' => [
                'required',
                'string',
                'max:255',

                Rule::unique(
                    'jenis_informasi_serta_merta',
                    'nama_jenis'
                )->ignore(
                    $jenisInformasiSertaMerta->id
                ),
            ],

            'deskripsi' => [
                'nullable',
                'string',
            ],

            'aktif' => [
                'nullable',
                'boolean',
            ],

            'urutan' => [
                'nullable',
                'integer',
                'min:0',
            ],
        ]);

        $jenisInformasiSertaMerta->update([
            'nama_jenis' =>
            $validated['nama_jenis'],

            'deskripsi' =>
            $validated['deskripsi'] ?? null,

            'aktif' =>
            $request->boolean('aktif'),

            'urutan' =>
            $validated['urutan'] ?? 0,
        ]);

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-serta-merta.index'
            )
            ->with(
                'success',
                'Jenis informasi serta merta berhasil diperbarui.'
            );
    }

    /**
     * Hapus jenis informasi.
     */
    public function destroy(
        JenisInformasiSertaMerta $jenisInformasiSertaMerta
    ) {
        $jenisInformasiSertaMerta->delete();

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-serta-merta.index'
            )
            ->with(
                'success',
                'Jenis informasi serta merta berhasil dihapus.'
            );
    }
}
