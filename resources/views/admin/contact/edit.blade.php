@extends('admin.layouts.app')

@section('title', 'Edit Kontak')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <div class="text-muted small mb-2">
            Kontak
            <span class="mx-1">/</span>
            Edit
        </div>

        <h4 class="fw-bold mb-1">
            Edit Informasi Kontak
        </h4>

        <div class="text-muted">
            Perbarui informasi kontak yang ditampilkan pada halaman publik.
        </div>

    </div>


    <form
        action="{{ route('admin.contact.update', $contact->id) }}"
        method="POST">

        @csrf
        @method('PUT')


        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="row g-4">

                    {{-- ALAMAT --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Alamat
                        </label>

                        <input
                            type="text"
                            name="alamat"
                            class="form-control"
                            value="{{ old('alamat', $contact->alamat) }}">

                    </div>


                    {{-- EMAIL --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email', $contact->email) }}">

                    </div>


                    {{-- TELEPON --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Telepon
                        </label>

                        <input
                            type="text"
                            name="telepon"
                            class="form-control"
                            value="{{ old('telepon', $contact->telepon) }}">

                    </div>


                    {{-- DESKRIPSI ALAMAT --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Deskripsi Alamat
                        </label>

                        <textarea
                            name="deskripsi_alamat"
                            class="form-control"
                            rows="3">{{ old('deskripsi_alamat', $contact->deskripsi_alamat) }}</textarea>

                    </div>


                    {{-- DESKRIPSI EMAIL --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Deskripsi Email
                        </label>

                        <textarea
                            name="deskripsi_email"
                            class="form-control"
                            rows="3">{{ old('deskripsi_email', $contact->deskripsi_email) }}</textarea>

                    </div>


                    {{-- DESKRIPSI TELEPON --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Deskripsi Telepon
                        </label>

                        <textarea
                            name="deskripsi_telepon"
                            class="form-control"
                            rows="3">{{ old('deskripsi_telepon', $contact->deskripsi_telepon) }}</textarea>

                    </div>


                    {{-- MAP --}}
                    <div class="col-12">

                        <label class="form-label">
                            Google Maps Embed
                        </label>

                        <textarea
                            name="maps_embed"
                            class="form-control"
                            rows="4">{{ old('maps_embed', $contact->maps_embed) }}</textarea>

                        <div class="form-text">
                            Masukkan URL <code>src</code> dari Google Maps Embed.
                        </div>

                    </div>


                    {{-- FORM JUDUL --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Judul Form Kontak
                        </label>

                        <input
                            type="text"
                            name="form_judul"
                            class="form-control"
                            value="{{ old('form_judul', $contact->form_judul) }}">

                    </div>


                    {{-- FORM DESKRIPSI --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Deskripsi Form
                        </label>

                        <textarea
                            name="form_deskripsi"
                            class="form-control"
                            rows="3">{{ old('form_deskripsi', $contact->form_deskripsi) }}</textarea>

                    </div>

                </div>

            </div>


            <div class="card-footer bg-white d-flex justify-content-end gap-2">

                <a
                    href="{{ route('admin.contact.index') }}"
                    class="btn btn-light border">

                    Batal

                </a>

                <button
                    type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-save me-1"></i>
                    Simpan Perubahan

                </button>

            </div>

        </div>

    </form>

</div>

@endsection