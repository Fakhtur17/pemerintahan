<?php

namespace App\Http\Controllers;

class LayananController extends Controller
{
    public function index()
    {
        return view('pages.layanan.index');
    }

    public function sopPpid()
    {
        return view('pages.layanan.sop-ppid');
    }

    public function alurPermohonan()
    {
        return view('pages.layanan.alur-permohonan');
    }

    public function daftarPermohonan()
    {
        return view('pages.layanan.daftar-permohonan');
    }

    public function formulirPermohonan()
    {
        return view('pages.layanan.formulir-permohonan');
    }
}