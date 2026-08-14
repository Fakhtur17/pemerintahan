<?php

namespace App\Http\Controllers\Admin\InformasiPublik;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiBerkala\JenisInformasiBerkala;

class InformasiPublikController extends Controller
{
    public function index()
    {
        $kategori = [
            [
                'nama' => 'Informasi Berkala',
                'jumlah' => JenisInformasiBerkala::count(),
                'route' => 'admin.informasi-publik.informasi-berkala.index',
            ],

            [
                'nama' => 'Informasi Serta Merta',
                'jumlah' => 0,
                'route' => '#',
            ],

            [
                'nama' => 'Informasi Dikecualikan',
                'jumlah' => 0,
                'route' => '#',
            ],

            [
                'nama' => 'Informasi Tersedia Setiap Saat',
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
