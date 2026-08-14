@extends('admin.layouts.app')

@section('title', 'Edit Regulasi PPID')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h4 class="mb-1">
            Edit Regulasi
        </h4>

        <p class="text-muted mb-0">
            Perbarui informasi regulasi PPID.
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.regulasi.update', $regulasi->id) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')


                {{-- JUDUL --}}

                <div class="mb-3">

                    <label class="form-label">

                        Judul Regulasi

                        <span class="text-danger">
                            *
                        </span>

                    </label>

                    <input
                        type="text"
                        name="judul"
                        value="{{ old('judul', $regulasi->judul) }}"
                        class="form-control @error('judul') is-invalid @enderror"
                        required>

                    @error('judul')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- PDF LAMA --}}

                <div class="mb-3">

                    <label class="form-label">
                        File PDF Saat Ini
                    </label>

                    <div>

                        <a
                            href="{{ asset('storage/' . $regulasi->file_pdf) }}"
                            target="_blank"
                            class="btn btn-outline-danger">

                            <i class="fas fa-file-pdf me-1"></i>

                            Lihat PDF

                        </a>

                    </div>

                </div>


                {{-- PDF BARU --}}

                <div class="mb-3">

                    <label class="form-label">
                        Ganti File PDF
                    </label>

                    <input
                        type="file"
                        name="file_pdf"
                        accept="application/pdf"
                        class="form-control @error('file_pdf') is-invalid @enderror">

                    <small class="text-muted">

                        Kosongkan jika tidak ingin mengganti PDF.

                        Format PDF, maksimal 20 MB.

                    </small>

                    @error('file_pdf')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- URUTAN --}}

                <div class="mb-3">

                    <label class="form-label">
                        Urutan
                    </label>

                    <input
                        type="number"
                        name="urutan"
                        value="{{ old('urutan', $regulasi->urutan) }}"
                        class="form-control @error('urutan') is-invalid @enderror"
                        min="0">

                    @error('urutan')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- STATUS --}}

                <div class="mb-4">

                    <div class="form-check form-switch">

                        <input
                            type="hidden"
                            name="status"
                            value="0">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="status"
                            value="1"
                            id="status"
                            {{ $regulasi->status ? 'checked' : '' }}>

                        <label
                            class="form-check-label"
                            for="status">
                            Regulasi aktif
                        </label>

                    </div>

                </div>


                {{-- BUTTON --}}

                <div class="d-flex gap-2">

                    <a
                        href="{{ route('admin.regulasi.index') }}"
                        class="btn btn-secondary">
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary">

                        <i class="fas fa-save me-1"></i>

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection