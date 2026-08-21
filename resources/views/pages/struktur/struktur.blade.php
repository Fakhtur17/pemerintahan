@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', ($struktur->judul ?? 'Struktur Kecamatan') . ' | Niotech')

@section(
'meta_description',
$struktur->deskripsi ?? 'Struktur Kecamatan | Niotech'
)

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
                        Struktur Kecamatan
                    </h1>

                    <div class="links">

                        <a href="{{ route('home') }}">
                            Home
                            <span class="slash">/</span>
                        </a>

                        Struktur Kecamatan

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    STRUKTUR
========================================================= --}}

<section class="about-section section-padding fix">

    <div class="container">

        @if($struktur)

        {{-- DESKRIPSI --}}
        @if($struktur->deskripsi)

        <div class="section-title text-center mxw-900 mx-auto mb-40">

            <p class="section-desc wow fadeInUp"
                data-wow-delay=".2s">

                {{ $struktur->deskripsi }}

            </p>

        </div>

        @endif


        {{-- GAMBAR --}}
        @if($struktur->gambar)

        <div
            class="struktur-wrapper wow fadeInUp"
            data-wow-delay=".3s">

            <div class="struktur-card">

                <div class="struktur-image">

                    <a
                        href="{{ asset('storage/' . $struktur->gambar) }}"
                        target="_blank">

                        <img
                            src="{{ asset('storage/' . $struktur->gambar) }}"
                            alt="{{ $struktur->judul }}">

                    </a>

                </div>


                <div class="struktur-footer">

                    <span>
                        {{ $struktur->judul }}
                    </span>

                    <a
                        href="{{ asset('storage/' . $struktur->gambar) }}"
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

        @endif

        @else

        {{-- DATA BELUM ADA --}}
        <div class="text-center py-5">

            <h3>
                Struktur Kecamatan Belum Tersedia
            </h3>

            <p class="text-muted">
                Data struktur Kecamatan belum ditambahkan.
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

    .struktur-wrapper {
        width: 100%;
    }

    .struktur-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid #eee;
        box-shadow: 0 10px 40px rgba(0, 0, 0, .08);
    }

    .struktur-image {
        padding: 30px;
        background: #f8f9fa;
        text-align: center;
    }

    .struktur-image img {
        display: block;
        width: 100%;
        max-width: 1400px;
        height: auto;
        margin: 0 auto;
        border-radius: 10px;
        transition: .3s ease;
    }

    .struktur-image a:hover img {
        transform: scale(1.01);
    }

    .struktur-footer {
        padding: 20px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        border-top: 1px solid #eee;
    }

    .struktur-footer span {
        font-weight: 600;
        color: #555;
    }

    @media (max-width: 767px) {

        .struktur-image {
            padding: 15px;
        }

        .struktur-footer {
            padding: 20px;
            flex-direction: column;
            align-items: flex-start;
        }

        .struktur-footer .theme-btn {
            width: 100%;
            text-align: center;
        }

    }
</style>

@endsection