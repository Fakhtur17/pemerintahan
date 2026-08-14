@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', 'Regulasi PPID | PPID Utama Kabupaten Brebes')

@section('meta_description', 'Regulasi PPID Kabupaten Brebes')

@section('content')

{{-- =========================================================
    BREADCRUMB / HERO
========================================================= --}}

<div class="breadcumb-section fix">
    <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
        <div class="container">
            <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
            <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
            <div class="breadcumb-wrapper">
                <div class="page-heading">
                    <h1>Regulasi PPID</h1>
                    <p>Halaman Ini berisi Halaman Informasi Terkait dengan Regulasi</p>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- =========================================================
    REGULASI
========================================================= --}}

<section class="regulasi-section">

    <div class="container">

        <div class="regulasi-grid">

            @forelse($regulasis as $regulasi)

            <a
                href="{{ route('regulasi.show', $regulasi->id) }}"
                class="regulasi-card">

                <div class="regulasi-icon">

                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">

                        <rect
                            x="4"
                            y="4"
                            width="6"
                            height="6"
                            rx="1"
                            stroke="currentColor"
                            stroke-width="1.7" />

                        <rect
                            x="14"
                            y="4"
                            width="6"
                            height="6"
                            rx="1"
                            stroke="currentColor"
                            stroke-width="1.7" />

                        <rect
                            x="4"
                            y="14"
                            width="6"
                            height="6"
                            rx="1"
                            stroke="currentColor"
                            stroke-width="1.7" />

                        <path
                            d="M14 14H16V16H14V14ZM18 14H20V18H18V14ZM14 18H16V20H14V18ZM16 16H18V18H16V16Z"
                            fill="currentColor" />

                    </svg>

                </div>


                <div class="regulasi-title">

                    {{ $regulasi->judul }}

                </div>

            </a>

            @empty

            <div class="regulasi-empty">

                <div class="empty-icon">
                    <i class="fa-regular fa-file-pdf"></i>
                </div>

                <h4>
                    Belum Ada Regulasi
                </h4>

                <p>
                    Data regulasi PPID belum tersedia.
                </p>

            </div>

            @endforelse

        </div>

    </div>

</section>


{{-- =========================================================
    STYLE
========================================================= --}}

<style>
    .regulasi-section {
        padding: 85px 0 100px;
        background: #ffffff;
    }

    .regulasi-grid {
        max-width: 980px;
        margin: 0 auto;

        display: grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        column-gap: 80px;
        row-gap: 45px;
    }

    .regulasi-card {
        text-decoration: none;

        display: flex;
        flex-direction: column;

        align-items: flex-start;

        transition:
            transform .25s ease,
            opacity .25s ease;
    }

    .regulasi-card:hover {
        transform: translateY(-6px);
    }

    .regulasi-icon {
        width: 57px;
        height: 57px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 7px;

        background:
            linear-gradient(135deg,
                #ead8ff 0%,
                #cbe8ff 100%);

        color: #7247ff;

        margin-bottom: 19px;

        transition:
            transform .25s ease,
            box-shadow .25s ease;
    }

    .regulasi-card:hover .regulasi-icon {
        transform: translateY(-2px);

        box-shadow:
            0 10px 25px rgba(113, 71, 255, .15);
    }

    .regulasi-title {
        color: #111827;

        font-size: 16px;

        line-height: 1.45;

        font-weight: 600;

        font-family: inherit;
    }

    .regulasi-card:hover .regulasi-title {
        color: #7047ff;
    }

    .regulasi-empty {
        grid-column: 1 / -1;

        text-align: center;

        padding: 80px 20px;
    }

    .empty-icon {
        width: 70px;
        height: 70px;

        margin: 0 auto 20px;

        border-radius: 50%;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #f3f0ff;

        color: #7047ff;

        font-size: 28px;
    }

    .regulasi-empty h4 {
        margin-bottom: 8px;
    }

    .regulasi-empty p {
        color: #6b7280;
    }


    /* =========================================================
   RESPONSIVE
========================================================= */

    @media (max-width: 1199px) {

        .regulasi-grid {
            column-gap: 50px;
        }

    }

    @media (max-width: 991px) {

        .regulasi-grid {
            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            column-gap: 40px;
        }

    }

    @media (max-width: 767px) {

        .regulasi-section {
            padding: 60px 0 70px;
        }

        .regulasi-grid {
            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            column-gap: 30px;
            row-gap: 40px;
        }

    }

    @media (max-width: 480px) {

        .regulasi-grid {
            grid-template-columns: 1fr;
        }

    }
</style>

@endsection