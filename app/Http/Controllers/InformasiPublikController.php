<?php

namespace App\Http\Controllers;

class InformasiPublikController extends Controller
{
    public function index()
    {
        return view('pages.informasi-publik.index');
    }

    public function informasiBerkala()
    {
        return view('pages.informasi-publik.informasi-berkala');
    }

    public function informasiSertaMerta()
    {
        return view('pages.informasi-publik.informasi-serta-merta');
    }

    public function informasiDikecualikan()
    {
        return view('pages.informasi-publik.informasi-dikecualikan');
    }

    public function informasiSetiapSaat()
    {
        return view('pages.informasi-publik.informasi-setiap-saat');
    }
}