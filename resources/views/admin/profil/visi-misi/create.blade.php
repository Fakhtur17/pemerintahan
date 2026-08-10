@extends('admin.layouts.app')

@section('title', 'Tambah Visi & Misi')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white py-3">

            <h5 class="fw-bold mb-0">
                Tambah Visi / Misi
            </h5>

        </div>


        <div class="card-body">

            <form
                action="{{ route('admin.profil.visi-misi.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf


                {{-- JENIS --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Jenis
                    </label>

                    <select
                        name="jenis"
                        class="form-select @error('jenis') is-invalid @enderror"
                        required>

                        <option value="">
                            -- Pilih Jenis --
                        </option>

                        <option
                            value="visi"
                            {{ old('jenis') == 'visi' ? 'selected' : '' }}>

                            Visi

                        </option>

                        <option
                            value="misi"
                            {{ old('jenis') == 'misi' ? 'selected' : '' }}>

                            Misi

                        </option>

                    </select>

                    @error('jenis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- ISI --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Isi
                    </label>

                    <textarea
                        name="isi"
                        rows="12"
                        class="form-control @error('isi') is-invalid @enderror"
                        placeholder="Masukkan isi Visi atau Misi..."
                        required>{{ old('isi') }}</textarea>

                    <small class="text-muted">
                        Untuk Misi, setiap poin dapat ditulis pada baris baru.
                    </small>

                    @error('isi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- URUTAN --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Urutan Tampil
                    </label>

                    <input
                        type="number"
                        name="urutan"
                        value="{{ old('urutan', 0) }}"
                        min="0"
                        class="form-control @error('urutan') is-invalid @enderror">

                    <small class="text-muted">
                        Angka lebih kecil akan tampil lebih dahulu.
                    </small>

                    @error('urutan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- GAMBAR --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Gambar
                        <span class="text-muted">
                            (Opsional)
                        </span>
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control @error('gambar') is-invalid @enderror"
                        accept=".jpg,.jpeg,.png,.webp">

                    <small class="text-muted">
                        Format JPG, JPEG, PNG, WEBP. Maksimal 2MB.
                    </small>

                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- AKTIF --}}
                <div class="form-check mb-4">

                    <input
                        type="checkbox"
                        name="aktif"
                        value="1"
                        id="aktif"
                        class="form-check-input"
                        checked>

                    <label
                        class="form-check-label"
                        for="aktif">

                        Tampilkan di halaman publik

                    </label>

                </div>


                {{-- BUTTON --}}
                <button
                    type="submit"
                    class="btn btn-success">

                    <i class="bi bi-save me-1"></i>
                    Simpan

                </button>


                <a
                    href="{{ route('admin.profil.visi-misi.index') }}"
                    class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

@endsection