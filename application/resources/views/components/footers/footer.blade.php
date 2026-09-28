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
                                        src="{{ asset('assets/images/Sigla-Home-Medical/home-medical-logo-light.png') }}" alt=""></a>
                            </div>
                            <p class="footer-widget__about-text">Locul unde „HOME MEDICAL” inseamna acasa pentru fiecare!</p>
                            <!-- <div class="footer-widget__newsletter-form-box">
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
                            </div> -->
                            <div class="footer-widget__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="footer-widget__content-box">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="footer-widget__links">
                                        <h4 class="footer-widget__title">SERVICII</h4>
                                        <ul class="footer-widget__links-list list-unstyled">
                                            <li><a href="{{ route('chirurgie-generala') }}">Chirurgie Generală</a></li>
                                            <li><a href="{{ route('dermatologie') }}">Dermatologie</a></li>
                                            <li><a href="{{ route('gastroenterologie') }}">Gastroenterologie</a></li>
                                            <li><a href="{{ route('medicina-interna') }}">Medicină Internă</a></li>
                                            <li><a href="{{ route('ortopedie') }}">Ortopedie</a></li>
                                            <li><a href="{{ route('services-3') }}">Vezi toate serviciile →</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="footer-widget__services">
                                        <h4 class="footer-widget__title">ECHIPA MEDICALĂ</h4>
                                        <ul class="footer-widget__links-list list-unstyled">
                                            <li><a href="{{ route('our-doctors-details', ['slug' => 'oniciu-marciana-alexandra']) }}">Oniciu Marciana Alexandra</a></li>
                                            <li><a href="{{ route('our-doctors-details', ['slug' => 'dumitru-cristina-stefania']) }}">Dumitru Cristina Ștefania</a></li>
                                            <li><a href="{{ route('our-doctors-details', ['slug' => 'agajani-heshmatollah']) }}">Agajani Heshmatollah</a></li>
                                            <li><a href="{{ route('our-doctors-details', ['slug' => 'ciobanu-andra-vera-livia']) }}">Ciobanu Andra Vera Livia</a></li>
                                            <li><a href="{{ route('our-doctors-details', ['slug' => 'buta-marius-catalin']) }}">Buță Marius Cătălin</a></li>
                                            <li><a href="{{ route('our-doctors') }}">Vezi toată echipa →</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="footer-widget__office">
                                        <h3 class="footer-widget__title">DESPRE NOI</h3>
                                        <ul class="footer-widget__office-list list-unstyled">
                                            <li>
                                                <p>Adresă:</p>
                                                <h5>Timișoara, Str. Ulpia Traiana, Nr. 27</h5>
                                            </li>
                                            <li>
                                                <p>Program:</p>
                                                <h5>Luni – Vineri: 09:00 – 17:00<br>
                                                    Consultații clinice</h5>
                                            </li>
                                            <li>
                                                <h5>Luni – Vineri: 09:00 – 16:00<br>
                                                    Fișe medicale tip A(B) · Port armă</h5>
                                            </li>
                                            <li>
                                                <h5 style="font-size: 1.0em;"><a href="https://maps.app.goo.gl/dVyGtGinTZFE6Biw6" target="_blank" rel="noopener noreferrer"><strong>Vezi pe hartă →</strong></a></h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="footer-widget__gallery-box">
                                        <div class="footer-widget__gallery-title">
                                            <h3>GALERIE FOTO</h3>
                                        </div>
                                        <div class="footer-widget__gallery">
                                            <ul class="footer-widget__gallery-list">
                                                <li>
                                                    <div class="footer-widget__gallery-img">
                                                        <img src="{{ asset('assets/images/resources/footer-widget-gallery-1-1.jpg') }}"
                                                            alt="">
                                                        <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="footer-widget__gallery-img">
                                                        <img src="{{ asset('assets/images/resources/footer-widget-gallery-1-2.jpg') }}"
                                                            alt="">
                                                        <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="footer-widget__gallery-img">
                                                        <img src="{{ asset('assets/images/resources/footer-widget-gallery-1-3.jpg') }}"
                                                            alt="">
                                                        <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="footer-widget__gallery-img">
                                                        <img src="{{ asset('assets/images/resources/footer-widget-gallery-1-4.jpg') }}"
                                                            alt="">
                                                        <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="footer-widget__gallery-img">
                                                        <img src="{{ asset('assets/images/resources/footer-widget-gallery-1-5.jpg') }}"
                                                            alt="">
                                                        <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!--Site Footer End-->
