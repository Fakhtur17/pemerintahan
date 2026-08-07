<?php

namespace App\Http\Controllers;

use App\Models\TentangKabupatenBagian;

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
        return view('pages.profil.visi-misi');
    }

    public function tupoksiPpid()
    {
        return view('pages.profil.tupoksi-ppid');
    }

    public function profilPimpinan()
    {
        return view('pages.profil.profil-pimpinan');
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