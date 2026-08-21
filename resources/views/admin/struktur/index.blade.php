@extends('admin.layouts.app')

@section('title', 'Struktur')

@section('content')

<div class="container-fluid">

    {{-- =========================================================
        HEADER
    ========================================================== --}}

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="mb-1">
                Struktur
            </h4>

            <p class="text-muted mb-0">
                Kelola informasi dan gambar struktur Kecamatan.
            </p>
        </div>

        @if($struktur)

        <a
            href="{{ route('admin.struktur.edit', $struktur->id) }}"
            class="btn btn-primary">

            <i class="bi bi-pencil-square me-1"></i>
            Edit Struktur

        </a>

        @else

        <a
            href="{{ route('admin.struktur.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-lg me-1"></i>
            Tambah Struktur

        </a>

        @endif

    </div>


    {{-- =========================================================
        SUCCESS MESSAGE
    ========================================================== --}}

    @if(session('success'))

    <div
        class="alert alert-success alert-dismissible fade show"
        role="alert">

        <i class="bi bi-check-circle me-1"></i>

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif


    {{-- =========================================================
        DATA STRUKTUR
    ========================================================== --}}

    @if($struktur)

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            {{-- JUDUL --}}
            <div class="row mb-4">

                <div class="col-md-3 fw-semibold">
                    Judul
                </div>

                <div class="col-md-9">
                    {{ $struktur->judul }}
                </div>

            </div>


            {{-- DESKRIPSI --}}
            <div class="row mb-4">

                <div class="col-md-3 fw-semibold">
                    Deskripsi
                </div>

                <div class="col-md-9">

                    @if($struktur->deskripsi)

                    {!! nl2br(e($struktur->deskripsi)) !!}

                    @else

                    <span class="text-muted">
                        Tidak ada deskripsi.
                    </span>

                    @endif

                </div>

            </div>


            <hr>


            {{-- GAMBAR --}}
            <div class="mb-3">

                <h6 class="fw-semibold mb-0">
                    Gambar Struktur
                </h6>

            </div>


            @if($struktur->gambar)

            <div class="struktur-preview">

                <a
                    href="{{ asset('storage/' . $struktur->gambar) }}"
                    target="_blank">

                    <img
                        src="{{ asset('storage/' . $struktur->gambar) }}"
                        alt="{{ $struktur->judul }}">

                </a>

            </div>

            <div class="mt-3 text-end">

                <a
                    href="{{ asset('storage/' . $struktur->gambar) }}"
                    target="_blank"
                    class="btn btn-outline-primary btn-sm">

                    <i class="bi bi-eye me-1"></i>
                    Lihat Gambar

                </a>

            </div>

            @else

            <div class="alert alert-warning mb-0">

                <i class="bi bi-exclamation-triangle me-1"></i>

                Gambar struktur belum tersedia.

            </div>

            @endif

        </div>

    </div>


    @else

    {{-- =====================================================
            DATA BELUM ADA
        ====================================================== --}}

    <div class="card border-0 shadow-sm">

        <div class="card-body text-center py-5">

            <div class="mb-3">

                <i class="bi bi-diagram-3 fs-1 text-muted"></i>

            </div>

            <h5 class="mb-2">
                Struktur Belum Tersedia
            </h5>

            <p class="text-muted mb-4">
                Data struktur Kecamatan belum ditambahkan.
            </p>

            <a
                href="{{ route('admin.struktur.create') }}"
                class="btn btn-primary">

                <i class="bi bi-plus-lg me-1"></i>
                Tambahkan Struktur

            </a>

        </div>

    </div>

    @endif

</div>


{{-- =========================================================
    STYLE
========================================================= --}}

<style>
    .struktur-preview {
        background: #f8f9fa;
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        overflow: hidden;
    }

    .struktur-preview img {
        display: block;
        width: 100%;
        height: auto;
        max-height: 700px;
        object-fit: contain;
        margin: 0 auto;
        border-radius: 8px;
        transition: .3s ease;
    }

    .struktur-preview a:hover img {
        transform: scale(1.01);
    }
</style>

@endsection