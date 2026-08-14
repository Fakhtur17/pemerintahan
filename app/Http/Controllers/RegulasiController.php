<?php

namespace App\Http\Controllers;

use App\Models\Regulasi;

class RegulasiController extends Controller
{
    /**
     * Halaman daftar regulasi.
     */
    public function index()
    {
        $regulasis = Regulasi::where('status', true)
            ->orderBy('urutan', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.regulasi.index', compact('regulasis'));
    }

    /**
     * Halaman detail / PDF regulasi.
     */
    public function show($id)
    {
        $regulasi = Regulasi::where('status', true)
            ->findOrFail($id);

        return view('pages.regulasi.show', compact('regulasi'));
    }
}
