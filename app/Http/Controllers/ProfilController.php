<?php

namespace App\Http\Controllers;

use App\Models\TentangKabupatenBagian;
use App\Models\VisiMisi;
use App\Models\TupoksiPpid;
use App\Models\ProfilPimpinan;

class ProfilController extends Controller
{
    public function index()
    {
        return view('pages.profil.index');
    }

    public function tentangKabupaten()
    {
        $bagian = TentangKabupatenBagian::orderBy('urutan')->orderBy('id')->get();

        return view('pages.profil.tentang-kabupaten', compact('bagian'));
    }


    public function visiMisi()
    {
        $visiMisi = VisiMisi::orderBy('urutan')
            ->orderBy('id')
            ->get();

        return view(
            'pages.profil.visi-misi',
            compact('visiMisi')
        );
    }


    public function tupoksiPpid()
    {
        $tupoksiPpid = TupoksiPpid::latest()->first();

        return view(
            'pages.profil.tupoksi-ppid',
            compact('tupoksiPpid')
        );
    }

    public function profilPimpinan()
    {
        $profilPimpinan = ProfilPimpinan::latest()->get();

        return view(
            'pages.profil.profil-pimpinan',
            compact('profilPimpinan')
        );
    }

    public function tentangPpid()
    {
        return view('pages.profil.tentang-ppid');
    }

    public function strukturPpid()
    {
        return view('pages.profil.struktur-ppid');
    }

    public function lhkpn()
    {
        return view('pages.profil.lhkpn');
    }

    public function alamatDinas()
    {
        return view('pages.profil.alamat-dinas');
    }
}
