@extends('layouts.app', [
    'headerVariant' => 'inner',
    'footerVariant' => 'default',
])

@section('title', 'Tim Kami | Niotech')
@section('meta_description', 'Tim Kami | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>Team</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a>Team
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section S T A R T -->
    <section class="team-page-section section-padding fix">
        <div class="team-page-container-wrapper style1">
            <div class="container">
                <div class="team-page-wrapper style1">
                    <div class="row gy-5">
                        <div class="col-xl-4 col-md-6">
                            <div class="team-card style1">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets/images/team/teamThumb1_1.jpg') }}" alt="thumb">
                                </div>
                                <div class="team-card-content">
                                    <h3>
                                        <a href="{{ route('team.show') }}">Masirul Islam</a>
                                    </h3>
                                    <p class="designation">co-Founder</p>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="team-card style1">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets/images/team/teamThumb1_2.jpg') }}" alt="thumb">
                                </div>
                                <div class="team-card-content">
                                    <h3>
                                        <a href="{{ route('team.show') }}">Tonya Martin</a>
                                    </h3>
                                    <p class="designation">co-Founder</p>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="team-card style1">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets/images/team/teamThumb1_3.jpg') }}" alt="thumb">
                                </div>
                                <div class="team-card-content">
                                    <h3>
                                        <a href="{{ route('team.show') }}">Stephan Bullok</a>
                                    </h3>
                                    <p class="designation">co-Founder</p>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="team-card style1">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets/images/team/teamThumb1_4.jpg') }}" alt="thumb">
                                </div>
                                <div class="team-card-content">
                                    <h3>
                                        <a href="{{ route('team.show') }}">Dianne Russell</a>
                                    </h3>
                                    <p class="designation">co-Founder</p>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="team-card style1">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets/images/team/teamThumb1_5.jpg') }}" alt="thumb">
                                </div>
                                <div class="team-card-content">
                                    <h3>
                                        <a href="{{ route('team.show') }}">Annette Black</a>
                                    </h3>
                                    <p class="designation">co-Founder</p>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="team-card style1">
                                <div class="team-thumb">
                                    <img src="{{ asset('assets/images/team/teamThumb1_6.jpg') }}" alt="thumb">
                                </div>
                                <div class="team-card-content">
                                    <h3>
                                        <a href="{{ route('team.show') }}">Jacob Jones</a>
                                    </h3>
                                    <p class="designation">co-Founder</p>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
