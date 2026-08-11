<?php

namespace App\Http\Controllers;

use App\Models\TentangKabupatenBagian;
use App\Models\VisiMisi;
use App\Models\TupoksiPpid;
use App\Models\ProfilPimpinan;
use App\Models\TentangPpidBagian;
use App\Models\StrukturPpid;
use App\Models\Lhkpn;
use App\Models\AlamatDinas;

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
        $bagian = TentangPpidBagian::orderBy('urutan')
            ->orderBy('id')
            ->get();

        return view(
            'pages.profil.tentang-ppid',
            compact('bagian')
        );
    }

    public function strukturPpid()
    {
        $strukturPpid = StrukturPpid::latest()->first();
        return view('pages.profil.struktur-ppid', compact('strukturPpid'));
    }

    public function lhkpn()
    {
        $lhkpn = Lhkpn::latest('tanggal_upload')->get();

        return view(
            'pages.profil.lhkpn-dinas',
            compact('lhkpn')
        );
    }

    public function alamatDinas()
    {
        $alamatDinas = AlamatDinas::latest()->first();

        return view(
            'pages.profil.alamat-dinas',
            compact('alamatDinas')
        );
    }
}
