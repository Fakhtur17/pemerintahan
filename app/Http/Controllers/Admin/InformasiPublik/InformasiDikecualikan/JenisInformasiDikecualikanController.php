<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiDikecualikan;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiDikecualikan\JenisInformasiDikecualikan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JenisInformasiDikecualikanController extends Controller
{
    public function create()
    {
        return view(
            'admin.informasi-publik.informasi-dikecualikan.jenis.create'
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jenis' => [
                'required',
                'string',
                'max:255',
                'unique:jenis_informasi_dikecualikan,nama_jenis',
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

        JenisInformasiDikecualikan::create([
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
                'admin.informasi-publik.informasi-dikecualikan.index'
            )
            ->with(
                'success',
                'Jenis informasi dikecualikan berhasil ditambahkan.'
            );
    }

    public function show(
        JenisInformasiDikecualikan $jenisInformasiDikecualikan
    ) {
        $jenisInformasiDikecualikan->loadCount('data');

        return view(
            'admin.informasi-publik.informasi-dikecualikan.jenis.show',
            compact('jenisInformasiDikecualikan')
        );
    }

    public function edit(
        JenisInformasiDikecualikan $jenisInformasiDikecualikan
    ) {
        return view(
            'admin.informasi-publik.informasi-dikecualikan.jenis.edit',
            compact('jenisInformasiDikecualikan')
        );
    }

    public function update(
        Request $request,
        JenisInformasiDikecualikan $jenisInformasiDikecualikan
    ) {
        $validated = $request->validate([
            'nama_jenis' => [
                'required',
                'string',
                'max:255',

                Rule::unique(
                    'jenis_informasi_dikecualikan',
                    'nama_jenis'
                )->ignore(
                    $jenisInformasiDikecualikan->id
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

        $jenisInformasiDikecualikan->update([
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
                'admin.informasi-publik.informasi-dikecualikan.index'
            )
            ->with(
                'success',
                'Jenis informasi dikecualikan berhasil diperbarui.'
            );
    }

    public function destroy(
        JenisInformasiDikecualikan $jenisInformasiDikecualikan
    ) {
        $jenisInformasiDikecualikan->delete();

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-dikecualikan.index'
            )
            ->with(
                'success',
                'Jenis informasi dikecualikan berhasil dihapus.'
            );
    }
}
