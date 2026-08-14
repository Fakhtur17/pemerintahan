@extends('admin.layouts.app')

@section('title', 'Tambah Regulasi PPID')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h4 class="mb-1">
            Tambah Regulasi
        </h4>

        <p class="text-muted mb-0">
            Tambahkan dokumen regulasi PPID baru.
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.regulasi.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf


                {{-- JUDUL --}}

                <div class="mb-3">

                    <label class="form-label">
                        Judul Regulasi
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="judul"
                        value="{{ old('judul') }}"
                        class="form-control @error('judul') is-invalid @enderror"
                        placeholder="Contoh: UU No. 27 Tahun 2022"
                        required>

                    @error('judul')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- FILE PDF --}}

                <div class="mb-3">

                    <label class="form-label">

                        File PDF
                        <span class="text-danger">*</span>

                    </label>

                    <input
                        type="file"
                        name="file_pdf"
                        accept="application/pdf"
                        class="form-control @error('file_pdf') is-invalid @enderror"
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


                {{-- URUTAN --}}

                <div class="mb-3">

                    <label class="form-label">
                        Urutan
                    </label>

                    <input
                        type="number"
                        name="urutan"
                        value="{{ old('urutan', 0) }}"
                        class="form-control @error('urutan') is-invalid @enderror"
                        min="0">

                    <small class="text-muted">
                        Angka lebih kecil akan ditampilkan lebih dahulu.
                    </small>

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
                            class="form-check-input"
                            type="checkbox"
                            name="status"
                            value="1"
                            id="status"
                            checked>

                        <label
                            class="form-check-label"
                            for="status">
                            Aktifkan regulasi
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
                        Simpan Regulasi
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection