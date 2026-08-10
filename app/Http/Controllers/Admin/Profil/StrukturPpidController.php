<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\StrukturPpid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturPpidController extends Controller
{
    /**
     * INDEX
     * Menampilkan semua Struktur PPID
     */
    public function index()
    {
        $data = StrukturPpid::latest()->get();

        return view(
            'admin.profil.struktur-ppid.index',
            compact('data')
        );
    }


    /**
     * CREATE
     * Menampilkan form tambah
     */
    public function create()
    {
        return view(
            'admin.profil.struktur-ppid.create'
        );
    }


    /**
     * STORE
     * Menyimpan Struktur PPID baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'deskripsi' => [
                'nullable',
                'string',
            ],

            'gambar' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],
        ], [
            'judul.required' =>
            'Judul Struktur PPID wajib diisi.',

            'judul.max' =>
            'Judul maksimal 255 karakter.',

            'gambar.required' =>
            'Gambar Struktur PPID wajib dipilih.',

            'gambar.image' =>
            'File yang dipilih harus berupa gambar.',

            'gambar.mimes' =>
            'Gambar harus berformat JPG, JPEG, PNG, atau WEBP.',

            'gambar.max' =>
            'Ukuran gambar maksimal 10 MB.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Upload gambar
        |--------------------------------------------------------------------------
        */

        $gambarPath = $request
            ->file('gambar')
            ->store('struktur-ppid', 'public');


        /*
        |--------------------------------------------------------------------------
        | Simpan database
        |--------------------------------------------------------------------------
        */

        StrukturPpid::create([
            'judul' => $request->judul,

            'deskripsi' => $request->deskripsi,

            'gambar' => $gambarPath,
        ]);


        return redirect()
            ->route('admin.profil.struktur-ppid.index')
            ->with(
                'success',
                'Struktur PPID berhasil ditambahkan.'
            );
    }


    /**
     * EDIT
     * Menampilkan form edit
     */
    public function edit(StrukturPpid $struktur_ppid)
    {
        return view(
            'admin.profil.struktur-ppid.edit',
            compact('struktur_ppid')
        );
    }


    /**
     * UPDATE
     * Mengubah Struktur PPID
     */
    public function update(
        Request $request,
        StrukturPpid $struktur_ppid
    ) {
        $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'deskripsi' => [
                'nullable',
                'string',
            ],

            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],
        ], [
            'judul.required' =>
            'Judul Struktur PPID wajib diisi.',

            'judul.max' =>
            'Judul maksimal 255 karakter.',

            'gambar.image' =>
            'File yang dipilih harus berupa gambar.',

            'gambar.mimes' =>
            'Gambar harus berformat JPG, JPEG, PNG, atau WEBP.',

            'gambar.max' =>
            'Ukuran gambar maksimal 10 MB.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Update judul dan deskripsi
        |--------------------------------------------------------------------------
        */

        $struktur_ppid->judul =
            $request->judul;

        $struktur_ppid->deskripsi =
            $request->deskripsi;


        /*
        |--------------------------------------------------------------------------
        | Jika upload gambar baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gambar')) {

            /*
            | Hapus gambar lama
            */

            if (
                $struktur_ppid->gambar &&
                Storage::disk('public')->exists(
                    $struktur_ppid->gambar
                )
            ) {
                Storage::disk('public')->delete(
                    $struktur_ppid->gambar
                );
            }


            /*
            | Simpan gambar baru
            */

            $gambarPath = $request
                ->file('gambar')
                ->store('struktur-ppid', 'public');


            $struktur_ppid->gambar =
                $gambarPath;
        }


        $struktur_ppid->save();


        return redirect()
            ->route('admin.profil.struktur-ppid.index')
            ->with(
                'success',
                'Struktur PPID berhasil diperbarui.'
            );
    }


    /**
     * DESTROY
     * Menghapus Struktur PPID
     */
    public function destroy(
        StrukturPpid $struktur_ppid
    ) {
        /*
        |--------------------------------------------------------------------------
        | Hapus gambar
        |--------------------------------------------------------------------------
        */

        if (
            $struktur_ppid->gambar &&
            Storage::disk('public')->exists(
                $struktur_ppid->gambar
            )
        ) {
            Storage::disk('public')->delete(
                $struktur_ppid->gambar
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Hapus database
        |--------------------------------------------------------------------------
        */

        $struktur_ppid->delete();


        return redirect()
            ->route('admin.profil.struktur-ppid.index')
            ->with(
                'success',
                'Struktur PPID berhasil dihapus.'
            );
    }
}
