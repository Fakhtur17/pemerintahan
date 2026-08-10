@extends('admin.layouts.app')

@section('title', 'Edit Profil Pimpinan')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">
                Edit Profil Pimpinan
            </h3>

            <p class="text-muted mb-0">
                Perbarui informasi profil pimpinan.
            </p>

        </div>

        <a
            href="{{ route('admin.profil.profil-pimpinan.index') }}"
            class="btn btn-light border">

            <i class="bi bi-arrow-left me-1"></i>

            Kembali

        </a>

    </div>


    {{-- ERROR VALIDATION --}}
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
            'admin.profil.profil-pimpinan.update',
            $profilPimpinan->id
        ) }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        @method('PUT')


        {{-- =====================================================
            DATA UTAMA
        ====================================================== --}}

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <h5 class="fw-bold mb-0">
                    Data Utama
                </h5>

            </div>


            <div class="card-body">

                <div class="row">

                    <div class="col-md-8">

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Nama Lengkap
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="nama"
                                class="form-control @error('nama') is-invalid @enderror"
                                value="{{ old('nama', $profilPimpinan->nama) }}"
                                required>

                            @error('nama')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Jabatan
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="jabatan"
                                class="form-control @error('jabatan') is-invalid @enderror"
                                value="{{ old('jabatan', $profilPimpinan->jabatan) }}"
                                required>

                            @error('jabatan')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
            FOTO
        ====================================================== --}}

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <h5 class="fw-bold mb-0">
                    Foto Pimpinan
                </h5>

            </div>


            <div class="card-body">

                <div class="row align-items-start">

                    <div class="col-md-6">

                        <label class="form-label fw-semibold">
                            Ganti Foto
                        </label>

                        <input
                            type="file"
                            name="foto"
                            class="form-control @error('foto') is-invalid @enderror"
                            accept=".jpg,.jpeg,.png,.webp">

                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti foto.
                            Maksimal 2 MB.
                        </small>

                        @error('foto')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror

                    </div>


                    @if($profilPimpinan->foto)

                    <div class="col-md-3">

                        <label class="form-label fw-semibold">
                            Foto Saat Ini
                        </label>

                        <div>

                            <img
                                src="{{ asset('storage/' . $profilPimpinan->foto) }}"
                                alt="{{ $profilPimpinan->nama }}"
                                class="img-thumbnail"
                                style="
                                        width:150px;
                                        height:180px;
                                        object-fit:cover;
                                    ">

                        </div>

                    </div>

                    @endif

                </div>

            </div>

        </div>


        {{-- =====================================================
            BIODATA
        ====================================================== --}}

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <h5 class="fw-bold mb-0">
                    Biodata
                </h5>

            </div>


            <div class="card-body">

                <div class="row">

                    {{-- TEMPAT LAHIR --}}
                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                Tempat Lahir
                            </label>

                            <input
                                type="text"
                                name="tempat_lahir"
                                class="form-control"
                                value="{{ old(
                                    'tempat_lahir',
                                    $profilPimpinan->tempat_lahir
                                ) }}">

                        </div>

                    </div>


                    {{-- TANGGAL LAHIR --}}
                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                Tanggal Lahir
                            </label>

                            <input
                                type="date"
                                name="tanggal_lahir"
                                class="form-control"
                                value="{{ old(
                                    'tanggal_lahir',
                                    $profilPimpinan->tanggal_lahir
                                        ? $profilPimpinan->tanggal_lahir->format('Y-m-d')
                                        : ''
                                ) }}">

                        </div>

                    </div>


                    {{-- NIP --}}
                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                NIP
                            </label>

                            <input
                                type="text"
                                name="nip"
                                class="form-control"
                                value="{{ old(
                                    'nip',
                                    $profilPimpinan->nip
                                ) }}">

                        </div>

                    </div>


                    {{-- PANGKAT --}}
                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                Pangkat / Golongan Terakhir
                            </label>

                            <input
                                type="text"
                                name="pangkat"
                                class="form-control"
                                value="{{ old(
                                    'pangkat',
                                    $profilPimpinan->pangkat
                                ) }}">

                        </div>

                    </div>


                    {{-- JENIS KELAMIN --}}
                    <div class="col-md-4">

                        <div class="mb-3">

                            <label class="form-label">
                                Jenis Kelamin
                            </label>

                            <select
                                name="jenis_kelamin"
                                class="form-select">

                                <option value="">
                                    -- Pilih --
                                </option>

                                <option value="Laki-laki"
                                    {{ old(
                                        'jenis_kelamin',
                                        $profilPimpinan->jenis_kelamin
                                    ) == 'Laki-laki' ? 'selected' : '' }}>

                                    Laki-laki

                                </option>

                                <option value="Perempuan"
                                    {{ old(
                                        'jenis_kelamin',
                                        $profilPimpinan->jenis_kelamin
                                    ) == 'Perempuan' ? 'selected' : '' }}>

                                    Perempuan

                                </option>

                            </select>

                        </div>

                    </div>


                    {{-- AGAMA --}}
                    <div class="col-md-4">

                        <div class="mb-3">

                            <label class="form-label">
                                Agama
                            </label>

                            <select
                                name="agama"
                                class="form-select">

                                <option value="">
                                    -- Pilih --
                                </option>

                                @foreach([
                                'Islam',
                                'Kristen',
                                'Katolik',
                                'Hindu',
                                'Buddha',
                                'Konghucu'
                                ] as $agama)

                                <option value="{{ $agama }}"
                                    {{ old(
                                            'agama',
                                            $profilPimpinan->agama
                                        ) == $agama ? 'selected' : '' }}>

                                    {{ $agama }}

                                </option>

                                @endforeach

                            </select>

                        </div>

                    </div>


                    {{-- STATUS PERKAWINAN --}}
                    <div class="col-md-4">

                        <div class="mb-3">

                            <label class="form-label">
                                Status Perkawinan
                            </label>

                            <select
                                name="status_perkawinan"
                                class="form-select">

                                <option value="">
                                    -- Pilih --
                                </option>

                                @foreach([
                                'Belum Kawin',
                                'Kawin',
                                'Cerai Hidup',
                                'Cerai Mati'
                                ] as $status)

                                <option value="{{ $status }}"
                                    {{ old(
                                            'status_perkawinan',
                                            $profilPimpinan->status_perkawinan
                                        ) == $status ? 'selected' : '' }}>

                                    {{ $status }}

                                </option>

                                @endforeach

                            </select>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
            RIWAYAT PENDIDIKAN
        ====================================================== --}}

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <h5 class="fw-bold mb-0">
                    Riwayat Pendidikan
                </h5>

            </div>


            <div class="card-body">

                <textarea
                    name="riwayat_pendidikan"
                    rows="7"
                    class="form-control">{{ old(
                        'riwayat_pendidikan',
                        $profilPimpinan->riwayat_pendidikan
                    ) }}</textarea>

                <small class="text-muted">
                    Satu pendidikan per baris.
                </small>

            </div>

        </div>


        {{-- =====================================================
            RIWAYAT JABATAN
        ====================================================== --}}

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <h5 class="fw-bold mb-0">
                    Riwayat Jabatan
                </h5>

            </div>


            <div class="card-body">

                <textarea
                    name="riwayat_jabatan"
                    rows="10"
                    class="form-control">{{ old(
                        'riwayat_jabatan',
                        $profilPimpinan->riwayat_jabatan
                    ) }}</textarea>

                <small class="text-muted">
                    Satu jabatan per baris.
                </small>

            </div>

        </div>


        {{-- =====================================================
            MEDIA SOSIAL
        ====================================================== --}}

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <h5 class="fw-bold mb-0">
                    Media Sosial
                </h5>

            </div>


            <div class="card-body">

                <div class="row">

                    {{-- FACEBOOK --}}
                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                Facebook
                            </label>

                            <input
                                type="url"
                                name="facebook"
                                class="form-control"
                                value="{{ old(
                                    'facebook',
                                    $profilPimpinan->facebook
                                ) }}">

                        </div>

                    </div>


                    {{-- TWITTER --}}
                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                Twitter / X
                            </label>

                            <input
                                type="url"
                                name="twitter"
                                class="form-control"
                                value="{{ old(
                                    'twitter',
                                    $profilPimpinan->twitter
                                ) }}">

                        </div>

                    </div>


                    {{-- INSTAGRAM --}}
                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                Instagram
                            </label>

                            <input
                                type="url"
                                name="instagram"
                                class="form-control"
                                value="{{ old(
                                    'instagram',
                                    $profilPimpinan->instagram
                                ) }}">

                        </div>

                    </div>


                    {{-- YOUTUBE --}}
                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                YouTube
                            </label>

                            <input
                                type="url"
                                name="youtube"
                                class="form-control"
                                value="{{ old(
                                    'youtube',
                                    $profilPimpinan->youtube
                                ) }}">

                        </div>

                    </div>


                    {{-- TIKTOK --}}
                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                TikTok
                            </label>

                            <input
                                type="url"
                                name="tiktok"
                                class="form-control"
                                value="{{ old(
                                    'tiktok',
                                    $profilPimpinan->tiktok
                                ) }}">

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
            BUTTON
        ====================================================== --}}

        <div class="d-flex justify-content-end gap-2 mb-4">

            <a
                href="{{ route('admin.profil.profil-pimpinan.index') }}"
                class="btn btn-light border">

                Batal

            </a>

            <button
                type="submit"
                class="btn btn-primary">

                <i class="bi bi-save me-1"></i>

                Update Data

            </button>

        </div>

    </form>

</div>

@endsection