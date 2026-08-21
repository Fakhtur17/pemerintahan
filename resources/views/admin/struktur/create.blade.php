@extends('admin.layouts.app')

@section('title', 'Tambah Struktur')

@section('content')

<div class="container-fluid">

    <div class="mb-4">
        <h4 class="mb-1">Tambah Struktur</h4>
        <p class="text-muted mb-0">
            Tambahkan informasi dan gambar struktur Kecamatan.
        </p>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.struktur.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Judul
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control"
                        value="{{ old('judul') }}"
                        placeholder="Contoh: Struktur Organisasi Kecamatan"
                        required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Deskripsi
                    </label>

                    <textarea
                        name="deskripsi"
                        rows="5"
                        class="form-control"
                        placeholder="Masukkan deskripsi struktur...">{{ old('deskripsi') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Gambar Struktur
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control"
                        accept="image/jpeg,image/png,image/webp"
                        required>

                    <div class="form-text">
                        Format JPG, JPEG, PNG, atau WEBP.
                        Maksimal 5 MB.
                    </div>
                </div>

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
                        Simpan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection