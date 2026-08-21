@extends('admin.layouts.app')

@section('title', 'Tambah Permohonan Informasi')

@section('content')

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="mb-1">
                Tambah Permohonan Informasi
            </h4>

            <p class="text-muted mb-0">
                Tambahkan data permohonan informasi.
            </p>
        </div>

        <a
            href="{{ route('admin.permohonan-informasi.index') }}"
            class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i>
            Kembali
        </a>

    </div>


    @if($errors->any())

    <div class="alert alert-danger">

        <strong>
            Periksa kembali data yang dimasukkan.
        </strong>

        <ul class="mb-0 mt-2">

            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach

        </ul>

    </div>

    @endif


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form
                action="{{ route('admin.permohonan-informasi.store') }}"
                method="POST">

                @csrf


                <h5 class="mb-4">
                    Data Pemohon
                </h5>


                <div class="row">

                    {{-- EMAIL --}}
                    <div class="col-md-6 mb-3">

                        <label
                            for="email"
                            class="form-label">
                            Email <span class="text-danger">*</span>
                        </label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            required>

                    </div>


                    {{-- NAMA --}}
                    <div class="col-md-6 mb-3">

                        <label
                            for="nama"
                            class="form-label">
                            Nama <span class="text-danger">*</span>
                        </label>

                        <input
                            type="text"
                            name="nama"
                            id="nama"
                            class="form-control"
                            value="{{ old('nama') }}"
                            required>

                    </div>


                    {{-- NIK --}}
                    <div class="col-md-6 mb-3">

                        <label
                            for="nik"
                            class="form-label">
                            NIK <span class="text-danger">*</span>
                        </label>

                        <input
                            type="text"
                            name="nik"
                            id="nik"
                            class="form-control"
                            value="{{ old('nik') }}"
                            maxlength="16"
                            inputmode="numeric"
                            required>

                    </div>


                    {{-- NO HP --}}
                    <div class="col-md-6 mb-3">

                        <label
                            for="no_hp"
                            class="form-label">
                            No HP <span class="text-danger">*</span>
                        </label>

                        <input
                            type="text"
                            name="no_hp"
                            id="no_hp"
                            class="form-control"
                            value="{{ old('no_hp') }}"
                            required>

                    </div>


                    {{-- ALAMAT --}}
                    <div class="col-12 mb-4">

                        <label
                            for="alamat"
                            class="form-label">
                            Alamat <span class="text-danger">*</span>
                        </label>

                        <textarea
                            name="alamat"
                            id="alamat"
                            rows="4"
                            class="form-control"
                            required>{{ old('alamat') }}</textarea>

                    </div>

                </div>


                <hr class="my-4">


                <h5 class="mb-4">
                    Data Permohonan
                </h5>


                {{-- INFORMASI --}}
                <div class="mb-4">

                    <label
                        for="informasi_diminta"
                        class="form-label">
                        Informasi yang Diminta
                        <span class="text-danger">*</span>
                    </label>

                    <textarea
                        name="informasi_diminta"
                        id="informasi_diminta"
                        rows="5"
                        class="form-control"
                        required>{{ old('informasi_diminta') }}</textarea>

                </div>


                {{-- TUJUAN --}}
                <div class="mb-4">

                    <label
                        for="tujuan"
                        class="form-label">
                        Tujuan Permohonan Informasi
                        <span class="text-danger">*</span>
                    </label>

                    <textarea
                        name="tujuan"
                        id="tujuan"
                        rows="5"
                        class="form-control"
                        required>{{ old('tujuan') }}</textarea>

                </div>


                <hr class="my-4">


                <h5 class="mb-4">
                    Proses Permohonan
                </h5>


                <div class="row">

                    {{-- STATUS --}}
                    <div class="col-md-6 mb-4">

                        <label
                            for="status"
                            class="form-label">
                            Status
                        </label>

                        <select
                            name="status"
                            id="status"
                            class="form-select">

                            <option
                                value="baru"
                                @selected(old('status', 'baru' )==='baru' )>
                                Baru
                            </option>

                            <option
                                value="diproses"
                                @selected(old('status')==='diproses' )>
                                Diproses
                            </option>

                            <option
                                value="selesai"
                                @selected(old('status')==='selesai' )>
                                Selesai
                            </option>

                            <option
                                value="ditolak"
                                @selected(old('status')==='ditolak' )>
                                Ditolak
                            </option>

                        </select>

                    </div>


                    {{-- CATATAN --}}
                    <div class="col-12 mb-4">

                        <label
                            for="catatan"
                            class="form-label">
                            Catatan Admin
                        </label>

                        <textarea
                            name="catatan"
                            id="catatan"
                            rows="4"
                            class="form-control">{{ old('catatan') }}</textarea>

                    </div>

                </div>


                <div class="d-flex justify-content-end gap-2">

                    <a
                        href="{{ route('admin.permohonan-informasi.index') }}"
                        class="btn btn-secondary">
                        Batal
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