@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', 'LHKPN Dinas | Niotech')
@section('meta_description', 'Laporan Harta Kekayaan Penyelenggara Negara Kabupaten Brebes')

@section('content')

{{-- =========================================================
BREADCRUMB
========================================================= --}}

<div class="breadcumb-section fix">
    <div
        class="breadcumb-container-wrapper"
        data-bg-src="{{ asset('assets/images/breadcumb/breadcumb.jpg') }}">
        <div class="container">
            <div class="breadcumb-wrapper">

                <h1 class="page-heading">
                    LHKPN Dinas
                </h1>

            </div>
        </div>
    </div>
</div>


{{-- =========================================================
TABEL LHKPN
========================================================= --}}

<section class="section-padding lhkpn-section">
    <div class="container-fluid px-4 px-xl-5">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="table-responsive">

                    <table
                        id="lhkpnTable"
                        class="table table-bordered table-striped align-middle mb-0"
                        style="width: 100%;">

                        <thead>
                            <tr>
                                <th style="width: 70px;">
                                    No
                                </th>

                                <th style="width: 100px;">
                                    Tahun
                                </th>

                                <th>
                                    Nama SKPD/Badan Publik
                                </th>

                                <th style="width: 170px;">
                                    Tanggal Upload
                                </th>

                                <th style="width: 150px;">
                                    Jenis informasi
                                </th>

                                <th>
                                    Keterangan
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($lhkpn as $item)

                            <tr>

                                <td></td>

                                <td>
                                    {{ $item->tahun }}
                                </td>

                                <td>
                                    {{ $item->nama_skpd }}
                                </td>

                                <td>
                                    {{ $item->tanggal_upload?->format('d-m-Y') }}
                                </td>

                                <td class="text-center">

                                    @if ($item->file_pdf)

                                    <a
                                        href="{{ asset('storage/' . $item->file_pdf) }}"
                                        target="_blank"
                                        class="btn btn-success btn-sm">
                                        <i class="fa-solid fa-download me-1"></i>
                                        Unduh
                                    </a>

                                    @endif

                                </td>

                                <td>
                                    {{ $item->keterangan }}
                                </td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection


@push('styles')

<link
    rel="stylesheet"
    href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">

<style>
    .lhkpn-section {
        padding-top: 15px !important;
        padding-bottom: 60px;
    }

    #lhkpnTable thead th {
        background: #ffffff;
        color: #212529;
        font-weight: 600;
        vertical-align: middle;
    }

    #lhkpnTable tbody td {
        vertical-align: middle;
    }

    #lhkpnTable .btn-success {
        background-color: #198754;
        border-color: #198754;
        padding: 6px 12px;
        font-size: 13px;
    }

    #lhkpnTable .btn-success:hover {
        background-color: #157347;
        border-color: #146c43;
    }

    .dataTables_wrapper {
        padding-top: 5px;
    }

    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter {
        margin-bottom: 15px;
    }

    .dataTables_wrapper .dataTables_info {
        padding-top: 15px;
    }

    .dataTables_wrapper .dataTables_paginate {
        padding-top: 10px;
    }
</style>

@endpush


@push('scripts')

<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {

        let table = $('#lhkpnTable').DataTable({

            pageLength: 10,

            lengthMenu: [
                [10, 25, 50, 100],
                [10, 25, 50, 100]
            ],

            language: {
                lengthMenu: "Show _MENU_ entries",

                search: "Search:",

                info: "Showing _START_ to _END_ of _TOTAL_ entries",

                infoEmpty: "Showing 0 to 0 of 0 entries",

                zeroRecords: "Tidak ada data yang ditemukan",

                emptyTable: "Belum ada data LHKPN",

                paginate: {
                    previous: "Previous",
                    next: "Next"
                }
            },

            columnDefs: [{
                targets: 0,
                searchable: false,
                orderable: false
            }],

            order: [
                [1, 'desc'],
                [3, 'desc']
            ]

        });


        table.on(
            'order.dt search.dt draw.dt',
            function() {

                let i = 1;

                table
                    .cells(null, 0, {
                        search: 'applied',
                        order: 'applied'
                    })
                    .every(function() {

                        this.data(i++);

                    });

            }
        ).draw();

    });
</script>

@endpush