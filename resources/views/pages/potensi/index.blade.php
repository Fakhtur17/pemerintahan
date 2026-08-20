@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', 'Potensi Kecamatan | PPID Utama Kabupaten Brebes')

@section(
'meta_description',
'Informasi Potensi Kecamatan Kabupaten Brebes'
)

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
                        Potensi Kecamatan
                    </h1>

                    <p>
                        Halaman ini berisi informasi mengenai berbagai
                        potensi unggulan yang dimiliki Kecamatan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    CONTENT
========================================================= --}}

<section class="py-5 bg-light">

    <div class="container">

        {{-- =====================================================
            FILTER
        ====================================================== --}}

        <div class="filter-box mb-5">

            <form
                action="{{ route('potensi-kecamatan.index') }}"
                method="GET">

                <div class="row g-3 align-items-center">

                    {{-- SEARCH --}}

                    <div class="col-lg-6">

                        <div class="search-wrapper">

                            <i class="bi bi-search"></i>

                            <input
                                type="text"
                                name="search"
                                value="{{ request('search') }}"
                                class="form-control"
                                placeholder="Cari potensi...">

                        </div>

                    </div>


                    {{-- JENIS --}}

                    <div class="col-lg-4">

                        <select
                            name="jenis"
                            class="form-select">

                            <option value="">
                                Semua Jenis Potensi
                            </option>

                            @foreach($jenisOptions as $key => $label)

                            <option
                                value="{{ $key }}"
                                @selected(request('jenis')===$key)>

                                {{ $label }}

                            </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- BUTTON --}}

                    <div class="col-lg-2">

                        <button
                            type="submit"
                            class="btn btn-primary w-100">

                            <i class="bi bi-search me-1"></i>

                            Cari

                        </button>

                    </div>

                </div>

            </form>

        </div>


        {{-- =====================================================
            CARD POTENSI
        ====================================================== --}}

        @if($potensi->count())

        <div class="row g-4">

            @foreach($potensi as $item)

            <div class="col-md-6 col-lg-4">

                <div class="potensi-card h-100">


                    {{-- IMAGE --}}

                    <div class="potensi-image">

                        @if($item->gambar)

                        <img
                            src="{{ $item->gambar_url }}"
                            alt="{{ $item->judul }}">

                        @else

                        <div class="image-placeholder">

                            <i class="bi bi-image"></i>

                        </div>

                        @endif


                        {{-- BADGE --}}

                        <span class="potensi-badge">

                            {{ $item->jenis_label }}

                        </span>

                    </div>


                    {{-- BODY --}}

                    <div class="p-4">

                        <h5 class="fw-bold mb-2">

                            {{ $item->judul }}

                        </h5>


                        {{-- LOKASI --}}

                        @if($item->lokasi)

                        <div class="location mb-3">

                            <i class="bi bi-geo-alt-fill"></i>

                            {{ $item->lokasi }}

                        </div>

                        @endif


                        {{-- DESKRIPSI --}}

                        <p class="text-muted">

                            {{ \Illuminate\Support\Str::limit(
                                        strip_tags($item->deskripsi),
                                        110
                                    ) }}

                        </p>


                        {{-- DETAIL --}}

                        <a
                            href="{{ route(
                                        'potensi-kecamatan.show',
                                        $item
                                    ) }}"
                            class="detail-link">

                            Lihat Selengkapnya

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>


        {{-- =================================================
                PAGINATION
            ================================================== --}}

        <div class="mt-5">

            {{ $potensi->links() }}

        </div>


        @else


        {{-- =================================================
                EMPTY
            ================================================== --}}

        <div class="empty-state">

            <i class="bi bi-search"></i>

            <h5>
                Potensi tidak ditemukan
            </h5>

            <p>
                Belum ada potensi yang sesuai dengan pencarian.
            </p>

            <a
                href="{{ route('potensi-kecamatan.index') }}"
                class="btn btn-outline-primary">

                Reset Pencarian

            </a>

        </div>

        @endif

    </div>

</section>


{{-- =========================================================
    STYLE
========================================================= --}}

<style>
    /* =========================================================
       SECTION
    ========================================================= */

    .section-label {

        color: #0d6efd;

        font-size: .75rem;

        font-weight: 700;

        letter-spacing: 2px;

    }


    /* =========================================================
       FILTER
    ========================================================= */

    .filter-box {

        background: white;

        border-radius: 18px;

        padding: 20px;

        box-shadow:
            0 8px 30px rgba(0, 0, 0, .06);

    }


    .search-wrapper {

        position: relative;

    }


    .search-wrapper i {

        position: absolute;

        left: 15px;

        top: 50%;

        transform: translateY(-50%);

        color: #6c757d;

    }


    .search-wrapper input {

        padding-left: 42px;

    }


    /* =========================================================
       CARD
    ========================================================= */

    .potensi-card {

        background: white;

        border-radius: 18px;

        overflow: hidden;

        border: 1px solid #edf0f2;

        transition:
            .3s;

    }


    .potensi-card:hover {

        transform: translateY(-6px);

        box-shadow:
            0 18px 40px rgba(0, 0, 0, .10);

    }


    .potensi-image {

        height: 220px;

        position: relative;

        overflow: hidden;

        background: #e9ecef;

    }


    .potensi-image img {

        width: 100%;

        height: 100%;

        object-fit: cover;

        transition: .4s;

    }


    .potensi-card:hover .potensi-image img {

        transform: scale(1.05);

    }


    .image-placeholder {

        width: 100%;

        height: 100%;

        display: flex;

        align-items: center;

        justify-content: center;

    }


    .image-placeholder i {

        font-size: 55px;

        color: #adb5bd;

    }


    .potensi-badge {

        position: absolute;

        left: 15px;

        top: 15px;

        background: white;

        color: #0d6efd;

        padding: 6px 12px;

        border-radius: 50px;

        font-size: .75rem;

        font-weight: 700;

        box-shadow:
            0 4px 12px rgba(0, 0, 0, .1);

    }


    .location {

        color: #6c757d;

        font-size: .85rem;

    }


    .location i {

        color: #dc3545;

        margin-right: 4px;

    }


    .detail-link {

        text-decoration: none;

        font-weight: 600;

        color: #0d6efd;

    }


    .detail-link i {

        margin-left: 5px;

        transition: .2s;

    }


    .detail-link:hover i {

        margin-left: 10px;

    }


    /* =========================================================
       EMPTY
    ========================================================= */

    .empty-state {

        background: white;

        border-radius: 18px;

        padding: 70px 20px;

        text-align: center;

    }


    .empty-state>i {

        font-size: 50px;

        color: #adb5bd;

    }


    .empty-state h5 {

        margin-top: 20px;

        font-weight: 700;

    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 767px) {

        .filter-box {

            padding: 15px;

        }

        .potensi-image {

            height: 200px;

        }

    }
</style>


@endsection