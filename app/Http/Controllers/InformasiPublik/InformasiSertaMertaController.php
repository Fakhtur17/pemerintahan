<?php

namespace App\Http\Controllers\InformasiPublik;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiSertaMerta\JenisInformasiSertaMerta;
use App\Models\InformasiPublik\InformasiSertaMerta\DataInformasiSertaMerta;

class InformasiSertaMertaController extends Controller
{
    public function index()
    {
        $jenisInformasi = JenisInformasiSertaMerta::where('aktif', true)
            ->withCount('data')
            ->orderBy('urutan')
            ->orderBy('nama_jenis')
            ->get();

        return view(
            'pages.informasi-publik.informasi-serta-merta.index',
            compact('jenisInformasi')
        );
    }

    public function data(JenisInformasiSertaMerta $jenisInformasiSertaMerta)
    {
        abort_unless(
            $jenisInformasiSertaMerta->aktif,
            404
        );

        $data = DataInformasiSertaMerta::where(
            'jenis_informasi_serta_merta_id',
            $jenisInformasiSertaMerta->id
        )
            ->orderByDesc('tahun')
            ->orderByDesc('tanggal_upload')
            ->paginate(10);

        return view(
            'pages.informasi-publik.informasi-serta-merta.data',
            compact(
                'jenisInformasiSertaMerta',
                'data'
            )
        );
    }
}
