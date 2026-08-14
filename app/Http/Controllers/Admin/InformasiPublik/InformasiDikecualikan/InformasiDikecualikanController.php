<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiDikecualikan;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiDikecualikan\JenisInformasiDikecualikan;

class InformasiDikecualikanController extends Controller
{
    public function index()
    {
        $jenisInformasi = JenisInformasiDikecualikan::query()
            ->withCount('data')
            ->orderBy('urutan')
            ->orderBy('nama_jenis')
            ->paginate(15);

        return view(
            'admin.informasi-publik.informasi-dikecualikan.index',
            compact('jenisInformasi')
        );
    }
}
