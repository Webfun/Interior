@extends('frontend.layouts.app')
@section('title', 'Home')
@section('page')

<section class="home_banner_02">
        <div class="home-carousel owl-theme owl-carousel">
            <div class="slide-item hero-padding">
                <div class="image-layer" data-background="{{ asset('frontend/images/bg/15.jpg') }}"></div>
                <div class="auto-container main-container">
                    <div class="row clearfix">
                        <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                            <div class="content-box home-cont">
                                <h1 class="home-carousel-title "><span class="main-title">Transforming</span> <span class="text-primary-color main-title">Spaces,
                                        Enriching</span> <span class="text-obj1 main-title">Lives!</span></h1>
                                <p class="home-carousel-text">We create places that inspire and genuinely enrich
                                    lives by giving spaces Life </p>
                                <div class="btn-box">
                                    <a href="page-services-style-01.html" class="animate-btn-style3">GET IN TOUCH</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Slider End -->
    <!-- Service Section Area Start -->
    <section style="padding: 125px 0px 0px 0px;" class="feature-work-section pdt-110 pdb-105 service-area">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <h5 class="side-line-left text-primary-color mrb-10">Our Works</h5>
                        <h2 class="mrb-45 our-works">Our Feature <span class="text-primary-color">Works</span></h2>
                        <a href="page-services-style-01.html" class="animate-btn-style2 mrb-sm-60">All Services</a>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-style1">
                            <div class="service-inner">
                                <i class="service-icon webextheme-icon-armchair"></i>
                                <h4 class="service-title">Laboratory Solutions</h4>
                                <div class="services-count"></div>
                                <p class="service-description">We supply a range of products, including safety cabinets,
                                    ventilated equipment, modular lab furniture, and more.</p>
                                <div class="services-link">
                                    <a class="text-btn" href="service-architecture.html">Read More</a>
                                </div>
                                <div class="service-inner-obj"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-style1">
                            <div class="service-inner">
                                <i class="service-icon webextheme-icon-kitchen"></i>
                                <h4 class="service-title">Datacenter Solutions</h4>
                                <div class="services-count"></div>
                                <p class="service-description">Explore tailored data center solutions with construction and
                                    classification based on design and tier ratings.</p>
                                <div class="services-link">
                                    <a class="text-btn" href="service-architecture.html">Read More</a>
                                </div>
                                <div class="service-inner-obj"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-style1">
                            <div class="service-inner">
                                <i class="service-icon webextheme-icon-architect"></i>
                                <h4 class="service-title">Audio-Video Solutions</h4>
                                <div class="services-count"></div>
                                <p class="service-description">We promise exceptional entertainment, from Dolby Atmos setups
                                    to home theater automation</p>
                                <div class="services-link">
                                    <a class="text-btn" href="service-architecture.html">Read More</a>
                                </div>
                                <div class="service-inner-obj"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section Area End -->
    <!-- About Section Start -->
    <section class="about-section pdt-110 pdb-105 bg-no-repeat bg-cover bg-pos-cb about-padding"
        data-background="{{ asset('frontend/images/bg/abs-bg3.png') }}" data-overlay-light="4">
        <div class="container">
            <div class="row about-flex">
                <div class="col-md-12 col-lg-8 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="about-image-box-style1 about-side-line mrr-60 mrr-lg-0">
                        <figure class="about-image1 js-tilt d-none d-md-block d-lg-block d-xl-block">
                            <img class="img-full" src="{{ asset('frontend/images/about/about-sm1.jpg') }}" alt="" />
                        </figure>
                        <figure class="about-image2">
                            <img class="img-full" src="{{ asset('frontend/images/about/about-lg1.jpg') }}" alt="" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h5 class="side-line-left subtitle text-primary-color abt-comp">About Our Company</h5>
                    <h2 class="mrb-45 mrb-lg-35 create-cont">Creating imaginative designs, turning spaces into
                        art.</h2>
                    <p class="about-text-block mrb-40 cont-1">Making Exceptional interiors The pursuit of
                        excellence, inventiveness, and specialized solutions fuels our passion. Planning,
                        design, and project management are all included in our comprehensive services. We create
                        functional works of art in all kinds of settings, from hotels to offices, fusing
                        creativity with utility.</p>

                    <div class="row no-gutters">
                        <div class="col-xl-12 col-lg-7 col-md-6 col-sm-6 cons-2 about-gutter about-response">
                            <div style="flex-direction: column" class="featured-icon-box mrb-15">
                                <div class="featured-icon">
                                    <i class="webexflaticon webextheme-icon-003-staircase"></i>
                                </div>
                                <div class="featured-content">
                                    <h4 class="featured-title">Exclusive Design</h4>
                                    <p class="featured-desc">Elevate spaces with exclusive design expertise,
                                        creating extraordinary works of art.</p>
                                </div>
                            </div>
                            <div style="flex-direction: column" class="featured-icon-box mrb-sm-40">
                                <div class="featured-icon">
                                    <i class="webexflaticon base-icon-158-employee-2"></i>
                                </div>
                                <div class="featured-content">
                                    <h4 class="featured-title">Professional Team</h4>
                                    <p class="featured-desc mrb-0">Trust our skilled team for vision-to-reality
                                        excellence and innovation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background: #b88e75;" class="why-choose-us-style2-section bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-lg-80 why-us">
        <div class="section-content">
            <div class="container">
                <div style="align-items: center;" class="our-mission-row row mrb-110">
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class="text-primary-color mrb-10"></h5>
                        <h2 class="text-white mrb-30 o-mission-heading mrb-sm-30">
                            <span style="color: white;" class="text-primary-color">Our Mission<br> </span>
                        </h2>
                        <p class="text-white mrb-40">Our mission is to transform, inspire, and motivate people through the
                            use
                            of advanced fit-out solutions in venues. By providing personalized designs
                            and flawless execution, we aim to be the pinnacle of quality and go above
                            and beyond for our clients. We aspire to design spaces that have a lasting
                            influence and improve how people live, work, and interact with their surroundings. We are
                            incessantly in search of excellence</p>
                    </div>
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp " data-wow-delay="100ms"
                        data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <div class="before-after-slider1 style2 twentytwenty-container" style="height: 397.5px;">
                                <!-- The before image is first -->
                                <img src="{{ asset('frontend/images/before-after/3.jpg')}}"
                                    alt="img1" class="twentytwenty-before"
                                    style="clip: rect(0px, 318px, 397.5px, 0px);">
                                <!-- The after image is last -->
                                <img src="{{ asset('frontend/images/before-after/4.jpg')}}"
                                    alt="img1" class="twentytwenty-after"
                                    style="clip: rect(0px, 636px, 397.5px, 318px);">
                                <div class="twentytwenty-overlay">
                                    <div class="twentytwenty-before-label" data-content="Before"></div>
                                    <div class="twentytwenty-after-label" data-content="After"></div>
                                </div>
                                <div class="twentytwenty-handle" style="left: 318px;"><span
                                        class="twentytwenty-left-arrow"></span><span
                                        class="twentytwenty-right-arrow"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="align-items: center;" class="our-vision-row row mrb-110 vision-mt">
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp our-mission" data-wow-delay="100ms"
                        data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <div class="before-after-slider1 style2 mrt-lg-60 twentytwenty-container"
                                style="height: 397.5px;">
                                <!-- The before image is first -->
                                <img src="{{ asset('frontend/images/before-after/3.jpg')}}"
                                    alt="img1" class="twentytwenty-before"
                                    style="clip: rect(0px, 318px, 397.5px, 0px);">
                                <!-- The after image is last -->
                                <img src="{{ asset('frontend/images/before-after/4.jpg')}}"
                                    alt="img1" class="twentytwenty-after"
                                    style="clip: rect(0px, 636px, 397.5px, 318px);">
                                <div class="twentytwenty-overlay">
                                    <div class="twentytwenty-before-label" data-content="Before"></div>
                                    <div class="twentytwenty-after-label" data-content="After"></div>
                                </div>
                                <div class="twentytwenty-handle" style="left: 318px;"><span
                                        class="twentytwenty-left-arrow"></span><span
                                        class="twentytwenty-right-arrow"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class=" text-primary-color mrb-10"></h5>
                        <h2 class="text-white o-mission-heading mrb-30 mrb-sm-30">
                            <span style="color: white;" class="text-primary-color">Our Vision<br> </span>
                        </h2>
                        <p class="text-white mrb-40">To lead advancement in the field by redefining fit-out solutions with
                            creativity and unmatched craftsmanship. We strive to establish new standards
                            and design environments that astonish viewers and improve the quality of
                            human interaction through our persistent dedication to innovation and
                            client satisfaction.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-bottom: 100px;"
    class="why-choose-us-style2-section bg-white bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-lg-80"
    data-background="https://alyasmeenkw.com/user-assets/images/bg/16.jpg" data-overlay-light="98"
    style="background-image: url(&quot;images/bg/16.jpg&quot;);">

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12  col-lg-12 col-xl-12 wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="800ms"
                    style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <h5 style="padding-left: 1px" class=" text-center text-primary-color mrb-10"></h5>
                    <div class="col-xl-12 text-center col-lg-12 col-md-12">

                        <h2 class="mrb-45">Our <span class="text-primary-color">Values</span></h2>

                    </div>
                    <p class="text-dark text-center mrb-45"> The heart of our business activities lies in its interior
                        fit-out division, demonstrating our commitment to effective communication with both customers
                        and colleagues</p>
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="icon-box-style1 mrb-md-40">
                                <div style="margin-bottom: 1px!important;" class="featured-icon">
                                    <img src="https://alyasmeenkw.com/user-assets/images/service/excellence.svg"
                                        alt="">
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="text-dark icon-box-title">Excellence </h4>
                                    <p class="icon-box-desc">Committed to excellence from concept to execution, we
                                        maintain the highest standards with meticulous attention.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="icon-box-style1 mrb-md-40">
                                <div style="margin-bottom: 1px!important;" class="featured-icon">
                                    <img src="https://alyasmeenkw.com/user-assets/images/service/innovation.svg"
                                        alt="">
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="text-dark icon-box-title">Innovation </h4>
                                    <p class="icon-box-desc">We relentlessly pursue innovation, pushing boundaries to
                                        create uniquely inspiring spaces.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="icon-box-style1">
                                <div style="margin-bottom: 1px!important;" class="featured-icon">
                                    <img src="https://alyasmeenkw.com/user-assets/images/service/customer-centric.svg"
                                        alt="">
                                </div>
                                <div class="icon-box-content">
                                    <h4 class=" text-dark icon-box-title">Customer-Centric</h4>
                                    <p class="icon-box-desc">We attentively listen and collaborate, tailoring fit-out
                                        solutions to meet your aspirations.Quickly productivate time strategic mirina
                                        magna</p>
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div style="margin-top: 30px" class="col-xl-3 col-lg-4 col-md-6">
                            <div class="icon-box-style1">
                                <div style="margin-bottom: 1px!important;" class="featured-icon">
                                    <img src="https://alyasmeenkw.com/user-assets/images/service/integrity.svg"
                                        alt="">
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="text-dark icon-box-title">Integrity </h4>
                                    <p class="icon-box-desc">Our bedrock is trust and integrity, fostering enduring
                                        relationships through ethical, transparent, and honest interactions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 30px" class="col-xl-3  col-lg-4 col-md-6">
                            <div class="icon-box-style1">
                                <div style="margin-bottom: 1px!important;" class="featured-icon">
                                    <img src="https://alyasmeenkw.com/user-assets/images/service/passion.svg" alt="">
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="text-dark icon-box-title">Passion </h4>
                                    <p class="icon-box-desc">Driven by our passion, we tackle each project with zeal
                                        and commitment, crafting exceptional spaces that enhance lives.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- About Section End -->
    <!-- Offer Section Start -->
    <section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-105"
        data-background="{{ asset('frontend/images/bg/abs-bg3.png') }}" data-overlay-dark="4">
        <div class="section-title mrb-60 mrb-md-15 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="title-box-center">
                            <h5 class="side-line-left text-primary-color mrb-10">Our Projects</h5>
                            <h2 class="text-white mrb-md-40 mrb-sm-30">
                                Our Outstanding <br />
                                <span class="text-primary-color">Latest Proejcts</span> & Works
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12 text-lg-end">
                        <p class="text-white mrb-0 mrb-md-40">Discover Our Outstanding Recent Projects in
                            Innovative Fit-Out Solutions, Where Vision Meets Reality to Redefine Spaces.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-item-style1-wrapper mrr--300">
                            <div class="owl-carousel projects_5col">

                                    @foreach ($projects as $project)
                                    <div class="project-item-style1">
                                        <div class="project-item-thumb">
                                            <img class="img-full"src="{{ url('projectt/preview/' . $project->preview_img) }}"
                                                alt="" />
                                            <div class="project-item-details">
                                                <h6 style="color: #fff" class="text-center">
                                                    {{ $project->title }}
                                                </h6>
                                                {{-- <h4 class="project-item-title">
                                                    <a style="color: #fff!important"
                                                        href="{{ $project->hyperlinks }}">{{ $project->title }}
                                                    </a>
                                                </h4> --}}
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
            </div>
        </div>
    </section>
    <!-- why Choose Us Section End -->
    <!-- Testimonials Section Start -->

    <section class="bg-silver pdt-105 pdb-110 pdb-lg-70 bg-no-repeat bg-cover bg-pos-ct">
        <div class="section-content">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="title-box-center">
                                <h5 class="sub-title-line-bottom text-primary-color mrb-10">Testimonials</h5>
                                <h2 class="title">What Our <span class="text-primary-color">Client's</span> Say
                                    about us?</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="owl-carousel testmonial_3col testimonial-style1 mrb-lg-40">
                        @foreach ($testimonials as $tt)
                        <div style="    background: #def2ff;" class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="/testiimages/{{ $tt->custimg }}" style="height: 50px!important"
                                    alt="" />
                            </div>
                            <div class="testimonial-content">
                                <p class="comments"> {{ $tt->custreview }}</p>
                                <h4 class="client-name">{{ $tt->custname }}</h4>
                                <h6 class="client-designation">{{ $tt->custdesignation }}, {{ $tt->custcompany }}
                                </h6>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
