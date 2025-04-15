<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center dark-background">
        <!-- <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div> -->
    </div><!-- End Top Bar -->

    <div class="branding">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <h1 class="sitename">SIA<br></h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('home')}}" class="{{request()->is('/') ? 'active' : ''}}">Beranda</a></li>
                    <li><a href="{{route('about')}}" class="{{request()->is('about') ? 'active' : ''}}">Tentang</a></li>
                    {{--<li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>--}}
                    <li><a href="{{route('dosen')}}" class="{{request()->is('dosen') ? 'active' : ''}}">Dosen & Staf</a>
                    </li>
                    {{-- <li><a href="pricing.html">Pricing</a></li>--}}
                    <li><a href="{{route('berita')}}" class="{{request()->is('berita') ? 'active' : ''}}">Berita</a></li>
                    <li class="dropdown"><a href="#"><span>Opsi lainnya</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Jatwal Kuliah</a></li>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li> -->
                            <li><a href="#">Akreditas</a></li>
                            <!-- <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li> -->
                        </ul>
                    </li>
                    <li><a href="{{route('contact')}}" class="{{request()->is('contact') ? 'active' : ''}}">Kontak</a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>