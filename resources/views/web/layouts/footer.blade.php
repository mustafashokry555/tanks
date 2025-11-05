<footer id="footer" class="footer light-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <span class="sitename">
                        <img src="{{ asset('assets/web/img/icon.png') }}" class="main-logo m-0" alt="logo">
                        <img src="{{ asset('assets/web/img/iocn2.png') }}" class="main-logo m-0" alt="logo">
                    </span>
                </a>
                <div class="footer-contact pt-3">
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p class="mt-3"><strong>{{ __('web.Phone') }}:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>{{ __('web.Email') }}:</strong> <span>info@example.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 footer-links">
                <h4>{{ __('web.Useful_Links') }}</h4>
                <ul>
                    <li><a href="#hero">{{ __('web.home') }}</a></li>
                    <li><a href="#about">{{ __('web.about') }}</a></li>
                    <li><a href="#services">{{ __('web.service') }}</a></li>
                    {{-- <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li> --}}
                </ul>
            </div>

            <div class="col-lg-3 col-md-3 footer-links">
                <h4>{{ __('web.services_title') }}</h4>
                <ul>
                    <li><a href="#">{{ __('web.service_list_1') }}</a></li>
                    <li><a href="#">{{ __('web.service_list_2') }}</a></li>
                    <li><a href="#">{{ __('web.service_list_3') }}</a></li>
                    <li><a href="#">{{ __('web.service_list_4') }}</a></li>
                    <li><a href="#">{{ __('web.service_list_5') }}</a></li>
                </ul>
            </div>

            {{-- <div class="col-lg-2 col-md-3 footer-links">
                <h4>Hic solutasetp</h4>
                <ul>
                    <li><a href="#">Molestiae accusamus iure</a></li>
                    <li><a href="#">Excepturi dignissimos</a></li>
                    <li><a href="#">Suscipit distinctio</a></li>
                    <li><a href="#">Dilecta</a></li>
                    <li><a href="#">Sit quas consectetur</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Nobis illum</h4>
                <ul>
                    <li><a href="#">Ipsam</a></li>
                    <li><a href="#">Laudantium dolorum</a></li>
                    <li><a href="#">Dinera</a></li>
                    <li><a href="#">Trodelas</a></li>
                    <li><a href="#">Flexo</a></li>
                </ul>
            </div> --}}

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>{{ __('web.Copyright') }}</span> <strong class="px-1 sitename">{{ __('web.title') }}</strong>
            <span>{{ __('web.Rights_Reserved') }}</span></p>
        <div class="credits">
            {{ __('web.Designed_by') }}<a href="{{ url('/') }}"> Mustafa Shokry </a> {{ __('web.Powered_by') }}
            <a href="https://nabta.tech/" target="_blank">Nabta.tech</a>
        </div>
    </div>

</footer>
