@extends('admin.layouts.app')

@section('title', 'Tambah Alur Permohonan')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <a
            href="{{ route('admin.layanan.alur-permohonan.index') }}"
            class="text-decoration-none text-muted">
            <i class="bi bi-arrow-left me-1"></i>
            Kembali
        </a>

        <h4 class="fw-bold mt-2 mb-1">
            Tambah Alur Permohonan
        </h4>

        <p class="text-muted mb-0">
            Tambahkan dokumen Alur Permohonan Informasi Publik.
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <form
                action="{{ route('admin.layanan.alur-permohonan.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf


                {{-- Judul --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Judul
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul', 'Alur Permohonan Informasi Publik') }}"
                        placeholder="Masukkan judul"
                        required>

                    @error('judul')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- PDF --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        File PDF
                    </label>

                    <input
                        type="file"
                        name="file_pdf"
                        class="form-control @error('file_pdf') is-invalid @enderror"
                        accept=".pdf,application/pdf"
                        required>

                    <small class="text-muted">
                        Format PDF, maksimal 20 MB.
                    </small>

                    @error('file_pdf')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- Status --}}

                <div class="mb-4">

                    <div class="form-check form-switch">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="is_active"
                            value="1"
                            id="is_active"
                            checked>

                        <label
                            class="form-check-label"
                            for="is_active">
                            Jadikan dokumen aktif
                        </label>

                    </div>

                    <small class="text-muted">
                        Hanya dokumen aktif yang akan ditampilkan kepada publik.
                    </small>

                </div>


                {{-- Tombol --}}

                <div class="d-flex gap-2">

                    <a
                        href="{{ route('admin.layanan.alur-permohonan.index') }}"
                        class="btn btn-light">
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>
                        Simpan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection