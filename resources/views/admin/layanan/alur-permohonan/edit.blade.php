@extends('admin.layouts.app')

@section('title', 'Edit Alur Permohonan')

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
            Edit Alur Permohonan
        </h4>

        <p class="text-muted mb-0">
            Perbarui dokumen Alur Permohonan Informasi Publik.
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <form
                action="{{ route(
                    'admin.layanan.alur-permohonan.update',
                    $alurPermohonan
                ) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')


                {{-- Judul --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Judul
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul', $alurPermohonan->judul) }}"
                        required>

                    @error('judul')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- PDF lama --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        File PDF Saat Ini
                    </label>

                    <div class="border rounded p-3">

                        <i class="bi bi-file-earmark-pdf text-danger me-2"></i>

                        {{ basename($alurPermohonan->file_pdf) }}

                        <a
                            href="{{ asset('storage/' . $alurPermohonan->file_pdf) }}"
                            target="_blank"
                            class="btn btn-sm btn-outline-primary float-end">
                            Lihat PDF
                        </a>

                    </div>

                </div>


                {{-- PDF baru --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Ganti File PDF
                    </label>

                    <input
                        type="file"
                        name="file_pdf"
                        class="form-control @error('file_pdf') is-invalid @enderror"
                        accept=".pdf,application/pdf">

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti PDF.
                        Maksimal 20 MB.
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
                            {{ $alurPermohonan->is_active ? 'checked' : '' }}>

                        <label
                            class="form-check-label"
                            for="is_active">
                            Aktifkan dokumen
                        </label>

                    </div>

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
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection