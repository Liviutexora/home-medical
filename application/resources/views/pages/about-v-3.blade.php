@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Despre Noi' pageSubtitle='Despre Noi' />

    <!--About Three Start -->
    <section class="about-three home-medical-about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-three__img-box">
                            <div class="about-three__img">
                                <img src="{{ asset('assets/images/HM-despre-noi/receptie.jpg') }}" alt="Home Medical reception">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="icon-pharmacy"></span>
                                <p class="section-title__tagline">DESPRE HOME MEDICAL</p>
                            </div>
                            <h2 class="section-title__title title-animation">Locul unde „HOME MEDICAL” înseamnă acasă pentru fiecare</h2>
                        </div>
                        <p class="about-three__text">Dincolo de tratamente și diagnoze, ne asigurăm că fiecare pacient se simte protejat, ascultat și înțeles, exact ca în confortul propriei case. Eliminăm frica și stresul asociate spitalelor clasice. Fiecare pacient este tratat ca un membru al familiei noastre, ascultând povestea din spatele fiecărui simptom.</p>
                        <p class="about-three__text">La Home Medical vă așteaptă o echipă de medici dedicați, pregătiți pentru nevoile dumneavoastră.</p>
                        <div class="about-three__content-box">
                            <div class="about-three__content-icon">
                                <span class="icon-healthcare"></span>
                            </div>
                            <div class="about-three__content">
                                <h4>O echipă dedicată</h4>
                                <p>Medici dedicați, pregătiți să răspundă nevoilor dumneavoastră.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .home-medical-about .about-three__left {
            margin: 0;
        }

        .home-medical-about .about-three__img-box {
            position: relative;
            display: block;
            width: 100%;
            height: auto;
            line-height: 0;
        }

        .home-medical-about .about-three__img {
            position: relative;
            display: block;
            width: 100%;
            min-height: 0;
            height: auto;
            border-radius: 26px;
            overflow: hidden;
            -webkit-mask: none;
            mask: none;
            -webkit-mask-image: none;
            mask-image: none;
            background: transparent;
        }

        .home-medical-about .about-three__img img {
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 26px;
        }
    </style>
    <!--About Three End -->

    <!-- Sliding Text Two Start -->
    <section class="sliding-text-two">
        <div class="sliding-text-two__wrap">
            <ul class="sliding-text-two__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="HOME MEDICAL" class="sliding-text-two__title">HOME MEDICAL</h2>
                </li>
                <li><span></span></li>
                <li>
                    <h2 data-hover="ÎNGRIJIRE MEDICALĂ" class="sliding-text-two__title">ÎNGRIJIRE MEDICALĂ</h2>
                </li>
                <li><span></span></li>
                <li>
                    <h2 data-hover="PROFESIONALISM" class="sliding-text-two__title">PROFESIONALISM</h2>
                </li>
                <li><span></span></li>
                <li>
                    <h2 data-hover="ATENȚIE PENTRU PACIENT" class="sliding-text-two__title">ATENȚIE PENTRU PACIENT</h2>
                </li>
                <li><span></span></li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text Two End -->

    <!--Services Three Start-->
    <section class="services-three about-page-3-service-page">
        <div class="services-three__shape-2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/services-three-shape-2.png') }}" alt="">
        </div>
        <div class="services-three__shape-3 float-bob-x">
            <img src="{{ asset('assets/images/shapes/services-three-shape-3.png') }}" alt="">
        </div>
        <div class="services-three__shape-4 img-bounce">
            <img src="{{ asset('assets/images/shapes/services-three-shape-4.png') }}" alt="">
        </div>
        <div class="services-three__shape-5">
            <img src="{{ asset('assets/images/shapes/services-three-shape-5.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="icon-pharmacy"></span>
                    <p class="section-title__tagline">TRATĂM CU SUFLET</p>
                </div>
                <h2 class="section-title__title title-animation">Servicii medicale care <br>
                    <span>fac diferența</span>
                </h2>
            </div>
            <div class="swiper-container service-three__carousel">
                <div class="swiper-wrapper">
                    <!--Services Three Single Start-->
                    <div class="swiper-slide">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-first-aid-kit"></span>
                            </div>
                            <div class="services-three__single-inner">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__content">
                                    <p class="services-three__sub-title">Chirurgie</p>
                                    <h3 class="services-three__title"><a href="#">Chirurgie Generală</a></h3>
                                    <p class="services-three__text">Acest departament oferă evaluare clinică și management chirurgical, cu respectarea protocoalelor și a standardelor de siguranță.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="swiper-slide">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-dermatology"></span>
                            </div>
                            <div class="services-three__single-inner">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__content">
                                    <p class="services-three__sub-title">Piele</p>
                                    <h3 class="services-three__title"><a href="#">Dermatologie</a></h3>
                                    <p class="services-three__text">Departamentul de dermatologie oferă evaluare pentru afecțiuni ale pielii, părului și unghiilor, cu soluții adaptate fiecărei situații.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="swiper-slide">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-medicine"></span>
                            </div>
                            <div class="services-three__single-inner">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__content">
                                    <p class="services-three__sub-title">Digestiv</p>
                                    <h3 class="services-three__title"><a href="#">Gastroenterologie</a></h3>
                                    <p class="services-three__text">Departamentul de gastroenterologie asigură evaluarea simptomelor digestive și gestionarea afecțiunilor tractului gastrointestinal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="swiper-slide">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-heart"></span>
                            </div>
                            <div class="services-three__single-inner">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__content">
                                    <p class="services-three__sub-title">Medicină internă</p>
                                    <h3 class="services-three__title"><a href="#">Medicină Internă</a></h3>
                                    <p class="services-three__text">Departamentul de medicină internă este dedicat evaluării și gestionării afecțiunilor generale, cu accent pe prevenție, diagnostic și tratament.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="swiper-slide">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-orthopaedics"></span>
                            </div>
                            <div class="services-three__single-inner">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__content">
                                    <p class="services-three__sub-title">Aparat locomotor</p>
                                    <h3 class="services-three__title"><a href="#">Ortopedie</a></h3>
                                    <p class="services-three__text">Departamentul de ortopedie abordează evaluarea și gestionarea problemelor musculo-scheletale, cu focus pe mobilitate și funcție.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="swiper-slide">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-medical-team"></span>
                            </div>
                            <div class="services-three__single-inner">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__content">
                                    <p class="services-three__sub-title">ORL</p>
                                    <h3 class="services-three__title"><a href="#">ORL</a></h3>
                                    <p class="services-three__text">Departamentul ORL tratează afecțiuni ale urechii, nasului, gâtului și căilor respiratorii superioare.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="swiper-slide">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-heart-rate"></span>
                            </div>
                            <div class="services-three__single-inner">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__content">
                                    <p class="services-three__sub-title">Respirație</p>
                                    <h3 class="services-three__title"><a href="#">Pneumologie</a></h3>
                                    <p class="services-three__text">Departamentul de pneumologie se ocupă cu evaluarea și tratamentul afecțiunilor respiratorii, inclusiv a celor cronice.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="swiper-slide">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-brain"></span>
                            </div>
                            <div class="services-three__single-inner">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__content">
                                    <p class="services-three__sub-title">Sănătate mentală</p>
                                    <h3 class="services-three__title"><a href="#">Psihiatrie</a></h3>
                                    <p class="services-three__text">Departamentul de psihiatrie asigură evaluarea și îndrumarea pentru tulburările mentale și emoționale.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="swiper-slide">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-physical-therapy"></span>
                            </div>
                            <div class="services-three__single-inner">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__content">
                                    <p class="services-three__sub-title">Recuperare</p>
                                    <h3 class="services-three__title"><a href="#">Recuperare Medicală</a></h3>
                                    <p class="services-three__text">Departamentul de recuperare medicală are rolul de a sprijini refacerea funcțională și revenirea la o stare optimă de sănătate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                </div>
            </div>
            <div class="service-three__nav">
                <div class="service-three__nav-prev">
                    <span><i class="fa fa-solid fa-arrow-left left" aria-hidden="true"></i></span>
                </div>
                <div class="service-three__nav-next">
                    <span><i class="fa fa-solid fa-arrow-right right" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </section>
    <!--Services Three End -->

    <!--Start Brand One-->
    <section class="brand-one">
        <div class="brand-one__shape-bg"
            style="background-image: url({{ asset('assets/images/shapes/brand-one-shape-bg.png') }});"></div>
        <div class="container">
            <div class="brand-one__carousel owl-carousel owl-theme">
                {{--
                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-1.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-2.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-3.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-1.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-2.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->
                --}}
            </div>
        </div>
    </section>
    <!--End Brand One-->

    <!--Team Three Start-->
    <section class="team-three">
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="icon-pharmacy"></span>
                    <p class="section-title__tagline">ECHIPA MEDICALĂ</p>
                </div>
                <h2 class="section-title__title title-animation">Faceți cunoștință cu echipa noastră</h2>
            </div>
            <div class="team-three__inner">
                <div class="team-three__shape-1"></div>
                <div class="team-three__shape-2"></div>
                <ul class="team-three__team-list">
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Chirurgie generală</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'dandea-cristina']) }}">Dandea Cristina</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/9.jpg') }}" alt="Dandea Cristina" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Chirurgie generală</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'marginean-andrei']) }}">Mărginean Andrei</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/13.jpg') }}" alt="Mărginean Andrei" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Gastroenterologie</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'abdel-majid-damra']) }}">Abdel Majid Damra</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/6.jpg') }}" alt="Abdel Majid Damra" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Gastroenterologie</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'burdan-ghita-adrian']) }}">Burdan Ghiță Adrian</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/10.jpg') }}" alt="Burdan Ghiță Adrian" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Ortopedie</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'drira-ouassim']) }}">Drira Ouassim</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/11.jpg') }}" alt="Drira Ouassim" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Ortopedie</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'musat-ionut-marian']) }}">Mușat Ionuț Marian</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/12.jpg') }}" alt="Mușat Ionuț Marian" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Psihiatrie</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'ciobanu-andra-vera-livia']) }}">Ciobanu Andra Vera Livia</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/4.jpg') }}" alt="Ciobanu Andra Vera Livia" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Pneumologie</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'buta-marius-catalin']) }}">Buță Marius Cătălin</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/5.jpg') }}" alt="Buță Marius Cătălin" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">ORL</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'dumitru-cristina-stefania']) }}">Dumitru Cristina Ștefania</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/2.jpg') }}" alt="Dumitru Cristina Ștefania" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Dermatologie</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'agajani-heshmatollah']) }}">Agajani Heshmatollah</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/3.jpg') }}" alt="Agajani Heshmatollah" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Medicină internă</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'ilin-simona-ramona']) }}">Ilin Simona Ramona</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/8.jpg') }}" alt="Ilin Simona Ramona" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Medicină internă</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'oniciu-marciana-alexandra']) }}">Oniciu Marciana Alexandra</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/1.jpg') }}" alt="Oniciu Marciana Alexandra" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
<!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Recuperare medicală</p>
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details', ['slug' => 'talan-claudia-loredana']) }}">Țălan Claudia Loredana</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/Galerie-HM/7.jpg') }}" alt="Țălan Claudia Loredana" class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
</ul></ul>
            </div>
        </div>
    </section>
    <!--Team Three One-->

    {{--
    <!--Blog Three Start-->
    <section class="blog-three about-page-v3-blog-page">
        <div class="container">
            <div class="blog-three__top">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <span class="icon-pharmacy"></span>
                        <p class="section-title__tagline">Clinic Life Tips</p>
                    </div>
                    <h2 class="section-title__title title-animation">Explore expert medical <br> advice & wellness
                        <span>solution</span>
                    </h2>
                </div>
                <div class="blog-three__btn-top">
                    <a href="{{ route('contact') }}" class="thm-btn">
                        <span class="fas fa-arrow-right"></span>
                        View All Blogs
                    </a>
                </div>
            </div>
            <div class="blog-three__bottom">
                <div class="row">
                    <!--Blog Three Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-three__single">
                            <div class="blog-three__date">
                                <h4>15</h4>
                                <p>July</p>
                            </div>
                            <div class="blog-three__single-inner">
                                <div class="blog-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/blog-three-shape-1.png') }}" alt="">
                                </div>
                                <div class="blog-three__content">
                                    <ul class="blog-three__meta list-unstyled">
                                        <li>
                                            <a href="{{ route('contact') }}">
                                                <span class="fas fa-user"></span>By Lifecure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">
                                                <span class="fas fa-comments"></span>02 Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-three__title"><a href="{{ route('contact') }}">Trusted by
                                            Patients
                                            Protected by Police Safety First</a></h3>
                                    <div class="blog-three__btn">
                                        <a href="{{ route('contact') }}" class="thm-btn">
                                            <span class="fas fa-arrow-right"></span>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-three__img">
                                    <img src="{{ asset('assets/images/medical-general/brand/client-photos/4.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Three Single End-->
                    <!--Blog Three Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-three__single">
                            <div class="blog-three__date">
                                <h4>15</h4>
                                <p>July</p>
                            </div>
                            <div class="blog-three__single-inner">
                                <div class="blog-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/blog-three-shape-1.png') }}" alt="">
                                </div>
                                <div class="blog-three__content">
                                    <ul class="blog-three__meta list-unstyled">
                                        <li>
                                            <a href="{{ route('contact') }}">
                                                <span class="fas fa-user"></span>By Lifecure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">
                                                <span class="fas fa-comments"></span>02 Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-three__title"><a href="{{ route('contact') }}">Understanding
                                            Blood
                                            Pressure: High vs Low</a></h3>
                                    <div class="blog-three__btn">
                                        <a href="{{ route('contact') }}" class="thm-btn">
                                            <span class="fas fa-arrow-right"></span>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-three__img">
                                    <img src="{{ asset('assets/images/medical-general/brand/client-photos/7.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Three Single End-->
                    <!--Blog Three Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="blog-three__single">
                            <div class="blog-three__date">
                                <h4>15</h4>
                                <p>July</p>
                            </div>
                            <div class="blog-three__single-inner">
                                <div class="blog-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/blog-three-shape-1.png') }}" alt="">
                                </div>
                                <div class="blog-three__content">
                                    <ul class="blog-three__meta list-unstyled">
                                        <li>
                                            <a href="{{ route('contact') }}">
                                                <span class="fas fa-user"></span>By Lifecure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">
                                                <span class="fas fa-comments"></span>02 Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-three__title"><a href="{{ route('contact') }}">Facing Health
                                            Problems? Don’t Ignore the Signs</a></h3>
                                    <div class="blog-three__btn">
                                        <a href="{{ route('contact') }}" class="thm-btn">
                                            <span class="fas fa-arrow-right"></span>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-three__img">
                                    <img src="{{ asset('assets/images/medical-general/brand/client-photos/1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Three Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Blog Three End-->
    --}}
    @if(false)
    <!--Location One start-->
    <section class="location-one">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="icon-pharmacy"></span>
                    <p class="section-title__tagline">Clinic Network Map</p>
                </div>
                <h2 class="section-title__title title-animation">Multiple Locations, <br> One <span>Standard of
                        Care</span> </h2>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="location-one__left">
                        <ul class="location-one__list">
                            <li>
                                <div class="location-one__single">
                                    <div class="location-one__img">
                                        <img src="{{ asset('assets/images/medical-general/brand/Sediu1.jpeg') }}"
                                            alt="">
                                    </div>
                                    <div class="location-one__content">
                                        <h5 class="location-one__content-title">213 sterling Rd,Suite 205,Tornto,ON
                                            MR 2B2</h5>
                                        <div class="location-one__details">
                                            <p><span>Landmark:</span> Opposite Central Hospital</p>
                                            <p><span>Phone:</span> +880 1234-567890</p>
                                            <p><span>Open:</span> Saturday to Thursday 9:00 AM – 8:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="location-one__single">
                                    <div class="location-one__img">
                                        <img src="{{ asset('assets/images/medical-general/brand/Sediu2.jpeg') }}"
                                            alt="">
                                    </div>
                                    <div class="location-one__content">
                                        <h5 class="location-one__content-title">213 sterling Rd,Suite 205,Tornto,ON
                                            MR 2B2</h5>
                                        <div class="location-one__details">
                                            <p><span>Landmark:</span> Opposite Central Hospital</p>
                                            <p><span>Phone:</span> +880 1234-567890</p>
                                            <p><span>Open:</span> Saturday to Thursday 9:00 AM – 8:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="location-one__right">
                        <div class="location-one__map-box">
                            <div class="location-one__map-img">
                                <img src="{{ asset('assets/images/shapes/location-map.jpg') }}" alt="">
                            </div>
                            <div class="location-one__point-1">
                                <div class="location-one__markar">
                                    <i class="ripple"></i>
                                </div>
                                <div class="location-one__popup-box">
                                    <div class="location-one__popup">
                                        <div class="location-one__popup-inner">
                                            <div class="location-one__popup-img">
                                                <img src="{{ asset('assets/images/resources/location-one-popup-img-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="location-one__popup-content">
                                                <p>Suite 567 <br> Springfield, IL 62701</p>
                                                <span>1234 Elm Street,</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-one__point-1 location-one__point-2">
                                <div class="location-one__markar location-one__markar-2">
                                    <i class="ripple"></i>
                                </div>
                                <div class="location-one__popup-box">
                                    <div class="location-one__popup">
                                        <div class="location-one__popup-inner">
                                            <div class="location-one__popup-img">
                                                <img src="{{ asset('assets/images/resources/location-one-popup-img-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="location-one__popup-content">
                                                <p>Suite 567 <br> Springfield, IL 62701</p>
                                                <span>1234 Elm Street,</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-one__point-1 location-one__point-3">
                                <div class="location-one__markar location-one__markar-3">
                                    <i class="ripple"></i>
                                </div>
                                <div class="location-one__popup-box">
                                    <div class="location-one__popup">
                                        <div class="location-one__popup-inner">
                                            <div class="location-one__popup-img">
                                                <img src="{{ asset('assets/images/resources/location-one-popup-img-3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="location-one__popup-content">
                                                <p>Suite 567 <br> Springfield, IL 62701</p>
                                                <span>1234 Elm Street,</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-one__point-1 location-one__point-4">
                                <div class="location-one__markar location-one__markar-4">
                                    <i class="ripple"></i>
                                </div>
                                <div class="location-one__popup-box">
                                    <div class="location-one__popup">
                                        <div class="location-one__popup-inner">
                                            <div class="location-one__popup-img">
                                                <img src="{{ asset('assets/images/resources/location-one-popup-img-4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="location-one__popup-content">
                                                <p>Suite 567 <br> Springfield, IL 62701</p>
                                                <span>1234 Elm Street,</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-one__point-1 location-one__point-5">
                                <div class="location-one__markar location-one__markar-5">
                                    <i class="ripple"></i>
                                </div>
                                <div class="location-one__popup-box">
                                    <div class="location-one__popup">
                                        <div class="location-one__popup-inner">
                                            <div class="location-one__popup-img">
                                                <img src="{{ asset('assets/images/resources/location-one-popup-img-5.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="location-one__popup-content">
                                                <p>Suite 567 <br> Springfield, IL 62701</p>
                                                <span>1234 Elm Street,</span>
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
    </section>
    <!--Location One End-->
    @endif

@endsection
