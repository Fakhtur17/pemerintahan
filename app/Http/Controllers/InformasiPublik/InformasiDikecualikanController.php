<?php

namespace App\Http\Controllers\InformasiPublik;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiDikecualikan\JenisInformasiDikecualikan;
use App\Models\InformasiPublik\InformasiDikecualikan\DataInformasiDikecualikan;

class InformasiDikecualikanController extends Controller
{
    public function index()
    {
        $jenisInformasi = JenisInformasiDikecualikan::where('aktif', true)
            ->withCount('data')
            ->orderBy('urutan')
            ->orderBy('nama_jenis')
            ->get();

        return view(
            'pages.informasi-publik.informasi-dikecualikan.index',
            compact('jenisInformasi')
        );
    }

    public function data(
        JenisInformasiDikecualikan $jenisInformasiDikecualikan
    ) {
        abort_unless(
            $jenisInformasiDikecualikan->aktif,
            404
        );

        $data = DataInformasiDikecualikan::where(
            'jenis_informasi_dikecualikan_id',
            $jenisInformasiDikecualikan->id
        )
            ->orderByDesc('tahun')
            ->orderByDesc('tanggal_upload')
            ->paginate(10);

        return view(
            'pages.informasi-publik.informasi-dikecualikan.data',
            compact(
                'jenisInformasiDikecualikan',
                'data'
            )
        );
    }
}
