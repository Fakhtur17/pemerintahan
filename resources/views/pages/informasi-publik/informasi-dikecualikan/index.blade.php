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

                    <h1>
                        Informasi Dikecualikan
                    </h1>

                    <p>
                        Halaman ini berisi informasi yang berdasarkan
                        ketentuan peraturan perundang-undangan
                        dikecualikan dari keterbukaan informasi publik.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    INFORMASI DIKECUALIKAN
========================================================= --}}

<section class="regulasi-section">

    <div class="container">

        <div class="regulasi-grid">

            @forelse($jenisInformasi as $jenis)

            <a
                href="{{ route(
                    'informasi-publik.informasi-dikecualikan.data',
                    $jenis->id
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

                        {{-- SHIELD --}}

                        <path
                            d="M12 3L19 6V11C19 15.5 16.1 19.1 12 21C7.9 19.1 5 15.5 5 11V6L12 3Z"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round" />

                        {{-- LOCK --}}

                        <rect
                            x="8.5"
                            y="10"
                            width="7"
                            height="5.5"
                            rx="1"
                            stroke="currentColor"
                            stroke-width="1.8" />

                        <path
                            d="M10 10V8.5C10 7.4 10.9 6.5 12 6.5C13.1 6.5 14 7.4 14 8.5V10"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round" />

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

                    @else

                    <p>
                        Informasi yang dikecualikan dari
                        keterbukaan informasi publik.
                    </p>

                    @endif


                    {{-- META --}}

                    <div class="regulasi-meta">

                        <span>

                            <i class="bi bi-file-earmark-text"></i>

                            {{ $jenis->data_count }}

                            Dokumen

                        </span>

                        <span>

                            Lihat

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>

            </a>

            @empty


            {{-- =============================================
                DATA KOSONG
            ============================================== --}}

            <div
                class="col-12 text-center py-5"
                style="grid-column: 1 / -1;">

                <div class="regulasi-card">

                    <div class="regulasi-icon">

                        <i class="bi bi-folder-x fs-3"></i>

                    </div>

                    <div class="regulasi-content">

                        <h4>
                            Belum Ada Informasi
                        </h4>

                        <p>
                            Belum tersedia informasi dikecualikan.
                        </p>

                    </div>

                </div>

            </div>


            @endforelse

        </div>

    </div>

</section>


@endsection