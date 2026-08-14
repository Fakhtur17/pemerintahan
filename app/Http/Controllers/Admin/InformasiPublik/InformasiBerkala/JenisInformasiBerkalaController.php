<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiBerkala;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiBerkala\JenisInformasiBerkala;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JenisInformasiBerkalaController extends Controller
{
    /**
     * Form tambah jenis informasi.
     */
    public function create()
    {
        return view(
            'admin.informasi-publik.informasi-berkala.jenis.create'
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
                'unique:jenis_informasi_berkala,nama_jenis',
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

        JenisInformasiBerkala::create([
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
                'admin.informasi-publik.informasi-berkala.index'
            )
            ->with(
                'success',
                'Jenis informasi berhasil ditambahkan.'
            );
    }

    /**
     * Detail jenis informasi.
     */
    public function show(
        JenisInformasiBerkala $jenisInformasiBerkala
    ) {
        $jenisInformasiBerkala->loadCount('data');

        return view(
            'admin.informasi-publik.informasi-berkala.jenis.show',
            compact('jenisInformasiBerkala')
        );
    }

    /**
     * Form edit jenis informasi.
     */
    public function edit(
        JenisInformasiBerkala $jenisInformasiBerkala
    ) {
        return view(
            'admin.informasi-publik.informasi-berkala.jenis.edit',
            compact('jenisInformasiBerkala')
        );
    }

    /**
     * Update jenis informasi.
     */
    public function update(
        Request $request,
        JenisInformasiBerkala $jenisInformasiBerkala
    ) {
        $validated = $request->validate([
            'nama_jenis' => [
                'required',
                'string',
                'max:255',

                Rule::unique(
                    'jenis_informasi_berkala',
                    'nama_jenis'
                )->ignore(
                    $jenisInformasiBerkala->id
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

        $jenisInformasiBerkala->update([
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
                'admin.informasi-publik.informasi-berkala.index'
            )
            ->with(
                'success',
                'Jenis informasi berhasil diperbarui.'
            );
    }

    /**
     * Hapus jenis informasi.
     */
    public function destroy(
        JenisInformasiBerkala $jenisInformasiBerkala
    ) {
        /*
        |--------------------------------------------------------------------------
        | Karena foreign key menggunakan cascadeOnDelete(),
        | data yang berkaitan juga akan terhapus.
        |--------------------------------------------------------------------------
        */

        $jenisInformasiBerkala->delete();

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-berkala.index'
            )
            ->with(
                'success',
                'Jenis informasi berhasil dihapus.'
            );
    }
}
