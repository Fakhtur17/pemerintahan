@extends('admin.layouts.app')

@section('title', 'Tambah SK PPID Pelaksana')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h4 class="mb-1">
            Tambah SK PPID Pelaksana
        </h4>

        <p class="text-muted mb-0">
            Tambahkan dokumen Surat Keputusan PPID Pelaksana.
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.ppid.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf


                {{-- JUDUL --}}

                <div class="mb-3">

                    <label class="form-label">
                        Judul
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul', 'SK PPID Pelaksana') }}"
                        required>

                    @error('judul')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- DESKRIPSI --}}

                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea
                        name="deskripsi"
                        rows="4"
                        class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- PDF --}}

                <div class="mb-3">

                    <label class="form-label">
                        File PDF
                    </label>

                    <input
                        type="file"
                        name="file_pdf"
                        accept=".pdf,application/pdf"
                        class="form-control @error('file_pdf') is-invalid @enderror"
                        required>

                    <div class="form-text">
                        Format PDF. Maksimal 10 MB.
                    </div>

                    @error('file_pdf')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- STATUS --}}

                <div class="form-check mb-4">

                    <input
                        type="checkbox"
                        name="aktif"
                        value="1"
                        class="form-check-input"
                        id="aktif"
                        checked>

                    <label
                        class="form-check-label"
                        for="aktif">
                        Aktif
                    </label>

                </div>


                {{-- BUTTON --}}

                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-save"></i>

                        Simpan

                    </button>


                    <a
                        href="{{ route('admin.ppid.index') }}"
                        class="btn btn-secondary">

                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection