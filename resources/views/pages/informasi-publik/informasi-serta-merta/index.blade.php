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

                    <h1>Informasi Serta Merta</h1>

                    <p>
                        Informasi yang berkaitan dengan kebutuhan
                        mendesak masyarakat dan harus segera diumumkan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    INFORMASI SERTA MERTA
========================================================= --}}

<section class="regulasi-section">

    <div class="container">

        <div class="regulasi-grid">

            @forelse($jenisInformasi as $jenis)

            <a
                href="{{ route(
                    'informasi-publik.informasi-serta-merta.data',
                    $jenis
                ) }}"
                class="regulasi-card">

                {{-- ICON --}}

                <div class="regulasi-icon">

                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">

                        <path
                            d="M12 3L22 21H2L12 3Z"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round" />

                        <path
                            d="M12 9V13"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round" />

                        <circle
                            cx="12"
                            cy="17"
                            r="1"
                            fill="currentColor" />

                    </svg>

                </div>


                {{-- CONTENT --}}

                <div class="regulasi-content">

                    <h4>
                        {{ $jenis->nama_jenis }}
                    </h4>

                    @if($jenis->deskripsi)

                    <p>
                        {{ $jenis->deskripsi }}
                    </p>

                    @endif

                    <div class="regulasi-meta">

                        <i class="bi bi-file-earmark-text"></i>

                        {{ $jenis->data_count }}

                        dokumen

                    </div>

                </div>


                {{-- ARROW --}}

                <div class="regulasi-arrow">

                    <i class="bi bi-arrow-right"></i>

                </div>

            </a>

            @empty

            <div class="regulasi-empty">

                <div class="regulasi-empty-icon">

                    <i class="bi bi-folder-x"></i>

                </div>

                <h4>
                    Belum Ada Informasi
                </h4>

                <p>
                    Belum tersedia informasi serta merta.
                </p>

            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection