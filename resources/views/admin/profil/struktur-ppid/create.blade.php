@extends('admin.layouts.app')

@section('title', 'Tambah Struktur PPID')

@section('content')

{{-- HEADER --}}
<div class="d-flex align-items-center mb-4">

    <div>

        <h3 class="fw-bold mb-1">
            Tambah Struktur PPID
        </h3>

        <p class="text-muted mb-0">
            Tambahkan gambar struktur organisasi PPID.
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
            action="{{ route('admin.profil.struktur-ppid.store') }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf


            {{-- JUDUL --}}

            <div class="mb-4">

                <label class="form-label fw-semibold">
                    Judul Struktur PPID
                </label>

                <input
                    type="text"
                    name="judul"
                    class="form-control"
                    value="{{ old('judul') }}"
                    placeholder="Contoh: Struktur Organisasi PPID Kabupaten Brebes"
                    required>

            </div>


            {{-- DESKRIPSI --}}

            <div class="mb-4">

                <label class="form-label fw-semibold">
                    Penjelasan
                </label>

                <textarea
                    name="deskripsi"
                    class="form-control"
                    rows="5"
                    placeholder="Tuliskan penjelasan singkat mengenai struktur PPID...">{{ old('deskripsi') }}</textarea>

                <div class="form-text">
                    Penjelasan ini akan ditampilkan pada halaman Struktur PPID.
                </div>

            </div>


            {{-- GAMBAR --}}

            <div class="mb-4">

                <label class="form-label fw-semibold">
                    Gambar Struktur PPID
                </label>

                <input
                    type="file"
                    name="gambar"
                    class="form-control"
                    accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                    required>

                <div class="form-text">
                    Format JPG, JPEG, PNG, atau WEBP. Maksimal ukuran 10 MB.
                </div>

            </div>


            {{-- BUTTON --}}

            <div class="d-flex gap-2">

                <a
                    href="{{ route('admin.profil.struktur-ppid.index') }}"
                    class="btn btn-secondary">

                    Kembali

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

@endsection