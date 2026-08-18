```blade
@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', 'Alamat Dinas | Niotech')
@section('meta_description', 'Alamat Dinas Kabupaten Brebes')

@section('content')

{{-- =========================================================
BREADCRUMB
========================================================= --}}

<div class="breadcumb-section fix">

    <div
        class="breadcumb-container-wrapper"
        data-bg-src="{{ asset('assets/images/breadcrumb/breadcrumb.jpg') }}">

        <div class="container">

            <div class="breadcumb-wrapper">

                <h1 class="page-heading">
                    Alamat Dinas
                </h1>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
ALAMAT DINAS
========================================================= --}}

<section class="py-5">

    <div class="container">

        @if($alamatDinas)

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-11">

                {{-- CARD UTAMA --}}

                <div
                    class="card border-0 shadow-sm overflow-hidden"
                    style="border-radius: 18px;">

                    <div class="card-body p-4 p-lg-5">

                        {{-- ALAMAT LOKASI --}}

                        @if($alamatDinas->alamat)

                        <div
                            class="p-4"
                            style="
                                        background: #f8faff;
                                        border: 1px solid #e5edff;
                                        border-radius: 14px;
                                    ">

                            <div class="row align-items-center g-4">

                                {{-- INFORMASI ALAMAT --}}

                                <div class="col-md">

                                    <div class="d-flex align-items-start">

                                        <div
                                            class="d-flex align-items-center justify-content-center me-3"
                                            style="
                                                        width: 50px;
                                                        height: 50px;
                                                        min-width: 50px;
                                                        border-radius: 12px;
                                                        background: #0d6efd;
                                                        color: #ffffff;
                                                        font-size: 20px;
                                                    ">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>


                                        <div>

                                            <h5 class="mb-2">
                                                Alamat Lokasi
                                            </h5>

                                            <p
                                                class="text-muted mb-0"
                                                style="
                                                            line-height: 1.8;
                                                        ">
                                                {{ $alamatDinas->alamat }}
                                            </p>

                                        </div>

                                    </div>

                                </div>


                                {{-- TOMBOL GOOGLE MAPS --}}

                                @if($alamatDinas->google_maps_url)

                                <div class="col-md-auto">

                                    <a
                                        href="{{ $alamatDinas->google_maps_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="btn btn-primary px-4 py-3"
                                        style="
                                                        border-radius: 10px;
                                                        white-space: nowrap;
                                                    ">

                                        <i class="fa-solid fa-map-location-dot me-2"></i>

                                        Lihat di Google Maps

                                        <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>

                                    </a>

                                </div>

                                @endif

                            </div>

                        </div>

                        @endif

                    </div>

                </div>

            </div>

        </div>

        @else

        {{-- =====================================================
            DATA BELUM TERSEDIA
            ====================================================== --}}

        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-9">

                <div
                    class="text-center p-5"
                    style="
                            background: #ffffff;
                            border: 1px solid #edf0f2;
                            border-radius: 18px;
                            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
                        ">

                    <div class="mb-4">

                        <div
                            class="d-inline-flex align-items-center justify-content-center"
                            style="
                                    width: 75px;
                                    height: 75px;
                                    border-radius: 50%;
                                    background: #f5f6f8;
                                    color: #9ca3af;
                                    font-size: 28px;
                                ">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                    </div>


                    <h4 class="mb-2">
                        Alamat Dinas Belum Tersedia
                    </h4>


                    <p class="text-muted mb-0">
                        Informasi alamat kantor dinas belum tersedia.
                    </p>

                </div>

            </div>

        </div>

        @endif

    </div>

</section>

@endsection