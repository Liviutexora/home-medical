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
                                        <p>
                                            <a href="tel:+40356171818">0356 171 818</a>
                                            <span> · </span>
                                            <a href="tel:+40723716085">0723 716 085</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:homemedicalvmc@gmail.com">homemedicalvmc@gmail.com</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-menu__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="icon-facebook-app-symbol"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
                                    <svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;">
                                        <path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/>
                                    </svg>
                                </a>
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
