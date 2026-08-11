@extends('admin.layouts.app')

@section('title', 'Tambah Alamat Dinas')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h4 class="mb-1">
            Tambah Alamat Dinas
        </h4>

        <p class="text-muted mb-0">
            Tambahkan informasi alamat dan lokasi kantor dinas.
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.profil.alamat-dinas.store') }}"
                method="POST">

                @csrf


                <div class="mb-3">

                    <label class="form-label">
                        Judul
                    </label>

                    <input
                        type="text"
                        name="judul"
                        value="{{ old('judul') }}"
                        class="form-control @error('judul') is-invalid @enderror"
                        placeholder="Contoh: Alamat Kantor Dinas">

                    @error('judul')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea
                        name="deskripsi"
                        rows="4"
                        class="form-control @error('deskripsi') is-invalid @enderror"
                        placeholder="Masukkan deskripsi informasi dinas...">{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Alamat
                    </label>

                    <textarea
                        name="alamat"
                        rows="4"
                        class="form-control @error('alamat') is-invalid @enderror"
                        placeholder="Masukkan alamat lengkap kantor dinas...">{{ old('alamat') }}</textarea>

                    @error('alamat')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                <div class="mb-4">

                    <label class="form-label">
                        Link Google Maps
                    </label>

                    <input
                        type="url"
                        name="google_maps_url"
                        value="{{ old('google_maps_url') }}"
                        class="form-control @error('google_maps_url') is-invalid @enderror"
                        placeholder="https://maps.google.com/...">

                    <small class="text-muted">
                        Salin link lokasi kantor dari Google Maps.
                    </small>

                    @error('google_maps_url')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                <div class="d-flex gap-2">

                    <a
                        href="{{ route('admin.profil.alamat-dinas.index') }}"
                        class="btn btn-secondary">
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary">

                        <i class="fas fa-save me-1"></i>

                        Simpan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection