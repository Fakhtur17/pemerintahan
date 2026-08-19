<?php

namespace App\Http\Controllers\InformasiPublik;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiTersediaSetiapSaat\JenisInformasiTersediaSetiapSaat;
use App\Models\InformasiPublik\InformasiTersediaSetiapSaat\DataInformasiTersediaSetiapSaat;

class InformasiTersediaSetiapSaatController extends Controller
{
    public function index()
    {
        $jenisInformasi = JenisInformasiTersediaSetiapSaat::where('aktif', true)
            ->withCount('data')
            ->orderBy('urutan')
            ->orderBy('nama_jenis')
            ->get();

        return view(
            'pages.informasi-publik.informasi-tersedia-setiap-saat.index',
            compact('jenisInformasi')
        );
    }

    public function data(
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat
    ) {
        abort_unless(
            $jenisInformasiTersediaSetiapSaat->aktif,
            404
        );

        $data = DataInformasiTersediaSetiapSaat::where(
            'jenis_informasi_tersedia_setiap_saat_id',
            $jenisInformasiTersediaSetiapSaat->id
        )
            ->orderByDesc('tahun')
            ->orderByDesc('tanggal_upload')
            ->paginate(10);

        return view(
            'pages.informasi-publik.informasi-tersedia-setiap-saat.data',
            compact(
                'jenisInformasiTersediaSetiapSaat',
                'data'
            )
        );
    }
}
