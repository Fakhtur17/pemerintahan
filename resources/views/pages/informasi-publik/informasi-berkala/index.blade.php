@extends('layouts.app')

@section('content')


{{-- =========================================================
    BREADCRUMB / HERO
========================================================= --}}

<div class="breadcumb-section fix">

    <div
        class="breadcumb-container-wrapper"
        data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">

        <div class="container">

            <div class="shape1">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}"
                    alt="shape">
            </div>

            <div class="shape2">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}"
                    alt="shape">
            </div>

            <div class="breadcumb-wrapper">

                <div class="page-heading">

                    <h1>
                        Informasi Berkala
                    </h1>

                    <p>
                        Halaman ini berisi informasi publik yang wajib
                        disediakan dan diumumkan secara berkala.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    INFORMASI BERKALA
========================================================= --}}

<section class="regulasi-section">

    <div class="container">

        <div class="regulasi-grid">

            @forelse($jenisInformasi as $jenis)

            <a
                href="{{ route(
                    'informasi-publik.informasi-berkala.data',
                    $jenis->id
                ) }}"
                class="regulasi-card">

                {{-- ICON --}}

                <div class="regulasi-icon">

                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">

                        <path
                            d="M4 4.5C4 3.67157 4.67157 3 5.5 3H10L12 5H18.5C19.3284 5 20 5.67157 20 6.5V19.5C20 20.3284 19.3284 21 18.5 21H5.5C4.67157 21 4 20.3284 4 19.5V4.5Z"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round" />

                        <path
                            d="M8 10H16"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round" />

                        <path
                            d="M8 14H16"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round" />

                        <path
                            d="M8 18H13"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round" />

                    </svg>

                </div>


                {{-- CONTENT --}}

                <div class="regulasi-content">

                    <h4>
                        {{ $jenis->nama_jenis }}
                    </h4>

                    @if($jenis->deskripsi)

                    <p>
                        {{ $jenis->deskripsi }}
                    </p>

                    @else

                    <p>
                        Informasi terkait
                        {{ strtolower($jenis->nama_jenis) }}.
                    </p>

                    @endif


                    {{-- JUMLAH DOKUMEN --}}

                    <div class="regulasi-meta">

                        <span>

                            <i class="bi bi-file-earmark-text"></i>

                            {{ $jenis->data_count }}

                            Dokumen

                        </span>

                        <span>

                            Lihat

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>

            </a>

            @empty

            <div
                class="col-12 text-center py-5"
                style="grid-column: 1 / -1;">

                <div class="regulasi-card">

                    <div class="regulasi-icon">

                        <i class="bi bi-folder-x fs-3"></i>

                    </div>

                    <div class="regulasi-content">

                        <h4>
                            Belum Ada Informasi
                        </h4>

                        <p>
                            Belum tersedia jenis informasi berkala.
                        </p>

                    </div>

                </div>

            </div>

            @endforelse

        </div>

    </div>

</section>


@endsection