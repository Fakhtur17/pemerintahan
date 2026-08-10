@extends('admin.layouts.app')

@section('title', 'Edit Visi & Misi')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white py-3">

            <h5 class="fw-bold mb-0">
                Edit {{ strtoupper($data->jenis) }}
            </h5>

        </div>


        <div class="card-body">

            <form
                action="{{ route('admin.profil.visi-misi.update', $data->id) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')


                {{-- JENIS --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Jenis
                    </label>

                    <select
                        name="jenis"
                        class="form-select @error('jenis') is-invalid @enderror"
                        required>

                        <option
                            value="visi"
                            {{ old('jenis', $data->jenis) == 'visi' ? 'selected' : '' }}>

                            Visi

                        </option>

                        <option
                            value="misi"
                            {{ old('jenis', $data->jenis) == 'misi' ? 'selected' : '' }}>

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
                        required>{{ old('isi', $data->isi) }}</textarea>

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
                        value="{{ old('urutan', $data->urutan) }}"
                        min="0"
                        class="form-control">

                </div>


                {{-- GAMBAR SAAT INI --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Gambar Saat Ini
                    </label>

                    <div>

                        @if($data->gambar)

                            <img
                                src="{{ asset('storage/' . $data->gambar) }}"
                                alt="{{ $data->jenis }}"
                                width="250"
                                class="img-thumbnail">

                        @else

                            <p class="text-muted mb-0">
                                Belum ada gambar untuk bagian ini.
                            </p>

                        @endif

                    </div>

                </div>


                {{-- GANTI GAMBAR --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Ganti Gambar
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control @error('gambar') is-invalid @enderror"
                        accept=".jpg,.jpeg,.png,.webp">

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti gambar.
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
                        {{ old('aktif', $data->aktif) ? 'checked' : '' }}>

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
                    Update

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