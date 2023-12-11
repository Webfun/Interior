@extends('frontend.layouts.app')
@section('title', 'Services')
@section('page')
<section class="page-title-section hero-height">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb-area">
            <h2 class="page-title">Services</h2>
            <ul class="breadcrumbs-link">
              <li><a href="{{'/services'}}">Home</a></li>
              <li><a href="index.html">Services</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-85" data-background="{{ asset('frontend/images/bg/abs-bg4.png')}}" data-overlay-dark="4">
    <div style="" class="section-content">
      <div class="container">
        <div class="row fit-sol fit-out">
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
            <h2 class="text-white mrb-30 mrb-sm-30 services-font-size">
                Transform Ordinary Places with
                Our Fit Out Expertise!
            </h2>
            <p class="text-white mrb-40">At Al Yasmeen, we turn rooms into extraordinary spaces,
                handling every aspect from planning to completion.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-85" data-background="{{ asset('frontend/images/bg/abs-bg4.png')}}" data-overlay-dark="4">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
            <h2 class="text-white mrb-30 mrb-sm-30">
                Laboratory Solutions
            </h2>
            <p class="text-white mrb-40 services-text">Elevate your laboratory with cutting-edge solutions from Al Yasmeen. We offer a diverse range of products to equip your lab for excellence. Our ventilated devices include laboratory fume hoods, benchtop fume hoods, and specialized options like distillation and radioisotope hoods. Enhance your lab's functionality with our modular laboratory furniture, featuring metal, phenolic, plastic laminated, polypropylene, wood, and stainless steel casework. Safety is paramount, and our Safety Cabinets for Flammable and Combustible Liquid Storage provide the utmost security. Our innovative lab supplies elevate your research environment to new heights.</p>

          </div>
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
            <div class="shine-effect">
              <img class="img-full" src="{{ asset('frontend/images/about/divider-img1.jpg')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-85" data-background="{{ asset('frontend/images/bg/abs-bg4.png')}}" data-overlay-dark="4">
    <div class="section-content">
      <div class="container">
        <div class="row data-sol">
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
            <h2 class="text-white mrb-30 mrb-sm-30">
                Datacenter Solutions
            </h2>
            <p class="text-white mrb-40 services-text">Explore our comprehensive datacenter solutions, where we provide customized datacenter solutions perfectly aligned with your unique requirements. Our services encompass construction and classification based on design and tier ratings, ensuring you receive precisely what your operation needs. We offer various types of data centers, including enterprise data centers, managed services data centers, cloud-based data centers, colocation data centers, and Edge/Micro data centers. Furthermore, our classification of data centers is based on tier ratings, ranging from Tier I data centers with basic capacity to Tier IV data centers offering unmatched fault tolerance. Trust us to deliver the optimal data center solution tailored to your specifications, guaranteeing reliability and performance</p>

          </div>
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
            <div class="shine-effect">
              <img class="img-full" src="{{ asset('frontend/images/about/divider-img1.jpg')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-85" data-background="{{ asset('frontend/images/bg/abs-bg4.png')}}" data-overlay-dark="4">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
            <h2 class="text-white mrb-30 mrb-sm-30">
                Audio-Video Solutions
            </h2>
            <p class="text-white mrb-40 services-text">Experience the pinnacle of audio and video excellence with Al Yasmeen's state-of-the-art solutions. From expert Dolby Atmos setups that transport you into the heart of your entertainment to meticulous home cinema calibration, we craft unforgettable experiences. Our expertise extends to acoustics and soundproofing, ensuring every sound is crystal clear. With home cinema automation, your entertainment is at your fingertips, effortlessly. Our dedicated team specializes in home cinema design and installation, making your dreams a reality. Whether it's TV or projector installation, we've got you covered. Plus, count on us for consistent home cinema maintenance and support, ensuring your entertainment is always top-notch.</p>

          </div>
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
            <div class="shine-effect">
              <img class="img-full" src="{{ asset('frontend/images/about/divider-img1.jpg')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-85" data-background="{{ asset('frontend/images/bg/abs-bg4.png')}}" data-overlay-dark="4">
    <div style="padding-bottom: 59px;" class="section-content">
      <div class="container">
        <div class="row fit-sol">
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
            <h2 class="text-white mrb-30 mrb-sm-30">
                Fit Out Solution
            </h2>
            <p class="text-white mrb-40 services-text">We're dedicated to transforming spaces into extraordinary environments through our comprehensive Fit-Out Solutions. Our services cover everything from project planning to completion, ensuring your vision is realized. We offer planning, cost analysis, interior design, space planning, and construction documentation. Additionally, we excel in design and build projects, including new construction, renovation, and remodeling. Our project management services encompass value engineering, construction management, cost control, and detailed documentation. We serve various sectors, including hotels, healthcare, offices, retail, F&B, education, and the public sector, delivering excellence in every project.</p>

          </div>
          <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
            <div class="shine-effect">
              <img class="img-full" src="{{ asset('frontend/images/about/divider-img1.jpg')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  @endsection
