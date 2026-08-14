<?php

namespace App\Http\Controllers\Admin\Layanan;

use App\Http\Controllers\Controller;
use App\Models\AlurPermohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlurPermohonanController extends Controller
{
    /**
     * Menampilkan daftar Alur Permohonan
     */
    public function index()
    {
        $alurPermohonans = AlurPermohonan::latest()->paginate(10);

        return view(
            'admin.layanan.alur-permohonan.index',
            compact('alurPermohonans')
        );
    }

    /**
     * Form tambah Alur Permohonan
     */
    public function create()
    {
        return view('admin.layanan.alur-permohonan.create');
    }

    /**
     * Simpan Alur Permohonan
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
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

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ], [
            'judul.required' => 'Judul Alur Permohonan wajib diisi.',

            'file_pdf.required' => 'File PDF wajib diunggah.',

            'file_pdf.mimes' => 'File harus berformat PDF.',

            'file_pdf.max' => 'Ukuran file maksimal 20 MB.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Upload PDF
        |--------------------------------------------------------------------------
        */

        $filePath = $request->file('file_pdf')
            ->store('alur-permohonan', 'public');


        /*
        |--------------------------------------------------------------------------
        | Jika Alur Permohonan baru aktif,
        | nonaktifkan Alur Permohonan lainnya
        |--------------------------------------------------------------------------
        */

        $isActive = $request->boolean('is_active');

        if ($isActive) {

            AlurPermohonan::query()->update([
                'is_active' => false,
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | Simpan database
        |--------------------------------------------------------------------------
        */

        AlurPermohonan::create([

            'judul' => $validated['judul'],

            'file_pdf' => $filePath,

            'is_active' => $isActive,

        ]);


        return redirect()
            ->route('admin.layanan.alur-permohonan.index')
            ->with(
                'success',
                'Alur Permohonan berhasil ditambahkan.'
            );
    }

    /**
     * Form edit Alur Permohonan
     */
    public function edit(AlurPermohonan $alurPermohonan)
    {
        return view(
            'admin.layanan.alur-permohonan.edit',
            compact('alurPermohonan')
        );
    }

    /**
     * Update Alur Permohonan
     */
    public function update(
        Request $request,
        AlurPermohonan $alurPermohonan
    ) {

        $validated = $request->validate([
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

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ], [
            'judul.required' =>
            'Judul Alur Permohonan wajib diisi.',

            'file_pdf.mimes' =>
            'File harus berformat PDF.',

            'file_pdf.max' =>
            'Ukuran file maksimal 20 MB.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Data update
        |--------------------------------------------------------------------------
        */

        $data = [

            'judul' => $validated['judul'],

            'is_active' => $request->boolean('is_active'),

        ];


        /*
        |--------------------------------------------------------------------------
        | Upload PDF baru jika ada
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('file_pdf')) {

            /*
            | Hapus file lama
            */

            if (
                $alurPermohonan->file_pdf &&
                Storage::disk('public')->exists(
                    $alurPermohonan->file_pdf
                )
            ) {

                Storage::disk('public')->delete(
                    $alurPermohonan->file_pdf
                );
            }


            /*
            | Upload file baru
            */

            $data['file_pdf'] =
                $request->file('file_pdf')
                ->store('alur-permohonan', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Jika aktif, nonaktifkan yang lain
        |--------------------------------------------------------------------------
        */

        if ($data['is_active']) {

            AlurPermohonan::where(
                'id',
                '!=',
                $alurPermohonan->id
            )->update([
                'is_active' => false,
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | Update
        |--------------------------------------------------------------------------
        */

        $alurPermohonan->update($data);


        return redirect()
            ->route('admin.layanan.alur-permohonan.index')
            ->with(
                'success',
                'Alur Permohonan berhasil diperbarui.'
            );
    }

    /**
     * Hapus Alur Permohonan
     */
    public function destroy(AlurPermohonan $alurPermohonan)
    {
        /*
        |--------------------------------------------------------------------------
        | Hapus file PDF
        |--------------------------------------------------------------------------
        */

        if (
            $alurPermohonan->file_pdf &&
            Storage::disk('public')->exists(
                $alurPermohonan->file_pdf
            )
        ) {

            Storage::disk('public')->delete(
                $alurPermohonan->file_pdf
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Hapus database
        |--------------------------------------------------------------------------
        */

        $alurPermohonan->delete();


        return redirect()
            ->route('admin.layanan.alur-permohonan.index')
            ->with(
                'success',
                'Alur Permohonan berhasil dihapus.'
            );
    }
}
