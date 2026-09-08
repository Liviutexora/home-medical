<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="container">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}"
                                alt=""></a>
                    </div>
                    <div class="main-menu__main-menu-box-outer">
                        <div class="main-menu__main-menu-box-outer-top">
                            <ul class="list-unstyled main-menu__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-phone-call"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:2334567908">(+233) 456 79 08</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp&company.com">needhelp&company.com</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-menu__social">
                                <a href="#"><i class="icon-facebook-app-symbol"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box-content">
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <x-menu-list />
                            </div>
                            <div class="main-menu__search-cart-btn-box">
                                <div class="main-menu__search-cart-box">
                                    <div class="main-menu__search-box">
                                        <a href="#"
                                            class="main-menu__search searcher-toggler-box fal fa-search"></a>
                                    </div>
                                </div>
                                <div class="main-menu__nav-sidebar-icon">
                                    <a class="navSidebar-button" href="#">
                                        <span class="icon-dots-menu--one"></span>
                                        <span class="icon-dots-menu--two"></span>
                                        <span class="icon-dots-menu--three"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
