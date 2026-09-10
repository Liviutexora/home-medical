@extends('layouts.multipage.style-3')
@section('title', 'Home Medical')


@section('content')

    <!--Banner Two Start-->
    <section class="banner-two">
        <div class="banner-two__bg" style="background-image: url({{ asset('assets/images/backgrounds/banner-v2-bg.jpg') }});">
        </div>
        <div class="shape2 float-bob-y">
            <span class="icon-heart"></span>
        </div>
        <div class="shape3 float-bob-x3">
            <span class="icon-brain"></span>
        </div>
        <div class="shape4 float-bob-y">
            <span class="icon-medicine"></span>
        </div>
        <div class="container">
            <div class="banner-two__inner">
                <div class="banner-two__content">
                    <h2>Medical Is a Field <br> That Encompasses <br> The <span>Study Life</span></h2>
                    <p>At Mediplace we believe healthcare should be accessible, compassionate, and
                        personalized. <br> Our team of experienced doctors, nurses, and specialists.</p>
                    <div class="banner-two__content-btn">
                        <a href="{{ route('appointment') }}" class="thm-btn">
                            <span class="fas fa-arrow-right"></span>
                            Appointment
                        </a>
                        <a href="{{ route('contact') }}" class="thm-btn">
                            <span class="fas fa-arrow-right"></span>
                            Contact Us
                        </a>
                    </div>
                </div>

                <div class="banner-two__img-box">
                    <div class="banner-two__progress float-bob-y">
                        <div class="banner-two__progress-inner">
                            <div class="circle-progress"
                                data-options='{ "value": 0.85,"thickness": 4,"emptyFill": "#ecf5fb","lineCap": "square", "size": 100, "fill": { "color": "#1C58D5" } }'>
                            </div><!-- /.circle-progress -->
                            <div class="banner-two__pack count-box">
                                <p class="count-text" data-stop="85" data-speed="1500"></p>
                                <span>%</span>
                            </div>
                        </div>

                        <div class="banner-two__progress-content">
                            <div class="text-box">
                                <p>Successfully <br> diagnosis</p>
                            </div>
                            <div class="btn-box">
                                <a href="{{ route('about-v-3') }}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="shape1 rotate-me"></div>
                    <div class="banner-two__img">
                        <img src="{{ asset('assets/images/medical-general/resources/banner-v2-img1-hero.jpg') }}" alt="">
                    </div>

                    <div class="banner-two__patient-recovers float-bob-x3">
                        <ul class="banner-two__patient-recovers-list">
                            <li>
                                <div class="banner-two__patient-recovers-img">
                                    <img src="{{ asset('assets/images/medical-general/resources/banner-v2-img2.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="banner-two__patient-recovers-img">
                                    <img src="{{ asset('assets/images/medical-general/resources/banner-v2-img3.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="banner-two__patient-recovers-img">
                                    <img src="{{ asset('assets/images/medical-general/resources/banner-v2-img4.jpg') }}" alt="">
                                </div>
                            </li>
                        </ul>

                        <div class="banner-two__patient-recovers-content">
                            <div class="banner-two__patient-recovers-count-box">
                                <p class="odometer" data-count="250">00</p>
                                <span>K+</span>
                            </div>
                            <p class="banner-two__patient-recovers-text">Patient recovers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner Two End-->


    <!--CTA One Start -->
    <section class="cta-one">
        <div class="container">
            <div class="cta-one__inner">
                <ul class="row">
                    <!--CTA One Single Start -->
                    <li class="col-xl-4 col-lg-6">
                        <div class="cta-one__single">
                            <div class="cta-one__icon">
                                <span class="icon-first-aid-kit"></span>
                            </div>
                            <div class="cta-one__content">
                                <h3 class="cta-one__title">Emergency Case</h3>
                                <p class="cta-one__text">Whether you're seeking a routine
                                    check-up, experts diagnosis
                                    specialized treat.</p>
                            </div>
                        </div>
                    </li>
                    <!--CTA One Single End -->
                    <!--CTA One Single Start -->
                    <li class="col-xl-4 col-lg-6">
                        <div class="cta-one__single">
                            <div class="cta-one__icon">
                                <span class="icon-medical-team"></span>
                            </div>
                            <div class="cta-one__content">
                                <h3 class="cta-one__title">Find Doctors</h3>
                                <p class="cta-one__text">Whether you're seeking a routine
                                    check-up, experts diagnosis
                                    specialized treat.</p>
                            </div>
                        </div>
                    </li>
                    <!--CTA One Single End -->
                    <!--CTA One Single Start -->
                    <li class="col-xl-4 col-lg-6">
                        <div class="cta-one__single">
                            <div class="cta-one__icon">
                                <span class="icon-clock-1"></span>
                            </div>
                            <div class="cta-one__content">
                                <h3 class="cta-one__title">Open Hours</h3>
                                <ul class="cta-one__open-hours-list">
                                    <li>
                                        <p>Sun-Tuesday :</p>
                                        <p>09:30-07:30</p>
                                    </li>
                                    <li>
                                        <p>Friday :</p>
                                        <p>09:30-07:30</p>
                                    </li>
                                    <li>
                                        <p>Monday :</p>
                                        <p>09:30-07:30</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!--CTA One Single End -->
                </ul>
            </div>
        </div>
    </section>
    <!--CTA One End -->

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
                            <a href="{{ route('about-v-3') }}" class="thm-btn">
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

    <!--Services Three Start-->
    <section class="services-three">
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
                                    <h3 class="services-three__title"><a
                                            href="{{ route('medicine-and-health') }}">Orthopaedics</a></h3>
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
                                    <h3 class="services-three__title"><a
                                            href="{{ route('heart-specialist') }}">Cardiology</a>
                                    </h3>
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
                                    <h3 class="services-three__title"><a href="{{ route('general-surgery') }}">Intensive
                                            Care</a></h3>
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

    <!--Process Two Start -->
    <section class="process-two">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="icon-pharmacy"></span>
                    <p class="section-title__tagline">Our Process</p>
                </div>
                <h2 class="section-title__title title-animation">Simple Steps to <span>Quality Care</span> </h2>
            </div>
            <ul class="row">
                <!--Process Two Single Start -->
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="process-two__single">
                        <div class="process-two__img-box">
                            <div class="process-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/1.jpg') }}" alt="">
                            </div>
                            <div class="process-two__count"></div>
                        </div>
                        <div class="process-two__content">
                            <h3 class="process-two__title">Treatment Procedure</h3>
                            <p class="process-two__text">Our dental care process is designed
                                to ensure comfort, efficiency, &
                                the best outcomes ..</p>
                        </div>
                    </div>
                </li>
                <!--Process Two Single End -->
                <!--Process Two Single Start -->
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay="200ms">
                    <div class="process-two__single">
                        <div class="process-two__img-box">
                            <div class="process-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/2.jpg') }}" alt="">
                            </div>
                            <div class="process-two__count"></div>
                        </div>
                        <div class="process-two__content">
                            <h3 class="process-two__title">Patient Registration</h3>
                            <p class="process-two__text">Our dental care process is designed
                                to ensure comfort, efficiency, &
                                the best outcomes ..</p>
                        </div>
                    </div>
                </li>
                <!--Process Two Single End -->
                <!--Process Two Single Start -->
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="process-two__single">
                        <div class="process-two__img-box">
                            <div class="process-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/4.jpg') }}" alt="">
                            </div>
                            <div class="process-two__count"></div>
                        </div>
                        <div class="process-two__content">
                            <h3 class="process-two__title">Doctor Consultation</h3>
                            <p class="process-two__text">Our dental care process is designed
                                to ensure comfort, efficiency, &
                                the best outcomes ..</p>
                        </div>
                    </div>
                </li>
                <!--Process Two Single End -->
                <!--Process Two Single Start -->
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay="400ms">
                    <div class="process-two__single">
                        <div class="process-two__img-box">
                            <div class="process-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/6.jpg') }}" alt="">
                            </div>
                            <div class="process-two__count"></div>
                        </div>
                        <div class="process-two__content">
                            <h3 class="process-two__title">Initial Assessment</h3>
                            <p class="process-two__text">Our dental care process is designed
                                to ensure comfort, efficiency, &
                                the best outcomes ..</p>
                        </div>
                    </div>
                </li>
                <!--Process Two Single End -->
            </ul>
        </div>
    </section>
    <!--Process Two End -->

    <!--Start Brand One-->
    <section class="brand-one">
        <div class="brand-one__shape-bg"
            style="background-image: url({{ asset('assets/images/shapes/brand-one-shape-bg.png') }});">
        </div>
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
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details') }}">Dr. Jennifer
                                        Scott</a></h3>
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
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details') }}">Dr. Sarah
                                        Levine</a>
                                </h3>
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
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details') }}">Dr. Amanda
                                        Chen</a>
                                </h3>
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
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details') }}">Dr. Laura
                                        Simmon</a>
                                </h3>
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
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details') }}">Dr. Megan
                                        Ross</a>
                                </h3>
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
                                <h3 class="team-three__name"><a href="{{ route('our-doctors-details') }}">Dr. James
                                        Wilson</a>
                                </h3>
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

    <!--Appointment Two Start-->
    <section class="appointment-two">
        <div class="appointment-two__shape-1">
            <img src="{{ asset('assets/images/shapes/appointment-two-shape-1.png') }}" alt="">
        </div>
        <div class="appointment-two__shape-2">
            <img src="{{ asset('assets/images/shapes/appointment-two-shape-2.png') }}" alt="">
        </div>
        <div class="appointment-two__shape-3"></div>
        <div class="appointment-two__shape-4"></div>
        <div class="appointment-two__shape-5"></div>
        <div class="appointment-two__shape-6"></div>
        <div class="container">
            <div class="appointment-two__inner">
                <div class="row">
                    <div class="col-xl-6"></div>
                    <div class="col-xl-6">
                        <div class="appointment-two__form-box">
                            <h3 class="appointment-two__title">Book Appointment</h3>
                            <form class="contact-form-validated appointment-two__form" action="{{ route('contact.send') }}"
                                method="post" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <h4 class="appointment-two__input-title">Full Name *</h4>
                                        <div class="appointment-two__input-box">
                                            <input type="text" name="name" placeholder="Jordan Walk"
                                                 aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <h4 class="appointment-two__input-title">Your Email *</h4>
                                        <div class="appointment-two__input-box">
                                            <input type="email" name="email" placeholder="jordan@domain.com"
                                                 aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <h4 class="appointment-two__input-title">Subjects *</h4>
                                        <div class="appointment-two__input-box">
                                            <input type="text" name="subject" placeholder="Write your subject"
                                                 aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <h4 class="appointment-two__input-title">Contact Number *</h4>
                                        <div class="appointment-two__input-box">
                                            <input type="text" name="phone" placeholder="Your Phone" 
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <h4 class="appointment-two__input-title">Message *</h4>
                                        <div class="appointment-two__input-box text-message-box">
                                            <textarea name="message" placeholder="Type your message"></textarea>
                                        </div>
                                        <div class="appointment-two__btn-box">
                                            <button type="submit" class="thm-btn">
                                                <span class="fas fa-arrow-right"></span>
                                                SEND Message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="result"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="appointment-two__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img src="{{ asset('assets/images/medical-general/brand/client-photos/14.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--Appointment Two One-->

    <!--Benefits One start-->
    <section class="benefits-one">
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style2">
                <div class="section-title__tagline-box">
                    <span class="icon-pharmacy"></span>
                    <p class="section-title__tagline">Benefits You Can Trust</p>
                </div>
                <h2 class="section-title__title title-animation">Clinics offer a clean & safe <br> friendly
                    <span>healing
                        Environment</span>
                </h2>
            </div>
            <div class="benefits-one__inner">
                <div class="benefits-one__main-tab-box tabs-box">
                    <div class="benefits-one__tab-buttons-box">
                        <ul class="tab-buttons list-unstyled">
                            <li data-tab="#angioplasty" class="tab-btn active-btn">
                                <div class="benefits-one__tab-buttons-single">
                                    <i class="icon-health-professional"></i>
                                    <span>Angioplasty</span>
                                </div>
                            </li>
                            <li data-tab="#dermatology" class="tab-btn">
                                <div class="benefits-one__tab-buttons-single">
                                    <i class="icon-dermatology"></i>
                                    <span>dermatology</span>
                                </div>
                            </li>
                            <li data-tab="#w-health" class="tab-btn">
                                <div class="benefits-one__tab-buttons-single">
                                    <i class="icon-old-woman"></i>
                                    <span>Women’s Health</span>
                                </div>
                            </li>
                            <li data-tab="#physiotherapy" class="tab-btn">
                                <div class="benefits-one__tab-buttons-single">
                                    <i class="icon-physical-therapy"></i>
                                    <span>Physiotherapy</span>
                                </div>
                            </li>
                            <li data-tab="#cardiology" class="tab-btn">
                                <div class="benefits-one__tab-buttons-single">
                                    <i class="icon-heart-rate"></i>
                                    <span>Cardiology</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="angioplasty">
                            <div class="benefits-one__content-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="benefits-one__content-left">
                                            <div class="benefits-one__content-img-box">
                                                <div class="benefits-one__content-img">
                                                    <img src="{{ asset('assets/images/medical-general/brand/client-photos/15.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="benefits-one__content-small-img">
                                                    <img src="{{ asset('assets/images/medical-general/brand/client-photos/17.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="benefits-one__content-right">
                                            <h4 class="benefits-one__content-right-title">Specialist Consultations
                                            </h4>
                                            <div class="benefits-one__content-right-outer">
                                                <p class="benefits-one__content-right-text">We are
                                                    committed to delivering high-quality, compassionate
                                                    healthcare through a team of experienced doctors and
                                                    staff. Our facility is equipped with modern
                                                    technology to ensure accurate diagnosis & effective
                                                    treatment. Whether it's a routine check-up or
                                                    emergency care, we provide reliable and personalized
                                                    service that patients can trust.</p>
                                                <div class="benefits-one__points-box">
                                                    <ul class="benefits-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Modern diagnostic and lab facilities.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Quick and easy appointment booking.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>24/7 emergency medical services.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="benefits-one__points benefits-one__points--two">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Clean and safe environment.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Friendly and helpful staff.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Personalized treatment plans.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="benefits-one__btn">
                                                    <a href="{{ route('medicine-and-health') }}" class="thm-btn">
                                                        <span class="fas fa-arrow-right"></span>
                                                        View All More
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="dermatology">
                            <div class="benefits-one__content-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="benefits-one__content-left">
                                            <div class="benefits-one__content-img-box">
                                                <div class="benefits-one__content-img">
                                                    <img src="{{ asset('assets/images/resources/benefit-one-img-1-2.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="benefits-one__content-small-img">
                                                    <img src="{{ asset('assets/images/resources/benefit-one-small-img-1-1.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="benefits-one__content-right">
                                            <h4 class="benefits-one__content-right-title">Specialist Consultations
                                            </h4>
                                            <div class="benefits-one__content-right-outer">
                                                <p class="benefits-one__content-right-text">We are
                                                    committed to delivering high-quality, compassionate
                                                    healthcare through a team of experienced doctors and
                                                    staff. Our facility is equipped with modern
                                                    technology to ensure accurate diagnosis & effective
                                                    treatment. Whether it's a routine check-up or
                                                    emergency care, we provide reliable and personalized
                                                    service that patients can trust.</p>
                                                <div class="benefits-one__points-box">
                                                    <ul class="benefits-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Modern diagnostic and lab facilities.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Quick and easy appointment booking.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>24/7 emergency medical services.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="benefits-one__points benefits-one__points--two">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Clean and safe environment.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Friendly and helpful staff.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Personalized treatment plans.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="benefits-one__btn">
                                                    <a href="{{ route('medicine-and-health') }}" class="thm-btn">
                                                        <span class="fas fa-arrow-right"></span>
                                                        View All More
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="w-health">
                            <div class="benefits-one__content-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="benefits-one__content-left">
                                            <div class="benefits-one__content-img-box">
                                                <div class="benefits-one__content-img">
                                                    <img src="{{ asset('assets/images/resources/benefit-one-img-1-3.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="benefits-one__content-small-img">
                                                    <img src="{{ asset('assets/images/resources/benefit-one-small-img-1-1.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="benefits-one__content-right">
                                            <h4 class="benefits-one__content-right-title">Specialist Consultations
                                            </h4>
                                            <div class="benefits-one__content-right-outer">
                                                <p class="benefits-one__content-right-text">We are
                                                    committed to delivering high-quality, compassionate
                                                    healthcare through a team of experienced doctors and
                                                    staff. Our facility is equipped with modern
                                                    technology to ensure accurate diagnosis & effective
                                                    treatment. Whether it's a routine check-up or
                                                    emergency care, we provide reliable and personalized
                                                    service that patients can trust.</p>
                                                <div class="benefits-one__points-box">
                                                    <ul class="benefits-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Modern diagnostic and lab facilities.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Quick and easy appointment booking.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>24/7 emergency medical services.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="benefits-one__points benefits-one__points--two">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Clean and safe environment.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Friendly and helpful staff.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Personalized treatment plans.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="benefits-one__btn">
                                                    <a href="{{ route('medicine-and-health') }}" class="thm-btn">
                                                        <span class="fas fa-arrow-right"></span>
                                                        View All More
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="physiotherapy">
                            <div class="benefits-one__content-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="benefits-one__content-left">
                                            <div class="benefits-one__content-img-box">
                                                <div class="benefits-one__content-img">
                                                    <img src="{{ asset('assets/images/resources/benefit-one-img-1-4.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="benefits-one__content-small-img">
                                                    <img src="{{ asset('assets/images/resources/benefit-one-small-img-1-1.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="benefits-one__content-right">
                                            <h4 class="benefits-one__content-right-title">Specialist Consultations
                                            </h4>
                                            <div class="benefits-one__content-right-outer">
                                                <p class="benefits-one__content-right-text">We are
                                                    committed to delivering high-quality, compassionate
                                                    healthcare through a team of experienced doctors and
                                                    staff. Our facility is equipped with modern
                                                    technology to ensure accurate diagnosis & effective
                                                    treatment. Whether it's a routine check-up or
                                                    emergency care, we provide reliable and personalized
                                                    service that patients can trust.</p>
                                                <div class="benefits-one__points-box">
                                                    <ul class="benefits-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Modern diagnostic and lab facilities.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Quick and easy appointment booking.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>24/7 emergency medical services.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="benefits-one__points benefits-one__points--two">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Clean and safe environment.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Friendly and helpful staff.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Personalized treatment plans.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="benefits-one__btn">
                                                    <a href="{{ route('medicine-and-health') }}" class="thm-btn">
                                                        <span class="fas fa-arrow-right"></span>
                                                        View All More
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="cardiology">
                            <div class="benefits-one__content-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="benefits-one__content-left">
                                            <div class="benefits-one__content-img-box">
                                                <div class="benefits-one__content-img">
                                                    <img src="{{ asset('assets/images/resources/benefit-one-img-1-5.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="benefits-one__content-small-img">
                                                    <img src="{{ asset('assets/images/resources/benefit-one-small-img-1-1.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="benefits-one__content-right">
                                            <h4 class="benefits-one__content-right-title">Specialist Consultations
                                            </h4>
                                            <div class="benefits-one__content-right-outer">
                                                <p class="benefits-one__content-right-text">We are
                                                    committed to delivering high-quality, compassionate
                                                    healthcare through a team of experienced doctors and
                                                    staff. Our facility is equipped with modern
                                                    technology to ensure accurate diagnosis & effective
                                                    treatment. Whether it's a routine check-up or
                                                    emergency care, we provide reliable and personalized
                                                    service that patients can trust.</p>
                                                <div class="benefits-one__points-box">
                                                    <ul class="benefits-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Modern diagnostic and lab facilities.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Quick and easy appointment booking.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>24/7 emergency medical services.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="benefits-one__points benefits-one__points--two">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Clean and safe environment.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Friendly and helpful staff.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Personalized treatment plans.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="benefits-one__btn">
                                                    <a href="{{ route('medicine-and-health') }}" class="thm-btn">
                                                        <span class="fas fa-arrow-right"></span>
                                                        View All More
                                                    </a>
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
        </div>
    </section>
    <!--Benefits One End-->

    {{-- Discount One Start --}}
    {{--
    <section class="discount-one">
        <div class="discount-one__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/discount-one-bg.jpg') }});">
        </div>
        <div class="discount-one__shape-1">
            <img src="{{ asset('assets/images/shapes/discount-one-shape-1.png') }}" alt="">
        </div>
        <div class="discount-one__shape-2">
            <img src="{{ asset('assets/images/shapes/discount-one-shape-2.png') }}" alt="">
        </div>
        <div class="discount-one__shape-3"></div>
        <div class="container">
            <div class="discount-one__top-title-box">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <span class="icon-pharmacy"></span>
                        <p class="section-title__tagline">50% Discount Now</p>
                    </div>
                    <h2 class="section-title__title title-animation">Save 50% on Every <span>Prescription</span>
                    </h2>
                    <div class="discount-one__btn">
                        <a href="{{ route('contact') }}" class="thm-btn">
                            <span class="fas fa-arrow-right"></span>
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="discount-one__countdown-box">
                <div class="timer-box clearfix">
                    <div class="countdown-timer">
                        <div class="default-coundown">
                            <div class="default-coundown-box">
                                <div class="countdown discount-one-countdown" data-countdown-time="2026/12/28">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    {{-- Discount One End --}}

    {{-- Blog Three Start --}}
    {{--
    <section class="blog-three">
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
    --}}
    {{-- Blog Three End --}}

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
