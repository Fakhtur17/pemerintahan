@extends('layouts.app', [
'headerVariant' => 'inner',
'footerVariant' => 'default',
])

@section('title', 'Kontak | PPID')

@section('meta_description', 'Kontak PPID')

@section('content')

<!-- Breadcumb Section S T A R T -->
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

                    <h1>Kontak</h1>

                    <div class="links">

                        <a href="{{ route('home') }}">
                            Beranda
                            <span class="slash">/</span>
                        </a>

                        Kontak

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Contact Section S T A R T -->
<section class="contact-section section-padding fix">

    <div class="container">

        <div class="contact-wrapper style1">

            <div class="row gy-5">


                {{-- ALAMAT --}}
                <div class="col-xl-4 col-md-6">

                    <div class="contact-info-box style1">

                        <div class="contact-content">

                            <div class="icon">

                                {{-- SVG ALAMAT TETAP DARI TEMPLATE KAMU --}}
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="80"
                                    height="80"
                                    viewBox="0 0 80 80"
                                    fill="none">
                                    <path
                                        d="M49.5876 58.8191C59.9803 45.4417 66.4751 38.4659 66.5628 26.7622C66.6728 12.0367 54.7225 0 39.9981 0C25.4456 0 13.549 11.7856 13.4384 26.3638C13.349 38.3848 19.9645 45.3511 30.4289 58.8169C20.0187 60.3725 13.4384 64.2814 13.4384 69.0625C13.4384 72.2652 16.3987 75.1391 21.7742 77.1547C26.6668 78.9894 33.1393 79.9998 40.0006 79.9998C46.8614 79.9998 53.3343 78.9894 58.227 77.1547C63.6025 75.1389 66.5628 72.265 66.5628 69.0623C66.5628 64.2839 59.9885 60.3759 49.5876 58.8191Z"
                                        fill="#7444FD" />
                                </svg>

                            </div>

                            <div class="title">
                                Alamat
                            </div>

                            <a
                                class="text"
                                href="#">
                                Kantor PPID Kabupaten Brebes
                            </a>

                        </div>

                    </div>

                </div>


                {{-- EMAIL --}}
                <div class="col-xl-4 col-md-6">

                    <div class="contact-info-box style1">

                        <div class="contact-content">

                            <div class="icon">

                                {{-- SVG EMAIL TETAP --}}
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="70"
                                    height="70"
                                    viewBox="0 0 70 70"
                                    fill="none">

                                    <path
                                        d="M66.5 69.9993H3.5C2.57203 69.9984 1.68233 69.6293 1.02615 68.9731C0.369973 68.317 0.000926812 67.4273 2.2814e-07 66.4993V23.3326C-0.000138442 23.1108 0.0629417 22.8936 0.181848 22.7064C0.300754 22.5192 0.470559 22.3697 0.671362 22.2756C0.872165 22.1814 1.09565 22.1465 1.31561 22.1748C1.53558 22.2031 1.74292 22.2935 1.91333 22.4355L30.5387 46.2261C31.7943 47.2637 33.3723 47.8312 35.0012 47.8312C36.63 47.8312 38.208 47.2637 39.4637 46.2261L68.0867 22.4343C68.2572 22.2923 68.4646 22.2018 68.6847 22.1736C68.9047 22.1453 69.1283 22.1804 69.3292 22.2747C69.53 22.369 69.6998 22.5186 69.8186 22.706C69.9374 22.8934 70.0004 23.1107 70 23.3326V66.4993C69.9991 67.4273 69.63 68.317 68.9738 68.9731C68.3177 69.6293 67.428 69.9984 66.5 69.9993Z"
                                        fill="white" />

                                </svg>

                            </div>

                            <h3 class="title">

                                <a href="mailto:ppid@brebeskab.go.id">
                                    ppid@brebeskab.go.id
                                </a>

                            </h3>

                            <p class="text">
                                Email kami untuk informasi dan layanan PPID.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- TELEPON --}}
                <div class="col-xl-4 col-md-6">

                    <div class="contact-info-box style1">

                        <div class="contact-content">

                            <div class="icon">

                                {{-- SVG TELEPON TETAP --}}
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="70"
                                    height="70"
                                    viewBox="0 0 70 70"
                                    fill="none">

                                    <path
                                        d="M63.4214 54.3759C63.4171 53.4634 63.2325 52.5607 62.8781 51.7198C62.5237 50.8788 62.0065 50.1163 61.3564 49.4759L55.4064 43.5749C54.1048 42.2791 52.343 41.5517 50.5064 41.5519C49.5916 41.5619 48.6877 41.7526 47.8468 42.113C47.0059 42.4734 46.2445 42.9964 45.6064 43.6519L42.5474 46.7459C41.5114 47.3129 35.9324 44.7089 30.7034 39.5289C25.4744 34.3489 22.7514 28.6999 23.2904 27.7059L26.3704 24.5979C27.6771 23.2797 28.4068 21.4964 28.3989 19.6402C28.391 17.7841 27.6463 16.007 26.3284 14.6999L20.3854 8.80592C19.0644 7.50849 17.2879 6.77982 15.4364 6.77592C14.5214 6.78514 13.6174 6.97546 12.7764 7.3359C11.9354 7.69633 11.174 8.21974 10.5364 8.87592L3.95638 15.4769C1.23338 18.1999 1.54138 23.4709 4.83138 30.2469C7.90438 36.5469 13.2314 43.7009 19.8954 50.2879C29.5694 59.8779 41.7704 67.8999 49.5614 67.8999C50.528 67.9492 51.4947 67.8022 52.403 67.4677C53.3113 67.1333 54.1425 66.6183 54.8464 65.9539L61.3984 59.3459C62.0459 58.6913 62.5579 57.9153 62.905 57.0625C63.2521 56.2096 63.4276 55.2967 63.4214 54.3759Z"
                                        fill="#7444FD" />

                                </svg>

                            </div>

                            <h3 class="title">

                                <a href="tel:+62283432123">
                                    (0283) 432123
                                </a>

                            </h3>

                            <p class="text">
                                Hubungi kami pada jam pelayanan.
                            </p>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</section>


