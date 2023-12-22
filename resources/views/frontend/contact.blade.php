@extends('frontend.layouts.app')
@section('title', 'Home page')

@section('page')
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(user-assets/images/breadcrumb/breadcrumb.png)">
    </div>
    <div class="container">
        <div class="page-header__inner crumb-pad">
            <h2>Contact</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{Route('frontend.home')}}">Home</a></li>
                <li><span>></span></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>

<section style="padding-left: 309px;" class="contact-details contact-logo">
    <div class="container">
        <div class="row">

            <!--Contact Details Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="contact-details__single">
                    <div class="contact-details__single-inner">
                        <div class="contact-details__shape-1" style="background-image: url(user-assets/images/shapes/contact-details-shape-1.png);">
                        </div>
                        <div class="contact-details__icon">
                            <span class="icon-email"></span>
                        </div>
                        <h4 class="contact-details__title">Contact</h4>
                        <p class="contact-details__text">
                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                            <br>
                            <a href="tel:926668880000">+92 (666) 888 0000</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Contact Details Single End-->
            <!--Contact Details Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="contact-details__single">
                    <div class="contact-details__single-inner">
                        <div class="contact-details__shape-1" style="background-image: url(user-assets/images/shapes/contact-details-shape-1.png);">
                        </div>
                        <div class="contact-details__icon">
                            <span class="icon-address"></span>
                        </div>
                        <h4 class="contact-details__title">Address</h4>
                        <p class="contact-details__text">30 Broklyn Golden Street Road. New York. USA</p>
                    </div>
                </div>
            </div>
            <!--Contact Details Single End-->
        </div>
    </div>
</section>
<!--Contact Details End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <img src="{{ asset('user-assets/images/icon/section-title-icon.png')}}" alt="">
            </div>
            <span class="section-title__tagline">Contact with us now</span>
            <h2 class="section-title__title">Feel free to write gardon <br> anytime</h2>
        </div>
        <div class="contact-page__form-box">
            <form action="{{ route('frontend.contact.store') }}" method="post" class="contact-page__form contact-form-validated" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="contact-page__form-input-box">
                            <input type="text" placeholder="Your name" name="name" class="form-control" value="{{ old('name') }}"  {{ $errors->any() ? 'autofocus' : '' }}>
                            @error('name')
                                <span class="text-danger text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="contact-page__form-input-box">
                            <input type="text" placeholder="Phone" name="phone" class="form-control" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-danger text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-6 col-md-6">
                        <div class="contact-page__form-input-box">
                            <input type="email" placeholder="Email address" name="email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger text-sm">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                    {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="contact-page__form-input-box">
                            <select class="selectpicker" aria-label="Default select example">
                                <option selected="">Select service</option>
                                <option value="1">Select Service 01</option>
                                <option value="2">Select Service 02</option>
                                <option value="3">Select Service 02</option>
                            </select>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form-input-box text-message-box">
                            <textarea name="message" placeholder="Write a message"></textarea>
                        </div>
                        <div class="contact-page__form-btn-box">
                            <button type="submit" class="thm-btn contact-page__form-btn">Send a Message</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="result"></div>
        </div>
    </div>
</section>
<!--Contact Page End-->

<!--Google Map Two Start-->
<section class="google-map-two">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__two" allowfullscreen=""></iframe>

</section>
<!--Google Map Two End-->
@endsection
