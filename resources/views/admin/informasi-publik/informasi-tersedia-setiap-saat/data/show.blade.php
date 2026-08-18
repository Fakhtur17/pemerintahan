@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}

    <div class="d-flex justify-content-between
                align-items-start mb-4">

        <div>

            <div class="text-muted small mb-2">

                Informasi Publik
                <span class="mx-1">/</span>
                Informasi Berkala
                <span class="mx-1">/</span>
                {{ $jenisInformasiBerkala->nama_jenis }}
                <span class="mx-1">/</span>
                Detail Data

            </div>

            <h4 class="fw-bold mb-1">
                Detail Data Informasi
            </h4>

            <p class="text-muted mb-0">
                Detail dokumen informasi yang tersimpan.
            </p>

        </div>


        <div class="d-flex gap-2">

            <a href="{{ route(
                'admin.informasi-publik.informasi-berkala.data.edit',
                [
                    $jenisInformasiBerkala,
                    $dataInformasiBerkala
                ]
            ) }}"
                class="btn btn-warning">

                <i class="bi bi-pencil me-1"></i>

                Edit

            </a>


            <a href="{{ route(
                'admin.informasi-publik.informasi-berkala.data.index',
                $jenisInformasiBerkala
            ) }}"
                class="btn btn-light border">

                <i class="bi bi-arrow-left me-1"></i>

                Kembali

            </a>

        </div>

    </div>


    {{-- DETAIL --}}

    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white border-0 py-3">

            <h6 class="fw-bold mb-0">
                Informasi Dokumen
            </h6>

        </div>


        <div class="card-body">

            <div class="row">

                {{-- TAHUN --}}

                <div class="col-md-6 mb-4">

                    <label class="text-muted small d-block mb-1">
                        Tahun
                    </label>

                    <div class="fw-semibold">
                        {{ $dataInformasiBerkala->tahun }}
                    </div>

                </div>


                {{-- TANGGAL --}}

                <div class="col-md-6 mb-4">

                    <label class="text-muted small d-block mb-1">
                        Tanggal Upload
                    </label>

                    <div class="fw-semibold">

                        {{
                            $dataInformasiBerkala
                                ->tanggal_upload
                                ->format('d F Y')
                        }}

                    </div>

                </div>


                {{-- SKPD --}}

                <div class="col-md-12 mb-4">

                    <label class="text-muted small d-block mb-1">
                        Nama SKPD/Badan Publik
                    </label>

                    <div class="fw-semibold">

                        {{ $dataInformasiBerkala->nama_skpd }}

                    </div>

                </div>


                {{-- JENIS --}}

                <div class="col-md-6 mb-4">

                    <label class="text-muted small d-block mb-1">
                        Jenis Informasi
                    </label>

                    <span class="badge bg-primary-subtle
                                 text-primary px-3 py-2">

                        {{ $jenisInformasiBerkala->nama_jenis }}

                    </span>

                </div>


                {{-- TIPE --}}

                <div class="col-md-6 mb-4">

                    <label class="text-muted small d-block mb-1">
                        Tipe Dokumen
                    </label>

                    @if(
                    $dataInformasiBerkala->tipe_dokumen === 'file'
                    )

                    <span class="badge bg-danger">

                        <i class="bi bi-file-earmark-pdf me-1"></i>

                        PDF

                    </span>

                    @else

                    <span class="badge bg-info text-white">

                        <i class="bi bi-link-45deg me-1"></i>

                        Link

                    </span>

                    @endif

                </div>


                {{-- DOKUMEN --}}

                <div class="col-md-12 mb-4">

                    <label class="text-muted small d-block mb-2">
                        Dokumen
                    </label>

                    @if(
                    $dataInformasiBerkala->tipe_dokumen === 'file'
                    )

                    <div class="border rounded p-3">

                        <div class="d-flex
                                        justify-content-between
                                        align-items-center">

                            <div>

                                <i class="bi bi-file-earmark-pdf
                                              fs-3 text-danger me-2">
                                </i>

                                <span class="fw-semibold">

                                    {{
                                            $dataInformasiBerkala
                                                ->nama_file
                                                ?: 'Dokumen PDF'
                                        }}

                                </span>

                            </div>


                            @if(
                            $dataInformasiBerkala
                            ->dokumen_url
                            )

                            <a href="{{
                                        $dataInformasiBerkala
                                            ->dokumen_url
                                    }}"
                                target="_blank"
                                class="btn btn-danger">

                                <i class="bi bi-download me-1"></i>

                                Buka PDF

                            </a>

                            @endif

                        </div>

                    </div>

                    @else

                    <div class="border rounded p-3">

                        <div class="mb-2">

                            <i class="bi bi-link-45deg
                                          fs-3 text-primary">
                            </i>

                        </div>

                        <div class="text-break mb-3">

                            {{ $dataInformasiBerkala->link_url }}

                        </div>


                        @if(
                        $dataInformasiBerkala->link_url
                        )

                        <a href="{{
                                    $dataInformasiBerkala->link_url
                                }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-primary">

                            <i class="bi bi-box-arrow-up-right me-1"></i>

                            Buka Link

                        </a>

                        @endif

                    </div>

                    @endif

                </div>


                {{-- KETERANGAN --}}

                <div class="col-md-12 mb-3">

                    <label class="text-muted small d-block mb-1">
                        Keterangan
                    </label>

                    <div>

                        @if(
                        $dataInformasiBerkala->keterangan
                        )

                        {!! nl2br(
                        e($dataInformasiBerkala->keterangan)
                        ) !!}

                        @else

                        <span class="text-muted">
                            Tidak ada keterangan.
                        </span>

                        @endif

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection