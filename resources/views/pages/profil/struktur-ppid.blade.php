@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', ($strukturPpid->judul ?? 'Struktur PPID') . ' | Niotech')

@section('meta_description', $strukturPpid->deskripsi ?? 'Struktur PPID Kabupaten Brebes | Niotech')

@section('content')

{{-- =========================================================
BREADCRUMB
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
                        Struktur PPID
                    </h1>

                    <div class="links">

                        <a href="{{ route('home') }}">
                            Home
                            <span class="slash">/</span>
                        </a>

                        Struktur PPID

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
STRUKTUR PPID
========================================================= --}}

<section class="about-section section-padding fix">

    <div class="container">

        @if($strukturPpid)

        {{-- JUDUL --}}

        <div class="section-title text-center mxw-900 mx-auto mb-40">


            {{-- DESKRIPSI DARI ADMIN --}}

            @if($strukturPpid->deskripsi)

            <p
                class="section-desc wow fadeInUp"
                data-wow-delay=".6s">

                {{ $strukturPpid->deskripsi }}

            </p>

            @endif

        </div>


        {{-- =================================================
            GAMBAR DARI ADMIN
            ================================================== --}}

        <div
            class="struktur-ppid-wrapper wow fadeInUp"
            data-wow-delay=".3s">

            <div class="struktur-ppid-card">

                <div class="struktur-ppid-image">

                    <a
                        href="{{ asset('storage/' . $strukturPpid->gambar) }}"
                        target="_blank">

                        <img
                            src="{{ asset('storage/' . $strukturPpid->gambar) }}"
                            alt="{{ $strukturPpid->judul }}">

                    </a>

                </div>


                {{-- BUTTON --}}

                <div class="struktur-ppid-footer">

                    <span>

                        {{ $strukturPpid->judul }}

                    </span>


                    <a
                        href="{{ asset('storage/' . $strukturPpid->gambar) }}"
                        target="_blank"
                        class="theme-btn">

                        Lihat Gambar

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none">

                            <path
                                d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603L0 7.49603V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L11.6118 3.61182Z"
                                fill="white" />

                        </svg>

                    </a>

                </div>

            </div>

        </div>


        @else

        {{-- DATA BELUM ADA --}}

        <div class="text-center py-5">

            <h3>
                Struktur PPID Belum Tersedia
            </h3>

            <p class="text-muted">
                Data Struktur PPID belum ditambahkan.
            </p>

        </div>

        @endif

    </div>

</section>


{{-- =========================================================
STYLE
========================================================= --}}

<style>
    .mxw-900 {
        max-width: 900px;
    }


    .struktur-ppid-wrapper {
        width: 100%;
    }


    .struktur-ppid-card {

        background: #fff;

        border-radius: 20px;

        overflow: hidden;

        border: 1px solid #eee;

        box-shadow:
            0 10px 40px rgba(0, 0, 0, .08);

    }


    .struktur-ppid-image {

        padding: 30px;

        background: #f8f9fa;

        text-align: center;

    }


    .struktur-ppid-image img {

        display: block;

        width: 100%;

        max-width: 1400px;

        height: auto;

        margin: 0 auto;

        border-radius: 10px;

        transition: .3s ease;

    }


    .struktur-ppid-image a:hover img {

        transform: scale(1.01);

    }


    .struktur-ppid-footer {

        padding: 20px 30px;

        display: flex;

        justify-content: space-between;

        align-items: center;

        gap: 20px;

        border-top: 1px solid #eee;

    }


    .struktur-ppid-footer span {

        font-weight: 600;

        color: #555;

    }


    @media (max-width: 767px) {

        .struktur-ppid-image {
            padding: 15px;
        }


        .struktur-ppid-footer {

            padding: 20px;

            flex-direction: column;

            align-items: flex-start;

        }


        .struktur-ppid-footer .theme-btn {

            width: 100%;

            text-align: center;

        }

    }
</style>

@endsection