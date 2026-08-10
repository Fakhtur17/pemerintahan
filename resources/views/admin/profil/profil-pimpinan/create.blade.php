@extends('admin.layouts.app')

@section('title', 'Tambah Profil Pimpinan')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">
                Tambah Profil Pimpinan
            </h3>

            <p class="text-muted mb-0">
                Tambahkan informasi profil pimpinan baru.
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
        action="{{ route('admin.profil.profil-pimpinan.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf


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
                                value="{{ old('nama') }}"
                                placeholder="Contoh: Hj. Paramitha Widya Kusuma, SE.,MM"
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
                                value="{{ old('jabatan') }}"
                                placeholder="Contoh: Bupati Brebes"
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

                <div class="row">

                    <div class="col-md-6">

                        <label class="form-label fw-semibold">
                            Foto
                        </label>

                        <input
                            type="file"
                            name="foto"
                            class="form-control @error('foto') is-invalid @enderror"
                            accept=".jpg,.jpeg,.png,.webp">

                        <small class="text-muted">
                            JPG, JPEG, PNG atau WEBP. Maksimal 2 MB.
                        </small>

                        @error('foto')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror

                    </div>

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
                                value="{{ old('tempat_lahir') }}"
                                placeholder="Contoh: Brebes">

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
                                value="{{ old('tanggal_lahir') }}">

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
                                value="{{ old('nip') }}"
                                placeholder="Masukkan NIP">

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
                                value="{{ old('pangkat') }}"
                                placeholder="Masukkan pangkat/golongan">

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
                                    {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>
                                    Laki-laki
                                </option>

                                <option value="Perempuan"
                                    {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
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
                                    {{ old('agama') == $agama ? 'selected' : '' }}>

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
                                    {{ old('status_perkawinan') == $status ? 'selected' : '' }}>

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
                    class="form-control"
                    placeholder="Contoh:
SMA Negeri 1 Brebes - 2007
S1 Fakultas Ekonomi UNISULA Semarang - 2012
S2 Magister Manajemen UPS Tegal - 2019">{{ old('riwayat_pendidikan') }}</textarea>

                <small class="text-muted">
                    Masukkan satu riwayat pendidikan pada setiap baris.
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
                    class="form-control"
                    placeholder="Contoh:
2019-2024 = Anggota DPR RI Komisi VII
2019-2024 = Anggota Badan Kerjasama Antar Parlemen
2020-2025 = Pengurus DPC PDI Perjuangan Brebes
2025-Sekarang = Bupati Brebes">{{ old('riwayat_jabatan') }}</textarea>

                <small class="text-muted">
                    Masukkan satu riwayat jabatan pada setiap baris.
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

                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                Facebook
                            </label>

                            <input
                                type="url"
                                name="facebook"
                                class="form-control"
                                value="{{ old('facebook') }}"
                                placeholder="https://facebook.com/...">

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                Twitter / X
                            </label>

                            <input
                                type="url"
                                name="twitter"
                                class="form-control"
                                value="{{ old('twitter') }}"
                                placeholder="https://x.com/...">

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                Instagram
                            </label>

                            <input
                                type="url"
                                name="instagram"
                                class="form-control"
                                value="{{ old('instagram') }}"
                                placeholder="https://instagram.com/...">

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                YouTube
                            </label>

                            <input
                                type="url"
                                name="youtube"
                                class="form-control"
                                value="{{ old('youtube') }}"
                                placeholder="https://youtube.com/...">

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">
                                TikTok
                            </label>

                            <input
                                type="url"
                                name="tiktok"
                                class="form-control"
                                value="{{ old('tiktok') }}"
                                placeholder="https://tiktok.com/@...">

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

                Simpan Data

            </button>

        </div>

    </form>

</div>

@endsection