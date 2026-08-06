@extends('layouts.app', [
    'headerVariant' => 'inner',
    'footerVariant' => 'default',
])

@section('title', 'Detail Anggota Tim | Niotech')
@section('meta_description', 'Detail Anggota Tim | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>Team Details</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a>Team Details
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Details Section    S T A R T -->
    <section class="team-details-area section-padding pb-0 fix">
        <div class="container">
            <div class="team-details-wrap">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4">
                        <div class="team-details-thumb wow fadeInUp" data-wow-delay=".6s">
                            <img src="{{ asset('assets/images/team/teamDetailsThumb1_1.jpg') }}" alt="team-img">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="team-details-content">
                            <div class="details-info d-flex justify-content-between wow fadeInUp" data-wow-delay=".6s">
                                <div class="profile">
                                    <h3>Kenneth Z. Burke</h3>
                                    <span>Gemini market</span>
                                </div>
                                <div class="gt-social">
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.x.com/" class="active"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".9s">
                                Kenneth Z. Burke, known as Kenneth Duva Burke, was an influential American literary
                                theorist and philosopher. Born on May 5, 1897, and passing away on November 19, 1993.
                            </p>
                            <p class="mb-70 wow fadeInUp" data-wow-delay="1s"> Burke made significant contributions to
                                the fields of rhetoric, literary criticism, and philosophy. His work primarily focused
                                on the nature of language and its role in shaping human experience.</p>
                            <div class="signature wow fadeInUp" data-wow-delay=".6s">
                                <img src="{{ asset('assets/images/team/teamDetailsSignature.png') }}" alt="signature">
                            </div>
                            <div class="info-wrapper d-flex wow fadeInUp" data-wow-delay="1.2s">
                                <div class="checklist">
                                    <ul class="d-flex align-items-center gap-3">
                                        <li><i class="fa-solid fa-phone-volume"></i></li>
                                        <li>+91 5698 0036 420</li>
                                    </ul>
                                </div>
                                <div class="checklist">
                                    <ul class="d-flex align-items-center gap-3">
                                        <li><i class="fa-solid fa-paper-plane"></i></li>
                                        <li>info@exmple.com</li>
                                    </ul>
                                </div>
                                <div class="checklist">
                                    <ul class="d-flex align-items-center gap-3">
                                        <li><i class="fa-solid fa-location-dot"></i></li>
                                        <li>26 Manor St, Braintree UK</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-simple-history pb-425">
            <div class="container">
                <div class="row">
                    <h4 class="title wow fadeInUp" data-wow-delay="1.6s">Personal Information</h4>
                    <p class=" wow fadeInUp" data-wow-delay="1.9s"> Burke developed the concept of dramatism, which
                        views human communication as a form of dramatic action. He introduced the pentad (act, scene,
                        agent, agency, purpose) to analyze motives in communication.He emphasized the importance of
                        identification in rhetoric, where persuasion is seen as the alignment of interests or the
                        creation of a sense of unity between speaker and audience.</p>
                    <p class="mb-55 wow fadeInUp" data-wow-delay=".6s">Burke examined how language shapes human
                        perception and reality. He argued that language is not just a tool for communication but also a
                        framework for understanding the world.Burke's interdisciplinary approach has influenced various
                        fields, including communication studies, literary theory, sociology, and political science. His
                        ideas on rhetoric and symbolic action remain foundational in understanding human communication
                        and social interaction.</p>
                    <div class="skills">
                        <h4 class="title">Personal skills </h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="progress-wrap">
                                    <div class="progress-meta">
                                        <div class="title">Data Analyses</div>
                                        <div class="percentage">95%</div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 95%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-wrap">
                                    <div class="progress-meta">
                                        <div class="title">Solutions</div>
                                        <div class="percentage">75%</div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 75%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="progress-wrap">
                                    <div class="progress-meta">
                                        <div class="title">Technology</div>
                                        <div class="percentage">70%</div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 70%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-wrap">
                                    <div class="progress-meta">
                                        <div class="title">Digital Marketing</div>
                                        <div class="percentage">95%</div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 95%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-40 mb-0 wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of
                            Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                            humour, or randomised words which don't look even slightly believable. If you are going to
                            use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                            in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                            predefined chunks as necessary,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
