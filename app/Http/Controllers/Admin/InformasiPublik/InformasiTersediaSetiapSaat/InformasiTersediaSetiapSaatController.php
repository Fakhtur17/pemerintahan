<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiTersediaSetiapSaat;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiTersediaSetiapSaat\JenisInformasiTersediaSetiapSaat;

class InformasiTersediaSetiapSaatController extends Controller
{
    /**
     * Menampilkan daftar jenis informasi.
     */
    public function index()
    {
        $jenisInformasi =
            JenisInformasiTersediaSetiapSaat::query()
            ->withCount('data')
            ->orderBy('urutan')
            ->orderBy('nama_jenis')
            ->paginate(15);

        return view(
            'admin.informasi-publik.informasi-tersedia-setiap-saat.index',
            compact('jenisInformasi')
        );
    }
}
