<?php

namespace App\Http\Controllers\Admin\Berita;

use App\Http\Controllers\Controller;
use App\Models\Berita\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Menampilkan daftar berita.
     */
    public function index(Request $request)
    {
        $query = Berita::query();

        /*
        |--------------------------------------------------------------------------
        | SEARCH JUDUL
        |--------------------------------------------------------------------------
        */

        if ($request->filled('search')) {

            $query->where(
                'judul',
                'like',
                '%' . $request->search . '%'
            );
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
                'status',
                $request->status
            );
        }


        /*
        |--------------------------------------------------------------------------
        | FILTER TANGGAL DARI
        |--------------------------------------------------------------------------
        */

        if ($request->filled('tanggal_dari')) {

            $query->whereDate(
                'tanggal',
                '>=',
                $request->tanggal_dari
            );
        }


        /*
        |--------------------------------------------------------------------------
        | FILTER TANGGAL SAMPAI
        |--------------------------------------------------------------------------
        */

        if ($request->filled('tanggal_sampai')) {

            $query->whereDate(
                'tanggal',
                '<=',
                $request->tanggal_sampai
            );
        }


        /*
        |--------------------------------------------------------------------------
        | DATA BERITA
        |--------------------------------------------------------------------------
        |
        | Berita terbaru ditampilkan paling atas.
        |
        */

        $berita = $query
            ->orderByDesc('tanggal')
            ->orderByDesc('id')
            ->paginate(10)
            ->withQueryString();


        /*
        |--------------------------------------------------------------------------
        | JENIS BERITA
        |--------------------------------------------------------------------------
        */

        $jenisBerita = Berita::jenisBerita();


        return view(
            'admin.berita.index',
            compact(
                'berita',
                'jenisBerita'
            )
        );
    }


    /**
     * Form tambah berita.
     */
    public function create()
    {
        $jenisBerita = Berita::jenisBerita();

        return view(
            'admin.berita.create',
            compact('jenisBerita')
        );
    }


    /**
     * Menyimpan berita baru.
     */
    public function store(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDASI
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([

            'jenis' => [
                'required',
                'string',
                'max:100',
            ],

            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'tanggal' => [
                'required',
                'date',
            ],

            'ringkasan' => [
                'nullable',
                'string',
            ],

            'isi' => [
                'required',
                'string',
            ],

            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'status' => [
                'required',
                'in:draft,terbit',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | SLUG
        |--------------------------------------------------------------------------
        */

        $validated['slug'] =
            Berita::generateSlug(
                $validated['judul']
            );


        /*
        |--------------------------------------------------------------------------
        | UPLOAD GAMBAR
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gambar')) {

            $validated['gambar'] =
                $request
                ->file('gambar')
                ->store(
                    'berita',
                    'public'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | SIMPAN
        |--------------------------------------------------------------------------
        */

        Berita::create($validated);


        return redirect()
            ->route('admin.berita.index')
            ->with(
                'success',
                'Berita berhasil ditambahkan.'
            );
    }


    /**
     * Menampilkan detail berita.
     */
    public function show(Berita $berita)
    {
        return view(
            'admin.berita.show',
            compact('berita')
        );
    }


    /**
     * Form edit berita.
     */
    public function edit(Berita $berita)
    {
        $jenisBerita = Berita::jenisBerita();

        return view(
            'admin.berita.edit',
            compact(
                'berita',
                'jenisBerita'
            )
        );
    }


    /**
     * Memperbarui berita.
     */
    public function update(
        Request $request,
        Berita $berita
    ) {

        /*
        |--------------------------------------------------------------------------
        | VALIDASI
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([

            'jenis' => [
                'required',
                'string',
                'max:100',
            ],

            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'tanggal' => [
                'required',
                'date',
            ],

            'ringkasan' => [
                'nullable',
                'string',
            ],

            'isi' => [
                'required',
                'string',
            ],

            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'status' => [
                'required',
                'in:draft,terbit',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | SLUG
        |--------------------------------------------------------------------------
        */

        $validated['slug'] =
            Berita::generateSlug(
                $validated['judul'],
                $berita->id
            );


        /*
        |--------------------------------------------------------------------------
        | GAMBAR BARU
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gambar')) {

            /*
            | Hapus gambar lama
            */

            if (
                $berita->gambar &&
                Storage::disk('public')
                ->exists($berita->gambar)
            ) {

                Storage::disk('public')
                    ->delete($berita->gambar);
            }


            /*
            | Upload gambar baru
            */

            $validated['gambar'] =
                $request
                ->file('gambar')
                ->store(
                    'berita',
                    'public'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | UPDATE
        |--------------------------------------------------------------------------
        */

        $berita->update($validated);


        return redirect()
            ->route('admin.berita.index')
            ->with(
                'success',
                'Berita berhasil diperbarui.'
            );
    }


    /**
     * Menghapus berita.
     */
    public function destroy(Berita $berita)
    {
        /*
        |--------------------------------------------------------------------------
        | HAPUS GAMBAR
        |--------------------------------------------------------------------------
        */

        if (
            $berita->gambar &&
            Storage::disk('public')
            ->exists($berita->gambar)
        ) {

            Storage::disk('public')
                ->delete($berita->gambar);
        }


        /*
        |--------------------------------------------------------------------------
        | HAPUS DATA
        |--------------------------------------------------------------------------
        */

        $berita->delete();


        return redirect()
            ->route('admin.berita.index')
            ->with(
                'success',
                'Berita berhasil dihapus.'
            );
    }
}
