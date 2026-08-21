```blade
@extends('layouts.admin')

@section('title', 'Edit SK PPID Pelaksana')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h4 class="mb-1">
            Edit SK PPID Pelaksana
        </h4>

        <p class="text-muted mb-0">
            Perbarui informasi dan dokumen SK PPID Pelaksana.
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.ppid.update', $ppid) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')


                {{-- JUDUL --}}

                <div class="mb-3">

                    <label class="form-label">
                        Judul
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul', $ppid->judul) }}"
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
                        class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $ppid->deskripsi) }}</textarea>

                    @error('deskripsi')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- FILE LAMA --}}

                <div class="mb-3">

                    <label class="form-label d-block">
                        File Saat Ini
                    </label>

                    <a
                        href="{{ $ppid->file_url }}"
                        target="_blank"
                        class="btn btn-outline-danger btn-sm">

                        <i class="bi bi-file-earmark-pdf"></i>

                        Lihat PDF

                    </a>

                </div>


                {{-- PDF BARU --}}

                <div class="mb-3">

                    <label class="form-label">
                        Ganti File PDF
                    </label>

                    <input
                        type="file"
                        name="file_pdf"
                        accept=".pdf,application/pdf"
                        class="form-control @error('file_pdf') is-invalid @enderror">

                    <div class="form-text">
                        Kosongkan jika tidak ingin mengganti file.
                        Maksimal 10 MB.
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
                        {{ $ppid->aktif ? 'checked' : '' }}>

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

                        Simpan Perubahan

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
```