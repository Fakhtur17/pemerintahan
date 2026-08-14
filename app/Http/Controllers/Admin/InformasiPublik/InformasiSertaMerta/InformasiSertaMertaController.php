<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMerta;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiSertaMerta\JenisInformasiSertaMerta;

class InformasiSertaMertaController extends Controller
{
    /**
     * Halaman daftar jenis informasi serta merta.
     */
    public function index()
    {
        $jenisInformasi = JenisInformasiSertaMerta::query()
            ->withCount('data')
            ->orderBy('urutan')
            ->orderBy('nama_jenis')
            ->paginate(15);

        return view(
            'admin.informasi-publik.informasi-serta-merta.index',
            compact('jenisInformasi')
        );
    }
}
