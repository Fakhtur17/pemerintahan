<?php

namespace App\Http\Controllers\Admin\InformasiPublik\InformasiDikecualikan;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiDikecualikan\DataInformasiDikecualikan;
use App\Models\InformasiPublik\InformasiDikecualikan\JenisInformasiDikecualikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DataInformasiDikecualikanController extends Controller
{
    public function index(
        JenisInformasiDikecualikan $jenisInformasiDikecualikan
    ) {
        $dataInformasi = $jenisInformasiDikecualikan
            ->data()
            ->orderByDesc('tahun')
            ->orderByDesc('tanggal_upload')
            ->paginate(10);

        return view(
            'admin.informasi-publik.informasi-dikecualikan.data.index',
            compact(
                'jenisInformasiDikecualikan',
                'dataInformasi'
            )
        );
    }

    public function create(
        JenisInformasiDikecualikan $jenisInformasiDikecualikan
    ) {
        return view(
            'admin.informasi-publik.informasi-dikecualikan.data.create',
            compact('jenisInformasiDikecualikan')
        );
    }

    public function store(
        Request $request,
        JenisInformasiDikecualikan $jenisInformasiDikecualikan
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

        if (
            $validated['tipe_dokumen'] === 'file'
            && $request->hasFile('file')
        ) {
            $file = $request->file('file');

            $filePath = $file->store(
                'informasi-publik/informasi-dikecualikan',
                'public'
            );

            $namaFile =
                $file->getClientOriginalName();
        }

        DataInformasiDikecualikan::create([
            'jenis_informasi_dikecualikan_id' =>
            $jenisInformasiDikecualikan->id,

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
                'admin.informasi-publik.informasi-dikecualikan.data.index',
                $jenisInformasiDikecualikan
            )
            ->with(
                'success',
                'Data informasi dikecualikan berhasil ditambahkan.'
            );
    }

    public function show(
        JenisInformasiDikecualikan $jenisInformasiDikecualikan,
        DataInformasiDikecualikan $dataInformasiDikecualikan
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiDikecualikan,
            $dataInformasiDikecualikan
        );

        return view(
            'admin.informasi-publik.informasi-dikecualikan.data.show',
            compact(
                'jenisInformasiDikecualikan',
                'dataInformasiDikecualikan'
            )
        );
    }

    public function edit(
        JenisInformasiDikecualikan $jenisInformasiDikecualikan,
        DataInformasiDikecualikan $dataInformasiDikecualikan
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiDikecualikan,
            $dataInformasiDikecualikan
        );

        return view(
            'admin.informasi-publik.informasi-dikecualikan.data.edit',
            compact(
                'jenisInformasiDikecualikan',
                'dataInformasiDikecualikan'
            )
        );
    }

    public function update(
        Request $request,
        JenisInformasiDikecualikan $jenisInformasiDikecualikan,
        DataInformasiDikecualikan $dataInformasiDikecualikan
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiDikecualikan,
            $dataInformasiDikecualikan
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
        | Jika LINK
        |--------------------------------------------------------------------------
        */

        if (
            $validated['tipe_dokumen'] === 'link'
        ) {
            if (
                $dataInformasiDikecualikan->file_path
            ) {
                Storage::disk('public')->delete(
                    $dataInformasiDikecualikan->file_path
                );
            }

            $updateData['file_path'] = null;
            $updateData['nama_file'] = null;

            $updateData['link_url'] =
                $validated['link_url'];
        }

        /*
        |--------------------------------------------------------------------------
        | Jika FILE
        |--------------------------------------------------------------------------
        */

        if (
            $validated['tipe_dokumen'] === 'file'
        ) {
            $updateData['link_url'] = null;

            if ($request->hasFile('file')) {

                if (
                    $dataInformasiDikecualikan->file_path
                ) {
                    Storage::disk('public')->delete(
                        $dataInformasiDikecualikan->file_path
                    );
                }

                $file = $request->file('file');

                $path = $file->store(
                    'informasi-publik/informasi-dikecualikan',
                    'public'
                );

                $updateData['file_path'] =
                    $path;

                $updateData['nama_file'] =
                    $file->getClientOriginalName();
            }
        }

        $dataInformasiDikecualikan->update(
            $updateData
        );

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-dikecualikan.data.index',
                $jenisInformasiDikecualikan
            )
            ->with(
                'success',
                'Data informasi dikecualikan berhasil diperbarui.'
            );
    }

    public function destroy(
        JenisInformasiDikecualikan $jenisInformasiDikecualikan,
        DataInformasiDikecualikan $dataInformasiDikecualikan
    ) {
        $this->pastikanDataMilikJenis(
            $jenisInformasiDikecualikan,
            $dataInformasiDikecualikan
        );

        if (
            $dataInformasiDikecualikan->file_path
        ) {
            Storage::disk('public')->delete(
                $dataInformasiDikecualikan->file_path
            );
        }

        $dataInformasiDikecualikan->delete();

        return redirect()
            ->route(
                'admin.informasi-publik.informasi-dikecualikan.data.index',
                $jenisInformasiDikecualikan
            )
            ->with(
                'success',
                'Data informasi dikecualikan berhasil dihapus.'
            );
    }

    private function pastikanDataMilikJenis(
        JenisInformasiDikecualikan $jenisInformasiDikecualikan,
        DataInformasiDikecualikan $dataInformasiDikecualikan
    ): void {
        abort_unless(
            $dataInformasiDikecualikan
                ->jenis_informasi_dikecualikan_id
                === $jenisInformasiDikecualikan->id,
            404
        );
    }
}
