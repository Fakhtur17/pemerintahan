@extends('admin.layouts.app')

@section('title', 'Detail Permohonan Informasi')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="mb-1">
                Detail Permohonan Informasi
            </h4>

            <p class="text-muted mb-0">
                Detail data permohonan informasi dari masyarakat.
            </p>
        </div>

        <div class="d-flex gap-2">

            {{-- KEMBALI --}}
            <a
                href="{{ route('admin.permohonan-informasi.index') }}"
                class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i>
                Kembali
            </a>

            {{-- EDIT --}}
            <a
                href="{{ route(
                    'admin.permohonan-informasi.edit',
                    $permohonanInformasi
                ) }}"
                class="btn btn-warning">
                <i class="fas fa-edit me-1"></i>
                Edit
            </a>

        </div>

    </div>


    {{-- SUCCESS --}}
    @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show">

        <i class="fas fa-check-circle me-2"></i>

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"></button>

    </div>

    @endif


    <div class="row g-4">

        {{-- DATA PEMOHON --}}
        <div class="col-lg-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-header bg-primary text-white">

                    <h5 class="mb-0">

                        <i class="fas fa-user me-2"></i>

                        Data Pemohon

                    </h5>

                </div>


                <div class="card-body">

                    {{-- NAMA --}}
                    <div class="mb-3">

                        <label class="text-muted small">
                            Nama
                        </label>

                        <div class="fw-semibold">
                            {{ $permohonanInformasi->nama }}
                        </div>

                    </div>


                    {{-- NIK --}}
                    <div class="mb-3">

                        <label class="text-muted small">
                            NIK
                        </label>

                        <div class="fw-semibold">
                            {{ $permohonanInformasi->nik }}
                        </div>

                    </div>


                    {{-- EMAIL --}}
                    <div class="mb-3">

                        <label class="text-muted small">
                            Email
                        </label>

                        <div class="fw-semibold">
                            {{ $permohonanInformasi->email }}
                        </div>

                    </div>


                    {{-- NO HP --}}
                    <div class="mb-3">

                        <label class="text-muted small">
                            No HP
                        </label>

                        <div class="fw-semibold">
                            {{ $permohonanInformasi->no_hp }}
                        </div>

                    </div>


                    {{-- ALAMAT --}}
                    <div class="mb-0">

                        <label class="text-muted small">
                            Alamat
                        </label>

                        <div class="fw-semibold">
                            {{ $permohonanInformasi->alamat }}
                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- STATUS --}}
        <div class="col-lg-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-header bg-info text-white">

                    <h5 class="mb-0">

                        <i class="fas fa-info-circle me-2"></i>

                        Status Permohonan

                    </h5>

                </div>


                <div class="card-body">

                    {{-- STATUS --}}
                    <div class="mb-4">

                        <label class="text-muted small d-block mb-2">
                            Status
                        </label>


                        @if($permohonanInformasi->status === 'baru')

                        <span class="badge bg-primary fs-6">
                            Baru
                        </span>

                        @elseif($permohonanInformasi->status === 'diproses')

                        <span class="badge bg-warning text-dark fs-6">
                            Diproses
                        </span>

                        @elseif($permohonanInformasi->status === 'selesai')

                        <span class="badge bg-success fs-6">
                            Selesai
                        </span>

                        @elseif($permohonanInformasi->status === 'ditolak')

                        <span class="badge bg-danger fs-6">
                            Ditolak
                        </span>

                        @else

                        <span class="badge bg-secondary fs-6">
                            {{ ucfirst($permohonanInformasi->status) }}
                        </span>

                        @endif

                    </div>


                    {{-- TANGGAL --}}
                    <div class="mb-3">

                        <label class="text-muted small">
                            Tanggal Permohonan
                        </label>

                        <div class="fw-semibold">

                            @if($permohonanInformasi->created_at)

                            {{ $permohonanInformasi->created_at->format('d F Y, H:i') }}
                            WIB

                            @else

                            -

                            @endif

                        </div>

                    </div>


                    {{-- UPDATE --}}
                    <div class="mb-0">

                        <label class="text-muted small">
                            Terakhir Diperbarui
                        </label>

                        <div class="fw-semibold">

                            @if($permohonanInformasi->updated_at)

                            {{ $permohonanInformasi->updated_at->format('d F Y, H:i') }}
                            WIB

                            @else

                            -

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- INFORMASI YANG DIMINTA --}}
        <div class="col-12">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white">

                    <h5 class="mb-0">

                        <i class="fas fa-file-alt me-2"></i>

                        Informasi yang Diminta

                    </h5>

                </div>


                <div class="card-body">

                    <div
                        class="p-3 bg-light rounded"
                        style="white-space: pre-line;">
                        {{ $permohonanInformasi->informasi_diminta }}
                    </div>

                </div>

            </div>

        </div>


        {{-- TUJUAN PERMOHONAN --}}
        <div class="col-12">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white">

                    <h5 class="mb-0">

                        <i class="fas fa-bullseye me-2"></i>

                        Tujuan Permohonan Informasi

                    </h5>

                </div>


                <div class="card-body">

                    <div
                        class="p-3 bg-light rounded"
                        style="white-space: pre-line;">
                        {{ $permohonanInformasi->tujuan }}
                    </div>

                </div>

            </div>

        </div>


        {{-- CATATAN --}}
        @if($permohonanInformasi->catatan)

        <div class="col-12">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-warning">

                    <h5 class="mb-0">

                        <i class="fas fa-sticky-note me-2"></i>

                        Catatan Admin

                    </h5>

                </div>


                <div class="card-body">

                    <div
                        class="p-3 bg-light rounded"
                        style="white-space: pre-line;">
                        {{ $permohonanInformasi->catatan }}
                    </div>

                </div>

            </div>

        </div>

        @endif


        {{-- ACTION --}}
        <div class="col-12">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h6 class="mb-1">
                                Kelola Permohonan
                            </h6>

                            <small class="text-muted">
                                Ubah status atau hapus data permohonan.
                            </small>

                        </div>


                        <div class="d-flex gap-2">

                            {{-- EDIT --}}
                            <a
                                href="{{ route(
                                    'admin.permohonan-informasi.edit',
                                    $permohonanInformasi
                                ) }}"
                                class="btn btn-warning">
                                <i class="fas fa-edit me-1"></i>
                                Edit Permohonan
                            </a>


                            {{-- DELETE --}}
                            <form
                                action="{{ route(
                                    'admin.permohonan-informasi.destroy',
                                    $permohonanInformasi
                                ) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus permohonan ini?')">

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger">
                                    <i class="fas fa-trash me-1"></i>
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection