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

                    <h1>Informasi Publik</h1>

                    <p>
                        Halaman ini berisi informasi publik yang wajib
                        disediakan dan diumumkan oleh PPID.
                    </p>

                </div>

            </div>

        </div>

    </div>
</div>


{{-- =========================================================
    INFORMASI PUBLIK
========================================================= --}}

<section class="regulasi-section">

    <div class="container">

        <div class="regulasi-grid">

            {{-- INFORMASI BERKALA --}}
            <a
                href="{{ route('informasi-publik.informasi-berkala.index') }}"
                class="regulasi-card">

                <div class="regulasi-icon">

                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M4 4H20V20H4V4Z"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linejoin="round" />
                        <path
                            d="M8 8H16"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round" />
                        <path
                            d="M8 12H16"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round" />
                        <path
                            d="M8 16H13"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round" />
                    </svg>

                </div>

                <div class="regulasi-content">

                    <h4>
                        Informasi Publik yang Wajib Disediakan
                        dan Diumumkan Secara Berkala
                    </h4>

                    <p>
                        Informasi yang diumumkan secara berkala oleh
                        badan publik.
                    </p>

                </div>

            </a>


            {{-- INFORMASI SERTA MERTA --}}
            <a
                href="{{ route('informasi-publik.informasi-serta-merta.index') }}"
                class="regulasi-card">

                <div class="regulasi-icon">

                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M12 3L21 19H3L12 3Z"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linejoin="round" />

                        <path
                            d="M12 9V13"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round" />

                        <circle
                            cx="12"
                            cy="16"
                            r="1"
                            fill="currentColor" />
                    </svg>

                </div>

                <div class="regulasi-content">

                    <h4>
                        Informasi yang Wajib Diumumkan
                        Secara Serta Merta
                    </h4>

                    <p>
                        Informasi yang berkaitan dengan kepentingan
                        masyarakat dan harus diumumkan segera.
                    </p>

                </div>

            </a>


            {{-- INFORMASI DIKECUALIKAN --}}
            <a
                href="{{ route('informasi-publik.informasi-dikecualikan.index') }}"
                class="regulasi-card">

                <div class="regulasi-icon">

                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none">
                        <rect
                            x="4"
                            y="10"
                            width="16"
                            height="11"
                            rx="2"
                            stroke="currentColor"
                            stroke-width="1.8" />

                        <path
                            d="M8 10V7C8 4.79 9.79 3 12 3C14.21 3 16 4.79 16 7V10"
                            stroke="currentColor"
                            stroke-width="1.8" />

                    </svg>

                </div>

                <div class="regulasi-content">

                    <h4>
                        Informasi yang Dikecualikan
                    </h4>

                    <p>
                        Informasi yang tidak dapat diberikan kepada
                        pemohon berdasarkan ketentuan yang berlaku.
                    </p>

                </div>

            </a>


            {{-- INFORMASI TERSEDIA SETIAP SAAT --}}
            <a
                href="{{ route('informasi-publik.informasi-tersedia-setiap-saat.index') }}"
                class="regulasi-card">

                <div class="regulasi-icon">

                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none">

                        <circle
                            cx="12"
                            cy="12"
                            r="9"
                            stroke="currentColor"
                            stroke-width="1.8" />

                        <path
                            d="M12 7V12L15 14"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round" />

                    </svg>

                </div>

                <div class="regulasi-content">

                    <h4>
                        Informasi Wajib Tersedia Setiap Saat
                    </h4>

                    <p>
                        Informasi yang wajib tersedia dan dapat
                        diakses oleh masyarakat setiap saat.
                    </p>

                </div>

            </a>

        </div>

    </div>

</section>

@endsection