<!-- Footer Section    S T A R T -->
<footer class="footer-section position-relative">
    <div class="footer-widgets-wrapper style1 fix">
        <div class="shape1"><img src="{{ asset('assets/images/shape/footerShape1_1.png') }}" alt="shape"></div>
        <div class="shape2"><img src="{{ asset('assets/images/shape/footerShape1_2.png') }}" alt="shape"></div>
        <div class="shape3"><img src="{{ asset('assets/images/shape/footerShape1_3.png') }}" alt="shape"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo/kec.png') }}" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                Website Resmi Kecamatan Brebes sebagai media informasi dan pelayanan
                                publik bagi masyarakat Kecamatan Brebes, Kabupaten Brebes.
                            </p>

                            <div class="footer-info">
                                <div class="info-item">
                                    <i class="fas fa-location-dot"></i>
                                    <span>
                                        Kecamatan Brebes<br>
                                        Kabupaten Brebes, Jawa Tengah
                                    </span>
                                </div>

                                <div class="info-item">
                                    <i class="fas fa-envelope"></i>
                                    <span>
                                        Informasi dan layanan PPID Kecamatan Brebes
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3> Pages </h3>
                        </div>

                        <ul class="list-area">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('profil.index') }}">
                                    Profil
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('regulasi.index') }}">
                                    Regulasi PPID
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('layanan.index') }}">
                                    Layanan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('informasi-publik.index') }}">
                                    Informasi Publik
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('contact.index') }}">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3> Utility Pages </h3>
                        </div>

                        <ul class="list-area">
                            <li>
                                <a href="{{ route('layanan.sop-ppid') }}">
                                    SOP Aplikasi PPID
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('layanan.alur-permohonan') }}">
                                    Alur Permohonan Informasi
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('layanan.daftar-permohonan') }}">
                                    Daftar Permohonan Informasi
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('layanan.formulir-permohonan') }}">
                                    Formulir Permohonan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('informasi-publik.informasi-berkala.index') }}">
                                    Informasi Publik Berkala
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('informasi-publik.informasi-dikecualikan.index') }}">
                                    Informasi Dikecualikan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <div class="contact-box">

                            <div class="subtitle">Hubungi Kami</div>

                            <div class="widget-head">
                                Kecamatan Brebes
                            </div>

                            <div class="text">
                                Untuk informasi, pelayanan publik, dan layanan PPID,
                                silakan menghubungi Kecamatan Brebes melalui kontak berikut.
                            </div>

                            <!-- Email -->
                            <div class="info">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>

                                <div class="link">
                                    <strong>Email</strong><br>
                                    <a href="mailto:ppid@brebeskab.go.id">
                                        ppid@brebeskab.go.id
                                    </a>
                                </div>
                            </div>

                            <!-- Telepon -->
                            <div class="info">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>

                                <div class="link">
                                    <strong>Telepon</strong><br>
                                    <a href="tel:+62283311111">
                                        (0283) 311111
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom style1">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft" data-wow-delay=".3s">
                    Brebes @ Kecamatan Brebes "Brebes Beres"
                </p>
                <ul class="social-links" data-wow-delay=".5s">
                    <li> <a href="#"><i class="fa-brands fa-facebook-f"></i></a> </li>
                    <li> <a href="#"><i class="fa-brands fa-twitter"></i></a> </li>
                    <li> <a href="#"><i class="fa-brands fa-linkedin-in"></i></a> </li>
                    <li> <a href="#"><i class="fa-brands fa-instagram"></i></a> </li>
                </ul>
            </div>
        </div>
    </div>
</footer>