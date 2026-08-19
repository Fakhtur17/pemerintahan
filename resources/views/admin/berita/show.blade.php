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

            Detail Berita

        </div>

    </div>


    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    {{-- JENIS --}}
                    <div class="mb-3">

                        <span class="badge bg-primary">
                            {{ $berita->jenis }}
                        </span>

                        @if($berita->status === 'terbit')

                        <span class="badge bg-success">
                            Terbit
                        </span>

                        @else

                        <span class="badge bg-warning text-dark">
                            Draft
                        </span>

                        @endif

                    </div>


                    {{-- JUDUL --}}
                    <h2 class="fw-bold mb-3">
                        {{ $berita->judul }}
                    </h2>


                    {{-- TANGGAL --}}
                    <div class="text-muted small mb-4">

                        <i class="bi bi-calendar3 me-1"></i>

                        {{ $berita->tanggal->translatedFormat(
                            'd F Y'
                        ) }}

                    </div>


                    {{-- GAMBAR --}}
                    @if($berita->gambar)

                    <div class="mb-4">

                        <img
                            src="{{ asset(
                                    'storage/' . $berita->gambar
                                ) }}"
                            alt="{{ $berita->judul }}"
                            class="img-fluid rounded"
                            style="
                                    width: 100%;
                                    max-height: 500px;
                                    object-fit: cover;
                                ">

                    </div>

                    @endif


                    {{-- RINGKASAN --}}
                    @if($berita->ringkasan)

                    <div class="p-3 bg-light rounded mb-4">

                        <div class="fw-semibold mb-1">
                            Ringkasan
                        </div>

                        <div class="text-muted">
                            {{ $berita->ringkasan }}
                        </div>

                    </div>

                    @endif


                    {{-- ISI --}}
                    <div class="berita-content">

                        {!! nl2br(
                        e($berita->isi)
                        ) !!}

                    </div>


                    {{-- ACTION --}}
                    <div class="d-flex justify-content-end gap-2 mt-5">

                        <a
                            href="{{ route('admin.berita.index') }}"
                            class="btn btn-light border">
                            Kembali
                        </a>

                        <a
                            href="{{ route(
                                'admin.berita.edit',
                                $berita
                            ) }}"
                            class="btn btn-primary">
                            <i class="bi bi-pencil me-1"></i>
                            Edit Berita
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection