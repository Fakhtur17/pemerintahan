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
                Detail Jenis

            </div>

            <h4 class="fw-bold mb-1">
                Detail Jenis Informasi
            </h4>

            <p class="text-muted mb-0">
                Informasi detail mengenai jenis informasi berkala.
            </p>

        </div>


        <div class="d-flex gap-2">

            <a href="{{ route(
                'admin.informasi-publik.informasi-berkala.jenis.edit',
                $jenisInformasiBerkala
            ) }}"
                class="btn btn-warning">

                <i class="bi bi-pencil me-1"></i>

                Edit

            </a>

            <a href="{{ route(
                'admin.informasi-publik.informasi-berkala.index'
            ) }}"
                class="btn btn-light border">

                <i class="bi bi-arrow-left me-1"></i>

                Kembali

            </a>

        </div>

    </div>


    {{-- DETAIL --}}

    <div class="row g-4">

        {{-- INFORMASI UTAMA --}}

        <div class="col-lg-8">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white border-0 py-3">

                    <h6 class="fw-bold mb-0">
                        Informasi Jenis
                    </h6>

                </div>

                <div class="card-body">

                    <div class="mb-4">

                        <label class="text-muted small d-block mb-1">
                            Nama Jenis Informasi
                        </label>

                        <div class="fs-5 fw-semibold">
                            {{ $jenisInformasiBerkala->nama_jenis }}
                        </div>

                    </div>


                    <div class="mb-4">

                        <label class="text-muted small d-block mb-1">
                            Deskripsi
                        </label>

                        <div>

                            @if(
                            $jenisInformasiBerkala->deskripsi
                            )

                            {!! nl2br(
                            e($jenisInformasiBerkala->deskripsi)
                            ) !!}

                            @else

                            <span class="text-muted">
                                Tidak ada deskripsi.
                            </span>

                            @endif

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="text-muted small d-block mb-1">
                                Urutan
                            </label>

                            <span class="badge bg-light
                                         text-dark border">

                                {{ $jenisInformasiBerkala->urutan }}

                            </span>

                        </div>


                        <div class="col-md-6 mb-3">

                            <label class="text-muted small d-block mb-1">
                                Status
                            </label>

                            @if($jenisInformasiBerkala->aktif)

                            <span class="badge bg-success">
                                Aktif
                            </span>

                            @else

                            <span class="badge bg-secondary">
                                Nonaktif
                            </span>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- STATISTIK --}}

        <div class="col-lg-4">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white border-0 py-3">

                    <h6 class="fw-bold mb-0">
                        Statistik
                    </h6>

                </div>

                <div class="card-body">

                    <div class="d-flex
                                justify-content-between
                                align-items-center
                                mb-3">

                        <span class="text-muted">
                            Jumlah Data
                        </span>

                        <span class="badge
                                     bg-primary-subtle
                                     text-primary
                                     rounded-pill px-3 py-2">

                            {{ $jenisInformasiBerkala->data_count }}
                            Data

                        </span>

                    </div>


                    <div class="d-flex
                                justify-content-between
                                align-items-center">

                        <span class="text-muted">
                            Status
                        </span>

                        @if($jenisInformasiBerkala->aktif)

                        <span class="text-success fw-semibold">
                            Aktif
                        </span>

                        @else

                        <span class="text-secondary fw-semibold">
                            Nonaktif
                        </span>

                        @endif

                    </div>

                </div>

            </div>


            {{-- KELOLA DATA --}}

            <div class="card border-0 shadow-sm mt-4">

                <div class="card-body">

                    <h6 class="fw-bold">
                        Kelola Data
                    </h6>

                    <p class="text-muted small">
                        Lihat dan kelola seluruh data yang
                        termasuk dalam jenis informasi ini.
                    </p>

                    <a href="{{ route(
                        'admin.informasi-publik.informasi-berkala.data.index',
                        $jenisInformasiBerkala
                    ) }}"
                        class="btn btn-primary w-100">

                        <i class="bi bi-folder2-open me-1"></i>

                        Kelola Data Informasi

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection