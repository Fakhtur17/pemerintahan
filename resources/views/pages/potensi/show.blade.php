@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', $potensiKecamatan->judul . ' | Potensi Kecamatan')

@section('meta_description', 'Detail potensi Kecamatan')

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

                    <div class="potensi-breadcrumb">

                        <a href="{{ route('potensi-kecamatan.index') }}">
                            Potensi Kecamatan
                        </a>

                        <span>/</span>

                        <span>
                            {{ $potensiKecamatan->jenis_label }}
                        </span>

                    </div>

                    <h1>
                        {{ $potensiKecamatan->judul }}
                    </h1>

                    @if($potensiKecamatan->lokasi)

                    <p>
                        <i class="bi bi-geo-alt-fill me-1"></i>
                        {{ $potensiKecamatan->lokasi }}
                    </p>

                    @endif

                </div>

            </div>

        </div>

    </div>

</div>



{{-- =========================================================
    ARTIKEL / DETAIL INFORMASI
========================================================= --}}

<section class="potensi-content">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">

                {{-- META --}}

                <div class="potensi-meta">

                    <span>
                        {{ $potensiKecamatan->jenis_label }}
                    </span>

                    @if($potensiKecamatan->lokasi)

                    <span class="separator">•</span>

                    <span>
                        <i class="bi bi-geo-alt"></i>
                        {{ $potensiKecamatan->lokasi }}
                    </span>

                    @endif

                </div>


                {{-- JUDUL --}}

                <h2 class="potensi-title">

                    {{ $potensiKecamatan->judul }}

                </h2>


                {{-- GAMBAR --}}

                @if($potensiKecamatan->gambar)

                <div class="potensi-main-image">

                    <img
                        src="{{ $potensiKecamatan->gambar_url }}"
                        alt="{{ $potensiKecamatan->judul }}">

                </div>

                @else

                <div class="potensi-no-image">

                    <i class="bi bi-image"></i>

                    <span>
                        Gambar belum tersedia
                    </span>

                </div>

                @endif


                {{-- LOKASI --}}

                @if($potensiKecamatan->lokasi)

                <div class="potensi-location-box">

                    <div class="location-icon">

                        <i class="bi bi-geo-alt-fill"></i>

                    </div>

                    <div>

                        <div class="location-label">
                            Lokasi
                        </div>

                        <div class="location-value">
                            {{ $potensiKecamatan->lokasi }}
                        </div>

                    </div>

                </div>

                @endif


                {{-- ISI INFORMASI --}}

                <div class="potensi-description">

                    <h4>
                        Tentang {{ $potensiKecamatan->judul }}
                    </h4>

                    <div class="description-text">

                        {!! nl2br(
                        e($potensiKecamatan->deskripsi)
                        ) !!}

                    </div>

                </div>


                {{-- GARIS --}}

                <div class="potensi-divider"></div>


                {{-- POTENSI TERKAIT --}}

                @if($potensiTerkait->count())

                <div class="potensi-related">

                    <div class="related-title">

                        <h3>
                            Potensi Lainnya
                        </h3>

                        <p>
                            Informasi potensi lainnya dalam kategori
                            {{ $potensiKecamatan->jenis_label }}.
                        </p>

                    </div>


                    <div class="row g-4">

                        @foreach($potensiTerkait as $item)

                        <div class="col-md-6 col-lg-4">

                            <article class="related-item">

                                @if($item->gambar)

                                <a
                                    href="{{ route(
                                        'potensi-kecamatan.show',
                                        $item
                                    ) }}"
                                    class="related-image">

                                    <img
                                        src="{{ $item->gambar_url }}"
                                        alt="{{ $item->judul }}">

                                </a>

                                @else

                                <a
                                    href="{{ route(
                                        'potensi-kecamatan.show',
                                        $item
                                    ) }}"
                                    class="related-image no-image">

                                    <i class="bi bi-image"></i>

                                </a>

                                @endif


                                <div class="related-body">

                                    <div class="related-category">

                                        {{ $item->jenis_label }}

                                    </div>

                                    <h5>

                                        <a
                                            href="{{ route(
                                                'potensi-kecamatan.show',
                                                $item
                                            ) }}">

                                            {{ $item->judul }}

                                        </a>

                                    </h5>


                                    @if($item->lokasi)

                                    <div class="related-location">

                                        <i class="bi bi-geo-alt"></i>

                                        {{ $item->lokasi }}

                                    </div>

                                    @endif


                                    <a
                                        href="{{ route(
                                            'potensi-kecamatan.show',
                                            $item
                                        ) }}"
                                        class="related-link">

                                        Selengkapnya
                                        <i class="bi bi-arrow-right"></i>

                                    </a>

                                </div>

                            </article>

                        </div>

                        @endforeach

                    </div>

                </div>

                @endif


                {{-- KEMBALI --}}

                <div class="potensi-back">

                    <a
                        href="{{ route('potensi-kecamatan.index') }}">

                        <i class="bi bi-arrow-left"></i>

                        Kembali ke Potensi Kecamatan

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



<style>
    /* =========================================================
   BREADCRUMB
========================================================= */

    .potensi-breadcrumb {

        display: flex;
        align-items: center;
        gap: 9px;

        margin-bottom: 12px;

        font-size: 14px;

        color: rgba(255, 255, 255, .75);
    }

    .potensi-breadcrumb a {

        color: rgba(255, 255, 255, .75);

        text-decoration: none;
    }

    .potensi-breadcrumb a:hover {

        color: #fff;
    }

    .page-heading>p {

        color: rgba(255, 255, 255, .8);

        font-size: 14px;

        margin-top: 10px;

    }



    /* =========================================================
   CONTENT
========================================================= */

    .potensi-content {

        background: #fff;

        padding: 70px 0 90px;
    }



    /* =========================================================
   META
========================================================= */

    .potensi-meta {

        display: flex;

        align-items: center;

        gap: 10px;

        color: #777;

        font-size: 13px;

        margin-bottom: 15px;
    }

    .potensi-meta>span:first-child {

        color: #0d6efd;

        font-weight: 600;
    }

    .potensi-meta .separator {

        color: #bbb;
    }



    /* =========================================================
   TITLE
========================================================= */

    .potensi-title {

        font-size: 34px;

        line-height: 1.35;

        font-weight: 700;

        color: #202124;

        margin-bottom: 30px;
    }



    /* =========================================================
   MAIN IMAGE
========================================================= */

    .potensi-main-image {

        width: 100%;

        max-height: 520px;

        overflow: hidden;

        margin-bottom: 30px;

        background: #f5f5f5;
    }

    .potensi-main-image img {

        display: block;

        width: 100%;

        max-height: 520px;

        object-fit: cover;
    }



    /* =========================================================
   NO IMAGE
========================================================= */

    .potensi-no-image {

        height: 400px;

        background: #f5f6f7;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        color: #aaa;

        margin-bottom: 30px;
    }

    .potensi-no-image i {

        font-size: 55px;

        margin-bottom: 10px;
    }



    /* =========================================================
   LOCATION
========================================================= */

    .potensi-location-box {

        display: flex;

        align-items: center;

        gap: 13px;

        padding: 17px 20px;

        margin-bottom: 35px;

        background: #f7f8fa;

        border-left: 3px solid #0d6efd;
    }

    .location-icon {

        color: #0d6efd;

        font-size: 20px;
    }

    .location-label {

        font-size: 12px;

        color: #888;

        margin-bottom: 2px;
    }

    .location-value {

        font-size: 14px;

        color: #333;

        font-weight: 600;
    }



    /* =========================================================
   DESCRIPTION
========================================================= */

    .potensi-description {

        color: #4d4d4d;

        font-size: 15px;

        line-height: 1.9;
    }

    .potensi-description h4 {

        font-size: 21px;

        font-weight: 700;

        color: #222;

        margin-bottom: 18px;
    }

    .description-text {

        white-space: normal;
    }



    /* =========================================================
   DIVIDER
========================================================= */

    .potensi-divider {

        height: 1px;

        background: #e8e8e8;

        margin: 55px 0;
    }



    /* =========================================================
   RELATED
========================================================= */

    .related-title {

        margin-bottom: 25px;
    }

    .related-title h3 {

        font-size: 24px;

        font-weight: 700;

        color: #222;

        margin-bottom: 6px;
    }

    .related-title p {

        margin: 0;

        color: #777;

        font-size: 14px;
    }



    /* =========================================================
   RELATED ITEM
========================================================= */

    .related-item {

        height: 100%;

        border: 1px solid #e8e8e8;

        background: #fff;

        transition: .25s ease;
    }

    .related-item:hover {

        border-color: #d5d5d5;

        transform: translateY(-3px);
    }



    /* IMAGE */

    .related-image {

        display: block;

        height: 180px;

        overflow: hidden;

        background: #f3f3f3;
    }

    .related-image img {

        width: 100%;

        height: 100%;

        object-fit: cover;

        transition: transform .3s ease;
    }

    .related-item:hover .related-image img {

        transform: scale(1.03);
    }

    .related-image.no-image {

        display: flex;

        align-items: center;

        justify-content: center;

        color: #aaa;

        text-decoration: none;
    }

    .related-image.no-image i {

        font-size: 45px;
    }



    /* BODY */

    .related-body {

        padding: 18px;
    }

    .related-category {

        font-size: 11px;

        color: #0d6efd;

        text-transform: uppercase;

        font-weight: 600;

        margin-bottom: 7px;
    }

    .related-body h5 {

        margin-bottom: 8px;

        line-height: 1.4;
    }

    .related-body h5 a {

        color: #222;

        text-decoration: none;

        font-size: 17px;
    }

    .related-body h5 a:hover {

        color: #0d6efd;
    }



    /* LOCATION */

    .related-location {

        color: #777;

        font-size: 12px;

        margin-bottom: 15px;
    }

    .related-location i {

        margin-right: 4px;

        color: #dc3545;
    }



    /* LINK */

    .related-link {

        color: #0d6efd;

        font-size: 13px;

        font-weight: 600;

        text-decoration: none;
    }

    .related-link i {

        margin-left: 4px;

        transition: .2s;
    }

    .related-link:hover i {

        margin-left: 8px;
    }



    /* =========================================================
   BACK
========================================================= */

    .potensi-back {

        margin-top: 55px;

        padding-top: 25px;

        border-top: 1px solid #eee;
    }

    .potensi-back a {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        color: #555;

        font-size: 14px;

        text-decoration: none;
    }

    .potensi-back a:hover {

        color: #0d6efd;
    }



    /* =========================================================
   RESPONSIVE
========================================================= */

    @media (max-width: 767px) {

        .potensi-content {

            padding: 50px 0 70px;
        }

        .potensi-title {

            font-size: 27px;
        }

        .potensi-main-image {

            max-height: 350px;
        }

        .potensi-main-image img {

            max-height: 350px;
        }

        .potensi-meta {

            flex-wrap: wrap;
        }

    }
</style>

@endsection