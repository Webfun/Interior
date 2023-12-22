@extends('frontend.layouts.app')
@section('title', 'Home page')

@section('page')

<section class="page-header">
    <div class="page-header-bg" style="background-image: url(user-assets/images/breadcrumb/breadcrumb.png)">
    </div>
    <div class="container">
        <div class="page-header__inner crumb-pad">
            <h2>Services</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{Route('frontend.home')}}">Home</a></li>
                <li><span>></span></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>

<section class="services-page padding-serv">
    <div class="container">
        <div class="row">
            <!--Services One Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="services-one__single">
                    <div class="services-one__img-box">
                        <div class="services-one__img">
                            <img src="{{ asset('user-assets/images/service_page/service_page_(1).png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-one__icon">
                        <span class="icon-gardening"></span>
                    </div>
                    <h3 class="services-one__title"><a href="spring-cleaning.html">Landscape Design</a></h3>
                    <p class="services-one__text">Innovative designs that harmonize <br> nature for stunning outdoor <br> transformations
                    </p>
                    <div class="services-one__btn-box">
                        <a href="{{Route('frontend.services')}}" class="services-one__btn">Read More<span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="services-one__single">
                    <div class="services-one__img-box">
                        <div class="services-one__img">
                            <img src="{{ asset('user-assets/images/service_page/service_page_(2).png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-one__icon">
                        <span class="icon-farming-and-gardening"></span>
                    </div>
                    <h3 class="services-one__title"><a href="hard-scaping.html">Architecture Services</a></h3>
                    <p class="services-one__text"> Visionary designs, precise execution, elevating spaces with architectural excellence
                    </p>
                    <div class="services-one__btn-box">
                        <a href="{{Route('frontend.services')}}" class="services-one__btn">Read More<span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="services-one__single">
                    <div class="services-one__img-box">
                        <div class="services-one__img">
                            <img src="{{ asset('user-assets/images/service_page/service_page_(3).png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-one__icon">
                        <span class="icon-gardener-1"></span>
                    </div>
                    <h3 class="services-one__title"><a href="garden-care.html">Garden Landscape Services</a></h3>
                    <p class="services-one__text">Crafting vibrant and sustainable garden landscapes for enchanting outdoor
                        experiences.
                    </p>
                    <div class="services-one__btn-box">
                        <a href="{{Route('frontend.services')}}" class="services-one__btn">Read More<span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-details">
    <div class="container">
        <div class="row services-icon">
            <div class="col-xl-12 col-lg-7">
                <div class="services-details__right">
                    <h3 style="text-align: center;" class="services-details__title-2">Why Choose Grassland</h3>
                    <h5 style="text-align: center;" class="sub-head"> Experience the Grassland Advantage</h5>
                    <ul class="services-details__points-list list-unstyled">
                        <li class="icon-flex">
                            <div class="services-details__icon-and-title">
                                <div class="services-details__points-icon service-point">
                                    <span class="icon-gardening-1"></span>
                                </div>
                                <h3 class="services-details__points-title">Creative
                                    <br> Expertise</h3>
                            </div>
                            <p class="services-details__points-text serve-text">Unleash the power of innovative designs crafted by our skilled team.</p>
                        </li>
                        <li class="icon-flex">
                            <div  class="services-details__icon-and-title icon-size">
                                <div class="services-details__points-icon service-point">
                                    <span class="icon-seeding"></span>
                                </div>
                                <h3 class="services-details__points-title">Comprehensive
                                    <br> Services</h3>
                            </div>
                            <p class="services-details__points-text serve-text">From concept to completion, Grassland ensures a seamless and satisfying
                            experience</p>
                        </li>
                        <li class="icon-flex">
                            <div  class="services-details__icon-and-title icon-sizes">
                                <div  class="services-details__points-icon service-point">
                                    <span class="icon-house"></span>
                                </div>
                                <h3 class="services-details__points-title">Quality
                                    <br> Assurance</h3>
                            </div>
                            <p class="services-details__points-text serve-text">Trust in our commitment to precision, sustainability, and client satisfaction.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

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
                            href="https://bracketweb.com/gardonwp/contact/">Contact With Team</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Services Page End-->

@endsection