<!-- Contact Form Section S T A R T -->
<section class="contact-form-section section-padding pt-0 fix">

    <div class="container">

        <div class="contact-form-wrapper style1">

            <div class="row gy-5 gx-60">


                {{-- MAP --}}
                <div class="col-xl-6">

                    <div class="contact-map">

                        <iframe
                            src="GANTI_DENGAN_GOOGLE_MAPS_EMBED_PP​​ID"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div>

                </div>


                {{-- FORM --}}
                <div class="col-xl-6">

                    <div class="contact-form style1">

                        <h2 class="contact-title">
                            Hubungi Kami
                        </h2>

                        <p class="desc">
                            Silakan sampaikan pertanyaan, saran, atau
                            informasi yang ingin Anda sampaikan kepada PPID.
                        </p>


                        {{-- SUCCESS --}}
                        @if (session('success'))

                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>

                        @endif


                        {{-- ERROR --}}
                        @if ($errors->any())

                        <div class="alert alert-danger mb-4">

                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                                @endforeach

                            </ul>

                        </div>

                        @endif


                        <form
                            action="{{ route('contact.store') }}"
                            id="contact-form"
                            method="POST"
                            class="contact-form-items">

                            @csrf

                            <div class="row g-4">


                                {{-- NAMA --}}
                                <div class="col-lg-6">

                                    <div class="form-clt">

                                        <span>Nama*</span>

                                        <input
                                            type="text"
                                            name="name"
                                            id="name"
                                            placeholder="Nama Lengkap"
                                            value="{{ old('name') }}"
                                            required>

                                    </div>

                                </div>


                                {{-- EMAIL --}}
                                <div class="col-lg-6">

                                    <div class="form-clt">

                                        <span>Email*</span>

                                        <input
                                            type="email"
                                            name="email2"
                                            id="email2"
                                            placeholder="Alamat Email"
                                            value="{{ old('email2') }}"
                                            required>

                                    </div>

                                </div>


                                {{-- PESAN --}}
                                <div class="col-lg-12">

                                    <div class="form-clt">

                                        <span>Pesan*</span>

                                        <textarea
                                            name="message"
                                            id="message"
                                            placeholder="Tuliskan pesan Anda"
                                            required>{{ old('message') }}</textarea>

                                    </div>

                                </div>


                                {{-- BUTTON --}}
                                <div class="col-lg-7">

                                    <button
                                        type="submit"
                                        class="theme-btn">

                                        Kirim Pesan

                                        <i class="fa-solid fa-arrow-right-long ms-1"></i>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection