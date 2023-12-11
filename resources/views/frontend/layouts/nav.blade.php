    <!-- Header Area Start -->
    <header class="header-style-02">
        <div class="header-topbar">
            <div class="container">
                <div class="header-topbar-inner">
                    <div class="header-topbar-leftpart">
                        <ul class="topbar-info">
                            <li>
                                <i class="base-icon-email1"></i>
                                <a href="mailto:example@gmail.com">example@gmail.com</a>
                            </li>
                            <li>
                                <i class="base-icon-pin2"></i>
                                121 King Street, Melbourne, Australia
                            </li>
                        </ul>
                    </div>
                    <div class="header-topbar-rightpart">
                        <ul class="topbar-social">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <div class="language">
                            <a class="language-btn" href="#"><i class="base-icon-globe1"></i>
                                <span>English</span></a>
                            <ul class="language-dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">Arabic</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu sticky-header">
            <div class="container">
                <div class="main-menu-inner">
                    <div class="main-menu-logo">
                        <a href="index.html">
                            <img src="{{ asset('frontend/images/logo-dark.svg') }}" width="165" height="72"
                                alt="logo" />
                        </a>
                    </div>
                    <ul class="main-nav-menu bar-nav ">
                        <li class="{{ URL::current() == url('/') ? 'active' : '' }}">
                            <a href="{{ route('frontend.home') }}">Home</a>
                        </li>
                        <li class="{{ URL::current() == url('/services') ? 'active' : '' }}">
                            <a href="{{ route('frontend.services') }}">Services</a>
                        </li>
                        <li class="{{ URL::current() == url('/project') ? 'active' : '' }} ">
                            <a href="{{ route('frontend.project') }}">Projects</a>
                        </li>
                        <li class="{{ URL::current() == url('/about') ? 'active' : '' }} ">
                            <a href="{{ route('frontend.about') }}">About us</a>
                        </li>


                    </ul>
                    <div class="main-menu-right">
                        <a href="#" class="mobile-nav-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>

                        <div class="header-contact-btn">
                            <a href="{{ route('frontend.contact') }}" class="cs-btn-one btn-circle">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header Area End -->
