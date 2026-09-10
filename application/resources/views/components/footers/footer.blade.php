<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__shape-bg"
        style="background-image: url({{ asset('assets/images/shapes/footer-one-shape-bg.png') }});">
    </div>
    <div class="site-footer__shape-bg-two"
        style="background-image: url({{ asset('assets/images/shapes/site-footer__shape-bg-2.jpg') }});">
    </div>
    <div class="site-footer__shape-1 img-bounce-two"></div>
    <div class="site-footer__shape-2 float-bob-y"></div>
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-7 col-md-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__about">
                            <div class="footer-widget__about-logo">
                                <a href="{{ route('index') }}"><img
                                        src="{{ asset('assets/images/resources/logo-2.png') }}" alt=""></a>
                            </div>
                            <p class="footer-widget__about-text">Providing trusted dental care with <br>
                                compassion & precision. Your healthy <br>
                                smile is our top priority.</p>
                            <div class="footer-widget__newsletter-form-box">
                                <h3 class="footer-widget__newsletter-title">Newsletter</h3>
                                <form class="footer-widget__newsletter-form contact-form-validated"
                                    action="{{ route('newsletter.subscribe') }}" method="POST" novalidate="novalidate">
                                    @csrf
                                    <div class="footer-widget__newsletter-form-input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                    <button type="submit" class="footer-widget__newsletter-btn">
                                        <span><i class="icon-email"></i></span>
                                    </button>
                                    <div class="result"></div>
                                </form>
                            </div>
                            <div class="footer-widget__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="footer-widget__content-box">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="footer-widget__links">
                                        <h4 class="footer-widget__title">Our Services</h4>
                                        <ul class="footer-widget__links-list list-unstyled">
                                            <li><a href="{{ route('medicine-and-health') }}">Teeth Whitening</a></li>
                                            <li><a href="{{ route('medicine-and-health') }}">Tooth Extractions</a></li>
                                            <li><a href="{{ route('medicine-and-health') }}">Dental Implants</a></li>
                                            <li><a href="{{ route('heart-specialist') }}">Fluoride Treatments</a></li>
                                            <li><a href="{{ route('medicine-and-health') }}">Orthodontics</a></li>
                                            <li><a href="{{ route('medicine-and-health') }}">Retainers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="footer-widget__services">
                                        <h4 class="footer-widget__title">Quick Links</h4>
                                        <ul class="footer-widget__links-list list-unstyled">
                                            <li><a href="{{ route('contact') }}">Helpful Information</a></li>
                                            <li><a href="{{ route('contact') }}">Knowledge Center</a></li>
                                            <li><a href="{{ route('contact') }}">Flexible Pricing</a></li>
                                            <li><a href="{{ route('about-v-3') }}">Before & After</a></li>
                                            <li><a href="{{ route('about-v-3') }}">FAQs & Forms</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="footer-widget__office">
                                        <h3 class="footer-widget__title">Our Offices</h3>
                                        <ul class="footer-widget__office-list list-unstyled">
                                            <li>
                                                <p>Headquarters- USA</p>
                                                <h5><a href="{{ route('contact') }}">Seattle (major city in the state
                                                        Washington).
                                                    </a></h5>
                                            </li>
                                            <li>
                                                <p>Operations - China</p>
                                                <h5><a href="{{ route('contact') }}">Shanghai major global financial
                                                        hub & China's largest cities
                                                    </a></h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="footer-widget__gallery-box">
                                        <div class="footer-widget__gallery-title">
                                            <h3>Our Gallery</h3>
                                        </div>
                                        <div class="footer-widget__gallery">
                                            <ul class="footer-widget__gallery-list">
                                                <li>
                                                    <div class="footer-widget__gallery-img">
                                                        <img src="{{ asset('assets/images/medical-general/brand/client-photos/1.jpg') }}"
                                                            alt="">
                                                        <a href="#"><span
                                                                class="fab fa-instagram"></span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="footer-widget__gallery-img">
                                                        <img src="{{ asset('assets/images/medical-general/brand/client-photos/4.jpg') }}"
                                                            alt="">
                                                        <a href="#"><span
                                                                class="fab fa-instagram"></span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="footer-widget__gallery-img">
                                                        <img src="{{ asset('assets/images/medical-general/brand/client-photos/7.jpg') }}"
                                                            alt="">
                                                        <a href="#"><span
                                                                class="fab fa-instagram"></span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="footer-widget__gallery-img">
                                                        <img src="{{ asset('assets/images/medical-general/brand/client-photos/10.jpg') }}"
                                                            alt="">
                                                        <a href="#"><span
                                                                class="fab fa-instagram"></span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="footer-widget__gallery-img">
                                                        <img src="{{ asset('assets/images/medical-general/brand/client-photos/9.jpg') }}"
                                                            alt="">
                                                        <a href="#"><span
                                                                class="fab fa-instagram"></span></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__copyright">
                            <p class="site-footer__copyright-text">© 2026 Home Medical. All Rights Reserved.
                                Website by Texora</p>
                        </div>
                        <div class="site-footer__bottom-menu-box">
                            <ul class="list-unstyled site-footer__bottom-menu">
                                <li><a href="{{ route('about-v-3') }}">Terms of Service</a></li>
                                <li><a href="{{ route('about-v-3') }}">Privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!--Site Footer End-->
