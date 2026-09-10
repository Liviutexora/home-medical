@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='About Health Care' pageSubtitle='About Us' />

    <!--About Three Start -->
    <section class="about-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-three__img-box">
                            <div class="about-three__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/poza mare-1.jpg') }}" alt="">
                            </div>
                            <div class="about-three__img-two">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/poza mica.jpg') }}" alt="">
                            </div>
                            <div class="about-three__img-three">
                                <img src="{{ asset('assets/images/resources/about-three-img-3.jpg') }}" alt="">
                            </div>
                            <div class="about-three__experience-box">
                                <div class="about-three__experience-count">
                                    <h3 class="odometer" data-count="25">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="about-three__experience-count-text">Years Of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="icon-pharmacy"></span>
                                <p class="section-title__tagline">About Our Hospital</p>
                            </div>
                            <h2 class="section-title__title title-animation">Leading the Way in Patient
                                <span>Centered Care</span>
                            </h2>
                        </div>
                        <p class="about-three__text">We are a patient-centered hospital dedicated to delivering
                            world-class medical care through advanced technology & compassionate service. Our team
                            of experienced doctors, nurses, & staff work together to ensure every patient receives
                            personalized treatment in a safe and supportive environment.</p>
                        <div class="about-three__content-box">
                            <div class="about-three__content-icon">
                                <span class="icon-healthcare"></span>
                            </div>
                            <div class="about-three__content">
                                <h4>Medical & Expertise Services</h4>
                                <p>Our hospital offers a full range of services tailored to meet your needs from
                                    prevention to recovery with a patient-first approach.</p>
                            </div>
                        </div>
                        <div class="about-three__points-box">
                            <ul class="about-three__points">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Advanced care with a personal approach.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Instant Operation & Appointment</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="about-three__points about-three__points--two">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Advanced care with a personal approach.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Instant Operation & Appointment</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="about-three__btn">
                            <a href="{{ route('contact') }}" class="thm-btn">
                                <span class="fas fa-arrow-right"></span>
                                More About Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Three End -->

    <!-- Sliding Text Two Start -->
    <section class="sliding-text-two">
        <div class="sliding-text-two__wrap">
            <ul class="sliding-text-two__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Miror Surgery" class="sliding-text-two__title">Miror Surgery</h2>
                </li>
                <li><span></span></li>
                <li>
                    <h2 data-hover="Dental Implan" class="sliding-text-two__title">Dental Implan</h2>
                </li>
                <li><span></span></li>
                <li>
                    <h2 data-hover="Teeth Cleaning" class="sliding-text-two__title">Teeth Cleaning</h2>
                </li>
                <li><span></span></li>
                <li>
                    <h2 data-hover="Dental Fillings" class="sliding-text-two__title">Dental Fillings</h2>
                </li>
                <li><span></span></li>
                <li>
                    <h2 data-hover="Endodontics" class="sliding-text-two__title">Endodontics</h2>
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
                    <p class="section-title__tagline">Healing with Heart</p>
                </div>
                <h2 class="section-title__title title-animation">Medical Services That <br>
                    <span>make a difference</span>
                </h2>
            </div>
            <div class="swiper-container service-three__carousel">
                <div class="swiper-wrapper">
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
                                    <p class="services-three__sub-title">Fitness</p>
                                    <h3 class="services-three__title"><a href="#">Orthopaedics</a></h3>
                                    <p class="services-three__text">we offer a wide range of medical services
                                        designed
                                        to meet the needs of patients at every stage of life.</p>
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
                                    <p class="services-three__sub-title">Health</p>
                                    <h3 class="services-three__title"><a href="#">Cardiology</a></h3>
                                    <p class="services-three__text">we offer a wide range of medical services
                                        designed
                                        to meet the needs of patients at every stage of life.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="swiper-slide">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-intensive-care-unit"></span>
                            </div>
                            <div class="services-three__single-inner">
                                <div class="services-three__shape-1">
                                    <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__content">
                                    <p class="services-three__sub-title">Vitality</p>
                                    <h3 class="services-three__title"><a href="#">Intensive Care</a></h3>
                                    <p class="services-three__text">we offer a wide range of medical services
                                        designed
                                        to meet the needs of patients at every stage of life.</p>
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
                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="{{ asset('assets/images/medical-general/brand/client-photos/brand-1-1-1.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="{{ asset('assets/images/medical-general/brand/client-photos/brand-1-1-2.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="{{ asset('assets/images/medical-general/brand/client-photos/brand-1-1-3.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="{{ asset('assets/images/medical-general/brand/client-photos/brand-1-1-1.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="{{ asset('assets/images/medical-general/brand/client-photos/brand-1-1-2.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->
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
                    <p class="section-title__tagline">Professional Care Team</p>
                </div>
                <h2 class="section-title__title title-animation">Meet Our Medical <span>Professionals</span> </h2>
            </div>
            <div class="team-three__inner">
                <div class="team-three__shape-1"></div>
                <div class="team-three__shape-2"></div>
                <ul class="team-three__team-list">
                    <!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Pediatrician</p>
                                <h3 class="team-three__name"><a href="javascript:void(0)">Dr. Jennifer Scott</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/medical-general/brand/client-photos/3.jpg') }}" alt="Image"
                                class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Ophthalmologist</p>
                                <h3 class="team-three__name"><a href="javascript:void(0)">Dr. Sarah Levine</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/medical-general/brand/client-photos/7.jpg') }}" alt="Image"
                                class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Dermatologist</p>
                                <h3 class="team-three__name"><a href="javascript:void(0)">Dr. Amanda Chen</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/medical-general/brand/client-photos/8.jpg') }}" alt="Image"
                                class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Health Specialist</p>
                                <h3 class="team-three__name"><a href="javascript:void(0)">Dr. Laura Simmon</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/medical-general/brand/client-photos/9.jpg') }}" alt="Image"
                                class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">General Dentist</p>
                                <h3 class="team-three__name"><a href="javascript:void(0)">Dr. Megan Ross</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/medical-general/brand/client-photos/10.jpg') }}" alt="Image"
                                class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <li class="hover-item">
                        <div class="team-three__single">
                            <div class="team-three__info">
                                <p class="team-three__sub-title">Gastroenterologist</p>
                                <h3 class="team-three__name"><a href="javascript:void(0)">Dr. James Wilson</a></h3>
                            </div>
                            <div class="team-three__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/medical-general/brand/client-photos/7.jpg') }}" alt="Image"
                                class="hover-item__box-img">
                        </div>
                    </li>
                    <!--Team Three Single End-->
                </ul>
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

@endsection
