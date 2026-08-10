<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\TupoksiPpid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TupoksiPpidController extends Controller
{
    /**
     * INDEX
     * Menampilkan semua Tupoksi PPID
     */
    public function index()
    {
        $data = TupoksiPpid::latest()->get();

        return view(
            'admin.profil.tupoksi-ppid.index',
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
            'admin.profil.tupoksi-ppid.create'
        );
    }


    /**
     * STORE
     * Menyimpan Tupoksi baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'file_pdf' => [
                'required',
                'file',
                'mimes:pdf',
                'max:20480',
            ],
        ], [
            'judul.required' =>
            'Judul Tupoksi wajib diisi.',

            'file_pdf.required' =>
            'File PDF wajib dipilih.',

            'file_pdf.mimes' =>
            'File harus berupa PDF.',

            'file_pdf.max' =>
            'Ukuran PDF maksimal 20 MB.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Upload PDF
        |--------------------------------------------------------------------------
        */

        $filePath = $request
            ->file('file_pdf')
            ->store('tupoksi-ppid', 'public');


        /*
        |--------------------------------------------------------------------------
        | Simpan database
        |--------------------------------------------------------------------------
        */

        TupoksiPpid::create([
            'judul' => $request->judul,
            'file_pdf' => $filePath,
        ]);


        return redirect()
            ->route('admin.profil.tupoksi-ppid.index')
            ->with(
                'success',
                'Tupoksi PPID berhasil ditambahkan.'
            );
    }


    /**
     * EDIT
     * Menampilkan form edit
     */
    public function edit(TupoksiPpid $tupoksi_ppid)
    {
        return view(
            'admin.profil.tupoksi-ppid.edit',
            compact('tupoksi_ppid')
        );
    }


    /**
     * UPDATE
     * Mengubah Tupoksi
     */
    public function update(
        Request $request,
        TupoksiPpid $tupoksi_ppid
    ) {

        $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'file_pdf' => [
                'nullable',
                'file',
                'mimes:pdf',
                'max:20480',
            ],
        ], [
            'judul.required' =>
            'Judul Tupoksi wajib diisi.',

            'file_pdf.mimes' =>
            'File harus berupa PDF.',

            'file_pdf.max' =>
            'Ukuran PDF maksimal 20 MB.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Update judul
        |--------------------------------------------------------------------------
        */

        $tupoksi_ppid->judul =
            $request->judul;


        /*
        |--------------------------------------------------------------------------
        | Jika upload PDF baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('file_pdf')) {

            /*
            | Hapus PDF lama
            */

            if (
                $tupoksi_ppid->file_pdf &&
                Storage::disk('public')->exists(
                    $tupoksi_ppid->file_pdf
                )
            ) {

                Storage::disk('public')->delete(
                    $tupoksi_ppid->file_pdf
                );
            }


            /*
            | Simpan PDF baru
            */

            $filePath = $request
                ->file('file_pdf')
                ->store('tupoksi-ppid', 'public');


            $tupoksi_ppid->file_pdf =
                $filePath;
        }


        $tupoksi_ppid->save();


        return redirect()
            ->route('admin.profil.tupoksi-ppid.index')
            ->with(
                'success',
                'Tupoksi PPID berhasil diperbarui.'
            );
    }


    /**
     * DESTROY
     * Menghapus Tupoksi
     */
    public function destroy(TupoksiPpid $tupoksi_ppid)
    {
        /*
        |--------------------------------------------------------------------------
        | Hapus PDF
        |--------------------------------------------------------------------------
        */

        if (
            $tupoksi_ppid->file_pdf &&
            Storage::disk('public')->exists(
                $tupoksi_ppid->file_pdf
            )
        ) {

            Storage::disk('public')->delete(
                $tupoksi_ppid->file_pdf
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Hapus database
        |--------------------------------------------------------------------------
        */

        $tupoksi_ppid->delete();


        return redirect()
            ->route('admin.profil.tupoksi-ppid.index')
            ->with(
                'success',
                'Tupoksi PPID berhasil dihapus.'
            );
    }
}
