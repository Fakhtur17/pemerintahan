<?php

namespace App\Http\Controllers\Potensi;

use App\Http\Controllers\Controller;
use App\Models\Potensi\PotensiKecamatan;
use Illuminate\Http\Request;

class PotensiKecamatanController extends Controller
{
    /**
     * Menampilkan daftar potensi kecamatan
     */
    public function index(Request $request)
    {
        $query = PotensiKecamatan::query()
            ->where('is_active', true);

        /*
        |--------------------------------------------------------------------------
        | SEARCH
        |--------------------------------------------------------------------------
        */

        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where('judul', 'like', "%{$search}%")
                    ->orWhere('lokasi', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%");
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
        | DATA
        |--------------------------------------------------------------------------
        */

        $potensi = $query
            ->latest()
            ->paginate(9)
            ->withQueryString();


        /*
        |--------------------------------------------------------------------------
        | JENIS
        |--------------------------------------------------------------------------
        */

        $jenisOptions =
            PotensiKecamatan::jenisOptions();


        return view(
            'pages.potensi.index',
            compact(
                'potensi',
                'jenisOptions'
            )
        );
    }


    /**
     * Detail potensi
     */
    public function show(
        PotensiKecamatan $potensiKecamatan
    ) {

        abort_unless(
            $potensiKecamatan->is_active,
            404
        );


        /*
        |--------------------------------------------------------------------------
        | POTENSI TERKAIT
        |--------------------------------------------------------------------------
        */

        $potensiTerkait =
            PotensiKecamatan::where(
                'is_active',
                true
            )
            ->where(
                'jenis',
                $potensiKecamatan->jenis
            )
            ->where(
                'id',
                '!=',
                $potensiKecamatan->id
            )
            ->latest()
            ->take(3)
            ->get();


        return view(
            'pages.potensi.show',
            compact(
                'potensiKecamatan',
                'potensiTerkait'
            )
        );
    }
}
