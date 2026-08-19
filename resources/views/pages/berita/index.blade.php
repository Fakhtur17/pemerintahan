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

                    <p>
                        Informasi dan berita terbaru seputar kegiatan,
                        pelayanan, dan perkembangan Kecamatan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>



{{-- =========================================================
    DAFTAR BERITA
========================================================= --}}

<section class="regulasi-section">

    <div class="container">


        {{-- =====================================================
            FILTER BERITA
        ====================================================== --}}

        <div class="card border-0 shadow-sm mb-5">

            <div class="card-body p-4">

                <form
                    action="{{ route('berita.index') }}"
                    method="GET">

                    <div class="row g-3 align-items-center">


                        {{-- SEARCH --}}
                        <div class="col-lg-6">

                            <div class="input-group">

                                <span
                                    class="input-group-text bg-white">

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
                                    @selected(
                                    request('jenis')===$jenis
                                    )>

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



        {{-- =====================================================
            GRID BERITA
        ====================================================== --}}

        @if($berita->count())

        <div class="row g-4">

            @foreach($berita as $item)

            <div class="col-xl-4 col-lg-4 col-md-6">


                <article
                    class="card h-100 border-0 shadow-sm overflow-hidden">


                    {{-- =================================================
                                GAMBAR
                            ================================================== --}}

                    <div
                        style="
                                    height: 230px;
                                    overflow: hidden;
                                ">

                        @if($item->gambar)

                        <img
                            src="{{ asset(
                                            'storage/' . $item->gambar
                                        ) }}"
                            alt="{{ $item->judul }}"
                            class="w-100 h-100"
                            style="
                                            object-fit: cover;
                                            transition: transform .4s ease;
                                        ">

                        @else

                        <div
                            class="
                                            w-100
                                            h-100
                                            bg-light
                                            d-flex
                                            align-items-center
                                            justify-content-center
                                        ">

                            <i
                                class="bi bi-newspaper text-muted"
                                style="
                                                font-size: 55px;
                                            ">
                            </i>

                        </div>

                        @endif

                    </div>



                    {{-- =================================================
                                CONTENT
                            ================================================== --}}

                    <div
                        class="
                                    card-body
                                    d-flex
                                    flex-column
                                    p-4
                                ">


                        {{-- JENIS + TANGGAL --}}

                        <div
                            class="
                                        d-flex
                                        align-items-center
                                        justify-content-between
                                        gap-2
                                        mb-3
                                    ">

                            <span
                                class="
                                            badge
                                            bg-primary-subtle
                                            text-primary
                                        ">

                                {{ $item->jenis }}

                            </span>


                            <small class="text-muted">

                                <i
                                    class="bi bi-calendar3 me-1">
                                </i>

                                {{ $item->tanggal->format(
                                            'd M Y'
                                        ) }}

                            </small>

                        </div>



                        {{-- JUDUL --}}

                        <h5
                            class="
                                        fw-bold
                                        mb-2
                                    ">

                            {{ $item->judul }}

                        </h5>



                        {{-- RINGKASAN --}}

                        @if($item->ringkasan)

                        <p
                            class="
                                            text-muted
                                            mb-4
                                        ">

                            {{ Str::limit(
                                            $item->ringkasan,
                                            120
                                        ) }}

                        </p>

                        @else

                        <p
                            class="
                                            text-muted
                                            mb-4
                                        ">

                            Informasi mengenai
                            {{ strtolower($item->judul) }}.

                        </p>

                        @endif



                        {{-- DETAIL --}}

                        <div class="mt-auto">

                            <a
                                href="{{ route(
                                            'berita.show',
                                            $item
                                        ) }}"
                                class="
                                            text-decoration-none
                                            fw-semibold
                                        ">

                                Baca Selengkapnya

                                <i
                                    class="
                                                bi
                                                bi-arrow-right
                                                ms-1
                                            ">
                                </i>

                            </a>

                        </div>

                    </div>

                </article>

            </div>

            @endforeach

        </div>



        {{-- =====================================================
                PAGINATION
            ====================================================== --}}

        <div class="mt-5">

            {{ $berita->links() }}

        </div>


        @else


        {{-- =====================================================
                EMPTY STATE
            ====================================================== --}}

        <div
            class="
                    text-center
                    py-5
                ">

            <div
                class="
                        mb-3
                        text-muted
                    ">

                <i
                    class="bi bi-newspaper"
                    style="
                            font-size: 60px;
                        ">
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


@endsection