@extends('admin.layouts.app')

@section('title', 'Tambah Tupoksi PPID')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}

    <div class="d-flex align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">
                Tambah Tupoksi PPID
            </h3>

            <p class="text-muted mb-0">
                Tambahkan dokumen Tupoksi PPID dalam format PDF.
            </p>

        </div>

    </div>


    {{-- ERROR --}}

    @if($errors->any())

        <div class="alert alert-danger">

            <strong>
                Terdapat kesalahan:
            </strong>

            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <form
                action="{{ route('admin.profil.tupoksi-ppid.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                {{-- JUDUL --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Judul Tupoksi
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control"
                        value="{{ old('judul') }}"
                        placeholder="Contoh: Tugas Pokok dan Fungsi PPID"
                        required
                    >

                </div>


                {{-- PDF --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Dokumen PDF
                    </label>

                    <input
                        type="file"
                        name="file_pdf"
                        class="form-control"
                        accept=".pdf,application/pdf"
                        required
                    >

                    <div class="form-text">
                        Format PDF. Maksimal ukuran file 20 MB.
                    </div>

                </div>


                {{-- BUTTON --}}

                <div class="d-flex gap-2">

                    <a
                        href="{{ route('admin.profil.tupoksi-ppid.index') }}"
                        class="btn btn-secondary"
                    >
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >

                        <i class="bi bi-save me-1"></i>

                        Simpan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection