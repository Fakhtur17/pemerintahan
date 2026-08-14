@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    <div class="mb-4">

        <div class="text-muted small mb-2">

            Informasi Publik
            /
            Informasi Dikecualikan
            /
            {{ $jenisInformasiDikecualikan->nama_jenis }}
            /
            Detail

        </div>

        <h4 class="fw-bold">
            Detail Data Informasi
        </h4>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <table class="table align-middle">

                <tr>

                    <th style="width:250px;">
                        Jenis Informasi
                    </th>

                    <td>
                        {{ $jenisInformasiDikecualikan->nama_jenis }}
                    </td>

                </tr>


                <tr>

                    <th>
                        Tahun
                    </th>

                    <td>
                        {{ $dataInformasiDikecualikan->tahun }}
                    </td>

                </tr>


                <tr>

                    <th>
                        Nama SKPD/Badan Publik
                    </th>

                    <td>
                        {{ $dataInformasiDikecualikan->nama_skpd }}
                    </td>

                </tr>


                <tr>

                    <th>
                        Tanggal Upload
                    </th>

                    <td>

                        {{
                            $dataInformasiDikecualikan
                                ->tanggal_upload
                                ->format('d-m-Y')
                        }}

                    </td>

                </tr>


                <tr>

                    <th>
                        Tipe Dokumen
                    </th>

                    <td>

                        @if(
                        $dataInformasiDikecualikan->tipe_dokumen === 'file'
                        )

                        <span class="badge bg-danger">
                            PDF
                        </span>

                        @else

                        <span class="badge bg-primary">
                            Link
                        </span>

                        @endif

                    </td>

                </tr>


                <tr>

                    <th>
                        Dokumen
                    </th>

                    <td>

                        @if($dataInformasiDikecualikan->dokumen_url)

                        <a href="{{ $dataInformasiDikecualikan->dokumen_url }}"
                            target="_blank"
                            class="btn btn-sm btn-primary">

                            <i class="bi bi-box-arrow-up-right me-1"></i>

                            Buka Dokumen

                        </a>

                        @else

                        -

                        @endif

                    </td>

                </tr>


                <tr>

                    <th>
                        Keterangan
                    </th>

                    <td>
                        {{ $dataInformasiDikecualikan->keterangan ?: '-' }}
                    </td>

                </tr>

            </table>


            <div class="d-flex gap-2 mt-4">

                <a href="{{ route(
                    'admin.informasi-publik.informasi-dikecualikan.data.edit',
                    [
                        $jenisInformasiDikecualikan,
                        $dataInformasiDikecualikan
                    ]
                ) }}"
                    class="btn btn-warning">

                    <i class="bi bi-pencil me-1"></i>

                    Edit

                </a>


                <a href="{{ route(
                    'admin.informasi-publik.informasi-dikecualikan.data.index',
                    $jenisInformasiDikecualikan
                ) }}"
                    class="btn btn-light border">

                    Kembali

                </a>

            </div>

        </div>

    </div>

</div>

@endsection