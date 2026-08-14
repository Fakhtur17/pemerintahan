<?php

namespace App\Http\Controllers\Admin\Regulasi;

use App\Http\Controllers\Controller;
use App\Models\Regulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegulasiController extends Controller
{
    /**
     * Menampilkan daftar regulasi.
     */
    public function index()
    {
        $regulasis = Regulasi::orderBy('urutan', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.regulasi.index', compact('regulasis'));
    }

    /**
     * Form tambah regulasi.
     */
    public function create()
    {
        return view('admin.regulasi.create');
    }

    /**
     * Menyimpan regulasi baru.
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

            'urutan' => [
                'nullable',
                'integer',
                'min:0',
            ],

            'status' => [
                'nullable',
                'boolean',
            ],
        ], [
            'judul.required' => 'Judul regulasi wajib diisi.',

            'file_pdf.required' => 'File PDF wajib diupload.',

            'file_pdf.mimes' => 'File regulasi harus berformat PDF.',

            'file_pdf.max' => 'Ukuran file maksimal 20 MB.',

            'urutan.integer' => 'Urutan harus berupa angka.',
        ]);

        $filePath = $request->file('file_pdf')
            ->store('regulasi', 'public');

        Regulasi::create([
            'judul' => $request->judul,

            'file_pdf' => $filePath,

            'urutan' => $request->urutan ?? 0,

            'status' => $request->has('status'),
        ]);

        return redirect()
            ->route('admin.regulasi.index')
            ->with('success', 'Regulasi berhasil ditambahkan.');
    }

    /**
     * Form edit regulasi.
     */
    public function edit($id)
    {
        $regulasi = Regulasi::findOrFail($id);

        return view('admin.regulasi.edit', compact('regulasi'));
    }

    /**
     * Update regulasi.
     */
    public function update(Request $request, $id)
    {
        $regulasi = Regulasi::findOrFail($id);

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

            'urutan' => [
                'nullable',
                'integer',
                'min:0',
            ],

            'status' => [
                'nullable',
                'boolean',
            ],
        ], [
            'judul.required' => 'Judul regulasi wajib diisi.',

            'file_pdf.mimes' => 'File regulasi harus berformat PDF.',

            'file_pdf.max' => 'Ukuran file maksimal 20 MB.',
        ]);

        $regulasi->judul = $request->judul;

        $regulasi->urutan = $request->urutan ?? 0;

        $regulasi->status = $request->has('status');

        /*
        |--------------------------------------------------------------------------
        | Jika admin mengganti PDF
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('file_pdf')) {

            // Hapus PDF lama
            if (
                $regulasi->file_pdf &&
                Storage::disk('public')->exists($regulasi->file_pdf)
            ) {
                Storage::disk('public')
                    ->delete($regulasi->file_pdf);
            }

            // Simpan PDF baru
            $regulasi->file_pdf = $request->file('file_pdf')
                ->store('regulasi', 'public');
        }

        $regulasi->save();

        return redirect()
            ->route('admin.regulasi.index')
            ->with('success', 'Regulasi berhasil diperbarui.');
    }

    /**
     * Hapus regulasi.
     */
    public function destroy($id)
    {
        $regulasi = Regulasi::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | Hapus file PDF
        |--------------------------------------------------------------------------
        */

        if (
            $regulasi->file_pdf &&
            Storage::disk('public')->exists($regulasi->file_pdf)
        ) {
            Storage::disk('public')
                ->delete($regulasi->file_pdf);
        }

        $regulasi->delete();

        return redirect()
            ->route('admin.regulasi.index')
            ->with('success', 'Regulasi berhasil dihapus.');
    }
}
