<?php

namespace App\Http\Controllers\Admin\Layanan;

use App\Http\Controllers\Controller;
use App\Models\SopPpid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SopPpidController extends Controller
{
    /**
     * Menampilkan daftar SOP
     */
    public function index()
    {
        $sops = SopPpid::latest()->paginate(10);

        return view('admin.layanan.sop-ppid.index', compact('sops'));
    }

    /**
     * Form tambah SOP
     */
    public function create()
    {
        return view('admin.layanan.sop-ppid.create');
    }

    /**
     * Simpan SOP
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
            'judul.required' => 'Judul SOP wajib diisi.',

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
            ->store('sop-ppid', 'public');


        /*
        |--------------------------------------------------------------------------
        | Jika SOP baru aktif,
        | nonaktifkan SOP lainnya
        |--------------------------------------------------------------------------
        */

        $isActive = $request->boolean('is_active');

        if ($isActive) {

            SopPpid::query()->update([
                'is_active' => false,
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | Simpan database
        |--------------------------------------------------------------------------
        */

        SopPpid::create([

            'judul' => $validated['judul'],

            'file_pdf' => $filePath,

            'is_active' => $isActive,

        ]);


        return redirect()
            ->route('admin.layanan.sop-ppid.index')
            ->with('success', 'SOP PPID berhasil ditambahkan.');
    }

    /**
     * Form edit SOP
     */
    public function edit(SopPpid $sopPpid)
    {
        return view(
            'admin.layanan.sop-ppid.edit',
            compact('sopPpid')
        );
    }

    /**
     * Update SOP
     */
    public function update(
        Request $request,
        SopPpid $sopPpid
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
            'judul.required' => 'Judul SOP wajib diisi.',

            'file_pdf.mimes' => 'File harus berformat PDF.',

            'file_pdf.max' => 'Ukuran file maksimal 20 MB.',
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
                $sopPpid->file_pdf &&
                Storage::disk('public')->exists(
                    $sopPpid->file_pdf
                )
            ) {

                Storage::disk('public')->delete(
                    $sopPpid->file_pdf
                );
            }


            /*
            | Upload file baru
            */

            $data['file_pdf'] =
                $request->file('file_pdf')
                ->store('sop-ppid', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Jika aktif, nonaktifkan yang lain
        |--------------------------------------------------------------------------
        */

        if ($data['is_active']) {

            SopPpid::where(
                'id',
                '!=',
                $sopPpid->id
            )->update([
                'is_active' => false,
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | Update
        |--------------------------------------------------------------------------
        */

        $sopPpid->update($data);


        return redirect()
            ->route('admin.layanan.sop-ppid.index')
            ->with('success', 'SOP PPID berhasil diperbarui.');
    }

    /**
     * Hapus SOP
     */
    public function destroy(SopPpid $sopPpid)
    {
        /*
        |--------------------------------------------------------------------------
        | Hapus file PDF
        |--------------------------------------------------------------------------
        */

        if (
            $sopPpid->file_pdf &&
            Storage::disk('public')->exists(
                $sopPpid->file_pdf
            )
        ) {

            Storage::disk('public')->delete(
                $sopPpid->file_pdf
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Hapus database
        |--------------------------------------------------------------------------
        */

        $sopPpid->delete();


        return redirect()
            ->route('admin.layanan.sop-ppid.index')
            ->with('success', 'SOP PPID berhasil dihapus.');
    }
}
