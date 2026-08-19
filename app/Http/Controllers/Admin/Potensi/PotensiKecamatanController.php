<?php

namespace App\Http\Controllers\Admin\Potensi;

use App\Http\Controllers\Controller;
use App\Models\Potensi\PotensiKecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PotensiKecamatanController extends Controller
{
    /**
     * --------------------------------------------------------------------------
     * INDEX
     * --------------------------------------------------------------------------
     * Menampilkan daftar seluruh potensi kecamatan.
     */
    public function index(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | QUERY
        |--------------------------------------------------------------------------
        */

        $query = PotensiKecamatan::query();


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
        | FILTER STATUS
        |--------------------------------------------------------------------------
        */

        if ($request->filled('status')) {

            $query->where(
                'is_active',
                $request->status
            );
        }


        /*
        |--------------------------------------------------------------------------
        | DATA
        |--------------------------------------------------------------------------
        */

        $data = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();


        /*
        |--------------------------------------------------------------------------
        | JENIS POTENSI
        |--------------------------------------------------------------------------
        */

        $jenisOptions = PotensiKecamatan::jenisOptions();


        /*
        |--------------------------------------------------------------------------
        | VIEW
        |--------------------------------------------------------------------------
        */

        return view(
            'admin.potensi-kecamatan.index',
            compact(
                'data',
                'jenisOptions'
            )
        );
    }


    /**
     * --------------------------------------------------------------------------
     * CREATE
     * --------------------------------------------------------------------------
     * Menampilkan form tambah potensi.
     */
    public function create()
    {
        /*
        |--------------------------------------------------------------------------
        | JENIS POTENSI
        |--------------------------------------------------------------------------
        */

        $jenisOptions =
            PotensiKecamatan::jenisOptions();


        /*
        |--------------------------------------------------------------------------
        | VIEW
        |--------------------------------------------------------------------------
        */

        return view(
            'admin.potensi-kecamatan.create',
            compact('jenisOptions')
        );
    }


    /**
     * --------------------------------------------------------------------------
     * STORE
     * --------------------------------------------------------------------------
     * Menyimpan data potensi baru.
     */
    public function store(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDATION
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([

            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'jenis' => [
                'required',
                Rule::in(
                    array_keys(
                        PotensiKecamatan::jenisOptions()
                    )
                ),
            ],

            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'lokasi' => [
                'nullable',
                'string',
                'max:255',
            ],

            'deskripsi' => [
                'nullable',
                'string',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | SLUG
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug(
            $validated['judul']
        );

        $originalSlug = $slug;

        $counter = 1;

        while (
            PotensiKecamatan::where(
                'slug',
                $slug
            )->exists()
        ) {

            $slug =
                $originalSlug .
                '-' .
                $counter;

            $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | UPLOAD GAMBAR
        |--------------------------------------------------------------------------
        */

        $gambar = null;

        if ($request->hasFile('gambar')) {

            $gambar = $request
                ->file('gambar')
                ->store(
                    'potensi-kecamatan',
                    'public'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | SIMPAN DATA
        |--------------------------------------------------------------------------
        */

        PotensiKecamatan::create([

            'judul' =>
            $validated['judul'],

            'slug' =>
            $slug,

            'jenis' =>
            $validated['jenis'],

            'gambar' =>
            $gambar,

            'lokasi' =>
            $validated['lokasi'] ?? null,

            'deskripsi' =>
            $validated['deskripsi'] ?? null,

            'is_active' =>
            $request->boolean(
                'is_active'
            ),

        ]);


        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route(
                'admin.potensi-kecamatan.index'
            )
            ->with(
                'success',
                'Potensi Kecamatan berhasil ditambahkan.'
            );
    }


    /**
     * --------------------------------------------------------------------------
     * EDIT
     * --------------------------------------------------------------------------
     * Menampilkan form edit potensi.
     */
    public function edit(
        PotensiKecamatan $potensiKecamatan
    ) {
        /*
        |--------------------------------------------------------------------------
        | JENIS POTENSI
        |--------------------------------------------------------------------------
        */

        $jenisOptions =
            PotensiKecamatan::jenisOptions();


        /*
        |--------------------------------------------------------------------------
        | VIEW
        |--------------------------------------------------------------------------
        */

        return view(
            'admin.potensi-kecamatan.edit',
            compact(
                'potensiKecamatan',
                'jenisOptions'
            )
        );
    }


    /**
     * --------------------------------------------------------------------------
     * UPDATE
     * --------------------------------------------------------------------------
     * Memperbarui data potensi.
     */
    public function update(
        Request $request,
        PotensiKecamatan $potensiKecamatan
    ) {
        /*
        |--------------------------------------------------------------------------
        | VALIDATION
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([

            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'jenis' => [
                'required',
                Rule::in(
                    array_keys(
                        PotensiKecamatan::jenisOptions()
                    )
                ),
            ],

            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'lokasi' => [
                'nullable',
                'string',
                'max:255',
            ],

            'deskripsi' => [
                'nullable',
                'string',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | SLUG
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug(
            $validated['judul']
        );

        $originalSlug = $slug;

        $counter = 1;

        while (
            PotensiKecamatan::where(
                'slug',
                $slug
            )
            ->where(
                'id',
                '!=',
                $potensiKecamatan->id
            )
            ->exists()
        ) {

            $slug =
                $originalSlug .
                '-' .
                $counter;

            $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | GAMBAR LAMA
        |--------------------------------------------------------------------------
        */

        $gambar =
            $potensiKecamatan->gambar;


        /*
        |--------------------------------------------------------------------------
        | UPLOAD GAMBAR BARU
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gambar')) {

            /*
            | Hapus gambar lama
            */

            if (
                $potensiKecamatan->gambar &&
                Storage::disk('public')
                ->exists(
                    $potensiKecamatan->gambar
                )
            ) {

                Storage::disk('public')
                    ->delete(
                        $potensiKecamatan->gambar
                    );
            }


            /*
            | Simpan gambar baru
            */

            $gambar = $request
                ->file('gambar')
                ->store(
                    'potensi-kecamatan',
                    'public'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | UPDATE DATA
        |--------------------------------------------------------------------------
        */

        $potensiKecamatan->update([

            'judul' =>
            $validated['judul'],

            'slug' =>
            $slug,

            'jenis' =>
            $validated['jenis'],

            'gambar' =>
            $gambar,

            'lokasi' =>
            $validated['lokasi'] ?? null,

            'deskripsi' =>
            $validated['deskripsi'] ?? null,

            'is_active' =>
            $request->boolean(
                'is_active'
            ),

        ]);


        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route(
                'admin.potensi-kecamatan.index'
            )
            ->with(
                'success',
                'Potensi Kecamatan berhasil diperbarui.'
            );
    }


    /**
     * --------------------------------------------------------------------------
     * DESTROY
     * --------------------------------------------------------------------------
     * Menghapus data potensi.
     */
    public function destroy(
        PotensiKecamatan $potensiKecamatan
    ) {
        /*
        |--------------------------------------------------------------------------
        | HAPUS GAMBAR
        |--------------------------------------------------------------------------
        */

        if (
            $potensiKecamatan->gambar &&
            Storage::disk('public')
            ->exists(
                $potensiKecamatan->gambar
            )
        ) {

            Storage::disk('public')
                ->delete(
                    $potensiKecamatan->gambar
                );
        }


        /*
        |--------------------------------------------------------------------------
        | HAPUS DATA
        |--------------------------------------------------------------------------
        */

        $potensiKecamatan->delete();


        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route(
                'admin.potensi-kecamatan.index'
            )
            ->with(
                'success',
                'Potensi Kecamatan berhasil dihapus.'
            );
    }
}
