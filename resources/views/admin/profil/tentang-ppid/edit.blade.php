@extends('admin.layouts.app')

@section('title', 'Edit Bagian Tentang PPID')

@section('content')

<div class="card shadow-sm border-0">

    <div class="card-header bg-white">
        <h5 class="mb-0 fw-bold">
            Edit Bagian Tentang PPID
        </h5>
    </div>

    <div class="card-body">

        <form
            action="{{ route('admin.profil.tentang-ppid.update', $data->id) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div class="mb-3">

                <label class="form-label">
                    Judul Bagian
                </label>

                <input
                    type="text"
                    name="judul"
                    class="form-control"
                    value="{{ old('judul', $data->judul) }}"
                    required>

                @error('judul')
                <div class="text-danger small mt-1">
                    {{ $message }}
                </div>
                @enderror

            </div>

            {{-- Isi --}}
            <div class="mb-3">

                <label class="form-label">
                    Isi
                </label>

                <textarea
                    name="isi"
                    class="form-control"
                    rows="12"
                    required>{{ old('isi', $data->isi) }}</textarea>

                @error('isi')
                <div class="text-danger small mt-1">
                    {{ $message }}
                </div>
                @enderror

            </div>

            {{-- Urutan --}}
            <div class="mb-3">

                <label class="form-label">
                    Urutan Tampil
                </label>

                <input
                    type="number"
                    name="urutan"
                    class="form-control"
                    value="{{ old('urutan', $data->urutan) }}"
                    min="0">

                <small class="text-muted">
                    Angka lebih kecil akan tampil lebih dulu.
                </small>

                @error('urutan')
                <div class="text-danger small mt-1">
                    {{ $message }}
                </div>
                @enderror

            </div>

            {{-- Gambar Saat Ini --}}
            @if($data->gambar)

            <div class="mb-3">

                <label class="form-label">
                    Gambar Saat Ini
                </label>

                <div>
                    <img
                        src="{{ asset('storage/' . $data->gambar) }}"
                        width="180"
                        class="img-thumbnail"
                        style="object-fit: cover;">
                </div>

            </div>

            @endif

            {{-- Upload gambar --}}
            <div class="mb-3">

                <label class="form-label">
                    Ganti Gambar
                    <span class="text-muted">(opsional)</span>
                </label>

                <input
                    type="file"
                    name="gambar"
                    class="form-control"
                    accept=".jpg,.jpeg,.png,.webp">

                <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti gambar.
                </small>

                @error('gambar')
                <div class="text-danger small mt-1">
                    {{ $message }}
                </div>
                @enderror

            </div>

            {{-- Tombol --}}
            <div class="mt-4">

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i>
                    Update
                </button>

                <a
                    href="{{ route('admin.profil.tentang-ppid.index') }}"
                    class="btn btn-secondary">
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

@endsection