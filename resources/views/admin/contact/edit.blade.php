@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="mb-4">

        <div class="text-muted small mb-2">

            Kontak

            <span class="mx-1">/</span>

            Edit

        </div>

        <h4 class="fw-bold mb-1">
            Edit Pengaturan Kontak
        </h4>

        <p class="text-muted mb-0">
            Perbarui informasi kontak yang ditampilkan pada halaman publik.
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
        action="{{ route('admin.contact.update', $contact) }}"
        method="POST">

        @csrf

        @method('PUT')


        {{-- INFORMASI KONTAK --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white py-3">

                <h5 class="mb-0 fw-semibold">
                    Informasi Kontak
                </h5>

            </div>

            <div class="card-body">

                <div class="row g-4">

                    {{-- ALAMAT --}}
                    <div class="col-md-12">

                        <label class="form-label fw-semibold">
                            Alamat
                        </label>

                        <input
                            type="text"
                            name="alamat"
                            class="form-control"
                            value="{{ old('alamat', $contact->alamat) }}">

                    </div>


                    {{-- DESKRIPSI ALAMAT --}}
                    <div class="col-md-12">

                        <label class="form-label fw-semibold">
                            Deskripsi Alamat
                        </label>

                        <textarea
                            name="deskripsi_alamat"
                            class="form-control"
                            rows="3">{{ old('deskripsi_alamat', $contact->deskripsi_alamat) }}</textarea>

                    </div>


                    {{-- EMAIL --}}
                    <div class="col-md-6">

                        <label class="form-label fw-semibold">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email', $contact->email) }}">

                    </div>


                    {{-- DESKRIPSI EMAIL --}}
                    <div class="col-md-6">

                        <label class="form-label fw-semibold">
                            Deskripsi Email
                        </label>

                        <textarea
                            name="deskripsi_email"
                            class="form-control"
                            rows="3">{{ old('deskripsi_email', $contact->deskripsi_email) }}</textarea>

                    </div>


                    {{-- TELEPON --}}
                    <div class="col-md-6">

                        <label class="form-label fw-semibold">
                            Telepon
                        </label>

                        <input
                            type="text"
                            name="telepon"
                            class="form-control"
                            value="{{ old('telepon', $contact->telepon) }}">

                    </div>


                    {{-- DESKRIPSI TELEPON --}}
                    <div class="col-md-6">

                        <label class="form-label fw-semibold">
                            Deskripsi Telepon
                        </label>

                        <textarea
                            name="deskripsi_telepon"
                            class="form-control"
                            rows="3">{{ old('deskripsi_telepon', $contact->deskripsi_telepon) }}</textarea>

                    </div>

                </div>

            </div>

        </div>


        {{-- MAPS --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white py-3">

                <h5 class="mb-0 fw-semibold">
                    Lokasi
                </h5>

            </div>

            <div class="card-body">

                <label class="form-label fw-semibold">
                    Google Maps Embed URL
                </label>

                <textarea
                    name="maps_embed"
                    class="form-control"
                    rows="4">{{ old('maps_embed', $contact->maps_embed) }}</textarea>

            </div>

        </div>


        {{-- FORM PUBLIK --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white py-3">

                <h5 class="mb-0 fw-semibold">
                    Form Kontak Publik
                </h5>

            </div>

            <div class="card-body">

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Judul Form
                    </label>

                    <input
                        type="text"
                        name="form_judul"
                        class="form-control"
                        value="{{ old('form_judul', $contact->form_judul) }}">

                </div>


                <div>

                    <label class="form-label fw-semibold">
                        Deskripsi Form
                    </label>

                    <textarea
                        name="form_deskripsi"
                        class="form-control"
                        rows="4">{{ old('form_deskripsi', $contact->form_deskripsi) }}</textarea>

                </div>

            </div>

        </div>


        {{-- BUTTON --}}
        <div class="d-flex justify-content-between">

            <form
                action="{{ route('admin.contact.destroy', $contact) }}"
                method="POST"
                onsubmit="return confirm('Yakin ingin menghapus data kontak ini?')">

                @csrf

                @method('DELETE')

                <button
                    type="submit"
                    class="btn btn-danger">

                    <i class="fas fa-trash me-1"></i>
                    Hapus

                </button>

            </form>


            <div class="d-flex gap-2">

                <a
                    href="{{ route('admin.contact.index') }}"
                    class="btn btn-light border">

                    Batal

                </a>

                <button
                    type="submit"
                    class="btn btn-primary">

                    <i class="fas fa-save me-1"></i>
                    Simpan Perubahan

                </button>

            </div>

        </div>

    </form>

</div>

@endsection