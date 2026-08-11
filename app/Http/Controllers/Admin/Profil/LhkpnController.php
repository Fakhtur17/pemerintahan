<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\Lhkpn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LhkpnController extends Controller
{
    /**
     * Menampilkan semua data LHKPN
     */
    public function index()
    {
        $data = Lhkpn::latest('tanggal_upload')->get();

        return view('admin.profil.lhkpn.index', compact('data'));
    }

    /**
     * Form tambah LHKPN
     */
    public function create()
    {
        return view('admin.profil.lhkpn.create');
    }

    /**
     * Simpan data LHKPN
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => [
                'required',
                'integer',
                'digits:4',
            ],

            'nama_skpd' => [
                'required',
                'string',
                'max:255',
            ],

            'tanggal_upload' => [
                'required',
                'date',
            ],

            'keterangan' => [
                'required',
                'string',
                'max:255',
            ],

            'file_pdf' => [
                'required',
                'file',
                'mimes:pdf',
                'max:10240',
            ],
        ], [
            'tahun.required' => 'Tahun wajib diisi.',
            'tahun.integer' => 'Tahun harus berupa angka.',
            'tahun.digits' => 'Tahun harus terdiri dari 4 angka.',

            'nama_skpd.required' => 'Nama SKPD/Badan Publik wajib diisi.',

            'tanggal_upload.required' => 'Tanggal upload wajib diisi.',
            'tanggal_upload.date' => 'Format tanggal tidak valid.',

            'keterangan.required' => 'Keterangan wajib diisi.',

            'file_pdf.required' => 'File PDF wajib diupload.',
            'file_pdf.mimes' => 'File harus berformat PDF.',
            'file_pdf.max' => 'Ukuran file maksimal 10 MB.',
        ]);

        // Upload PDF
        $filePath = $request->file('file_pdf')
            ->store('lhkpn', 'public');

        // Simpan ke database
        Lhkpn::create([
            'tahun' => $request->tahun,
            'nama_skpd' => $request->nama_skpd,
            'tanggal_upload' => $request->tanggal_upload,
            'jenis_informasi' => 'PDF',
            'keterangan' => $request->keterangan,
            'file_pdf' => $filePath,
        ]);

        return redirect()
            ->route('admin.profil.lhkpn.index')
            ->with('success', 'Data LHKPN berhasil ditambahkan.');
    }

    /**
     * Form edit LHKPN
     */
    public function edit(Lhkpn $lhkpn)
    {
        return view('admin.profil.lhkpn.edit', compact('lhkpn'));
    }

    /**
     * Update data LHKPN
     */
    public function update(Request $request, Lhkpn $lhkpn)
    {
        $request->validate([
            'tahun' => [
                'required',
                'integer',
                'digits:4',
            ],

            'nama_skpd' => [
                'required',
                'string',
                'max:255',
            ],

            'tanggal_upload' => [
                'required',
                'date',
            ],

            'keterangan' => [
                'required',
                'string',
                'max:255',
            ],

            'file_pdf' => [
                'nullable',
                'file',
                'mimes:pdf',
                'max:10240',
            ],
        ], [
            'tahun.required' => 'Tahun wajib diisi.',
            'tahun.integer' => 'Tahun harus berupa angka.',
            'tahun.digits' => 'Tahun harus terdiri dari 4 angka.',

            'nama_skpd.required' => 'Nama SKPD/Badan Publik wajib diisi.',

            'tanggal_upload.required' => 'Tanggal upload wajib diisi.',

            'keterangan.required' => 'Keterangan wajib diisi.',

            'file_pdf.mimes' => 'File harus berformat PDF.',
            'file_pdf.max' => 'Ukuran file maksimal 10 MB.',
        ]);

        $data = [
            'tahun' => $request->tahun,
            'nama_skpd' => $request->nama_skpd,
            'tanggal_upload' => $request->tanggal_upload,
            'keterangan' => $request->keterangan,
        ];

        // Jika upload PDF baru
        if ($request->hasFile('file_pdf')) {

            // Hapus file PDF lama
            if (
                $lhkpn->file_pdf &&
                Storage::disk('public')->exists($lhkpn->file_pdf)
            ) {
                Storage::disk('public')->delete($lhkpn->file_pdf);
            }

            // Upload file baru
            $data['file_pdf'] = $request
                ->file('file_pdf')
                ->store('lhkpn', 'public');
        }

        $lhkpn->update($data);

        return redirect()
            ->route('admin.profil.lhkpn.index')
            ->with('success', 'Data LHKPN berhasil diperbarui.');
    }

    /**
     * Hapus data LHKPN
     */
    public function destroy(Lhkpn $lhkpn)
    {
        // Hapus file PDF
        if (
            $lhkpn->file_pdf &&
            Storage::disk('public')->exists($lhkpn->file_pdf)
        ) {
            Storage::disk('public')->delete($lhkpn->file_pdf);
        }

        // Hapus data database
        $lhkpn->delete();

        return redirect()
            ->route('admin.profil.lhkpn.index')
            ->with('success', 'Data LHKPN berhasil dihapus.');
    }
}
