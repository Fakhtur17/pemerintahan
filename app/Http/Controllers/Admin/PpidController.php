<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ppid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PpidController extends Controller
{
    /**
     * Menampilkan daftar SK PPID.
     */
    public function index()
    {
        $ppids = Ppid::latest()->paginate(10);

        return view('admin.ppid.index', compact('ppids'));
    }


    /**
     * Form tambah SK PPID.
     */
    public function create()
    {
        return view('admin.ppid.create');
    }


    /**
     * Simpan SK PPID.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'deskripsi' => [
                'nullable',
                'string',
            ],

            'file_pdf' => [
                'required',
                'file',
                'mimes:pdf',
                'max:10240',
            ],

            'aktif' => [
                'nullable',
                'boolean',
            ],
        ]);


        $filePath = $request
            ->file('file_pdf')
            ->store('ppid', 'public');


        Ppid::create([
            'judul' => $validated['judul'],

            'deskripsi' => $validated['deskripsi'] ?? null,

            'file_pdf' => $filePath,

            'aktif' => $request->boolean('aktif'),
        ]);


        return redirect()
            ->route('admin.ppid.index')
            ->with('success', 'SK PPID Pelaksana berhasil ditambahkan.');
    }


    /**
     * Form edit SK PPID.
     */
    public function edit(Ppid $ppid)
    {
        return view(
            'admin.ppid.edit',
            compact('ppid')
        );
    }


    /**
     * Update SK PPID.
     */
    public function update(
        Request $request,
        Ppid $ppid
    ) {

        $validated = $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'deskripsi' => [
                'nullable',
                'string',
            ],

            'file_pdf' => [
                'nullable',
                'file',
                'mimes:pdf',
                'max:10240',
            ],

            'aktif' => [
                'nullable',
                'boolean',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | DATA
        |--------------------------------------------------------------------------
        */

        $data = [
            'judul' => $validated['judul'],

            'deskripsi' => $validated['deskripsi'] ?? null,

            'aktif' => $request->boolean('aktif'),
        ];


        /*
        |--------------------------------------------------------------------------
        | GANTI FILE PDF
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('file_pdf')) {

            if (
                $ppid->file_pdf &&
                Storage::disk('public')->exists($ppid->file_pdf)
            ) {

                Storage::disk('public')->delete(
                    $ppid->file_pdf
                );
            }


            $data['file_pdf'] =
                $request
                ->file('file_pdf')
                ->store('ppid', 'public');
        }


        $ppid->update($data);


        return redirect()
            ->route('admin.ppid.index')
            ->with('success', 'SK PPID Pelaksana berhasil diperbarui.');
    }


    /**
     * Hapus SK PPID.
     */
    public function destroy(Ppid $ppid)
    {
        if (
            $ppid->file_pdf &&
            Storage::disk('public')->exists($ppid->file_pdf)
        ) {

            Storage::disk('public')->delete(
                $ppid->file_pdf
            );
        }


        $ppid->delete();


        return redirect()
            ->route('admin.ppid.index')
            ->with('success', 'SK PPID Pelaksana berhasil dihapus.');
    }
}
