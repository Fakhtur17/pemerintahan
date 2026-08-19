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

            Edit Berita

        </div>

        <h4 class="fw-bold mb-1">
            Edit Berita
        </h4>

        <p class="text-muted mb-0">
            Perbarui informasi berita.
        </p>

    </div>


    {{-- FORM --}}
    <form
        action="{{ route('admin.berita.update', $berita) }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('PUT')


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

                        @foreach($jenisBerita as $jenis)

                        <option
                            value="{{ $jenis }}"
                            @selected(
                            old('jenis', $berita->jenis) === $jenis
                            )
                            >
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
                        value="{{ old('judul', $berita->judul) }}">

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
                            value="{{ old(
                                'tanggal',
                                $berita->tanggal->format('Y-m-d')
                            ) }}">

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
                                @selected(
                                old('status', $berita->status) === 'draft'
                                )
                                >
                                Draft
                            </option>

                            <option
                                value="terbit"
                                @selected(
                                old('status', $berita->status) === 'terbit'
                                )
                                >
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
                        class="form-control @error('ringkasan') is-invalid @enderror">{{ old('ringkasan', $berita->ringkasan) }}</textarea>

                    @error('ringkasan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                {{-- GAMBAR LAMA --}}
                @if($berita->gambar)

                <div class="mb-4">

                    <label class="form-label fw-semibold d-block">
                        Gambar Saat Ini
                    </label>

                    <img
                        src="{{ asset('storage/' . $berita->gambar) }}"
                        alt="{{ $berita->judul }}"
                        class="rounded border"
                        style="
                                width: 240px;
                                height: 160px;
                                object-fit: cover;
                            ">

                </div>

                @endif


                {{-- GAMBAR BARU --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Ganti Gambar
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control @error('gambar') is-invalid @enderror"
                        accept="image/jpeg,image/png,image/webp">

                    <div class="form-text">
                        Kosongkan jika tidak ingin mengganti gambar.
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
                        class="form-control @error('isi') is-invalid @enderror">{{ old('isi', $berita->isi) }}</textarea>

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
                        Simpan Perubahan
                    </button>

                </div>

            </div>

        </div>

    </form>

</div>

@endsection