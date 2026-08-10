@extends('admin.layouts.app')

@section('title', 'Edit Struktur PPID')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}

    <div class="mb-4">

        <h3 class="fw-bold mb-1">
            Edit Struktur PPID
        </h3>

        <p class="text-muted mb-0">
            Perbarui informasi atau gambar Struktur PPID.
        </p>

    </div>


    {{-- ERROR --}}

    @if ($errors->any())

    <div class="alert alert-danger">

        <strong>
            Terdapat kesalahan:
        </strong>

        <ul class="mb-0 mt-2">

            @foreach ($errors->all() as $error)

            <li>
                {{ $error }}
            </li>

            @endforeach

        </ul>

    </div>

    @endif


    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <form
                action="{{ route('admin.profil.struktur-ppid.update', $struktur_ppid->id) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')


                {{-- JUDUL --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Judul Struktur PPID
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control"
                        value="{{ old('judul', $struktur_ppid->judul) }}"
                        required>

                </div>


                {{-- DESKRIPSI --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Penjelasan
                    </label>

                    <textarea
                        name="deskripsi"
                        class="form-control"
                        rows="5"
                        placeholder="Tuliskan penjelasan singkat mengenai struktur PPID...">{{ old('deskripsi', $struktur_ppid->deskripsi) }}</textarea>

                </div>


                {{-- GAMBAR LAMA --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Gambar Saat Ini
                    </label>


                    <div class="border rounded p-3">

                        <div class="text-center">

                            <img
                                src="{{ asset('storage/' . $struktur_ppid->gambar) }}"
                                alt="{{ $struktur_ppid->judul }}"
                                class="img-fluid rounded"
                                style="max-height: 500px;">

                        </div>


                        <div class="text-center mt-3">

                            <a
                                href="{{ asset('storage/' . $struktur_ppid->gambar) }}"
                                target="_blank"
                                class="btn btn-sm btn-outline-primary">

                                <i class="bi bi-eye me-1"></i>

                                Lihat Gambar

                            </a>

                        </div>

                    </div>

                </div>


                {{-- GAMBAR BARU --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Ganti Gambar
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control"
                        accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">

                    <div class="form-text">

                        Kosongkan jika tidak ingin mengganti gambar.
                        Format JPG, JPEG, PNG, atau WEBP.
                        Maksimal 10 MB.

                    </div>

                </div>


                {{-- BUTTON --}}

                <div class="d-flex gap-2">

                    <a
                        href="{{ route('admin.profil.struktur-ppid.index') }}"
                        class="btn btn-secondary">

                        Kembali

                    </a>


                    <button
                        type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-save me-1"></i>

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection