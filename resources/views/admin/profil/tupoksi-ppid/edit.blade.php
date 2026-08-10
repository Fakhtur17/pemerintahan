@extends('admin.layouts.app')

@section('title', 'Edit Tupoksi PPID')

@section('content')

    <div class="container-fluid">

        {{-- HEADER --}}

        <div class="mb-4">

            <h3 class="fw-bold mb-1">
                Edit Tupoksi PPID
            </h3>

            <p class="text-muted mb-0">
                Perbarui informasi atau dokumen Tupoksi PPID.
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
                    action="{{ route('admin.profil.tupoksi-ppid.update', $tupoksi_ppid->id) }}"
                    method="POST" enctype="multipart/form-data">

                    @csrf

                    @method('PUT')


                    {{-- JUDUL --}}

                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Judul Tupoksi
                        </label>

                        <input type="text" name="judul" class="form-control"
                            value="{{ old('judul', $tupoksi_ppid->judul) }}"
                            required>

                    </div>


                    {{-- PDF LAMA --}}

                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Dokumen Saat Ini
                        </label>

                        <div class="border rounded p-3">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>

                                    <i class="bi bi-file-earmark-pdf text-danger me-2"></i>

                                    Dokumen Tupoksi PPID

                                </div>


                                <a href="{{ asset('storage/' . $tupoksi_ppid->file_pdf) }}"
                                    target="_blank" class="btn btn-sm btn-outline-primary">

                                    <i class="bi bi-eye me-1"></i>

                                    Lihat PDF

                                </a>

                            </div>

                        </div>

                    </div>


                    {{-- PDF BARU --}}

                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Ganti Dokumen PDF
                        </label>

                        <input type="file" name="file_pdf" class="form-control" accept=".pdf,application/pdf">

                        <div class="form-text">

                            Kosongkan jika tidak ingin mengganti PDF.
                            Maksimal 20 MB.

                        </div>

                    </div>


                    {{-- BUTTON --}}

                    <div class="d-flex gap-2">

                        <a href="{{ route('admin.profil.tupoksi-ppid.index') }}"
                            class="btn btn-secondary">
                            Kembali
                        </a>


                        <button type="submit" class="btn btn-primary">

                            <i class="bi bi-save me-1"></i>

                            Simpan Perubahan

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
