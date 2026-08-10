@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', 'Profil Pimpinan Badan Publik | Niotech')
@section('meta_description', 'Profil Pimpinan Badan Publik Kabupaten Brebes')

@section('content')

{{-- =========================================================
BREADCRUMB
========================================================= --}}

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

                <h1>Profil Pimpinan</h1>

                <div class="links">

                    <a href="{{ route('home') }}">
                        Home
                        <span class="slash">/</span>
                    </a>

                    Profil Pimpinan Badan Publik

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
PROFIL PIMPINAN
========================================================= --}}

<div class="about-container-wrapper style1">

    <div class="container">

        @forelse($profilPimpinan as $pimpinan)

        {{-- =================================================
            CARD PROFIL UTAMA
        ================================================== --}}

        <div
            class="about-wrapper style1 mb-5"
            style="
                border:1px solid #e5e5e5;
                border-radius:18px;
                padding:30px;
                background:#fff;
                box-shadow:0 5px 25px rgba(0,0,0,.04);
            ">

            <div class="row gy-5 gx-60 align-items-start">


                {{-- =================================================
                    FOTO PIMPINAN
                ================================================== --}}

                <div class="col-xl-5">

                    <div class="about-thumb">

                        <div class="bg"></div>

                        <div class="thumbShape1 d-none d-xxl-block cir36">
                            <img
                                src="{{ asset('assets/images/shape/aboutThumbShape1_1.png') }}"
                                alt="shape">
                        </div>

                        <div class="thumbShape2 d-none d-xxl-block cir36">
                            <img
                                src="{{ asset('assets/images/shape/aboutThumbShape1_2.png') }}"
                                alt="shape">
                        </div>

                        <div class="thumbShape3 d-none d-xxl-block cir36 float-bob-y">
                            <img
                                src="{{ asset('assets/images/shape/aboutThumbShape1_3.png') }}"
                                alt="shape">
                        </div>

                        <div class="thumbShape4 d-none d-xxl-block cir36">
                            <img
                                src="{{ asset('assets/images/shape/aboutThumbShape1_4.png') }}"
                                alt="shape">
                        </div>


                        {{-- FOTO --}}

                        <div
                            class="main-thumb"
                            style="
                                display:flex;
                                justify-content:center;
                                align-items:center;
                            ">

                            @if($pimpinan->foto)

                            <img
                                src="{{ asset('storage/' . $pimpinan->foto) }}"
                                alt="{{ $pimpinan->nama }}"
                                style="
                                        width:100%;
                                        max-width:420px;
                                        height:500px;
                                        object-fit:cover;
                                        border-radius:4px;
                                    ">

                            @else

                            <img
                                src="{{ asset('assets/images/about/aboutThumb1_1.png') }}"
                                alt="{{ $pimpinan->nama }}">

                            @endif

                        </div>

                    </div>

                </div>


                {{-- =================================================
                    INFORMASI PIMPINAN
                ================================================== --}}

                <div class="col-xl-7">

                    <div class="about-content">


                        {{-- =================================================
                            NAMA PIMPINAN
                            TIDAK ADA "PROFIL PIMPINAN"
                        ================================================== --}}

                        <div
                            class="section-title mb-0">

                            <h2
                                class="title wow fadeInUp"
                                data-wow-delay=".2s">

                                {{ $pimpinan->nama }}

                            </h2>


                            {{-- JABATAN --}}

                            <p
                                class="wow fadeInUp"
                                data-wow-delay=".3s"
                                style="
                                    font-size:18px;
                                    font-weight:500;
                                    margin-top:5px;
                                    margin-bottom:20px;
                                ">

                                {{ $pimpinan->jabatan }}

                            </p>

                        </div>


                        {{-- =================================================
                            TABEL BIODATA
                        ================================================== --}}

                        <div
                            class="table-responsive mt-3"
                            style="overflow:hidden;">

                            <table
                                class="table mb-0"
                                style="
                                    border-collapse:collapse;
                                    width:100%;
                                    font-size:15px;
                                ">

                                <tbody>


                                    {{-- =================================================
                                        TEMPAT / TANGGAL LAHIR
                                    ================================================== --}}

                                    @if(
                                    $pimpinan->tempat_lahir ||
                                    $pimpinan->tanggal_lahir
                                    )

                                    <tr style="background:#f1f1f1;">

                                        <td
                                            style="
                                                width:32%;
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            Tempat/tanggal lahir

                                        </td>

                                        <td
                                            style="
                                                width:3%;
                                                padding:13px 5px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            :

                                        </td>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            {{ $pimpinan->tempat_lahir ?? '-' }}

                                            @if($pimpinan->tanggal_lahir)

                                            ,
                                            {{ \Carbon\Carbon::parse($pimpinan->tanggal_lahir)->translatedFormat('d F Y') }}

                                            @endif

                                        </td>

                                    </tr>

                                    @endif


                                    {{-- =================================================
                                        NIP
                                    ================================================== --}}

                                    @if($pimpinan->nip)

                                    <tr>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            NIP

                                        </td>

                                        <td
                                            style="
                                                padding:13px 5px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            :

                                        </td>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            {{ $pimpinan->nip }}

                                        </td>

                                    </tr>

                                    @endif


                                    {{-- =================================================
                                        PANGKAT
                                    ================================================== --}}

                                    @if($pimpinan->pangkat)

                                    <tr style="background:#f1f1f1;">

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            Pangkat/Gol Terakhir

                                        </td>

                                        <td
                                            style="
                                                padding:13px 5px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            :

                                        </td>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            {{ $pimpinan->pangkat }}

                                        </td>

                                    </tr>

                                    @endif


                                    {{-- =================================================
                                        JENIS KELAMIN
                                    ================================================== --}}

                                    @if($pimpinan->jenis_kelamin)

                                    <tr>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            Jenis Kelamin

                                        </td>

                                        <td
                                            style="
                                                padding:13px 5px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            :

                                        </td>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            {{ $pimpinan->jenis_kelamin }}

                                        </td>

                                    </tr>

                                    @endif


                                    {{-- =================================================
                                        AGAMA
                                    ================================================== --}}

                                    @if($pimpinan->agama)

                                    <tr style="background:#f1f1f1;">

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            Agama

                                        </td>

                                        <td
                                            style="
                                                padding:13px 5px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            :

                                        </td>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            {{ $pimpinan->agama }}

                                        </td>

                                    </tr>

                                    @endif


                                    {{-- =================================================
                                        STATUS PERKAWINAN
                                    ================================================== --}}

                                    @if($pimpinan->status_perkawinan)

                                    <tr>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            Status Perkawinan

                                        </td>

                                        <td
                                            style="
                                                padding:13px 5px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            :

                                        </td>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                            ">

                                            {{ $pimpinan->status_perkawinan }}

                                        </td>

                                    </tr>

                                    @endif


                                    {{-- =================================================
                                        RIWAYAT PENDIDIKAN
                                    ================================================== --}}

                                    @if($pimpinan->riwayat_pendidikan)

                                    <tr style="background:#f1f1f1;">

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                                vertical-align:top;
                                            ">

                                            Riwayat Pendidikan

                                        </td>

                                        <td
                                            style="
                                                padding:13px 5px;
                                                border-bottom:1px solid #ddd;
                                                vertical-align:top;
                                            ">

                                            :

                                        </td>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                                vertical-align:top;
                                                line-height:1.8;
                                            ">

                                            {!! nl2br(e($pimpinan->riwayat_pendidikan)) !!}

                                        </td>

                                    </tr>

                                    @endif


                                    {{-- =================================================
                                        RIWAYAT JABATAN
                                    ================================================== --}}

                                    @if($pimpinan->riwayat_jabatan)

                                    <tr>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                                vertical-align:top;
                                            ">

                                            Riwayat Jabatan

                                        </td>

                                        <td
                                            style="
                                                padding:13px 5px;
                                                border-bottom:1px solid #ddd;
                                                vertical-align:top;
                                            ">

                                            :

                                        </td>

                                        <td
                                            style="
                                                padding:13px 10px;
                                                border-bottom:1px solid #ddd;
                                                vertical-align:top;
                                                line-height:1.8;
                                            ">

                                            {!! nl2br(e($pimpinan->riwayat_jabatan)) !!}

                                        </td>

                                    </tr>

                                    @endif


                                    {{-- =================================================
                                        MEDIA SOSIAL
                                    ================================================== --}}

                                    @if(
                                    $pimpinan->facebook ||
                                    $pimpinan->twitter ||
                                    $pimpinan->instagram ||
                                    $pimpinan->youtube ||
                                    $pimpinan->tiktok
                                    )

                                    <tr style="background:#f1f1f1;">

                                        <td
                                            style="
                                                padding:13px 10px;
                                                vertical-align:top;
                                            ">

                                            Media Sosial

                                        </td>

                                        <td
                                            style="
                                                padding:13px 5px;
                                                vertical-align:top;
                                            ">

                                            :

                                        </td>

                                        <td
                                            style="
                                                padding:13px 10px;
                                            ">

                                            <div
                                                class="d-flex align-items-center gap-2 flex-wrap">

                                                {{-- FACEBOOK --}}

                                                @if($pimpinan->facebook)

                                                <a
                                                    href="{{ $pimpinan->facebook }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    title="Facebook"
                                                    style="
                                                        width:42px;
                                                        height:42px;
                                                        border-radius:50%;
                                                        display:flex;
                                                        align-items:center;
                                                        justify-content:center;
                                                        background:#fff;
                                                        text-decoration:none;
                                                    ">

                                                    <i class="fa-brands fa-facebook-f"></i>

                                                </a>

                                                @endif


                                                {{-- TWITTER/X --}}

                                                @if($pimpinan->twitter)

                                                <a
                                                    href="{{ $pimpinan->twitter }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    title="X / Twitter"
                                                    style="
                                                        width:42px;
                                                        height:42px;
                                                        border-radius:50%;
                                                        display:flex;
                                                        align-items:center;
                                                        justify-content:center;
                                                        background:#fff;
                                                        text-decoration:none;
                                                    ">

                                                    <i class="fa-brands fa-x-twitter"></i>

                                                </a>

                                                @endif


                                                {{-- INSTAGRAM --}}

                                                @if($pimpinan->instagram)

                                                <a
                                                    href="{{ $pimpinan->instagram }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    title="Instagram"
                                                    style="
                                                        width:42px;
                                                        height:42px;
                                                        border-radius:50%;
                                                        display:flex;
                                                        align-items:center;
                                                        justify-content:center;
                                                        background:#fff;
                                                        text-decoration:none;
                                                    ">

                                                    <i class="fa-brands fa-instagram"></i>

                                                </a>

                                                @endif


                                                {{-- YOUTUBE --}}

                                                @if($pimpinan->youtube)

                                                <a
                                                    href="{{ $pimpinan->youtube }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    title="YouTube"
                                                    style="
                                                        width:42px;
                                                        height:42px;
                                                        border-radius:50%;
                                                        display:flex;
                                                        align-items:center;
                                                        justify-content:center;
                                                        background:#fff;
                                                        text-decoration:none;
                                                    ">

                                                    <i class="fa-brands fa-youtube"></i>

                                                </a>

                                                @endif


                                                {{-- TIKTOK --}}

                                                @if($pimpinan->tiktok)

                                                <a
                                                    href="{{ $pimpinan->tiktok }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    title="TikTok"
                                                    style="
                                                        width:42px;
                                                        height:42px;
                                                        border-radius:50%;
                                                        display:flex;
                                                        align-items:center;
                                                        justify-content:center;
                                                        background:#fff;
                                                        text-decoration:none;
                                                    ">

                                                    <i class="fa-brands fa-tiktok"></i>

                                                </a>

                                                @endif

                                            </div>

                                        </td>

                                    </tr>

                                    @endif

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
            PEMBATAS JIKA ADA LEBIH DARI 1 PIMPINAN
        ================================================== --}}

        @if(!$loop->last)

        <hr class="my-5">

        @endif


        @empty

        {{-- =================================================
            DATA KOSONG
        ================================================== --}}

        <div
            class="text-center py-5"
            style="
                border:1px solid #eee;
                border-radius:15px;
                background:#fff;
            ">

            <div class="section-title">

                <h2 class="title">
                    Data Profil Pimpinan Belum Tersedia
                </h2>

                <p class="section-desc mt-3">

                    Informasi profil pimpinan badan publik
                    Kabupaten Brebes belum tersedia.

                </p>

            </div>

        </div>

        @endforelse

    </div>

</div>

@endsection