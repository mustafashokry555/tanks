@extends('web.layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" dir="ltr">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="{{ asset('assets/web/img/hero-carousel/WhatsApp Image 2025-11-05 at 17.31.48_980acc75.jpg') }}"
                    alt="">
                <div class="carousel-container">
                    <h2>{{ __('web.slider1_title') }}</h2>
                    <p>{{ __('web.slider1_subtitle') }}</p>
                    <a href="#featured-services" class="btn-get-started">{{ __('web.slider1_button') }}</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item ">
                <img src="{{ asset('assets/web/img/hero-carousel/WhatsApp Image 2025-11-05 at 17.31.48_980acc75.jpg') }}"
                    alt="">
                <div class="carousel-container">
                    <h2>{{ __('web.slider2_title') }}</h2>
                    <p>{{ __('web.slider2_subtitle') }}</p>
                    <a href="#featured-services" class="btn-get-started">{{ __('web.slider2_button') }}</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item ">
                <img src="{{ asset('assets/web/img/hero-carousel/WhatsApp Image 2025-11-05 at 17.31.48_980acc75.jpg') }}"
                    alt="">
                <div class="carousel-container">
                    <h2>{{ __('web.slider3_title') }}</h2>
                    <p>{{ __('web.slider3_subtitle') }}</p>
                    <a href="#featured-services" class="btn-get-started">{{ __('web.slider3_button') }}</a>
                </div>
            </div><!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('web.about_title') }}</h2>
            <p>{{ __('web.about_subtitle') }}</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3>{{ __('web.about_heading') }}</h3>
                    <img src="{{ asset('assets/web/img/WhatsApp Image 2025-11-05 at 17.31.48_e70f576e.jpg') }}"
                        class="img-fluid rounded-4 mb-4" alt="About ASA">
                    <p>{{ __('web.about_paragraph1') }}</p>
                    <p>{{ __('web.about_paragraph2') }}</p>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            {{ __('web.about_italic') }}
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> <span>{{ __('web.about_point1') }}</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>{{ __('web.about_point2') }}</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>{{ __('web.about_point3') }}</span></li>
                        </ul>
                        <p>
                            {{ __('web.about_paragraph3') }}
                        </p>

                        <div class="position-relative mt-4">
                            <img src="{{ asset('assets/web/img/WhatsApp Image 2025-11-05 at 17.31.47_b532c57e.jpg') }}"
                                class="img-fluid rounded-4" alt="About ASA">
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <span>01</span>
                        <h4><a href="#" class="stretched-link">{{ __('web.whyus_title1') }}</a></h4>
                        <p>{{ __('web.whyus_text1') }}</p>
                    </div>
                </div><!-- Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <span>02</span>
                        <h4><a href="#" class="stretched-link">{{ __('web.whyus_title2') }}</a></h4>
                        <p>{{ __('web.whyus_text2') }}</p>
                    </div>
                </div><!-- Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <span>03</span>
                        <h4><a href="#" class="stretched-link">{{ __('web.whyus_title3') }}</a></h4>
                        <p>{{ __('web.whyus_text3') }}</p>
                    </div>
                </div><!-- Card Item -->

            </div>

        </div>

    </section><!-- /Why Us Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-emoji-smile"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="2500" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>{{ __('web.stats_clients') }}</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-journal-richtext"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="1800" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>{{ __('web.stats_projects') }}</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-headset"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="12000" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>{{ __('web.stats_support') }}</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-people"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>{{ __('web.stats_team') }}</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('web.services_title') }}</h2>
            <p>{{ __('web.services_description') }}</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                @foreach (__('web.services') as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi {{ $service['icon'] }}"></i></div>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Card</li>
                    <li data-filter=".filter-branding">Web</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-1.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-1.jpg') }}"
                                title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                title="Product 1" data-gallery="portfolio-gallery-product"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-3.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-3.jpg') }}"
                                title="Branding 1" data-gallery="portfolio-gallery-branding"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-4.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-4.jpg') }}"
                                title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-5.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-5.jpg') }}"
                                title="Product 2" data-gallery="portfolio-gallery-product"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-6.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-6.jpg') }}"
                                title="Branding 2" data-gallery="portfolio-gallery-branding"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-7.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-7.jpg') }}"
                                title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-8.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-8.jpg') }}"
                                title="Product 3" data-gallery="portfolio-gallery-product"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding') }}">
                        <img src="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-9.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/web/img/masonry-portfolio/masonry-portfolio-9.jpg') }}"
                                title="Branding 2" data-gallery="portfolio-gallery-branding"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/web/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/web/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/web/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->

    <!-- Faq Section -->
    {{-- <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row faq-item" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5 d-flex">
                    <i class="bi bi-question-circle"></i>
                    <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                        curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5 d-flex">
                    <i class="bi bi-question-circle"></i>
                    <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                        laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                        pellentesque elit ullamcorper dignissim.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-5 d-flex">
                    <i class="bi bi-question-circle"></i>
                    <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                        elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                        pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item" data-aos="fade-up" data-aos-delay="400">
                <div class="col-lg-5 d-flex">
                    <i class="bi bi-question-circle"></i>
                    <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt
                        sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat
                        assumenda soluta sunt pariatur error doloribus fuga.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-5 d-flex">
                    <i class="bi bi-question-circle"></i>
                    <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante
                        in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum
                        est. Purus gravida quis blandit turpis cursus in
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

        </div>

    </section> --}}
    <!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@example.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                data-aos-delay="400">
                <div class="row gy-4">

                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name"
                            required="">
                    </div>

                    <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" placeholder="Your Email"
                            required="">
                    </div>

                    <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>

                        <button type="submit">Send Message</button>
                    </div>

                </div>
            </form><!-- End Contact Form -->

        </div>

    </section><!-- /Contact Section -->
@endsection
