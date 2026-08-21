@extends('admin.layouts.app')

@section('title', 'Edit Struktur')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="mb-4">

        <h4 class="mb-1">
            Edit Struktur
        </h4>

        <p class="text-muted mb-0">
            Perbarui informasi dan gambar struktur Kecamatan.
        </p>

    </div>


    {{-- VALIDATION --}}
    @if($errors->any())

    <div class="alert alert-danger">

        <strong>
            Terjadi kesalahan:
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

        <div class="card-body">

            <form
                action="{{ route('admin.struktur.update') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')


                {{-- JUDUL --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Judul
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control"
                        value="{{ old('judul', $struktur->judul ?? 'Struktur Kecamatan') }}"
                        placeholder="Contoh: Struktur Organisasi Kecamatan"
                        required>

                </div>


                {{-- DESKRIPSI --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Deskripsi
                    </label>

                    <textarea
                        name="deskripsi"
                        rows="5"
                        class="form-control"
                        placeholder="Masukkan deskripsi struktur...">{{ old('deskripsi', $struktur->deskripsi ?? '') }}</textarea>

                </div>


                {{-- GAMBAR --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Gambar Struktur
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control"
                        accept="image/jpeg,image/png,image/webp">

                    <div class="form-text">
                        Format JPG, JPEG, PNG, atau WEBP.
                        Maksimal ukuran 5 MB.
                    </div>

                </div>


                {{-- GAMBAR LAMA --}}
                @if(!empty($struktur?->gambar))

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Gambar Saat Ini
                    </label>

                    <div class="current-image">

                        <img
                            src="{{ asset('storage/' . $struktur->gambar) }}"
                            alt="{{ $struktur->judul }}">

                    </div>

                </div>

                @endif


                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">

                    <a
                        href="{{ route('admin.struktur.index') }}"
                        class="btn btn-secondary">

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


<style>
    .current-image {
        padding: 20px;
        background: #f8f9fa;
        border: 1px solid #eee;
        border-radius: 12px;
        text-align: center;
    }

    .current-image img {
        max-width: 100%;
        max-height: 600px;
        height: auto;
        border-radius: 8px;
    }
</style>

@endsection