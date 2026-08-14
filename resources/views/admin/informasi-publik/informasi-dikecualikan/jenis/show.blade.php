@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    <div class="mb-4">

        <div class="text-muted small mb-2">

            Informasi Publik
            /
            Informasi Dikecualikan
            /
            Detail

        </div>

        <h4 class="fw-bold">
            Detail Jenis Informasi
        </h4>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <table class="table align-middle">

                <tr>

                    <th style="width:250px;">
                        Nama Jenis
                    </th>

                    <td>
                        {{ $jenisInformasiDikecualikan->nama_jenis }}
                    </td>

                </tr>

                <tr>

                    <th>
                        Deskripsi
                    </th>

                    <td>
                        {{ $jenisInformasiDikecualikan->deskripsi ?: '-' }}
                    </td>

                </tr>

                <tr>

                    <th>
                        Jumlah Data
                    </th>

                    <td>

                        <span class="badge bg-primary">

                            {{ $jenisInformasiDikecualikan->data_count }}

                            Data

                        </span>

                    </td>

                </tr>

                <tr>

                    <th>
                        Status
                    </th>

                    <td>

                        @if($jenisInformasiDikecualikan->aktif)

                        <span class="badge bg-success">
                            Aktif
                        </span>

                        @else

                        <span class="badge bg-secondary">
                            Nonaktif
                        </span>

                        @endif

                    </td>

                </tr>

            </table>


            <div class="d-flex gap-2 mt-4">

                <a href="{{ route(
                    'admin.informasi-publik.informasi-dikecualikan.jenis.edit',
                    $jenisInformasiDikecualikan
                ) }}"
                    class="btn btn-warning">

                    Edit

                </a>


                <a href="{{ route(
                    'admin.informasi-publik.informasi-dikecualikan.index'
                ) }}"
                    class="btn btn-light border">

                    Kembali

                </a>

            </div>

        </div>

    </div>

</div>

@endsection