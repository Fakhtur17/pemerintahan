@extends('admin.layouts.app')

@section('title', 'Tambah LHKPN')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="mb-4">

        <h3 class="fw-bold mb-1">
            Tambah LHKPN
        </h3>

        <p class="text-muted mb-0">
            Tambahkan data Laporan Harta Kekayaan Penyelenggara Negara.
        </p>

    </div>


    {{-- CARD --}}
    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.profil.lhkpn.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf


                {{-- TAHUN --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Tahun
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        type="number"
                        name="tahun"
                        class="form-control @error('tahun') is-invalid @enderror"
                        value="{{ old('tahun') }}"
                        placeholder="Contoh: 2026"
                        min="1900"
                        max="2100">

                    @error('tahun')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- NAMA SKPD --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama SKPD/Badan Publik
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="nama_skpd"
                        class="form-control @error('nama_skpd') is-invalid @enderror"
                        value="{{ old('nama_skpd') }}"
                        placeholder="Contoh: BAGIAN UMUM">

                    @error('nama_skpd')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- TANGGAL --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Tanggal Upload
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        type="date"
                        name="tanggal_upload"
                        class="form-control @error('tanggal_upload') is-invalid @enderror"
                        value="{{ old('tanggal_upload') }}">

                    @error('tanggal_upload')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- JENIS INFORMASI --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Jenis Informasi
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="PDF"
                        readonly>

                    <small class="text-muted">
                        Jenis informasi otomatis berupa PDF.
                    </small>

                </div>


                {{-- KETERANGAN --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Keterangan
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="keterangan"
                        class="form-control @error('keterangan') is-invalid @enderror"
                        value="{{ old('keterangan') }}"
                        placeholder="Contoh: LHKPN BUPATI BREBES 2026">

                    @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- PDF --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        File PDF
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        type="file"
                        name="file_pdf"
                        class="form-control @error('file_pdf') is-invalid @enderror"
                        accept=".pdf,application/pdf">

                    <small class="text-muted">
                        Format PDF, maksimal 10 MB.
                    </small>

                    @error('file_pdf')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">

                    <a
                        href="{{ route('admin.profil.lhkpn.index') }}"
                        class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i>
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary">
                        <i class="fas fa-save me-1"></i>
                        Simpan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection