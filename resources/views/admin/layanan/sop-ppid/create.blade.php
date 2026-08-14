@extends('admin.layouts.app')

@section('title', 'Tambah SOP PPID')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h4 class="mb-1">
                Tambah SOP PPID
            </h4>

            <p class="text-muted mb-0">
                Tambahkan dokumen SOP PPID baru.
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
                action="{{ route('admin.layanan.sop-ppid.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf


                {{-- JUDUL --}}

                <div class="mb-3">

                    <label class="form-label">
                        Judul SOP
                    </label>

                    <input
                        type="text"
                        name="judul"
                        value="{{ old('judul') }}"
                        class="form-control @error('judul') is-invalid @enderror"
                        placeholder="Contoh: SOP Mendapatkan Informasi Publik">

                    @error('judul')

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
                        accept="application/pdf"
                        class="form-control @error('file_pdf') is-invalid @enderror">

                    <small class="text-muted">
                        Format PDF, maksimal 20 MB.
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
                            checked>

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

                    Simpan SOP

                </button>

            </form>

        </div>

    </div>

</div>

@endsection