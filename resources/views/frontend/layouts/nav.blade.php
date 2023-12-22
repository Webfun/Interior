<header class="main-header-three">
    <div class="main-header-three__top">
        <div class="main-header-three__top-inner">
            <ul class="list-unstyled main-header-three__contact-list">
                <li>
                    <div class="icon">
                        <i class="fas fa-phone-square"></i>
                    </div>
                    <div class="text">
                        <p><a href="tel: {{ $data['sales-number'] }}">{{ $data['sales-number'] }}</a></p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="text">
                        <p><a href="{{ $data['sales-email'] }}">{{ $data['sales-email'] }}</a></p>
                    </div>
                </li>
            </ul>
            <div class="main-header-three__top-close-time-and-social">
                <ul class="list-unstyled main-header-three__top-close-time-list">
                    <li>
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="text">
                            <p>Mon - Fri: 9:00 - 19:00/ Closed on weekends</p>
                        </div>
                    </li>
                </ul>
                <div class="main-header-three__top-social">
                    <a href="{{ $data['linkedin-link'] }}"><i class="fab fa-linkedin"></i></a>
                    <a href="{{ $data['facebook-link'] }}"><i class="fab fa-facebook"></i></a>
                    <a href="{{ $data['instagram-link'] }}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu main-menu-three">
        <div class="main-menu-three__wrapper">
            <div class="main-menu-three__wrapper-inner">
                <div class="main-menu-three__logo">
                    <a href="{{ route('frontend.home') }}">
                        <img src="{{ asset('user-assets/images/resources/grassland-logo-01.svg') }}" alt=""></a>
                </div>
                <div class="main-menu-three__main-menu-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li >
                            <a href="{{ route('frontend.home') }}">Home </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.services') }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.about') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.contact') }}">Contact</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.store') }}">Store</a>
                        </li>
                    </ul>
                </div>
                <div class="main-menu-three__right">
                    {{-- <div class="main-menu-three__search-cart-box">
                        <div class="main-menu-three__search-box">
                            <a href="#" class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
                        </div>
                        <div class="main-menu-three__cart-box">
                            <a href="cart.html" class="main-menu-three__cart icon-shopping-cart"></a>
                        </div>
                    </div> --}}
                    <div class="main-menu-three__btn-box">
                        <a href="{{ route('frontend.contact') }}" class="thm-btn main-menu-three__btn">Get Free Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-three">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
