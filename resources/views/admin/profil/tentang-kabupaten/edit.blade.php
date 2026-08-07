@extends('admin.layouts.app')

@section('title', 'Edit Bagian Tentang Kabupaten')

@section('content')

<div class="container">
    <div class="card shadow-sm border-0">
        <div class="card-header">
            <h5>Edit Bagian Tentang Kabupaten</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.profil.tentang-kabupaten.update', $data->id) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Judul Bagian</label>
                    <input type="text" name="judul" class="form-control" value="{{ $data->judul }}" required>
                    @error('judul')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Isi</label>
                    <textarea name="isi" class="form-control" rows="10" required>{{ $data->isi }}</textarea>
                    @error('isi')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Urutan Tampil</label>
                    <input type="number" name="urutan" class="form-control" value="{{ $data->urutan }}" min="0">
                    <small class="text-muted">Angka lebih kecil tampil lebih dulu.</small>
                </div>

                <div class="mb-3">
                    <label>Gambar Saat Ini <span class="text-muted">(opsional)</span></label>
                    <br>
                    @if($data->gambar)
                        <img src="{{ asset('storage/'.$data->gambar) }}" width="150" class="img-thumbnail mb-2">
                    @else
                        <p class="text-muted">Belum ada gambar untuk bagian ini.</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label>Ganti Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                    <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                    @error('gambar')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-success">
                    <i class="bi bi-save"></i> Update
                </button>

                <a href="{{ route('admin.profil.tentang-kabupaten.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>

@endsection