<!doctype html>
<html lang="en">

<head>
    <title> Grassland| @yield('title') </title>

    @include('frontend.layouts.header')

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->



    @include('frontend.layouts.nav')

    <div class="page-wrapper">

        @yield('page')

        @include('frontend.layouts.footer')

    </div><!-- /.page-wrapper -->




    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ route('frontend.home') }}" aria-label="logo image"><img src="{{ asset('user-assets/images/resources/grassland-logo-01.svg') }}" width="100" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@gardon.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


    <script src="{{ asset('user-assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/twenty-twenty/twentytwenty.js') }}"></script>
    <script src="{{ asset('user-assets/vendors/twenty-twenty/jquery.event.move.js') }}"></script>




    <!-- template js -->
    <script src="{{ asset('user-assets/js/gardon.js') }}"></script>

</body>

</html>
