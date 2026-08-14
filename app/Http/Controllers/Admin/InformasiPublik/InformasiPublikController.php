<?php

namespace App\Http\Controllers\Admin\InformasiPublik;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiBerkala\JenisInformasiBerkala;
use App\Models\InformasiPublik\InformasiSertaMerta\JenisInformasiSertaMerta;
use App\Models\InformasiPublik\InformasiDikecualikan\JenisInformasiDikecualikan;

class InformasiPublikController extends Controller
{
    public function index()
    {
        $jumlahInformasiBerkala =
            JenisInformasiBerkala::count();

        $jumlahInformasiSertaMerta =
            JenisInformasiSertaMerta::count();

        $jumlahInformasiDikecualikan =
            JenisInformasiDikecualikan::count();

        $kategori = [
            [
                'nama' => 'Informasi Berkala',

                'jumlah' =>
                $jumlahInformasiBerkala,

                'route' =>
                'admin.informasi-publik.informasi-berkala.index',
            ],

            [
                'nama' => 'Informasi Serta Merta',

                'jumlah' =>
                $jumlahInformasiSertaMerta,

                'route' =>
                'admin.informasi-publik.informasi-serta-merta.index',
            ],

            [
                'nama' => 'Informasi Dikecualikan',

                'jumlah' =>
                $jumlahInformasiDikecualikan,

                'route' =>
                'admin.informasi-publik.informasi-dikecualikan.index',
            ],

            [
                'nama' =>
                'Informasi Tersedia Setiap Saat',

                'jumlah' => 0,

                'route' => '#',
            ],
        ];

        return view(
            'admin.informasi-publik.index',
            compact('kategori')
        );
    }
}
