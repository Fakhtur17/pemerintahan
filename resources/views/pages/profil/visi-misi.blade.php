@extends('layouts.app', [
    'headerVariant' => 'inner',
    'footerVariant' => 'default',
])

@section('title', 'Visi & Misi | Niotech')
@section('meta_description', 'Visi dan Misi Kabupaten Brebes | Niotech')

@section('content')

    {{-- =========================================================
    BREADCRUMB
    ========================================================= --}}
    <div class="breadcumb-section fix">

        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">

            <div class="container">

                <div class="shape1">
                    <img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape">
                </div>

                <div class="shape2">
                    <img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape">
                </div>

                <div class="breadcumb-wrapper">

                    <div class="page-heading">

                        <h1>Visi & Misi</h1>

                        <div class="links">

                            <a href="{{ route('home') }}">
                                Home
                                <span class="slash">/</span>
                            </a>

                            Visi & Misi

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
    VISI & MISI
    ========================================================= --}}
    <section class="section-padding fix">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-xl-10">


                    {{-- =================================================
                    VISI
                    ================================================== --}}
                    <div class="visi-wrapper text-center mb-5">

                        <h4 class="article-heading mb-4">
                            VISI
                        </h4>


                        @php
                            $visi = $visiMisi->where('jenis', 'visi')->where('aktif', 1)->sortBy('urutan')->first();
                        @endphp


                        @if ($visi)

                            {{-- GAMBAR VISI --}}
                            @if ($visi->gambar)
                                <div class="visi-image mb-4">

                                    <img src="{{ asset('storage/' . $visi->gambar) }}" alt="Visi Kabupaten Brebes"
                                        class="img-fluid rounded"
                                        style="
                                                    width: 100%;
                                                    max-width: 750px;
                                                    max-height: 420px;
                                                    object-fit: cover;
                                                ">

                                </div>
                            @endif


                            {{-- ISI VISI --}}
                            @php
                                // pecah isi visi per baris untuk membedakan
                                // kalimat pembuka / slogan (dalam tanda kutip) / subtitle (dalam kurung)
                                $barisVisi = preg_split('/\r\n|\r|\n/', trim($visi->isi));
                            @endphp

                            <div class="visi-content">

                                @foreach ($barisVisi as $b)
                                    @php $b = trim($b); @endphp

                                    @if ($b === '')
                                        @continue
                                    @endif

                                    @if (str_starts_with($b, '"') || str_starts_with($b, '“'))
                                        <p class="visi-slogan">{{ $b }}</p>
                                    @elseif(str_starts_with($b, '(') && str_ends_with($b, ')'))
                                        <p class="visi-subtitle">{{ $b }}</p>
                                    @else
                                        <p class="visi-intro">{{ $b }}</p>
                                    @endif
                                @endforeach

                            </div>


                            {{-- TANGGAL --}}
                            <p class="text-muted mt-3" style="font-size: 13px;">

                                Terakhir diperbarui:
                                {{ $visi->updated_at->translatedFormat('d F Y') }}

                            </p>
                        @else
                            <div class="py-4">

                                <p class="text-muted">
                                    Data visi belum tersedia.
                                </p>

                            </div>

                        @endif

                    </div>


                    {{-- PEMISAH --}}
                    <hr class="my-5">


                    {{-- =================================================
                    MISI
                    ================================================== --}}
                    <div class="misi-wrapper">

                        <div class="text-center mb-4">

                            <h4 class="article-heading">
                                MISI
                            </h4>

                        </div>


                        @php
                            $misi = $visiMisi->where('jenis', 'misi')->where('aktif', 1)->sortBy('urutan');
                        @endphp


                        @if ($misi->count())

                            <ol class="misi-list">

                                @foreach ($misi as $item)
                                    <li class="misi-item">


                                        {{-- GAMBAR MISI --}}
                                        @if ($item->gambar)
                                            <div class="misi-image mb-2">

                                                <img src="{{ asset('storage/' . $item->gambar) }}"
                                                    alt="Misi Kabupaten Brebes" class="img-fluid rounded"
                                                    style="
                                                                    width: 100%;
                                                                    max-width: 750px;
                                                                    max-height: 420px;
                                                                    object-fit: cover;
                                                                ">

                                            </div>
                                        @endif


                                        {{-- ISI MISI --}}
                                        <div class="misi-content">

                                            {!! nl2br(e($item->isi)) !!}

                                        </div>


                                        {{-- TANGGAL --}}
                                        <p class="text-muted mt-2 mb-0" style="font-size: 12px;">

                                            Terakhir diperbarui:
                                            {{ $item->updated_at->translatedFormat('d F Y') }}

                                        </p>

                                    </li>
                                @endforeach

                            </ol>
                        @else
                            <div class="text-center py-4">

                                <p class="text-muted">
                                    Data misi belum tersedia.
                                </p>

                            </div>

                        @endif

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection


@push('styles')
    <style>
        /*
                                                    |--------------------------------------------------------------------------
                                                    | VISI
                                                    |--------------------------------------------------------------------------
                                                    */

        .visi-wrapper {
            padding-top: 10px;
        }

        .visi-wrapper .article-heading,
        .misi-wrapper .article-heading {
            font-weight: 700;
        }

        .visi-content {
            max-width: 720px;
            margin: 0 auto;
        }

        .visi-intro {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .visi-slogan {
            font-size: 24px;
            font-weight: 700;
            color: #2c2c2c;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .visi-subtitle {
            font-size: 16px;
            font-weight: 600;
            color: #444;
            margin-bottom: 0;
        }


        /*
                                                    |--------------------------------------------------------------------------
                                                    | MISI
                                                    |--------------------------------------------------------------------------
                                                    */

        .misi-wrapper {
            max-width: 820px;
            margin: 0 auto;
            padding-top: 10px;
        }

        .misi-list {
            padding-left: 24px;
            margin-bottom: 0;
        }

        .misi-item {
            font-size: 17px;
            line-height: 1.85;
            color: #555;
            margin-bottom: 18px;
        }

        .misi-item::marker {
            font-weight: 600;
            color: #555;
        }

        .misi-item .misi-image {
            margin-top: 10px;
        }

        .misi-content p:last-child {
            margin-bottom: 0;
        }


        /*
                                                    |--------------------------------------------------------------------------
                                                    | GAMBAR
                                                    |--------------------------------------------------------------------------
                                                    */

        .visi-image img,
        .misi-image img {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }


        /*
                                                    |--------------------------------------------------------------------------
                                                    | MOBILE
                                                    |--------------------------------------------------------------------------
                                                    */

        @media (max-width: 767px) {

            .visi-intro {
                font-size: 15px;
                line-height: 1.7;
            }

            .visi-slogan {
                font-size: 19px;
            }

            .visi-subtitle {
                font-size: 14px;
            }

            .misi-item {
                font-size: 15px;
                line-height: 1.75;
            }

            .visi-image img,
            .misi-image img {
                max-height: 300px !important;
            }

        }
    </style>
@endpush
