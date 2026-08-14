@extends('admin.layouts.app')

@section('title', 'Edit SOP PPID')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h4 class="mb-1">
                Edit SOP PPID
            </h4>

            <p class="text-muted mb-0">
                Perbarui informasi atau file SOP PPID.
            </p>

        </div>

        <a
            href="{{ route('admin.layanan.sop-ppid.index') }}"
            class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>

            Kembali

        </a>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.layanan.sop-ppid.update', $sopPpid) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')


                {{-- JUDUL --}}

                <div class="mb-3">

                    <label class="form-label">
                        Judul SOP
                    </label>

                    <input
                        type="text"
                        name="judul"
                        value="{{ old('judul', $sopPpid->judul) }}"
                        class="form-control @error('judul') is-invalid @enderror">

                    @error('judul')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- FILE LAMA --}}

                <div class="mb-3">

                    <label class="form-label">
                        File Saat Ini
                    </label>

                    <div>

                        <a
                            href="{{ asset('storage/' . $sopPpid->file_pdf) }}"
                            target="_blank"
                            class="btn btn-outline-danger">

                            <i class="bi bi-file-earmark-pdf"></i>

                            Lihat PDF

                        </a>

                    </div>

                </div>


                {{-- FILE BARU --}}

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
                        Kosongkan jika tidak ingin mengganti file.
                    </small>

                    @error('file_pdf')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- STATUS --}}

                <div class="mb-4">

                    <div class="form-check">

                        <input
                            type="checkbox"
                            name="is_active"
                            value="1"
                            class="form-check-input"
                            id="is_active"
                            {{ $sopPpid->is_active ? 'checked' : '' }}>

                        <label
                            class="form-check-label"
                            for="is_active">

                            Jadikan SOP aktif

                        </label>

                    </div>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-save"></i>

                    Simpan Perubahan

                </button>

            </form>

        </div>

    </div>

</div>

@endsection