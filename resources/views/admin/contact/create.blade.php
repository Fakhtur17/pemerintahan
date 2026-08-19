@extends('admin.layouts.app')

@section('title', 'Tambah Contact')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h4 class="fw-bold mb-1">
            Tambah Contact
        </h4>

        <p class="text-muted mb-0">
            Tambahkan informasi kontak untuk halaman publik.
        </p>

    </div>


    @if($errors->any())

    <div class="alert alert-danger">

        <ul class="mb-0">

            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach

        </ul>

    </div>

    @endif


    <form
        action="{{ route('admin.contact.store') }}"
        method="POST">

        @csrf


        {{-- INFORMASI KONTAK --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <strong>
                    Informasi Kontak
                </strong>

            </div>

            <div class="card-body">

                <div class="row g-4">

                    <div class="col-md-6">

                        <label class="form-label">
                            Alamat
                        </label>

                        <input
                            type="text"
                            name="alamat"
                            class="form-control"
                            value="{{ old('alamat') }}"
                            placeholder="Masukkan alamat">

                    </div>


                    <div class="col-md-6">

                        <label class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            placeholder="ppid@brebeskab.go.id">

                    </div>


                    <div class="col-md-6">

                        <label class="form-label">
                            Telepon
                        </label>

                        <input
                            type="text"
                            name="telepon"
                            class="form-control"
                            value="{{ old('telepon') }}"
                            placeholder="(0283) 432123">

                    </div>

                </div>

            </div>

        </div>


        {{-- DESKRIPSI --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <strong>
                    Deskripsi
                </strong>

            </div>

            <div class="card-body">

                <div class="row g-4">

                    <div class="col-md-4">

                        <label class="form-label">
                            Deskripsi Alamat
                        </label>

                        <textarea
                            name="deskripsi_alamat"
                            class="form-control"
                            rows="4"
                            placeholder="Keterangan alamat">{{ old('deskripsi_alamat') }}</textarea>

                    </div>


                    <div class="col-md-4">

                        <label class="form-label">
                            Deskripsi Email
                        </label>

                        <textarea
                            name="deskripsi_email"
                            class="form-control"
                            rows="4"
                            placeholder="Keterangan email">{{ old('deskripsi_email') }}</textarea>

                    </div>


                    <div class="col-md-4">

                        <label class="form-label">
                            Deskripsi Telepon
                        </label>

                        <textarea
                            name="deskripsi_telepon"
                            class="form-control"
                            rows="4"
                            placeholder="Keterangan telepon">{{ old('deskripsi_telepon') }}</textarea>

                    </div>

                </div>

            </div>

        </div>


        {{-- GOOGLE MAPS --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <strong>
                    Google Maps
                </strong>

            </div>

            <div class="card-body">

                <label class="form-label">
                    Maps Embed URL
                </label>

                <textarea
                    name="maps_embed"
                    class="form-control"
                    rows="4"
                    placeholder="Masukkan URL src dari Google Maps Embed">{{ old('maps_embed') }}</textarea>

                <small class="text-muted">
                    Masukkan URL yang ada di bagian <code>src</code> iframe Google Maps.
                </small>

            </div>

        </div>


        {{-- FORM --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <strong>
                    Form Kontak
                </strong>

            </div>

            <div class="card-body">

                <div class="mb-3">

                    <label class="form-label">
                        Judul Form
                    </label>

                    <input
                        type="text"
                        name="form_judul"
                        class="form-control"
                        value="{{ old('form_judul') }}"
                        placeholder="Hubungi Kami">

                </div>


                <div>

                    <label class="form-label">
                        Deskripsi Form
                    </label>

                    <textarea
                        name="form_deskripsi"
                        class="form-control"
                        rows="4"
                        placeholder="Silakan sampaikan pertanyaan Anda">{{ old('form_deskripsi') }}</textarea>

                </div>

            </div>

        </div>


        <div class="d-flex justify-content-between">

            <a
                href="{{ route('admin.contact.index') }}"
                class="btn btn-light border">

                Kembali

            </a>


            <button
                type="submit"
                class="btn btn-primary">

                <i class="bi bi-save me-1"></i>
                Simpan

            </button>

        </div>

    </form>

</div>

@endsection