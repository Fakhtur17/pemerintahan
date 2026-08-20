@extends('layouts.app', [
'headerVariant' => 'blog',
'footerVariant' => 'blog',
])

@section('title', 'Berita Kecamatan | Niotech')
@section('meta_description', 'Informasi dan berita terbaru seputar kegiatan, pelayanan, dan perkembangan Kecamatan.')

@section('content')

{{-- =========================================================
    BREADCRUMB / HERO
========================================================= --}}

<div class="breadcumb-section fix">
    <div
        class="breadcumb-container-wrapper"
        data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">

        <div class="container">

            {{-- SHAPE 1 --}}
            <div class="shape1">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}"
                    alt="shape">
            </div>

            {{-- SHAPE 2 --}}
            <div class="shape2">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}"
                    alt="shape">
            </div>

            <div class="breadcumb-wrapper">

                <div class="page-heading">

                    <h1>
                        Berita Kecamatan
                    </h1>

                    <div class="links">
                        <a href="{{ route('home') }}">
                            Home
                            <span class="slash">/</span>
                        </a>

                        Berita Kecamatan
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>


{{-- =========================================================
    FILTER BERITA
========================================================= --}}

<section class="blog-area section-padding fix">

    <div class="container">

        <div
            class="card border-0 shadow-sm mb-5"
            style="border-radius: 10px;">

            <div class="card-body p-4">

                <form
                    action="{{ route('berita.index') }}"
                    method="GET">

                    <div class="row g-3 align-items-center">

                        {{-- SEARCH --}}
                        <div class="col-lg-6">

                            <div class="input-group">

                                <span class="input-group-text bg-white">
                                    <i class="bi bi-search"></i>
                                </span>

                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Cari berita..."
                                    value="{{ request('search') }}">

                            </div>

                        </div>


                        {{-- JENIS --}}
                        <div class="col-lg-4">

                            <select
                                name="jenis"
                                class="form-select">

                                <option value="">
                                    Semua Jenis Berita
                                </option>

                                @foreach($jenisBerita as $jenis)

                                <option
                                    value="{{ $jenis }}"
                                    @selected(request('jenis')===$jenis)>

                                    {{ $jenis }}

                                </option>

                                @endforeach

                            </select>

                        </div>


                        {{-- FILTER --}}
                        <div class="col-lg-2">

                            <button
                                type="submit"
                                class="btn btn-primary w-100">

                                <i class="bi bi-filter me-1"></i>

                                Filter

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>


        {{-- =========================================================
            DAFTAR BERITA
            MENGGUNAKAN STYLE CARD BLOG
        ========================================================= --}}

        @if($berita->count())

        {{-- =====================================================
                ROW BERITA 1
            ====================================================== --}}

        <div class="blog-card-wrap style1 mb-30">

            @foreach($berita as $item)

            <div
                class="blog-card style2 wow fadeInUp"
                data-wow-delay="{{ $loop->iteration % 3 == 1 ? '.2s' : ($loop->iteration % 3 == 2 ? '.4s' : '.6s') }}">

                {{-- =================================================
                            GAMBAR
                        ================================================== --}}

                <div class="blog-card-thumb style1">

                    @if($item->gambar)

                    <img
                        src="{{ asset('storage/' . $item->gambar) }}"
                        alt="{{ $item->judul }}">

                    @else

                    <div
                        class="w-100 h-100 d-flex align-items-center justify-content-center bg-light">

                        <i
                            class="bi bi-newspaper text-muted"
                            style="font-size: 55px;">
                        </i>

                    </div>

                    @endif

                </div>


                {{-- =================================================
                            BODY
                        ================================================== --}}

                <div class="blog-card-body">


                    {{-- =================================================
                                META
                            ================================================== --}}

                    <div class="tag-cloud">

                        {{-- ADMIN --}}
                        <div class="meta">

                            <span class="icon">

                                <img
                                    src="{{ asset('assets/images/icon/userIcon.svg') }}"
                                    alt="icon">

                            </span>

                            <span class="text">
                                admin
                            </span>

                        </div>


                        {{-- JENIS --}}
                        <div class="meta">

                            <span class="icon">

                                <img
                                    src="{{ asset('assets/images/icon/tagIcon.svg') }}"
                                    alt="icon">

                            </span>

                            <span class="text">
                                {{ $item->jenis }}
                            </span>

                        </div>

                    </div>


                    {{-- =================================================
                                JUDUL
                            ================================================== --}}

                    <h3 class="blog-title style1">

                        <a href="{{ route('berita.show', $item) }}">

                            {{ $item->judul }}

                        </a>

                    </h3>


                    {{-- =================================================
                                RINGKASAN
                            ================================================== --}}

                    @if($item->ringkasan)

                    <p class="text-muted mb-3">

                        {{ Str::limit($item->ringkasan, 100) }}

                    </p>

                    @else

                    <p class="text-muted mb-3">

                        Informasi mengenai
                        {{ strtolower($item->judul) }}.

                    </p>

                    @endif


                    {{-- =================================================
                                READ MORE
                            ================================================== --}}

                    <div class="btn-wrapper">

                        <a href="{{ route('berita.show', $item) }}">

                            Baca Selengkapnya

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="10"
                                viewBox="0 0 16 10"
                                fill="none">

                                <path
                                    d="M11.6118 0.612305L10.8991 1.32503L14.0706 4.49652H0V5.50447H14.0706L10.8991 8.67592L11.6118 9.38865L16 5.00046L11.6118 0.612305Z"
                                    fill="#565656" />

                            </svg>

                        </a>

                    </div>


                    {{-- =================================================
                                CALENDAR
                            ================================================== --}}

                    <div class="calendar">

                        <div class="date">

                            {{ $item->tanggal->format('d') }}

                        </div>

                        <div class="month">

                            {{ $item->tanggal->format('M') }}

                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                        SETIAP 3 DATA BUAT ROW BARU
                    ================================================== --}}

            @if($loop->iteration % 3 == 0 && !$loop->last)

        </div>

        <div class="blog-card-wrap style1 mb-30">

            @endif

            @endforeach

        </div>


        {{-- =========================================================
                PAGINATION
            ========================================================= --}}

        <div class="mt-5">

            {{ $berita->links() }}

        </div>


        @else


        {{-- =========================================================
                EMPTY STATE
            ========================================================= --}}

        <div class="text-center py-5">

            <div class="mb-3 text-muted">

                <i
                    class="bi bi-newspaper"
                    style="font-size: 60px;">
                </i>

            </div>

            <h4 class="fw-bold">
                Berita Tidak Ditemukan
            </h4>

            <p class="text-muted mb-0">

                Belum ada berita yang sesuai dengan
                pencarian atau filter yang dipilih.

            </p>

        </div>

        @endif

    </div>

</section>

<style>
    /* =========================================================
       BERITA - CARD LEBIH LEBAR
    ========================================================= */

    .berita-page .blog-card-wrap {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 30px;
    }

    .berita-page .blog-card {
        width: 100%;
        min-width: 0;
    }

    .berita-page .blog-card-thumb {
        width: 100%;
        height: 260px;
        overflow: hidden;
    }

    .berita-page .blog-card-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .berita-page .blog-card-body {
        width: 100%;
    }

    @media (max-width: 991px) {
        .berita-page .blog-card-wrap {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 767px) {
        .berita-page .blog-card-wrap {
            grid-template-columns: 1fr;
        }
    }
</style>

@endsection