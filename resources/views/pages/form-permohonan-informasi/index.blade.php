@extends('layouts.app')

@section('title', 'Form Permohonan Informasi')

@section('content')

<!-- Page Header -->
<section class="breadcrumb-wrapper section-bg">
    <div class="container">
        <div class="page-heading">
            <h1>Form Permohonan Informasi</h1>

            <ul class="breadcrumb-items">
                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>

                <li>
                    Form Permohonan Informasi
                </li>
            </ul>
        </div>
    </div>
</section>


<!-- Form Permohonan -->
<section class="contact-section section-padding">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="section-title text-center mb-4">

                    <h2>
                        FORM PERMOHONAN INFORMASI
                    </h2>

                    <p class="mt-3">
                        Silahkan isi formulir berikut ini
                    </p>

                </div>


                {{-- SUCCESS --}}
                @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show">

                    <i class="fas fa-check-circle me-2"></i>

                    {{ session('success') }}

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"></button>

                </div>

                @endif


                {{-- ERROR --}}
                @if($errors->any())

                <div class="alert alert-danger">

                    <strong>
                        Mohon periksa kembali data Anda.
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


                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4 p-md-5">

                        <form
                            action="{{ route('form-permohonan-informasi.store') }}"
                            method="POST">

                            @csrf


                            <!-- EMAIL -->
                            <div class="mb-4">

                                <label
                                    for="email"
                                    class="form-label fw-semibold">
                                    Email
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control form-control-lg"
                                    value="{{ old('email') }}"
                                    placeholder="Masukkan alamat email"
                                    required>

                            </div>


                            <!-- NAMA -->
                            <div class="mb-4">

                                <label
                                    for="nama"
                                    class="form-label fw-semibold">
                                    Nama
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="nama"
                                    name="nama"
                                    class="form-control form-control-lg"
                                    value="{{ old('nama') }}"
                                    placeholder="Masukkan nama lengkap"
                                    required>

                            </div>


                            <!-- NIK -->
                            <div class="mb-4">

                                <label
                                    for="nik"
                                    class="form-label fw-semibold">
                                    NIK
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="nik"
                                    name="nik"
                                    class="form-control form-control-lg"
                                    value="{{ old('nik') }}"
                                    placeholder="Masukkan NIK 16 digit"
                                    maxlength="16"
                                    inputmode="numeric"
                                    required>

                                <small class="text-muted">
                                    NIK harus terdiri dari 16 digit.
                                </small>

                            </div>


                            <!-- ALAMAT -->
                            <div class="mb-4">

                                <label
                                    for="alamat"
                                    class="form-label fw-semibold">
                                    Alamat
                                    <span class="text-danger">*</span>
                                </label>

                                <textarea
                                    id="alamat"
                                    name="alamat"
                                    rows="4"
                                    class="form-control"
                                    placeholder="Masukkan alamat lengkap"
                                    required>{{ old('alamat') }}</textarea>

                            </div>


                            <!-- NO HP -->
                            <div class="mb-4">

                                <label
                                    for="no_hp"
                                    class="form-label fw-semibold">
                                    No HP
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="no_hp"
                                    name="no_hp"
                                    class="form-control form-control-lg"
                                    value="{{ old('no_hp') }}"
                                    placeholder="Contoh: 081234567890"
                                    required>

                            </div>


                            <!-- INFORMASI -->
                            <div class="mb-4">

                                <label
                                    for="informasi_diminta"
                                    class="form-label fw-semibold">
                                    Informasi yang Diminta
                                    <span class="text-danger">*</span>
                                </label>

                                <textarea
                                    id="informasi_diminta"
                                    name="informasi_diminta"
                                    rows="5"
                                    class="form-control"
                                    placeholder="Tuliskan informasi yang ingin Anda minta"
                                    required>{{ old('informasi_diminta') }}</textarea>

                            </div>


                            <!-- TUJUAN -->
                            <div class="mb-4">

                                <label
                                    for="tujuan"
                                    class="form-label fw-semibold">
                                    Tujuan Permohonan Informasi
                                    <span class="text-danger">*</span>
                                </label>

                                <textarea
                                    id="tujuan"
                                    name="tujuan"
                                    rows="5"
                                    class="form-control"
                                    placeholder="Tuliskan tujuan permohonan informasi"
                                    required>{{ old('tujuan') }}</textarea>

                            </div>


                            <!-- BUTTON -->
                            <div class="text-center pt-3">

                                <button
                                    type="submit"
                                    class="theme-btn">

                                    Kirim Permohonan

                                    <i class="fas fa-paper-plane ms-2"></i>

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection