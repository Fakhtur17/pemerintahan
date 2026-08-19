@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="mb-4">

        <div class="text-muted small mb-2">

            <a
                href="{{ route('admin.berita.index') }}"
                class="text-decoration-none text-muted">
                Berita
            </a>

            <span class="mx-1">/</span>

            Tambah Berita

        </div>

        <h4 class="fw-bold mb-1">
            Tambah Berita
        </h4>

        <p class="text-muted mb-0">
            Tambahkan berita atau informasi kegiatan kecamatan.
        </p>

    </div>


    {{-- FORM --}}
    <form
        action="{{ route('admin.berita.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf


        <div class="card border-0 shadow-sm">

            <div class="card-body p-4">

                {{-- JENIS --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Jenis Berita
                    </label>

                    <select
                        name="jenis"
                        class="form-select @error('jenis') is-invalid @enderror">

                        <option value="">
                            Pilih Jenis Berita
                        </option>

                        @foreach($jenisBerita as $jenis)

                        <option
                            value="{{ $jenis }}"
                            @selected(old('jenis')===$jenis)>
                            {{ $jenis }}
                        </option>

                        @endforeach

                    </select>

                    @error('jenis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- JUDUL --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Judul Berita
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control @error('judul') is-invalid @enderror"
                        placeholder="Masukkan judul berita"
                        value="{{ old('judul') }}">

                    @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                <div class="row">

                    {{-- TANGGAL --}}
                    <div class="col-md-6 mb-4">

                        <label class="form-label fw-semibold">
                            Tanggal Berita
                        </label>

                        <input
                            type="date"
                            name="tanggal"
                            class="form-control @error('tanggal') is-invalid @enderror"
                            value="{{ old('tanggal', date('Y-m-d')) }}">

                        @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>


                    {{-- STATUS --}}
                    <div class="col-md-6 mb-4">

                        <label class="form-label fw-semibold">
                            Status
                        </label>

                        <select
                            name="status"
                            class="form-select @error('status') is-invalid @enderror">

                            <option
                                value="draft"
                                @selected(old('status', 'draft' )==='draft' )>
                                Draft
                            </option>

                            <option
                                value="terbit"
                                @selected(old('status')==='terbit' )>
                                Terbit
                            </option>

                        </select>

                        @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>

                </div>


                {{-- RINGKASAN --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Ringkasan Berita
                    </label>

                    <textarea
                        name="ringkasan"
                        rows="4"
                        class="form-control @error('ringkasan') is-invalid @enderror"
                        placeholder="Masukkan ringkasan singkat berita">{{ old('ringkasan') }}</textarea>

                    @error('ringkasan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- GAMBAR --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Gambar Utama
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control @error('gambar') is-invalid @enderror"
                        accept="image/jpeg,image/png,image/webp">

                    <div class="form-text">
                        Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                    </div>

                    @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- ISI --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Isi Berita
                    </label>

                    <textarea
                        name="isi"
                        rows="12"
                        class="form-control @error('isi') is-invalid @enderror"
                        placeholder="Tulis isi berita...">{{ old('isi') }}</textarea>

                    @error('isi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">

                    <a
                        href="{{ route('admin.berita.index') }}"
                        class="btn btn-light border">
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>
                        Simpan Berita
                    </button>

                </div>

            </div>

        </div>

    </form>

</div>

@endsection