@extends('layouts.app', [
    'headerVariant' => 'inner',
    'footerVariant' => 'default',
])

@section('title', 'Detail Layanan | Niotech')
@section('meta_description', 'Detail Layanan | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>Services Details</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a>Services Details
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Service Details Section S T A R T -->
    <div class="service-details-section">
        <div class="service-details-container-wrapper section-padding fix">
            <div class="container">
                <div class="service-details-wrapper">
                    <div class="main-thumb img-custom-anim-right wow fadeInLeft" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/services/servicesDetailsThumb1_1.jpg') }}" alt="thumb">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay=".3s">World best web design service provider.</h2>
                    <div class="tagcloud">
                        <div class="tag">
                            <a href="#">Creative</a>
                        </div>
                        <div class="tag">
                            <a href="#">Branding</a>
                        </div>
                        <div class="tag">
                            <a href="#">Analytics</a>
                        </div>
                        <div class="tag">
                            <a href="#">Audience</a>
                        </div>
                    </div>
                    <div class="details-box1">
                        <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s">
                            Service Overview
                        </h3>
                        <div class="row gy-3">
                            <div class="col-xl-7">
                                <p class="text wow fadeInUp" data-wow-delay=".3s">Nam posuere mauris enim, quis pretium
                                    elit placerat id Fusce egestas
                                    nisi vel ipsum vehicula facilisis In pulvinar imperdiet venenatis Class aptent
                                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec
                                    eu pulvinar lorem. Etiam vestibulum ligula quis nisl feugiat, consectetur placerat
                                    augue vestibulum Nulla aliquam elit eu diam pharetra.</p>
                            </div>
                            <div class="col-xl-5">
                                <p class="text wow fadeInUp" data-wow-delay=".5s">Fusce egestas nisi vel ipsum vehicula
                                    facilisis. In pulvinar imperdiet
                                    venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                    inceptos himenaeos. Donec eu pulvinar lorem. Etiam vestibulum ligula quis nisl
                                    feugiat, consectetur placerat augue vestibulum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="details-box2">
                        <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s">
                            Benefits With Our Service
                        </h3>
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <div class="feature-wrapper wow fadeInUp" data-wow-delay=".3s">
                                    <ul class="feature">
                                        <li>consectetur placerat augue vestibulum</li>
                                        <li>Mauris tincidunt a eget facilisis Quisque</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                                    </ul>
                                    <ul class="feature">
                                        <li>adipiscing elit Etiam aliquam, enim vitae</li>
                                        <li>Donec at augue ante Nam posuere mauris</li>
                                        <li>quis pretium elit placerat id Fusce egestas</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-xl-6">
                                <div class="progress-wrap">
                                    <div class="progress-meta">
                                        <div class="title">Branding Design</div>
                                        <div class="percentage">95%</div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar"
                                            style="width: 95%; --progress-width: 95%; animation: 1.8s ease 0s 1 normal forwards running animate-positive; opacity: 1;">
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-wrap mb-0">
                                    <div class="progress-meta">
                                        <div class="title">Business</div>
                                        <div class="percentage">95%</div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar"
                                            style="width: 95%; --progress-width: 95%; animation: 1.8s ease 0s 1 normal forwards running animate-positive; opacity: 1;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-wrapper">
                            <div class="row gy-3">
                                <div class="col-xl-6">
                                    <div class="thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".3s"><img
                                            src="{{ asset('assets/images/services/servicesDetailsThumb1_2.jpg') }}" alt="thumb"></div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="thumb  img-custom-anim-left wow fadeInUp" data-wow-delay=".3s"><img
                                            src="{{ asset('assets/images/services/servicesDetailsThumb1_3.jpg') }}" alt="thumb"></div>
                                </div>
                            </div>
                        </div>
                        <p class="text1 wow fadeInUp" data-wow-delay=".3s">
                            Nam posuere mauris enim, quis pretium elit placerat id Fusce egestas nisi vel ipsum vehicula
                            facilisis In pulvinar imperdiet venenatis Class aptent taciti sociosqu ad litora torent per
                            conubia nostra, per inceptos himenaeos. Donec eu pulvinar lorem. Etiam vestibulum ligula
                            quis nisl feugiat, consectetur placerat augue vestibulum Nulla aliquam elit eu diam
                            pharetra.Nam posuere mauris enim, quis pretium elit placerat id Fusce egestas nisi vel ipsum
                            vehicula facilis
                        </p>
                        <p class="text2 wow fadeInUp" data-wow-delay=".5s">
                            Nam posuere mauris enim, quis pretium elit placerat id Fusce egestas nisi vel ipsum vehicula
                            facilisis In pulvinar imperdiet venenatis Class aptent taciti sociosqu ad litora torent per
                            conubia nostra, per inceptos himenaeos. Donec eu pulvinar lorem. Etiam vestibulum ligula
                            quis nisl feugiat,
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
