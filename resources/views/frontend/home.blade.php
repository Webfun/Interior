@extends('frontend.layouts.app')
@section('title', 'Home page')

@section('page')


    <!-- Main Sllider Start -->
    <section class="main-slider" id="home">
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            <div class="item main-slider__slide-1">
                <div class="main-slider__bg" style="background-image: url(user-assets/images/backgrounds/slider-1-1.jpg);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider__content">
                        <h2 class="main-slider__title home-mob">Expert Landscape <br>Design Services </h2>
                        <p class="main-slider__sub-title hero-pad"> Transforming Spaces with Innovative Landscape Designs</p>
                        <div class="main-slider__btn-box">
                            <a href="{{Route('frontend.contact')}}" class="main-slider__btn thm-btn">Get Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-2">
                <div class="main-slider__bg" style="background-image: url(user-assets/images/backgrounds/slider-1-2.jpg);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider__content">

                        <h2 class="main-slider__title home-mob">Crafting Your
                            <br>Vision</h2>
                        <p class="main-slider__sub-title hero-pad">Architectural Excellence from Plans to Execution
                        </p>
                        <div class="main-slider__btn-box">
                            <a href="{{Route('frontend.contact')}}" class="main-slider__btn thm-btn">Get Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-3">
                <div class="main-slider__bg" style="background-image: url(user-assets/images/backgrounds/slider-1-3.jpg);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider__content">

                        <h2 class="main-slider__title home-mob ">Shop Nature's <br>Finest</h2>
                        <p class="main-slider__sub-title hero-pad">Bringing Nature to Your Doorstep - Online Plant Shop</p>
                        <div class="main-slider__btn-box">
                            <a href="{{Route('frontend.contact')}}" class="main-slider__btn thm-btn">Get Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Main Sllider Start -->



    <section class="about-one padding-about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img decoding="async"
                                    src="{{ asset('user-assets/images/home_about_section/home_about_section (1).png')}}"
                                    alt="about-one-img-1" title="about-one-img-1">
                            </div>
                            <div class="about-one__img-two">
                                <img decoding="async"
                                    src="{{ asset('user-assets/images/home_about_section/home_about_section_(2).png')}}"
                                    alt="about-one-img-2" title="about-one-img-2">
                            </div>
                            <div class="about-one__experience">
                                <div class="about-one__experience-shape-1">
                                    <img decoding="async"
                                        src="https://bracketweb.com/gardonwp/wp-content/uploads/2023/06/about-one-experience-shape-1.png"
                                        alt="about-one-experience-shape-1" title="about-one-experience-shape-1">
                                </div>
                                <div class="about-one__experience-shape-2">
                                    <img decoding="async"
                                        src="https://bracketweb.com/gardonwp/wp-content/uploads/2023/06/about-one-experience-shape-2.png"
                                        alt="about-one-experience-shape-2" title="about-one-experience-shape-2">
                                </div>
                                <div class="about-one__experience-year">
                                    <h3 class="odometer" data-count="26">00</h3>
                                </div>
                                <div class="about-one__experience-text">
                                    <p class="">Years of <br> experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__icon">
                                <img decoding="async"
                                    src="https://bracketweb.com/gardonwp/wp-content/uploads/2023/06/section-title-icon.png"
                                    alt="section-title-icon" title="section-title-icon">
                            </div>
                            <span class="section-title__tagline">Welcome to Grassland</span>
                            <h2 class="section-title__title">Innovative Designs, Nature's Masterpiece Creators</h2>
                        </div>
                        <p class="about-one__text-2">Grassland Enterprises, your trusted partner in transforming spaces through cutting-edge
                            landscape designs and architectural excellence. From concept to execution, we bring nature to
                            your doorstep with our online plant shop.
                            </p>
                        <ul class="about-one__points-1 list-unstyled ml-0">
                            <li>
                                <div class="icon">
                                    <span aria-hidden="true" class="  icon-house"></span>
                                </div>
                                <div class="text">
                                    <p class="">Creative <br> Expertise</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span aria-hidden="true" class="   icon-building"></span>
                                </div>
                                <div class="text">
                                    <p class=" ">Comprehensive <br> services</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-one__btn-box padding-btn">
                            <a class="about-one__btn thm-btn" href="{{ route('frontend.about') }}">Discover
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Services Three Start-->
    <section class="services-three">
        <div class="services-three__bg"
            style="background-image: url(user-assets/images/backgrounds/services-three-bg.png);"></div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <img src="{{ asset('user-assets/images/icon/section-title-icon.png') }}" alt="">
                </div>
                <span class="section-title__tagline">our seervices list</span>
                <h2 class="section-title__title">Services we’re providing to
                    <br> our customers
                </h2>
            </div>
            <div class="row">
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-three__single">
                        <div class="services-three__img-box">
                            <div class="services-three__img">
                                <img src="{{ asset('user-assets/images/home_service_section/home_service_section_(1).png') }}" alt="">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-gardening"></span>
                            </div>
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="spring-cleaning.html">Landscape Design</a>
                            </h3>
                            <p class="services-three__text">Innovative designs that harmonize nature for stunning outdoor transformations.
                            </p>
                            <div class="services-three__arrow-box">
                                <a href="{{Route('frontend.services')}}" class="services-three__arrow"><span
                                        class="icon-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-three__single">
                        <div class="services-three__img-box">
                            <div class="services-three__img">
                                <img src="{{ asset('user-assets/images/home_service_section/home_service_section_(2).png') }}" alt="">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-farming-and-gardening"></span>
                            </div>
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="hard-scaping.html">Architecture Services</a>
                            </h3>
                            <p class="services-three__text">Visionary designs, precise execution, elevating spaces with architectural excellence.
                            </p>
                            <div class="services-three__arrow-box">
                                <a href="{{Route('frontend.services')}}" class="services-three__arrow"><span
                                        class="icon-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-three__single">
                        <div class="services-three__img-box">
                            <div class="services-three__img">
                                <img src="{{ asset('user-assets/images/home_service_section/home_service_section_(3).png') }}" alt="">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-gardener-1"></span>
                            </div>
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="garden-care.html">Garden Landscape Services</a>
                            </h3>
                            <p class="services-three__text"> Crafting vibrant and sustainable garden landscapes for enchanting outdoor
                                experiences.
                                </p>
                            <div class="services-three__arrow-box">
                                <a href="{{Route('frontend.services')}}" class="services-three__arrow"><span
                                        class="icon-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="services-three__single margin-services">
                        <div class="services-three__img-box">
                            <div class="services-three__img">
                                <img src="{{ asset('user-assets/images/home_service_section/home_service_section_(4).png') }}" alt="">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-lawn-mower-1"></span>
                            </div>
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="lawn-fertilization.html">Online Plant Shop</a>
                            </h3>
                            <p class="services-three__text">Conveniently bring nature home with a diverse range of plants</p>
                            <div class="services-three__arrow-box">
                                <a href="{{Route('frontend.services')}}" class="services-three__arrow"><span
                                        class="icon-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
            </div>
        </div>
    </section>
    <!--Services Three End-->
    <!--Project One Start-->
    <section class="project-one sec-mt">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <img src="{{ asset('user-assets/images/icon/section-title-icon.png') }}" alt="">
                </div>
                <span class="section-title__tagline">our work showcase</span>
                <h2 class="section-title__title">Enjoy our incredible recently <br> completed projects</h2>
            </div>
            <div class="project-one__carousel thm-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
                "items": 3,
                "margin": 30,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": true,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items":1
                    },
                    "768":{
                        "items":2
                    },
                    "992":{
                        "items": 3
                    },
                    "1200":{
                        "items":3
                    }
                }
            }'>
                <!--Project One Single Start-->

                @foreach ($projects as $project)
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="{{ url('projectt/preview/' . $project->preview_img) }}" alt="">
                            <a href="{{ asset('user-assets/images/project/project-1-1.jpg') }}"
                                class="img-popup project-one__icon">
                                <i class="fas fa-eye"></i>
                            </a>
                            <div class="project-one__content">
                                <p class="project-one__sub-title">{{ $project->title }}</p>
                                <h4 class="project-one__title"><a href="project-details.html">{{ $project->hyperlinks }}{{ $project->title }}</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Project One Single End-->




            </div>
        </div>
    </section>
    <!--Project One End-->


    <section class="process-one">
        <div class="process-one__shape-1"
            style="background-image: url(https://bracketweb.com/gardonwp/wp-content/uploads/2023/06/process-one-shape-1.png);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <img decoding="async"
                        src="https://bracketweb.com/gardonwp/wp-content/uploads/2023/06/section-title-icon.png"
                        alt="section-title-icon" title="section-title-icon">
                </div>
                <span class="section-title__tagline">our work process </span>
                <h2 class="section-title__title">See our 4 easy steps how <br> we works</h2>
            </div>
            <div class="process-one__top">
                <div class="process-one__shape-2">
                    <img decoding="async"
                        src="https://bracketweb.com/gardonwp/wp-content/uploads/2023/06/process-one-shape-2.png"
                        alt="process-one-shape-2" title="process-one-shape-2">
                </div>
                <div class="row">
                    <!--Process One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="process-one__single process-one__single--one">
                            <div class="process-one__icon-box">
                                <div class="process-one__count-box"></div>
                                <div class="process-one__icon">
                                    <span aria-hidden="true" class="  icon-communication"></span>
                                </div>
                            </div>
                            <div class="process-one__content">
                                <h4 class="process-one__title">*Consultation & Conceptualization</h4>
                                <p class="process-one__text">Initial meeting to understand client needs, envisioning design concepts</p>
                            </div>
                        </div>
                    </div>
                    <!--Process One Single End-->
                    <!--Process One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="process-one__single process-one__single--two">
                            <div class="process-one__icon-box">
                                <div class="process-one__count-box"></div>
                                <div class="process-one__icon">
                                    <span aria-hidden="true" class="   icon-growth"></span>
                                </div>
                            </div>
                            <div class="process-one__content">
                                <h4 class="process-one__title process-one__title">Design & Planning</h4>
                                <p class="process-one__text process-one__text">Crafting detailed plans, considering aesthetics, functionality, and sustainability.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Process One Single End-->
                    <!--Process One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="process-one__single process-one__single--three">
                            <div class="process-one__icon-box">
                                <div class="process-one__count-box"></div>
                                <div class="process-one__icon">
                                    <span aria-hidden="true" class="   icon-planting"></span>
                                </div>
                            </div>
                            <div class="process-one__content">
                                <h4 class="process-one__title process-one__title process-one__title">Execution & Construction</h4>
                                <p class="process-one__text process-one__text process-one__text">- Implementing plans with precision, overseeing construction for flawless execution</p>
                            </div>
                        </div>
                    </div>
                    <!--Process One Single End-->
                    <!--Process One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="process-one__single process-one__single--four">
                            <div class="process-one__icon-box">
                                <div class="process-one__count-box"></div>
                                <div class="process-one__icon">
                                    <span aria-hidden="true" class="   icon-park"></span>
                                </div>
                            </div>
                            <div class="process-one__content">
                                <h4 class="process-one__title process-one__title process-one__title process-one__title">
                                    Completion & Follow-up</h4>
                                <p class="process-one__text process-one__text process-one__text process-one__text">Project handover, ensuring client satisfaction, and providing post-completion support.</p>
                            </div>
                        </div>
                    </div>
                    <!--Process One Single End-->
                </div>
            </div>

            <div class="process-one__bottom">
                <div class="process-one__bottom-inner">
                    <div class="process-one__bottom-left">
                        <p class="">We create an environment that’s beyond your imagination</p>
                    </div>
                    <div class="process-one__bottom-right">
                        <div class="process-one__bottom-btn-box">
                            <a class="thm-btn process-one__bottom-btn"
                                href="{{Route('frontend.contact')}}">Contact With Team</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Process One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <div class="section-title__icon">
                                <img src="{{ asset('user-assets/images/icon/section-title-icon.png') }}" alt="">
                            </div>
                            <span class="section-title__tagline">Our feedbacks</span>
                            <h2 class="section-title__title">What they’re talking about us</h2>
                        </div>
                        <p class="testimonial-one__text-1">How to pursue pleasure rationally encounter consequences
                            that painful again is there anyone who loves.</p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel"
                        data-owl-options='{
                            "items": 3,
                            "margin": 30,
                            "smartSpeed": 700,
                            "loop":true,
                            "autoplay": false,
                            "nav":false,
                            "dots":true,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive":{
                                "0":{
                                    "items":1
                                },
                                "768":{
                                    "items":2
                                },
                                "992":{
                                    "items": 2
                                }
                            }
                        }'>
                        <!--Testimonial One Single Start-->
                        @foreach ($testimonials as $tt)

                            <div class="item">

                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1"
                                            style="background-image: url(user-assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>

                                        <div class="testimonial-item">
                                            <div class="testimonial-thumb">
                                                <p class="comments">{{ $tt->custreview }}</p>

                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <div class="testimonial-one__img">
                                                        <img src="/testiimages/{{ $tt->custimg }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <h4 class="testimonial-one__client-name">{{ $tt->custname }}</h4>
                                                    <p class="testimonial-one__client-sub-title">{{ $tt->custdesignation }}, {{ $tt->custcompany }}</p>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

   <!--Brand One Start-->
   <section class="brand-one brand-two">
    <div class="container">
        <div class="brand-one__inner">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100,
            "slidesPerView": 5,
            "loop": true,
            "navigation": {
                "nextEl": "#brand-one__swiper-button-next",
                "prevEl": "#brand-one__swiper-button-prev"
            },
            "autoplay": { "delay": 5000 },
            "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('user-assets/images/brand/brand-1-1.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user-assets/images/brand/brand-1-2.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user-assets/images/brand/brand-1-3.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user-assets/images/brand/brand-1-4.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user-assets/images/brand/brand-1-5.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user-assets/images/brand/brand-1-1.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user-assets/images/brand/brand-1-2.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user-assets/images/brand/brand-1-3.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user-assets/images/brand/brand-1-4.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user-assets/images/brand/brand-1-5.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->

    <!--Blog Two Start-->
    <section class="blog-two">
        <div class="blog-two__bg" style="background-image: url(user-assets/images/backgrounds/blog-two-bg.png);"></div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <img src="{{ asset('user-assets/images/icon/section-title-icon.png') }}" alt="">
                </div>
                <span class="section-title__tagline">Our News Updates</span>
                <h2 class="section-title__title">Latest articles &
                    <br> news from the blogs
                </h2>
            </div>
            <div class="row">
                <!--Blog Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img-box">
                            <div class="blog-two__img">
                                <img src="{{ asset('user-assets/images/article_blog_section/article_blog_section_(1).png') }}" alt="">
                            </div>
                            <div class="blog-two__date">
                                <p>30
                                    <br> Mar
                                </p>
                            </div>
                            <div class="blog-two__content">
                                <p><span class="fas fa-comments"></span>2 Comments</p>
                                <h3 class="blog-two__title"><a href="blog-details.html">Best ways to light up your
                                        garden walkways</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End-->
                <!--Blog Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img-box">
                            <div class="blog-two__img">
                                <img src="{{ asset('user-assets/images/article_blog_section/article_blog_section_(2).png') }}" alt="">
                            </div>
                            <div class="blog-two__date">
                                <p>30
                                    <br> Mar
                                </p>
                            </div>
                            <div class="blog-two__content">
                                <p><span class="fas fa-comments"></span>2 Comments</p>
                                <h3 class="blog-two__title"><a href="blog-details.html">Quis ipsum suspendisse
                                        ultrices gravida.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End-->
                <!--Blog Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img-box">
                            <div class="blog-two__img">
                                <img src="{{ asset('user-assets/images/article_blog_section/article_blog_section_(3).png') }}" alt="">
                            </div>
                            <div class="blog-two__date">
                                <p>30
                                    <br> Mar
                                </p>
                            </div>
                            <div class="blog-two__content">
                                <p><span class="fas fa-comments"></span>2 Comments</p>
                                <h3 class="blog-two__title"><a href="blog-details.html">Consectetur adipiscing elit,
                                        sed do eiusmod</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End-->
            </div>
        </div>
    </section>
    <!--Blog Two End-->

    <!--CTA Two Start-->
    <section class="cta-two">
        <div class="container">
            <div class="cta-two__inner">
                <div class="cta-two__inner-content">
                    <div class="cta-two__img">
                        <img src="{{ asset('user-assets/images/cta_section/cta_section.png') }}" alt="">
                    </div>
                    <div class="cta-two__shape-1">
                        <img src="{{ asset('user-assets/images/shapes/cta-two-shape-1.png') }}" alt="">
                    </div>
                    <div class="cta-two__left">
                        <div class="cta-two__icon">
                            <span class="icon-farmer"></span>
                        </div>
                        <h4 class="cta-two__title">Transform Your Space with Expert <br> Gardening Services.
                        </h4>
                    </div>
                    <div class="cta-two__btn-box">
                        <a href="{{Route('frontend.contact')}}" class="thm-btn cta-two__btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA Two End-->




@endsection
