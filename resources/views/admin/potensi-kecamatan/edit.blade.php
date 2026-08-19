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
                Edit
            </span>

        </div>

        <h4 class="fw-bold mb-1">
            Edit Potensi Kecamatan
        </h4>

        <p class="text-muted mb-0">
            Perbarui data potensi kecamatan.
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
        action="{{ route(
            'admin.potensi-kecamatan.update',
            $potensiKecamatan
        ) }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        @method('PUT')


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
                                value="{{ old(
                                    'judul',
                                    $potensiKecamatan->judul
                                ) }}">

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
                                    @selected(
                                    old( 'jenis' ,
                                    $potensiKecamatan->jenis
                                    ) === $key
                                    )>

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
                                value="{{ old(
                                    'lokasi',
                                    $potensiKecamatan->lokasi
                                ) }}"
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
                                placeholder="Tuliskan deskripsi potensi...">{{ old(
                                    'deskripsi',
                                    $potensiKecamatan->deskripsi
                                ) }}</textarea>

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


                        @if($potensiKecamatan->gambar)

                        <div class="mb-3">

                            <img
                                src="{{ $potensiKecamatan->gambar_url }}"
                                alt="{{ $potensiKecamatan->judul }}"
                                class="img-fluid rounded"
                                style="
                                        width:100%;
                                        max-height:220px;
                                        object-fit:cover;
                                    ">

                        </div>

                        @endif


                        <input
                            type="file"
                            name="gambar"
                            class="form-control @error('gambar') is-invalid @enderror"
                            accept=".jpg,.jpeg,.png,.webp">

                        <div class="form-text">

                            Kosongkan jika tidak ingin
                            mengganti gambar.

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
                                @checked(
                                old( 'is_active' ,
                                $potensiKecamatan->is_active
                            )
                            )>

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

                                Perbarui

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </form>

</div>

@endsection