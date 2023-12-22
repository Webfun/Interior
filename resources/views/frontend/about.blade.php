@extends('frontend.layouts.app')
@section('title', 'Home page')

@section('page')
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(user-assets/images/breadcrumb/breadcrumb.png)">
    </div>
    <div class="container">
        <div class="page-header__inner crumb-pad">
            <h2>About</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{Route('frontend.home')}}">Home</a></li>
                <li><span>></span></li>
                <li>About</li>
            </ul>
        </div>
    </div>
</section>
<section class="about-four">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-four__left">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="about-four__left-img">
                                <img src="{{ asset('user-assets/images/about_page/about_page_(1).png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="about-four__left-img">
                                <img src="{{ asset('user-assets/images/about_page/about_page_(2).png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-four__right">
                    <div class="section-title text-left">
                        <div class="section-title__icon">
                            <img src="{{ asset('user-assets/images/icon/section-title-icon.png')}}" alt="">
                        </div>
                        <span class="section-title__tagline">Welcome to gardon</span>
                        <h2 class="section-title__title">Innovative Designs, Nature's Masterpiece Creators</h2>
                    </div>
                    <p class="about-four__text">Grassland Enterprises, your trusted partner in transforming spaces through cutting-edge
                        landscape designs and architectural excellence. From concept to execution, we bring nature to
                        your doorstep with our online plant shop.
                        </p>
                        <ul class="about-one__points-1 list-unstyled ml-0 about-icon">
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
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Four End-->

<!--CTA Two Start-->
<section class="cta-two">
    <div class="container">
        <div class="cta-two__inner">
            <div class="cta-two__inner-content">
                <div class="cta-two__img">
                    <img src="{{ asset('user-assets/images/cta_section/cta_section.png')}}" alt="">
                </div>
                <div class="cta-two__shape-1">
                    <img src="{{ asset('user-assets/images/shapes/cta-two-shape-1.png')}}" alt="">
                </div>
                <div class="cta-two__left">
                    <div class="cta-two__icon">
                        <span class="icon-farmer"></span>
                    </div>
                    <h4 class="cta-two__title">Transform Your Space with Expert <br> Gardening Services?</h4>
                </div>
                <div class="cta-two__btn-box">
                    <a href="{{Route('frontend.contact')}}" class="thm-btn cta-two__btn">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA Two End-->

<!--Counter One Start-->
<section class="counter-one about-page-counter">
    <div class="counter-one__bg" style="background-image: url(user-assets/images/about_page_fun_fact/about_page_fun_fact.png);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5">
                <div class="counter-one__left">
                    <div class="section-title text-left">
                        <div class="section-title__icon">
                            <img src="{{ asset('user-assets/images/icon/section-title-icon.png')}}" alt="">
                        </div>
                        <span class="section-title__tagline">our fun facts</span>
                        <h2 class="section-title__title">Professional hands for your beautiful gardens &
                            landscape
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="counter-one__right">
                    <ul class="list-unstyled counter-one__list fun-fact">
                        <li>
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <span class="icon-landscape"></span>
                                </div>
                            </div>
                            <div class="counter-one__content count-box">
                                <h3 class="count-text" data-stop="886" data-speed="1500">00</h3>
                                <p class="counter-one__text">Projects <br> Completed</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <span class="icon-gardener"></span>
                                </div>
                            </div>
                            <div class="counter-one__content count-box">
                                <h3 class="count-text" data-stop="132" data-speed="1500">00</h3>
                                <p class="counter-one__text">Team <br> Members</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <span class="icon-trophy"></span>
                                </div>
                            </div>
                            <div class="counter-one__content count-box">
                                <h3 class="count-text" data-stop="206" data-speed="1500">00</h3>
                                <p class="counter-one__text">Award <br> Won</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <span class="icon-rating-stars"></span>
                                </div>
                            </div>
                            <div class="counter-one__content count-box">
                                <h3 class="count-text" data-stop="930" data-speed="1500">00</h3>
                                <p class="counter-one__text">Satisfied <br> Customers</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter One End-->

