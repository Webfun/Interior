    <!--Site Footer Start-->
    <footer class="site-footer">
        <div class="site-footer__bg" style="background-image: url(user-assets/images/backgrounds/site-footer-bg.jpg);">
        </div>
        <div class="site-footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="{{ route('frontend.home') }}"><img src="{{ asset('user-assets/images/resources/grassland-logo-01.svg') }}" alt=""></a>
                            </div>
                            <p class="footer-widget__about-text">Lorem ipsum dolor sit amet, consect etur adi
                                pisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                            <div class="site-footer__social">
                                <a href="{{ $data['linkedin-link'] }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $data['facebook-link'] }}"><i class="fab fa-facebook"></i></a>
                                <a href="{{ $data['instagram-link'] }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                        <div class="col-xl-4 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__link">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Explore</h3>
                                </div>
                                <ul class="footer-widget__link-list list-unstyled">
                                    <li><a href="{{Route('frontend.services')}}">Services</a></li>
                                    <li><a href="{{Route('frontend.about')}}">About</a></li>
                                    <li><a href="{{Route('frontend.contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__Contact footer-pad">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Newsletter</h3>
                                </div>
                                <div class="footer-widget__email-form">
                                    <form class="footer-widget__email-box" data-url="MC_FORM_URL">
                                        <div class="footer-widget__email-input-box">
                                            <input type="email" placeholder="Your email" name="email">
                                        </div>
                                        <button type="submit" class="footer-widget__btn"><i class="fas fa-paper-plane"></i></button>
                                    </form>
                                    <div class="mc-form__response"></div>
                                </div>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:{{ $data['sales-email'] }}">{{ $data['sales-email'] }}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-phone-square-alt"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="{{ $data['sales-number'] }}">{{ $data['sales-number'] }}</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="site-footer__bottom-shape" style="background-image: url(user-assets/images/shapes/site-footer-bottom-shape.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">© All Copyright 2023 by <a href="#">Grassland Enterprises </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->
