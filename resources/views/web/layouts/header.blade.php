<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                {{-- <i class="bi bi-envelope d-flex align-items-center"><a --}}
                        {{-- href="mailto:contact@example.com">{{ $setting->email }}</a></i> --}}
                {{-- <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $setting->phone }}</span></i> --}}
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                {{-- <h1 class="sitename d-flex align-item-center"><img style="margin-right: 0px" src="{{ $setting->logoLink }}">{{ $setting->name_en }}</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">{{ __('web.home') }}</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="#contact">Contact</a></li>

                    <style>
                        .disabled-lang {
                            pointer-events: none;
                            cursor: default;
                            opacity: 0.6;
                            color: var(--default-color) !important;
                        }
                    </style>
                    <li class="dropdown" style="margin-right: 50px;">
                        <a class="text-center">
                            <span >
                                <img style="width: 32px;"
                                    src="{{ asset('assets/web/img/flags/' . ($currentLocale == 'ar' ? 'saudi_arabia.png' : 'us_flag.jpg')) }}"
                                    alt="img">
                            </span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li>
                                <a class="{{ $currentLocale == 'en' ? 'disabled-lang' : '' }}"
                                    href="{{ route('setLocale', 'en') }}">
                                    <span>
                                        <img style="width: 32px;" src="{{ asset('assets/web/img/flags/us_flag.jpg') }}"
                                            alt="img">
                                        English
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ $currentLocale == 'ar' ? 'disabled-lang' : '' }}"
                                    href="{{ route('setLocale', 'ar') }}">
                                    <span>
                                        <img style="width: 32px;" src="{{ asset('assets/web/img/flags/saudi_arabia.png') }}"
                                            alt="img">
                                        العربية
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>

    </div>

</header>
