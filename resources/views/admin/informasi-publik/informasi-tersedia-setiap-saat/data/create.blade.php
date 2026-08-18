@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-4">

    <div class="mb-4">

        <div class="text-muted small mb-2">

            Informasi Publik
            /
            Informasi Tersedia Setiap Saat
            /
            {{ $jenisInformasiTersediaSetiapSaat->nama_jenis }}
            /
            Tambah Data

        </div>

        <h4 class="fw-bold">
            Tambah Data Informasi
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
                'admin.informasi-publik.informasi-tersedia-setiap-saat.data.store',
                $jenisInformasiTersediaSetiapSaat
            ) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf


                <div class="mb-4">

                    <label class="form-label fw-semibold">

                        Jenis Informasi

                    </label>

                    <input type="text"
                        class="form-control bg-light"
                        value="{{ $jenisInformasiTersediaSetiapSaat->nama_jenis }}"
                        readonly>

                </div>


                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Tahun
                            <span class="text-danger">*</span>

                        </label>

                        <input type="number"
                            name="tahun"
                            class="form-control"
                            min="2000"
                            max="2100"
                            value="{{ old(
                                   'tahun',
                                   date('Y')
                               ) }}"
                            required>

                    </div>


                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Tanggal Upload
                            <span class="text-danger">*</span>

                        </label>

                        <input type="date"
                            name="tanggal_upload"
                            class="form-control"
                            value="{{ old(
                                   'tanggal_upload',
                                   date('Y-m-d')
                               ) }}"
                            required>

                    </div>

                </div>


                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Nama SKPD/Badan Publik
                        <span class="text-danger">*</span>

                    </label>

                    <input type="text"
                        name="nama_skpd"
                        class="form-control"
                        value="{{ old('nama_skpd') }}"
                        placeholder="Contoh: BAGIAN UMUM"
                        required>

                </div>


                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Jenis Dokumen
                        <span class="text-danger">*</span>

                    </label>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="border rounded p-3">

                                <div class="form-check">

                                    <input type="radio"
                                        name="tipe_dokumen"
                                        value="file"
                                        id="tipeFile"
                                        class="form-check-input"
                                        checked>

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


                        <div class="col-md-6">

                            <div class="border rounded p-3">

                                <div class="form-check">

                                    <input type="radio"
                                        name="tipe_dokumen"
                                        value="link"
                                        id="tipeLink"
                                        class="form-check-input">

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


                <div class="mb-3"
                    id="fileWrapper">

                    <label class="form-label fw-semibold">

                        File PDF
                        <span class="text-danger">*</span>

                    </label>

                    <input type="file"
                        name="file"
                        id="file"
                        class="form-control"
                        accept=".pdf,application/pdf">

                    <small class="text-muted">

                        Maksimal ukuran 10 MB.

                    </small>

                </div>


                <div class="mb-3 d-none"
                    id="linkWrapper">

                    <label class="form-label fw-semibold">

                        URL / Link
                        <span class="text-danger">*</span>

                    </label>

                    <input type="url"
                        name="link_url"
                        id="link_url"
                        class="form-control"
                        value="{{ old('link_url') }}"
                        placeholder="https://...">

                </div>


                <div class="mb-4">

                    <label class="form-label fw-semibold">

                        Keterangan

                    </label>

                    <textarea name="keterangan"
                        rows="5"
                        class="form-control"
                        placeholder="Keterangan dokumen...">{{ old('keterangan') }}</textarea>

                </div>


                <div class="d-flex gap-2">

                    <a href="{{ route(
                        'admin.informasi-publik.informasi-tersedia-setiap-saat.data.index',
                        $jenisInformasiTersediaSetiapSaat
                    ) }}"
                        class="btn btn-light border">

                        Kembali

                    </a>

                    <button type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-save me-1"></i>

                        Simpan Data

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


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