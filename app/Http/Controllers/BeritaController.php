<?php

namespace App\Http\Controllers;

use App\Models\Berita\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Halaman daftar berita
     */
    public function index(Request $request)
    {
        $query = Berita::query()
            ->where('status', 'terbit');

        /*
        |--------------------------------------------------------------------------
        | SEARCH
        |--------------------------------------------------------------------------
        */

        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where('judul', 'like', "%{$search}%")
                    ->orWhere(
                        'ringkasan',
                        'like',
                        "%{$search}%"
                    );
            });
        }


        /*
        |--------------------------------------------------------------------------
        | FILTER JENIS
        |--------------------------------------------------------------------------
        */

        if ($request->filled('jenis')) {

            $query->where(
                'jenis',
                $request->jenis
            );
        }


        /*
        |--------------------------------------------------------------------------
        | DATA BERITA
        |--------------------------------------------------------------------------
        */

        $berita = $query
            ->latest('tanggal')
            ->paginate(9)
            ->withQueryString();


        /*
        |--------------------------------------------------------------------------
        | JENIS BERITA
        |--------------------------------------------------------------------------
        */

        $jenisBerita = Berita::query()
            ->where('status', 'terbit')
            ->select('jenis')
            ->distinct()
            ->orderBy('jenis')
            ->pluck('jenis');


        return view(
            'pages.berita.index',
            compact(
                'berita',
                'jenisBerita'
            )
        );
    }


    /**
     * Detail berita
     */
    public function show(Berita $berita)
    {
        /*
        |--------------------------------------------------------------------------
        | HANYA BERITA TERBIT
        |--------------------------------------------------------------------------
        */

        abort_if(
            $berita->status !== 'terbit',
            404
        );


        /*
        |--------------------------------------------------------------------------
        | BERITA TERBARU
        |--------------------------------------------------------------------------
        */

        $beritaTerbaru = Berita::query()
            ->where('status', 'terbit')
            ->where('id', '!=', $berita->id)
            ->latest('tanggal')
            ->limit(5)
            ->get();


        return view(
            'pages.berita.show',
            compact(
                'berita',
                'beritaTerbaru'
            )
        );
    }
}
