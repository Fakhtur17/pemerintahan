<?php

namespace App\Http\Controllers;

use App\Models\Struktur;

class StrukturController extends Controller
{
    /**
     * Menampilkan Struktur Kecamatan
     */
    public function index()
    {
        $struktur = Struktur::first();

        return view('pages.struktur.struktur', compact('struktur'));
    }
}
