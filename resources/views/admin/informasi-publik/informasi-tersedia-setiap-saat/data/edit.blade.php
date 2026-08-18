@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    {{-- HEADER --}}

    <div class="mb-4">

        <div class="text-muted small mb-2">

            Informasi Publik

            <span class="mx-1">/</span>

            Informasi Tersedia Setiap Saat

            <span class="mx-1">/</span>

            {{ $jenisInformasiTersediaSetiapSaat->nama_jenis }}

            <span class="mx-1">/</span>

            Edit

        </div>


        <h4 class="fw-bold mb-1">

            Edit Data Informasi

        </h4>


        <p class="text-muted mb-0">

            Perbarui data dan dokumen informasi.

        </p>

    </div>


    {{-- VALIDATION ERROR --}}

    @if($errors->any())

    <div class="alert alert-danger alert-dismissible fade show">

        <div class="fw-semibold mb-2">

            Terdapat kesalahan:

        </div>

        <ul class="mb-0">

            @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

            @endforeach

        </ul>

        <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif


    {{-- FORM --}}

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form action="{{ route(
                'admin.informasi-publik.informasi-tersedia-setiap-saat.data.update',
                [
                    $jenisInformasiTersediaSetiapSaat,
                    $dataInformasiTersediaSetiapSaat
                ]
            ) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')


                {{-- JENIS INFORMASI --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">

                        Jenis Informasi

                    </label>

                    <input type="text"
                        class="form-control bg-light"
                        value="{{ $jenisInformasiTersediaSetiapSaat->nama_jenis }}"
                        readonly>

                </div>


                {{-- TAHUN & TANGGAL --}}

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Tahun

                            <span class="text-danger">*</span>

                        </label>

                        <input type="number"
                            name="tahun"
                            class="form-control @error('tahun') is-invalid @enderror"
                            min="2000"
                            max="2100"
                            value="{{ old(
                                   'tahun',
                                   $dataInformasiTersediaSetiapSaat->tahun
                               ) }}"
                            required>

                        @error('tahun')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                        @enderror

                    </div>


                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Tanggal Upload

                            <span class="text-danger">*</span>

                        </label>

                        <input type="date"
                            name="tanggal_upload"
                            class="form-control @error('tanggal_upload') is-invalid @enderror"
                            value="{{ old(
                                   'tanggal_upload',
                                   $dataInformasiTersediaSetiapSaat->tanggal_upload
                                       ? $dataInformasiTersediaSetiapSaat
                                           ->tanggal_upload
                                           ->format('Y-m-d')
                                       : ''
                               ) }}"
                            required>

                        @error('tanggal_upload')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                        @enderror

                    </div>

                </div>


                {{-- NAMA SKPD --}}

                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Nama SKPD/Badan Publik

                        <span class="text-danger">*</span>

                    </label>

                    <input type="text"
                        name="nama_skpd"
                        class="form-control @error('nama_skpd') is-invalid @enderror"
                        value="{{ old(
                               'nama_skpd',
                               $dataInformasiTersediaSetiapSaat->nama_skpd
                           ) }}"
                        placeholder="Contoh: BAGIAN UMUM"
                        required>

                    @error('nama_skpd')

                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>

                    @enderror

                </div>


                {{-- TIPE DOKUMEN --}}

                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Jenis Dokumen

                        <span class="text-danger">*</span>

                    </label>


                    <div class="row">

                        {{-- FILE --}}

                        <div class="col-md-6">

                            <div class="border rounded p-3">

                                <div class="form-check">

                                    <input type="radio"
                                        name="tipe_dokumen"
                                        value="file"
                                        id="tipeFile"
                                        class="form-check-input"

                                        {{ old(
                                               'tipe_dokumen',
                                               $dataInformasiTersediaSetiapSaat
                                                   ->tipe_dokumen
                                           ) === 'file'
                                               ? 'checked'
                                               : '' }}>

                                    <label class="form-check-label"
                                        for="tipeFile">

                                        <strong>

                                            <i class="bi bi-file-earmark-pdf
                                                      text-danger me-1">
                                            </i>

                                            Upload PDF

                                        </strong>

                                    </label>

                                </div>

                            </div>

                        </div>


                        {{-- LINK --}}

                        <div class="col-md-6">

                            <div class="border rounded p-3">

                                <div class="form-check">

                                    <input type="radio"
                                        name="tipe_dokumen"
                                        value="link"
                                        id="tipeLink"
                                        class="form-check-input"

                                        {{ old(
                                               'tipe_dokumen',
                                               $dataInformasiTersediaSetiapSaat
                                                   ->tipe_dokumen
                                           ) === 'link'
                                               ? 'checked'
                                               : '' }}>

                                    <label class="form-check-label"
                                        for="tipeLink">

                                        <strong>

                                            <i class="bi bi-link-45deg
                                                      text-primary me-1">
                                            </i>

                                            Link

                                        </strong>

                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- FILE PDF --}}

                <div class="mb-3"
                    id="fileWrapper">

                    <label class="form-label fw-semibold">

                        File PDF

                    </label>


                    @if(
                    $dataInformasiTersediaSetiapSaat->file_path
                    )

                    <div class="alert alert-light border">

                        <div class="d-flex
                                        justify-content-between
                                        align-items-center">

                            <div>

                                <i class="bi bi-file-earmark-pdf
                                              text-danger me-2">
                                </i>

                                <span class="fw-semibold">

                                    {{ $dataInformasiTersediaSetiapSaat->nama_file }}

                                </span>

                            </div>


                            <a href="{{ $dataInformasiTersediaSetiapSaat->dokumen_url }}"
                                target="_blank"
                                class="btn btn-sm btn-outline-primary">

                                <i class="bi bi-eye me-1"></i>

                                Lihat

                            </a>

                        </div>

                    </div>

                    @endif


                    <input type="file"
                        name="file"
                        id="file"
                        class="form-control @error('file') is-invalid @enderror"
                        accept=".pdf,application/pdf">

                    <small class="text-muted">

                        Kosongkan jika tidak ingin mengganti file.

                        Maksimal 10 MB.

                    </small>


                    @error('file')

                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>

                    @enderror

                </div>


                {{-- LINK --}}

                <div class="mb-3"
                    id="linkWrapper">

                    <label class="form-label fw-semibold">

                        URL / Link

                    </label>

                    <input type="url"
                        name="link_url"
                        id="link_url"
                        class="form-control @error('link_url') is-invalid @enderror"
                        value="{{ old(
                               'link_url',
                               $dataInformasiTersediaSetiapSaat->link_url
                           ) }}"
                        placeholder="https://...">

                    @error('link_url')

                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>

                    @enderror

                </div>


                {{-- KETERANGAN --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">

                        Keterangan

                    </label>

                    <textarea name="keterangan"
                        rows="5"
                        class="form-control @error('keterangan') is-invalid @enderror"
                        placeholder="Keterangan dokumen...">{{ old(
                                  'keterangan',
                                  $dataInformasiTersediaSetiapSaat->keterangan
                              ) }}</textarea>

                    @error('keterangan')

                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>

                    @enderror

                </div>


                {{-- BUTTON --}}

                <div class="d-flex gap-2">

                    <a href="{{ route(
                        'admin.informasi-publik.informasi-tersedia-setiap-saat.data.index',
                        $jenisInformasiTersediaSetiapSaat
                    ) }}"
                        class="btn btn-light border">

                        <i class="bi bi-arrow-left me-1"></i>

                        Kembali

                    </a>


                    <button type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-save me-1"></i>

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


{{-- SCRIPT --}}

<script>
    document.addEventListener(
        'DOMContentLoaded',
        function() {

            const fileRadio =
                document.getElementById('tipeFile');

            const linkRadio =
                document.getElementById('tipeLink');

            const fileWrapper =
                document.getElementById('fileWrapper');

            const linkWrapper =
                document.getElementById('linkWrapper');

            const file =
                document.getElementById('file');

            const link =
                document.getElementById('link_url');


            function toggleDocumentType() {
                if (fileRadio.checked) {

                    fileWrapper.classList.remove('d-none');

                    linkWrapper.classList.add('d-none');

                    file.disabled = false;

                    link.disabled = true;

                } else {

                    fileWrapper.classList.add('d-none');

                    linkWrapper.classList.remove('d-none');

                    file.disabled = true;

                    link.disabled = false;

                }
            }


            fileRadio.addEventListener(
                'change',
                toggleDocumentType
            );


            linkRadio.addEventListener(
                'change',
                toggleDocumentType
            );


            toggleDocumentType();

        }
    );
</script>

@endsection