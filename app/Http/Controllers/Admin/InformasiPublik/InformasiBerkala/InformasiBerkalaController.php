<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiBerkala;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiBerkala\JenisInformasiBerkala;

class InformasiBerkalaController extends Controller
{
    /**
     * Halaman daftar jenis informasi berkala.
     */
    public function index()
    {
        $jenisInformasi = JenisInformasiBerkala::query()
            ->withCount('data')
            ->orderBy('urutan')
            ->orderBy('nama_jenis')
            ->paginate(15);

        return view(
            'admin.informasi-publik.informasi-berkala.index',
            compact('jenisInformasi')
        );
    }
}
