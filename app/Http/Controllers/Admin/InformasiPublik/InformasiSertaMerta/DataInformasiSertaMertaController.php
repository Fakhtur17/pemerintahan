<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMerta;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiSertaMerta\DataInformasiSertaMerta;
use App\Models\InformasiPublik\InformasiSertaMerta\JenisInformasiSertaMerta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DataInformasiSertaMertaController extends Controller
{
    /**
     * Menampilkan data berdasarkan jenis informasi.
     */
    public function index(
        JenisInformasiSertaMerta $jenisInformasiSertaMerta
    ) {
        $dataInformasi = $jenisInformasiSertaMerta
            ->data()
            ->orderByDesc('tahun')
            ->orderByDesc('tanggal_upload')
            ->paginate(10);

        return view(
            'admin.informasi-publik.informasi-serta-merta.data.index',
            compact(
                'jenisInformasiSertaMerta',
                'dataInformasi'
            )
        );
    }

    /**
     * Form tambah data.
     */
    public function create(
        JenisInformasiSertaMerta $jenisInformasiSertaMerta
    ) {
        return view(
            'admin.informasi-publik.informasi-serta-merta.data.create',
            compact('jenisInformasiSertaMerta')
        );
    }

    /**
     * Simpan data baru.
     */
    public function store(
        Request $request,
        JenisInformasiSertaMerta $jenisInformasiSertaMerta
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
                'informasi-publik/informasi-serta-merta',
                'public'
            );

            $namaFile =
                $file->getClientOriginalName();
        }

        /*
        |--------------------------------------------------------------------------
        | Simpan database
        |--------------------------------------------------------------------------
        */

        DataInformasiSertaMerta::create([
            'jenis_informasi_serta_merta_id' =>
            $jenisInformasiSertaMerta->id,

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
                'admin.informasi-publik.informasi-serta-merta.data.index',
                $jenisInformasiSertaMerta
            )
            ->with(
                'success',
                'Data informasi serta merta berhasil ditambahkan.'
            );
    }

    /**
     * Detail data.
     */
    public function show(
        JenisInformasiSertaMerta $jenisInformasiSertaMerta,
        DataInformasiSertaMerta $dataInformasiSertaMerta
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiSertaMerta,
            $dataInformasiSertaMerta
        );

        return view(
            'admin.informasi-publik.informasi-serta-merta.data.show',
            compact(
                'jenisInformasiSertaMerta',
                'dataInformasiSertaMerta'
            )
        );
    }

    /**
     * Form edit.
     */
    public function edit(
        JenisInformasiSertaMerta $jenisInformasiSertaMerta,
        DataInformasiSertaMerta $dataInformasiSertaMerta
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiSertaMerta,
            $dataInformasiSertaMerta
        );

        return view(
            'admin.informasi-publik.informasi-serta-merta.data.edit',
            compact(
                'jenisInformasiSertaMerta',
                'dataInformasiSertaMerta'
            )
        );
    }

    /**
     * Update data.
     */
    public function update(
        Request $request,
        JenisInformasiSertaMerta $jenisInformasiSertaMerta,
        DataInformasiSertaMerta $dataInformasiSertaMerta
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiSertaMerta,
            $dataInformasiSertaMerta
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
                $dataInformasiSertaMerta->file_path
            ) {
                Storage::disk('public')->delete(
                    $dataInformasiSertaMerta->file_path
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

            if ($request->hasFile('file')) {

                if (
                    $dataInformasiSertaMerta->file_path
                ) {
                    Storage::disk('public')->delete(
                        $dataInformasiSertaMerta->file_path
                    );
                }

                $file =
                    $request->file('file');

                $path = $file->store(
                    'informasi-publik/informasi-serta-merta',
                    'public'
                );

                $updateData['file_path'] =
                    $path;

                $updateData['nama_file'] =
                    $file->getClientOriginalName();
            }
        }

        $dataInformasiSertaMerta->update(
            $updateData
        );

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-serta-merta.data.index',
                $jenisInformasiSertaMerta
            )
            ->with(
                'success',
                'Data informasi serta merta berhasil diperbarui.'
            );
    }

    /**
     * Hapus data.
     */
    public function destroy(
        JenisInformasiSertaMerta $jenisInformasiSertaMerta,
        DataInformasiSertaMerta $dataInformasiSertaMerta
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiSertaMerta,
            $dataInformasiSertaMerta
        );

        /*
        |--------------------------------------------------------------------------
        | Hapus file
        |--------------------------------------------------------------------------
        */

        if (
            $dataInformasiSertaMerta->file_path
        ) {
            Storage::disk('public')->delete(
                $dataInformasiSertaMerta->file_path
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Hapus database
        |--------------------------------------------------------------------------
        */

        $dataInformasiSertaMerta->delete();

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-serta-merta.data.index',
                $jenisInformasiSertaMerta
            )
            ->with(
                'success',
                'Data informasi serta merta berhasil dihapus.'
            );
    }

    /**
     * Memastikan data memang milik jenis yang sedang dibuka.
     */
    private function pastikanDataMilikJenis(
        JenisInformasiSertaMerta $jenisInformasiSertaMerta,
        DataInformasiSertaMerta $dataInformasiSertaMerta
    ): void {
        abort_unless(
            $dataInformasiSertaMerta
                ->jenis_informasi_serta_merta_id
                === $jenisInformasiSertaMerta->id,
            404
        );
    }
}
