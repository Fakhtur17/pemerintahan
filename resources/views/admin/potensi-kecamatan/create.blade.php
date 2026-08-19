@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="mb-4">

        <div class="text-muted small mb-2">

            <a
                href="{{ route('admin.potensi-kecamatan.index') }}"
                class="text-decoration-none text-muted">

                Potensi Kecamatan

            </a>

            <span class="mx-1">
                /
            </span>

            <span>
                Tambah
            </span>

        </div>

        <h4 class="fw-bold mb-1">
            Tambah Potensi Kecamatan
        </h4>

        <p class="text-muted mb-0">
            Tambahkan data potensi unggulan kecamatan.
        </p>

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


    <form
        action="{{ route('admin.potensi-kecamatan.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf


        <div class="row">

            {{-- KONTEN --}}
            <div class="col-lg-8">

                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-body">

                        {{-- JUDUL --}}
                        <div class="mb-4">

                            <label
                                class="form-label fw-semibold">

                                Judul Potensi
                                <span class="text-danger">
                                    *
                                </span>

                            </label>

                            <input
                                type="text"
                                name="judul"
                                class="form-control @error('judul') is-invalid @enderror"
                                value="{{ old('judul') }}"
                                placeholder="Contoh: Sentra Pertanian Padi">

                            @error('judul')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>


                        {{-- JENIS --}}
                        <div class="mb-4">

                            <label
                                class="form-label fw-semibold">

                                Jenis Potensi
                                <span class="text-danger">
                                    *
                                </span>

                            </label>

                            <select
                                name="jenis"
                                class="form-select @error('jenis') is-invalid @enderror">

                                <option value="">
                                    -- Pilih Jenis Potensi --
                                </option>

                                @foreach($jenisOptions as $key => $label)

                                <option
                                    value="{{ $key }}"
                                    @selected(old('jenis')===$key)>

                                    {{ $label }}

                                </option>

                                @endforeach

                            </select>

                            @error('jenis')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>


                        {{-- LOKASI --}}
                        <div class="mb-4">

                            <label
                                class="form-label fw-semibold">

                                Lokasi

                            </label>

                            <input
                                type="text"
                                name="lokasi"
                                class="form-control @error('lokasi') is-invalid @enderror"
                                value="{{ old('lokasi') }}"
                                placeholder="Contoh: Desa Karanganyar">

                            @error('lokasi')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>


                        {{-- DESKRIPSI --}}
                        <div class="mb-3">

                            <label
                                class="form-label fw-semibold">

                                Deskripsi

                            </label>

                            <textarea
                                name="deskripsi"
                                rows="8"
                                class="form-control @error('deskripsi') is-invalid @enderror"
                                placeholder="Tuliskan deskripsi potensi...">{{ old('deskripsi') }}</textarea>

                            @error('deskripsi')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>

                    </div>

                </div>

            </div>


            {{-- SIDEBAR --}}
            <div class="col-lg-4">

                {{-- GAMBAR --}}
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-body">

                        <label
                            class="form-label fw-semibold">

                            Gambar Potensi

                        </label>

                        <input
                            type="file"
                            name="gambar"
                            class="form-control @error('gambar') is-invalid @enderror"
                            accept=".jpg,.jpeg,.png,.webp">

                        <div class="form-text">

                            JPG, JPEG, PNG atau WEBP.
                            Maksimal 2 MB.

                        </div>

                        @error('gambar')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror

                    </div>

                </div>


                {{-- STATUS --}}
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-body">

                        <label
                            class="form-label fw-semibold">

                            Status

                        </label>

                        <div class="form-check form-switch">

                            <input
                                type="checkbox"
                                name="is_active"
                                value="1"
                                class="form-check-input"
                                id="is_active"
                                checked>

                            <label
                                class="form-check-label"
                                for="is_active">

                                Aktif

                            </label>

                        </div>

                        <small class="text-muted">

                            Potensi aktif akan ditampilkan
                            pada halaman publik.

                        </small>

                    </div>

                </div>


                {{-- ACTION --}}
                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <div class="d-flex gap-2">

                            <a
                                href="{{ route(
                                    'admin.potensi-kecamatan.index'
                                ) }}"
                                class="btn btn-light w-50">

                                Batal

                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary w-50">

                                <i
                                    class="bi bi-save me-1">
                                </i>

                                Simpan

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </form>

</div>

@endsection