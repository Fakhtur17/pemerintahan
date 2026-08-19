<?php

namespace App\Http\Controllers\InformasiPublik;

use App\Http\Controllers\Controller;

use App\Models\InformasiPublik\InformasiBerkala\JenisInformasiBerkala;
use App\Models\InformasiPublik\InformasiSertaMerta\JenisInformasiSertaMerta;
use App\Models\InformasiPublik\InformasiTersediaSetiapSaat\JenisInformasiTersediaSetiapSaat;
use App\Models\InformasiPublik\InformasiDikecualikan\JenisInformasiDikecualikan;

class InformasiPublikController extends Controller
{
    public function index()
    {
        $jumlahBerkala = JenisInformasiBerkala::where('aktif', true)->count();

        $jumlahSertaMerta = JenisInformasiSertaMerta::where('aktif', true)->count();

        $jumlahTersediaSetiapSaat = JenisInformasiTersediaSetiapSaat::where('aktif', true)->count();

        $jumlahDikecualikan = JenisInformasiDikecualikan::where('aktif', true)->count();

        return view('pages.informasi-publik.index', compact(
            'jumlahBerkala',
            'jumlahSertaMerta',
            'jumlahTersediaSetiapSaat',
            'jumlahDikecualikan'
        ));
    }
}
