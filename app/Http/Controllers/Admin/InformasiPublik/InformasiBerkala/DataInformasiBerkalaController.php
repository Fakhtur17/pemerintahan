<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiBerkala;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiBerkala\DataInformasiBerkala;
use App\Models\InformasiPublik\InformasiBerkala\JenisInformasiBerkala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DataInformasiBerkalaController extends Controller
{
    /**
     * Menampilkan data berdasarkan jenis informasi.
     */
    public function index(
        JenisInformasiBerkala $jenisInformasiBerkala
    ) {
        $dataInformasi = $jenisInformasiBerkala
            ->data()
            ->orderByDesc('tahun')
            ->orderByDesc('tanggal_upload')
            ->paginate(10);

        return view(
            'admin.informasi-publik.informasi-berkala.data.index',
            compact(
                'jenisInformasiBerkala',
                'dataInformasi'
            )
        );
    }

    /**
     * Form tambah data.
     */
    public function create(
        JenisInformasiBerkala $jenisInformasiBerkala
    ) {
        return view(
            'admin.informasi-publik.informasi-berkala.data.create',
            compact('jenisInformasiBerkala')
        );
    }

    /**
     * Simpan data baru.
     */
    public function store(
        Request $request,
        JenisInformasiBerkala $jenisInformasiBerkala
    ) {
        $validated = $request->validate([
            'tahun' => [
                'required',
                'integer',
                'min:2000',
                'max:2100',
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

            'tipe_dokumen' => [
                'required',
                Rule::in([
                    'file',
                    'link',
                ]),
            ],

            'file' => [
                'nullable',
                'required_if:tipe_dokumen,file',
                'file',
                'mimes:pdf',
                'max:10240',
            ],

            'link_url' => [
                'nullable',
                'required_if:tipe_dokumen,link',
                'url',
                'max:2000',
            ],

            'keterangan' => [
                'nullable',
                'string',
            ],
        ], [
            'file.required_if' =>
            'File PDF wajib diunggah.',

            'file.mimes' =>
            'Dokumen harus berupa PDF.',

            'file.max' =>
            'Ukuran file maksimal 10 MB.',

            'link_url.required_if' =>
            'Link wajib diisi.',

            'link_url.url' =>
            'Format URL tidak valid.',
        ]);

        $filePath = null;
        $namaFile = null;

        /*
        |--------------------------------------------------------------------------
        | Upload PDF
        |--------------------------------------------------------------------------
        */

        if (
            $validated['tipe_dokumen'] === 'file'
            && $request->hasFile('file')
        ) {
            $file = $request->file('file');

            $filePath = $file->store(
                'informasi-publik/informasi-berkala',
                'public'
            );

            $namaFile =
                $file->getClientOriginalName();
        }

        /*
        |--------------------------------------------------------------------------
        | Simpan data
        |--------------------------------------------------------------------------
        */

        DataInformasiBerkala::create([
            'jenis_informasi_berkala_id' =>
            $jenisInformasiBerkala->id,

            'tahun' =>
            $validated['tahun'],

            'nama_skpd' =>
            $validated['nama_skpd'],

            'tanggal_upload' =>
            $validated['tanggal_upload'],

            'tipe_dokumen' =>
            $validated['tipe_dokumen'],

            'nama_file' =>
            $namaFile,

            'file_path' =>
            $filePath,

            'link_url' =>
            $validated['tipe_dokumen'] === 'link'
                ? $validated['link_url']
                : null,

            'keterangan' =>
            $validated['keterangan'] ?? null,
        ]);

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-berkala.data.index',
                $jenisInformasiBerkala
            )
            ->with(
                'success',
                'Data informasi berhasil ditambahkan.'
            );
    }

    /**
     * Detail data.
     */
    public function show(
        JenisInformasiBerkala $jenisInformasiBerkala,
        DataInformasiBerkala $dataInformasiBerkala
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiBerkala,
            $dataInformasiBerkala
        );

        return view(
            'admin.informasi-publik.informasi-berkala.data.show',
            compact(
                'jenisInformasiBerkala',
                'dataInformasiBerkala'
            )
        );
    }

    /**
     * Form edit.
     */
    public function edit(
        JenisInformasiBerkala $jenisInformasiBerkala,
        DataInformasiBerkala $dataInformasiBerkala
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiBerkala,
            $dataInformasiBerkala
        );

        return view(
            'admin.informasi-publik.informasi-berkala.data.edit',
            compact(
                'jenisInformasiBerkala',
                'dataInformasiBerkala'
            )
        );
    }

    /**
     * Update data.
     */
    public function update(
        Request $request,
        JenisInformasiBerkala $jenisInformasiBerkala,
        DataInformasiBerkala $dataInformasiBerkala
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiBerkala,
            $dataInformasiBerkala
        );

        $validated = $request->validate([
            'tahun' => [
                'required',
                'integer',
                'min:2000',
                'max:2100',
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

            'tipe_dokumen' => [
                'required',
                Rule::in([
                    'file',
                    'link',
                ]),
            ],

            'file' => [
                'nullable',
                'file',
                'mimes:pdf',
                'max:10240',
            ],

            'link_url' => [
                'nullable',
                'required_if:tipe_dokumen,link',
                'url',
                'max:2000',
            ],

            'keterangan' => [
                'nullable',
                'string',
            ],
        ]);

        $updateData = [
            'tahun' =>
            $validated['tahun'],

            'nama_skpd' =>
            $validated['nama_skpd'],

            'tanggal_upload' =>
            $validated['tanggal_upload'],

            'tipe_dokumen' =>
            $validated['tipe_dokumen'],

            'keterangan' =>
            $validated['keterangan'] ?? null,
        ];

        /*
        |--------------------------------------------------------------------------
        | Jika tipe LINK
        |--------------------------------------------------------------------------
        */

        if (
            $validated['tipe_dokumen'] === 'link'
        ) {
            if (
                $dataInformasiBerkala->file_path
            ) {
                Storage::disk('public')->delete(
                    $dataInformasiBerkala->file_path
                );
            }

            $updateData['file_path'] = null;
            $updateData['nama_file'] = null;

            $updateData['link_url'] =
                $validated['link_url'];
        }

        /*
        |--------------------------------------------------------------------------
        | Jika tipe FILE
        |--------------------------------------------------------------------------
        */

        if (
            $validated['tipe_dokumen'] === 'file'
        ) {
            $updateData['link_url'] = null;

            /*
            |--------------------------------------------------------------------------
            | Kalau upload file baru
            |--------------------------------------------------------------------------
            */

            if ($request->hasFile('file')) {

                if (
                    $dataInformasiBerkala->file_path
                ) {
                    Storage::disk('public')->delete(
                        $dataInformasiBerkala->file_path
                    );
                }

                $file =
                    $request->file('file');

                $path = $file->store(
                    'informasi-publik/informasi-berkala',
                    'public'
                );

                $updateData['file_path'] =
                    $path;

                $updateData['nama_file'] =
                    $file->getClientOriginalName();
            }
        }

        $dataInformasiBerkala->update(
            $updateData
        );

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-berkala.data.index',
                $jenisInformasiBerkala
            )
            ->with(
                'success',
                'Data informasi berhasil diperbarui.'
            );
    }

    /**
     * Hapus data.
     */
    public function destroy(
        JenisInformasiBerkala $jenisInformasiBerkala,
        DataInformasiBerkala $dataInformasiBerkala
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiBerkala,
            $dataInformasiBerkala
        );

        /*
        |--------------------------------------------------------------------------
        | Hapus file
        |--------------------------------------------------------------------------
        */

        if (
            $dataInformasiBerkala->file_path
        ) {
            Storage::disk('public')->delete(
                $dataInformasiBerkala->file_path
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Hapus database
        |--------------------------------------------------------------------------
        */

        $dataInformasiBerkala->delete();

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-berkala.data.index',
                $jenisInformasiBerkala
            )
            ->with(
                'success',
                'Data informasi berhasil dihapus.'
            );
    }

    /**
     * Memastikan data memang milik jenis informasi
     * yang sedang dibuka.
     */
    private function pastikanDataMilikJenis(
        JenisInformasiBerkala $jenisInformasiBerkala,
        DataInformasiBerkala $dataInformasiBerkala
    ): void {
        abort_unless(
            $dataInformasiBerkala
                ->jenis_informasi_berkala_id
                === $jenisInformasiBerkala->id,
            404
        );
    }
}
