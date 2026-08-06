@extends('layouts.app', [
    'headerVariant' => 'inner',
    'footerVariant' => 'default',
])

@section('title', 'Proyek 2 | Niotech')
@section('meta_description', 'Proyek 2 | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>Our Project 02</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a>Our Project 02
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Section S T A R T -->
    <section class="project-section section-padding fix">
        <div class="project-container-wrapper style2">
            <div class="container">
                <div class="project-wrapper style2">
                    <div class="row gy-4">
                        <div class="col-xl-3 col-md-6">
                            <div class="project-card style1">
                                <div class="project-thumb">
                                    <img src="{{ asset('assets/images/project/projectThumb2_1.jpg') }}" alt="thumb">
                                </div>
                                <div class="project-content">
                                    <h3>
                                        <a href="{{ route('projects.show') }}">Working Laptop</a>
                                    </h3>
                                    <p class="text">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="project-card style1">
                                <div class="project-thumb">
                                    <img src="{{ asset('assets/images/project/projectThumb2_2.jpg') }}" alt="thumb">
                                </div>
                                <div class="project-content">
                                    <h3>
                                        <a href="{{ route('projects.show') }}">Working Laptop</a>
                                    </h3>
                                    <p class="text">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="project-card style1">
                                <div class="project-thumb">
                                    <img src="{{ asset('assets/images/project/projectThumb2_3.jpg') }}" alt="thumb">
                                </div>
                                <div class="project-content">
                                    <h3>
                                        <a href="{{ route('projects.show') }}">Working Laptop</a>
                                    </h3>
                                    <p class="text">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="project-card style1">
                                <div class="project-thumb">
                                    <img src="{{ asset('assets/images/project/projectThumb2_4.jpg') }}" alt="thumb">
                                </div>
                                <div class="project-content">
                                    <h3>
                                        <a href="{{ route('projects.show') }}">Working Laptop</a>
                                    </h3>
                                    <p class="text">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="project-card style1">
                                <div class="project-thumb">
                                    <img src="{{ asset('assets/images/project/projectThumb2_5.jpg') }}" alt="thumb">
                                </div>
                                <div class="project-content">
                                    <h3>
                                        <a href="{{ route('projects.show') }}">Working Laptop</a>
                                    </h3>
                                    <p class="text">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="project-card style1">
                                <div class="project-thumb">
                                    <img src="{{ asset('assets/images/project/projectThumb2_6.jpg') }}" alt="thumb">
                                </div>
                                <div class="project-content">
                                    <h3>
                                        <a href="{{ route('projects.show') }}">Working Laptop</a>
                                    </h3>
                                    <p class="text">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="project-card style1">
                                <div class="project-thumb">
                                    <img src="{{ asset('assets/images/project/projectThumb2_7.jpg') }}" alt="thumb">
                                </div>
                                <div class="project-content">
                                    <h3>
                                        <a href="{{ route('projects.show') }}">Working Laptop</a>
                                    </h3>
                                    <p class="text">View Project</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="project-card style1">
                                <div class="project-thumb">
                                    <img src="{{ asset('assets/images/project/projectThumb2_8.jpg') }}" alt="thumb">
                                </div>
                                <div class="project-content">
                                    <h3>
                                        <a href="{{ route('projects.show') }}">Working Laptop</a>
                                    </h3>
                                    <p class="text">View Project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
