<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiTersediaSetiapSaat;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiTersediaSetiapSaat\DataInformasiTersediaSetiapSaat;
use App\Models\InformasiPublik\InformasiTersediaSetiapSaat\JenisInformasiTersediaSetiapSaat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DataInformasiTersediaSetiapSaatController extends Controller
{
    /**
     * Daftar data berdasarkan jenis.
     */
    public function index(
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat
    ) {
        $dataInformasi =
            $jenisInformasiTersediaSetiapSaat
            ->data()
            ->orderByDesc('tahun')
            ->orderByDesc('tanggal_upload')
            ->paginate(10);

        return view(
            'admin.informasi-publik.informasi-tersedia-setiap-saat.data.index',
            compact(
                'jenisInformasiTersediaSetiapSaat',
                'dataInformasi'
            )
        );
    }

    /**
     * Form tambah data.
     */
    public function create(
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat
    ) {
        return view(
            'admin.informasi-publik.informasi-tersedia-setiap-saat.data.create',
            compact(
                'jenisInformasiTersediaSetiapSaat'
            )
        );
    }

    /**
     * Simpan data.
     */
    public function store(
        Request $request,
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat
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
        ]);

        $filePath = null;
        $namaFile = null;

        if (
            $validated['tipe_dokumen'] === 'file'
            && $request->hasFile('file')
        ) {
            $file = $request->file('file');

            $filePath = $file->store(
                'informasi-publik/informasi-tersedia-setiap-saat',
                'public'
            );

            $namaFile =
                $file->getClientOriginalName();
        }

        DataInformasiTersediaSetiapSaat::create([
            'jenis_informasi_tersedia_setiap_saat_id' =>
            $jenisInformasiTersediaSetiapSaat->id,

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
                'admin.informasi-publik.informasi-tersedia-setiap-saat.data.index',
                $jenisInformasiTersediaSetiapSaat
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
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat,
        DataInformasiTersediaSetiapSaat $dataInformasiTersediaSetiapSaat
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiTersediaSetiapSaat,
            $dataInformasiTersediaSetiapSaat
        );

        return view(
            'admin.informasi-publik.informasi-tersedia-setiap-saat.data.show',
            compact(
                'jenisInformasiTersediaSetiapSaat',
                'dataInformasiTersediaSetiapSaat'
            )
        );
    }

    /**
     * Form edit.
     */
    public function edit(
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat,
        DataInformasiTersediaSetiapSaat $dataInformasiTersediaSetiapSaat
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiTersediaSetiapSaat,
            $dataInformasiTersediaSetiapSaat
        );

        return view(
            'admin.informasi-publik.informasi-tersedia-setiap-saat.data.edit',
            compact(
                'jenisInformasiTersediaSetiapSaat',
                'dataInformasiTersediaSetiapSaat'
            )
        );
    }

    /**
     * Update data.
     */
    public function update(
        Request $request,
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat,
        DataInformasiTersediaSetiapSaat $dataInformasiTersediaSetiapSaat
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiTersediaSetiapSaat,
            $dataInformasiTersediaSetiapSaat
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
        | LINK
        |--------------------------------------------------------------------------
        */

        if (
            $validated['tipe_dokumen'] === 'link'
        ) {
            if (
                $dataInformasiTersediaSetiapSaat->file_path
            ) {
                Storage::disk('public')->delete(
                    $dataInformasiTersediaSetiapSaat->file_path
                );
            }

            $updateData['file_path'] = null;
            $updateData['nama_file'] = null;

            $updateData['link_url'] =
                $validated['link_url'];
        }

        /*
        |--------------------------------------------------------------------------
        | FILE
        |--------------------------------------------------------------------------
        */

        if (
            $validated['tipe_dokumen'] === 'file'
        ) {
            $updateData['link_url'] = null;

            if ($request->hasFile('file')) {

                if (
                    $dataInformasiTersediaSetiapSaat->file_path
                ) {
                    Storage::disk('public')->delete(
                        $dataInformasiTersediaSetiapSaat->file_path
                    );
                }

                $file =
                    $request->file('file');

                $path = $file->store(
                    'informasi-publik/informasi-tersedia-setiap-saat',
                    'public'
                );

                $updateData['file_path'] =
                    $path;

                $updateData['nama_file'] =
                    $file->getClientOriginalName();
            }
        }

        $dataInformasiTersediaSetiapSaat->update(
            $updateData
        );

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-tersedia-setiap-saat.data.index',
                $jenisInformasiTersediaSetiapSaat
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
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat,
        DataInformasiTersediaSetiapSaat $dataInformasiTersediaSetiapSaat
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiTersediaSetiapSaat,
            $dataInformasiTersediaSetiapSaat
        );

        if (
            $dataInformasiTersediaSetiapSaat->file_path
        ) {
            Storage::disk('public')->delete(
                $dataInformasiTersediaSetiapSaat->file_path
            );
        }

        $dataInformasiTersediaSetiapSaat->delete();

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-tersedia-setiap-saat.data.index',
                $jenisInformasiTersediaSetiapSaat
            )
            ->with(
                'success',
                'Data informasi berhasil dihapus.'
            );
    }

    /**
     * Pastikan data benar-benar milik jenis tersebut.
     */
    private function pastikanDataMilikJenis(
        JenisInformasiTersediaSetiapSaat $jenisInformasiTersediaSetiapSaat,
        DataInformasiTersediaSetiapSaat $dataInformasiTersediaSetiapSaat
    ): void {
        abort_unless(
            $dataInformasiTersediaSetiapSaat
                ->jenis_informasi_tersedia_setiap_saat_id
                === $jenisInformasiTersediaSetiapSaat->id,
            404
        );
    }
}
