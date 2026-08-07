@extends('admin.layouts.app')

@section('title', 'Tambah Bagian Tentang Kabupaten')

@section('content')

<div class="container">
    <div class="card shadow-sm border-0">
        <div class="card-header">
            <h5 class="mb-0">Tambah Bagian Tentang Kabupaten</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.profil.tentang-kabupaten.store') }}"
                  method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul Bagian</label>
                    <input type="text" name="judul" class="form-control"
                           value="{{ old('judul') }}" placeholder="Contoh: A. Sejarah" required>
                    @error('judul')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Isi</label>
                    <textarea name="isi" class="form-control" rows="10" required>{{ old('isi') }}</textarea>
                    @error('isi')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Urutan Tampil</label>
                    <input type="number" name="urutan" class="form-control"
                           value="{{ old('urutan', 0) }}" min="0">
                    <small class="text-muted">Angka lebih kecil tampil lebih dulu. Boleh dikosongkan (default 0).</small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar <span class="text-muted">(opsional)</span></label>
                    <input type="file" name="gambar" class="form-control">
                    <small class="text-muted">Boleh dikosongkan. Format JPG PNG WEBP maksimal 2MB.</small>
                    @error('gambar')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-success">
                    <i class="bi bi-save"></i> Simpan
                </button>

                <a href="{{ route('admin.profil.tentang-kabupaten.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>

@endsection