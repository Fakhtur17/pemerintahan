<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiTersediaSetiapSaat;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiTersediaSetiapSaat\JenisInformasiTersediaSetiapSaat;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JenisInformasiTersediaSetiapSaatController extends Controller
{
    /**
     * Form tambah.
     */
    public function create()
    {
        return view(
            'admin.informasi-publik.informasi-tersedia-setiap-saat.jenis.create'
        );
    }

    /**
     * Simpan.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jenis' => [
                'required',
                'string',
                'max:255',
                'unique:jenis_informasi_tersedia_setiap_saat,nama_jenis',
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

        JenisInformasiTersediaSetiapSaat::create([
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
                'admin.informasi-publik.informasi-tersedia-setiap-saat.index'
            )
            ->with(
                'success',
                'Jenis informasi berhasil ditambahkan.'
            );
    }

    /**
     * Detail.
     */
    public function show(
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat
    ) {
        $jenisInformasiTersediaSetiapSaat
            ->loadCount('data');

        return view(
            'admin.informasi-publik.informasi-tersedia-setiap-saat.jenis.show',
            compact(
                'jenisInformasiTersediaSetiapSaat'
            )
        );
    }

    /**
     * Form edit.
     */
    public function edit(
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat
    ) {
        return view(
            'admin.informasi-publik.informasi-tersedia-setiap-saat.jenis.edit',
            compact(
                'jenisInformasiTersediaSetiapSaat'
            )
        );
    }

    /**
     * Update.
     */
    public function update(
        Request $request,
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat
    ) {
        $validated = $request->validate([
            'nama_jenis' => [
                'required',
                'string',
                'max:255',

                Rule::unique(
                    'jenis_informasi_tersedia_setiap_saat',
                    'nama_jenis'
                )->ignore(
                    $jenisInformasiTersediaSetiapSaat->id
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

        $jenisInformasiTersediaSetiapSaat->update([
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
                'admin.informasi-publik.informasi-tersedia-setiap-saat.index'
            )
            ->with(
                'success',
                'Jenis informasi berhasil diperbarui.'
            );
    }

    /**
     * Hapus.
     */
    public function destroy(
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat
    ) {
        $jenisInformasiTersediaSetiapSaat->delete();

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-tersedia-setiap-saat.index'
            )
            ->with(
                'success',
                'Jenis informasi berhasil dihapus.'
            );
    }
}
