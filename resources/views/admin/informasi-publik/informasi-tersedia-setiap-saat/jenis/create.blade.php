@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    <div class="mb-4">

        <div class="text-muted small mb-2">

            Informasi Publik
            /
            Informasi Tersedia Setiap Saat
            /
            Tambah Jenis

        </div>

        <h4 class="fw-bold">
            Tambah Jenis Informasi
        </h4>

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


    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form action="{{ route(
                'admin.informasi-publik.informasi-tersedia-setiap-saat.jenis.store'
            ) }}"
                method="POST">

                @csrf


                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Nama Jenis Informasi
                        <span class="text-danger">*</span>

                    </label>

                    <input type="text"
                        name="nama_jenis"
                        class="form-control"
                        value="{{ old('nama_jenis') }}"
                        placeholder="Contoh: Informasi tentang Peraturan"
                        required>

                </div>


                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Deskripsi

                    </label>

                    <textarea name="deskripsi"
                        rows="4"
                        class="form-control"
                        placeholder="Deskripsi jenis informasi...">{{ old('deskripsi') }}</textarea>

                </div>


                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Urutan

                        </label>

                        <input type="number"
                            name="urutan"
                            class="form-control"
                            min="0"
                            value="{{ old('urutan', 0) }}">

                    </div>


                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Status

                        </label>

                        <div class="form-check mt-2">

                            <input type="checkbox"
                                name="aktif"
                                value="1"
                                class="form-check-input"
                                id="aktif"
                                checked>

                            <label class="form-check-label"
                                for="aktif">

                                Aktif

                            </label>

                        </div>

                    </div>

                </div>


                <div class="d-flex gap-2 mt-3">

                    <a href="{{ route(
                        'admin.informasi-publik.informasi-tersedia-setiap-saat.index'
                    ) }}"
                        class="btn btn-light border">

                        Kembali

                    </a>

                    <button type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-save me-1"></i>

                        Simpan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection