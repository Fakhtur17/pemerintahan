@extends('layouts.app', [
    'headerVariant' => 'inner',
    'footerVariant' => 'default',
])

@section('title', 'FAQ | Niotech')
@section('meta_description', 'FAQ | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>FAQ’s</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a> FAQ’s
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Faq Section S T A R T -->
    <section class="faq-section section-padding fix">
        <div class="faq-container-wrapper style2">
            <div class="container">
                <div class="faq-wrapper style2">
                    <div class="row gy-5 gx-100">
                        <div class="col-xl-6">
                            <div class="faq-thumb">
                                <img src="{{ asset('assets/images/faq/faqThumb3_1.png') }}" alt="thumb">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="faq-content style1 mt-0">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq1"
                                                    aria-expanded="true" aria-controls="faq1">
                                                    Looking for a solution to boost productivity?
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the
                                                    majority have suffered alteration in some form, by injected humour,
                                                    or
                                                    randomised words which don't look even slightly
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq2"
                                                    aria-expanded="false" aria-controls="faq2">
                                                    Need an easy way to manage your projects?
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the
                                                    majority have suffered alteration in some form, by injected humour,
                                                    or
                                                    randomised words which don't look even slightly
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq3"
                                                    aria-expanded="false" aria-controls="faq3">
                                                    Why the Foster Trust Builds and how to develop ?
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the
                                                    majority have suffered alteration in some form, by injected humour,
                                                    or
                                                    randomised words which don't look even slightly
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq4"
                                                    aria-expanded="false" aria-controls="faq4">
                                                    Do you know Create Auto Layout ?
                                                </button>
                                            </h5>
                                            <div id="faq4" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the
                                                    majority have suffered alteration in some form, by injected humour,
                                                    or
                                                    randomised words which don't look even slightly
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq5"
                                                    aria-expanded="false" aria-controls="faq5">
                                                    Need an easy way to manage your projects?
                                                </button>
                                            </h5>
                                            <div id="faq5" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the
                                                    majority have suffered alteration in some form, by injected humour,
                                                    or
                                                    randomised words which don't look even slightly
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                                    Seeking a user-friendly solution for your team?
                                                </button>
                                            </h5>
                                            <div id="faq6" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the
                                                    majority have suffered alteration in some form, by injected humour,
                                                    or
                                                    randomised words which don't look even slightly
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
