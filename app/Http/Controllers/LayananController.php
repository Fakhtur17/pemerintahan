<?php

namespace App\Http\Controllers;

use App\Models\SopPpid;
use App\Models\AlurPermohonan;


class LayananController extends Controller
{
    public function index()
    {
        return view('pages.layanan.index');
    }

    public function sopPpid()
    {
        $sop = SopPpid::where('is_active', true)
            ->latest()
            ->first();

        return view('pages.layanan.sop-ppid', compact('sop'));
    }

    public function alurPermohonan()
    {
        $alurPermohonan = AlurPermohonan::where('is_active', true)
            ->latest()
            ->first();

        return view(
            'pages.layanan.alur-permohonan',
            compact('alurPermohonan')
        );
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
