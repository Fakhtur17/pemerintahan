@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', 'Tentang PPID | Niotech')
@section('meta_description', 'Tentang PPID Kabupaten Brebes | Niotech')

@section('content')

{{-- =========================================================
BREADCRUMB
========================================================= --}}

<div class="breadcumb-section fix">

    <div
        class="breadcumb-container-wrapper"
        data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">

        <div class="container">

            {{-- Shape kiri --}}
            <div class="shape1">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}"
                    alt="shape">
            </div>

            {{-- Shape kanan --}}
            <div class="shape2">
                <img
                    src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}"
                    alt="shape">
            </div>

            <div class="breadcumb-wrapper">

                <div class="page-heading">

                    <h1>
                        Tentang PPID
                    </h1>

                    <div class="links">

                        <a href="{{ route('home') }}">
                            Home
                            <span class="slash">/</span>
                        </a>

                        Tentang PPID

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
ARTIKEL TENTANG PPID
========================================================= --}}

<section class="section-padding fix">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-12">

                @forelse($bagian as $item)

                <div class="mb-50">

                    {{-- =================================================
                        GAMBAR BAGIAN
                        HANYA TAMPIL JIKA ADA GAMBAR
                        ================================================= --}}

                    @if($item->gambar)

                    <div class="mb-30">

                        <img
                            src="{{ asset('storage/' . $item->gambar) }}"
                            alt="{{ $item->judul }}"
                            class="w-100 rounded"
                            style="
                                        max-height: 420px;
                                        object-fit: cover;
                                    ">

                    </div>

                    @endif


                    {{-- =================================================
                        JUDUL
                        ================================================= --}}

                    <h4 class="article-heading">
                        {{ $item->judul }}
                    </h4>


                    {{-- =================================================
                        ISI
                        ================================================= --}}

                    <div class="article-content">

                        {!! nl2br(e($item->isi)) !!}

                    </div>


                    {{-- =================================================
                        UPDATE
                        ================================================= --}}

                    <p
                        class="text-muted mt-3"
                        style="font-size: 13px;">
                        Terakhir diperbarui:
                        {{ $item->updated_at->translatedFormat('d F Y') }}
                    </p>

                </div>


                {{-- Garis pemisah antar bagian --}}

                @if(!$loop->last)

                <hr class="my-5">

                @endif


                @empty

                {{-- =================================================
                    JIKA DATA BELUM ADA
                    ================================================= --}}

                <div class="text-center py-5">

                    <h4>
                        Data belum tersedia
                    </h4>

                    <p class="text-muted">
                        Informasi Tentang PPID Kabupaten Brebes
                        belum ditambahkan.
                    </p>

                </div>

                @endforelse

            </div>

        </div>

    </div>

</section>

@endsection


@push('styles')

<style>
    .article-heading {
        font-weight: 700;
        margin-bottom: 18px;
        color: #1f2937;
    }

    .article-content {
        font-size: 16px;
        line-height: 1.9;
        color: #6b7280;
        text-align: justify;
    }

    .article-content p {
        margin-bottom: 15px;
    }
</style>

@endpush