<!--Testimonial Two Start-->
<section class="testimonial-two">
    <div class="testimonial-two__shape-2 float-bob-y">
        <img src="{{ asset('user-assets/images/shapes/testimonial-two-shape-2.png')}}" alt="">
    </div>
    <div class="testimonial-two__shape-3 img-bounce">
        <img src="{{ asset('user-assets/images/shapes/testimonial-two-shape-3.png')}}" alt="">
    </div>
    <div class="container">
        <div class="testimonial-two__inner">
            <div class="testimonial-two__img-box">
                <div class="testimonial-two__img-one">
                    <img src="{{ asset('user-assets/images/about_page_testimonial/about_page_testimonial_(1).png')}}" alt="">
                    <div class="testimonial-two__img-two">
                        <img src="{{ asset('user-assets/images/about_page_testimonial/About page testimonial (2).png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="testimonial-two__left">
                        <div class="section-title text-left">
                            <div class="section-title__icon">
                                <img src="{{ asset('user-assets/images/icon/section-title-icon.png')}}" alt="">
                            </div>
                            <span class="section-title__tagline">Our feedbacks</span>
                            <h2 class="section-title__title">What they’re talking about us</h2>
                        </div>
                        <p class="testimonial-two__text-1">How to pursue pleasure rationally encounter
                            consequences
                            that painful again is there anyone who loves.</p>
                        <div class="testimonial-two__rating-box">
                            <div class="testimonial-two__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-two__rating-text">4.9 Customer Rating</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="testimonial-two__right">
                        <div class="testimonial-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
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
                                    "items":1
                                },
                                "992":{
                                    "items": 1
                                }
                            }
                        }'>
                           
                            <!--Testimonial Two Single Start-->


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
        </div>
    </div>
</section>
<!--Testimonial Two End-->

<!--Team One Start-->
<section class="team-one">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <img src="{{ asset('user-assets/images/icon/section-title-icon.png')}}" alt="">
            </div>
            <span class="section-title__tagline">our team members</span>
            <h2 class="section-title__title">Meet our professional
                <br> landscapers</h2>
        </div>
        <div class="row">
            <!--Team One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="{{ asset('user-assets/images/our_professionals/our_professionals_(1).png')}}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__share-btn">
                                <a href="team-details.html" class="team-one__share"><span class="fas fa-share-alt"></span></a>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__shape-1">
                                <img src="{{ asset('user-assets/images/shapes/team-one-shape-1.png')}}" alt="">
                            </div>
                            <p class="team-one__sub-title">Gardener</p>
                            <h3 class="team-one__name"><a href="team-details.html">Mike hardson</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team One Single End-->
            <!--Team One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="{{ asset('user-assets/images/our_professionals/our_professionals_(2).png')}}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__share-btn">
                                <a href="team-details.html" class="team-one__share"><span class="fas fa-share-alt"></span></a>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__shape-1">
                                <img src="{{ asset('user-assets/images/shapes/team-one-shape-1.png')}}" alt="">
                            </div>
                            <p class="team-one__sub-title">landscaper</p>
                            <h3 class="team-one__name"><a href="team-details.html">Aleesha brown</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team One Single End-->
            <!--Team One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="{{ asset('user-assets/images/our_professionals/our_professionals_(3).png')}}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__share-btn">
                                <a href="team-details.html" class="team-one__share"><span class="fas fa-share-alt"></span></a>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__shape-1">
                                <img src="{{ asset('user-assets/images/shapes/team-one-shape-1.png')}}" alt="">
                            </div>
                            <p class="team-one__sub-title">manager</p>
                            <h3 class="team-one__name"><a href="team-details.html">David copper</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team One Single End-->
        </div>
    </div>
</section>
<!--Team One End-->

<!--Brand Two Start-->

@endsection

