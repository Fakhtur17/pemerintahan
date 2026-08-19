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


            {{-- BREADCRUMB CONTENT --}}
            <div class="breadcumb-wrapper">

                <div class="page-heading">

                    <h1>
                        Detail Berita
                    </h1>

                    <p>
                        Informasi lengkap mengenai berita dan kegiatan
                        Kecamatan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>



{{-- =========================================================
    DETAIL BERITA
========================================================= --}}

<section class="regulasi-section">

    <div class="container">

        <div class="row g-5">


            {{-- =================================================
                KONTEN UTAMA
            ================================================== --}}

            <div class="col-lg-8">


                {{-- JENIS BERITA --}}

                <div class="mb-3">

                    <span
                        class="
                            badge
                            bg-primary-subtle
                            text-primary
                        ">

                        {{ $berita->jenis }}

                    </span>

                </div>



                {{-- JUDUL --}}

                <h1
                    class="
                        fw-bold
                        mb-3
                    "
                    style="
                        line-height: 1.3;
                    ">

                    {{ $berita->judul }}

                </h1>



                {{-- TANGGAL --}}

                <div
                    class="
                        text-muted
                        mb-4
                    ">

                    <i
                        class="
                            bi
                            bi-calendar3
                            me-1
                        ">
                    </i>

                    {{ $berita->tanggal->translatedFormat(
                        'd F Y'
                    ) }}

                </div>



                {{-- =================================================
                    GAMBAR UTAMA
                ================================================== --}}

                @if($berita->gambar)

                <div class="mb-4">

                    <img
                        src="{{ asset(
                                'storage/' . $berita->gambar
                            ) }}"
                        alt="{{ $berita->judul }}"
                        class="
                                img-fluid
                                rounded-4
                                shadow-sm
                                w-100
                            "
                        style="
                                max-height: 520px;
                                object-fit: cover;
                            ">

                </div>

                @endif



                {{-- =================================================
                    RINGKASAN
                ================================================== --}}

                @if($berita->ringkasan)

                <div
                    class="
                            p-4
                            bg-light
                            rounded-4
                            mb-4
                        ">

                    <div
                        class="
                                d-flex
                                gap-3
                                align-items-start
                            ">

                        <i
                            class="
                                    bi
                                    bi-info-circle
                                    text-primary
                                    fs-5
                                ">
                        </i>

                        <p
                            class="
                                    fw-semibold
                                    mb-0
                                ">

                            {{ $berita->ringkasan }}

                        </p>

                    </div>

                </div>

                @endif



                {{-- =================================================
                    ISI BERITA
                ================================================== --}}

                <div
                    class="berita-content"
                    style="
                        line-height: 1.9;
                        font-size: 16px;
                    ">

                    {!! nl2br(e($berita->isi)) !!}

                </div>



                {{-- =================================================
                    KEMBALI
                ================================================== --}}

                <div class="mt-5">

                    <a
                        href="{{ route('berita.index') }}"
                        class="
                            btn
                            btn-light
                            border
                        ">

                        <i
                            class="
                                bi
                                bi-arrow-left
                                me-1
                            ">
                        </i>

                        Kembali ke Berita

                    </a>

                </div>

            </div>



            {{-- =================================================
                SIDEBAR
            ================================================== --}}

            <div class="col-lg-4">


                <div
                    class="
                        card
                        border-0
                        shadow-sm
                    ">

                    <div class="card-body p-4">


                        {{-- SIDEBAR TITLE --}}

                        <h5
                            class="
                                fw-bold
                                mb-4
                            ">

                            Berita Terbaru

                        </h5>



                        {{-- =================================================
                            LIST BERITA
                        ================================================== --}}

                        @forelse($beritaTerbaru as $item)


                        <div
                            class="
                                    d-flex
                                    gap-3
                                    mb-4
                                ">


                            {{-- THUMBNAIL --}}

                            <div
                                style="
                                        width: 90px;
                                        height: 70px;
                                        flex-shrink: 0;
                                    ">

                                @if($item->gambar)

                                <img
                                    src="{{ asset(
                                                'storage/' .
                                                $item->gambar
                                            ) }}"
                                    class="
                                                w-100
                                                h-100
                                                rounded
                                            "
                                    style="
                                                object-fit: cover;
                                            "
                                    alt="{{ $item->judul }}">

                                @else

                                <div
                                    class="
                                                w-100
                                                h-100
                                                bg-light
                                                rounded
                                                d-flex
                                                align-items-center
                                                justify-content-center
                                            ">

                                    <i
                                        class="
                                                    bi
                                                    bi-newspaper
                                                    text-muted
                                                ">
                                    </i>

                                </div>

                                @endif

                            </div>



                            {{-- TEXT --}}

                            <div
                                style="
                                        min-width: 0;
                                    ">

                                <small
                                    class="
                                            text-muted
                                            d-block
                                            mb-1
                                        ">

                                    <i
                                        class="
                                                bi
                                                bi-calendar3
                                                me-1
                                            ">
                                    </i>

                                    {{ $item->tanggal->format(
                                            'd M Y'
                                        ) }}

                                </small>


                                <a
                                    href="{{ route(
                                            'berita.show',
                                            $item
                                        ) }}"
                                    class="
                                            text-decoration-none
                                            text-dark
                                        ">

                                    <div
                                        class="
                                                fw-semibold
                                            "
                                        style="
                                                line-height: 1.4;
                                            ">

                                        {{ Str::limit(
                                                $item->judul,
                                                60
                                            ) }}

                                    </div>

                                </a>

                            </div>

                        </div>


                        @empty

                        <div
                            class="
                                    text-center
                                    py-3
                                ">

                            <i
                                class="
                                        bi
                                        bi-newspaper
                                        text-muted
                                    "
                                style="
                                        font-size: 35px;
                                    ">
                            </i>

                            <p
                                class="
                                        text-muted
                                        mb-0
                                        mt-2
                                    ">

                                Belum ada berita lainnya.

                            </p>

                        </div>

                        @endforelse


                    </div>

                </div>


            </div>

        </div>

    </div>

</section>


@endsection