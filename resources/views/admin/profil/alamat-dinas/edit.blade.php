@extends('admin.layouts.app')

@section('title', 'Edit Alamat Dinas')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h4 class="mb-1">
            Edit Alamat Dinas
        </h4>

        <p class="text-muted mb-0">
            Perbarui informasi alamat dan lokasi kantor dinas.
        </p>

    </div>


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.profil.alamat-dinas.update', $data->id) }}"
                method="POST">

                @csrf
                @method('PUT')


                <div class="mb-3">

                    <label class="form-label">
                        Judul
                    </label>

                    <input
                        type="text"
                        name="judul"
                        value="{{ old('judul', $data->judul) }}"
                        class="form-control @error('judul') is-invalid @enderror">

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
                        class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $data->deskripsi) }}</textarea>

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
                        class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $data->alamat) }}</textarea>

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
                        value="{{ old('google_maps_url', $data->google_maps_url) }}"
                        class="form-control @error('google_maps_url') is-invalid @enderror">

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

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection