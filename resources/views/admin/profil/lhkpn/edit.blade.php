@extends('admin.layouts.app')

@section('title', 'Edit LHKPN')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="mb-4">

        <h3 class="fw-bold mb-1">
            Edit LHKPN
        </h3>

        <p class="text-muted mb-0">
            Perbarui data Laporan Harta Kekayaan Penyelenggara Negara.
        </p>

    </div>


    {{-- CARD --}}
    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.profil.lhkpn.update', $lhkpn->id) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')


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
                        value="{{ old('tahun', $lhkpn->tahun) }}"
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
                        value="{{ old('nama_skpd', $lhkpn->nama_skpd) }}">

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
                        value="{{ old(
                            'tanggal_upload',
                            $lhkpn->tanggal_upload?->format('Y-m-d')
                        ) }}">

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
                        value="{{ old('keterangan', $lhkpn->keterangan) }}">

                    @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- FILE LAMA --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        File PDF Saat Ini
                    </label>

                    <div>

                        @if($lhkpn->file_pdf)

                        <a
                            href="{{ asset('storage/' . $lhkpn->file_pdf) }}"
                            target="_blank"
                            class="btn btn-outline-danger btn-sm">
                            <i class="fas fa-file-pdf me-1"></i>
                            Lihat PDF
                        </a>

                        @else

                        <span class="text-muted">
                            Tidak ada file.
                        </span>

                        @endif

                    </div>

                </div>


                {{-- FILE BARU --}}
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
                        Kosongkan jika tidak ingin mengganti file.
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
                        Update
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection