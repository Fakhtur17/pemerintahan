<?php

namespace App\Http\Controllers\InformasiPublik;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiBerkala\JenisInformasiBerkala;
use App\Models\InformasiPublik\InformasiBerkala\DataInformasiBerkala;

class InformasiBerkalaController extends Controller
{
    /**
     * Menampilkan seluruh jenis informasi berkala
     */
    public function index()
    {
        $jenisInformasi = JenisInformasiBerkala::where('aktif', true)
            ->withCount('data')
            ->orderBy('urutan')
            ->orderBy('nama_jenis')
            ->get();

        return view(
            'pages.informasi-publik.informasi-berkala.index',
            compact('jenisInformasi')
        );
    }

    /**
     * Menampilkan data berdasarkan jenis informasi
     */
    public function data(JenisInformasiBerkala $jenisInformasiBerkala)
    {
        abort_unless(
            $jenisInformasiBerkala->aktif,
            404
        );

        $data = DataInformasiBerkala::where(
            'jenis_informasi_berkala_id',
            $jenisInformasiBerkala->id
        )
            ->orderByDesc('tahun')
            ->orderByDesc('tanggal_upload')
            ->paginate(10);

        return view(
            'pages.informasi-publik.informasi-berkala.data',
            compact(
                'jenisInformasiBerkala',
                'data'
            )
        );
    }
}
