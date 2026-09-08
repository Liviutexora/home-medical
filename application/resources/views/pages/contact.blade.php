@extends('layouts.default')
@section('title', 'Contact || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Contact' pageSubtitle='Contact' />

    <!-- Quick Contact One Start -->
    <div class="quick-contact-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <ul class="quick-contact-one__inner clearfix list-unstyled">
                        <li class="quick-contact-one__single">
                            <div class="quick-contact-one__single-icon">
                                <i class="icon-phone-call"></i>
                            </div>
                            <div class="quick-contact-one__single-text">
                                <h3>Still have questions?</h3>
                                <p>Initial Examination Your dentist</p>
                            </div>
                            <div class="quick-contact-form-box">
                                <form id="quick-contact-form" class="contact-form-validated"
                                    action="#" method="POST" novalidate="novalidate">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="text" name="phone" id="formPhonee"
                                                placeholder="Enter Phone Number" value="">
                                        </div>
                                    </div>
                                    <button type="submit" data-loading-text="Please wait...">
                                        <i class="fas fa-play"></i>
                                    </button>
                                </form>
                            </div>
                        </li>
                        <li class="quick-contact-one__single">
                            <div class="quick-contact-one__single-icon">
                                <i class="fa fa-solid fa-headset"></i>
                            </div>
                            <div class="quick-contact-one__single-text">
                                <h3>Live Contact</h3>
                                <p>Initial Examination Your dentist</p>
                            </div>
                            <div class="quick-contact-one__single-btn">
                                <a href="{{ route('contact') }}" class="thm-btn">
                                    <span class="fas fa-arrow-right"></span>
                                    Start Contact
                                </a>
                            </div>
                        </li>
                        <li class="quick-contact-one__single quick-contact-one__single--innstyle2">
                            <div class="quick-contact-one__title">
                                <h4>Get Social</h4>
                                <div class="quick-contact-one__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="quick-contact-one__location">
                        <div class="quick-contact-one__location-title">
                            <h3>Contact Info :</h3>
                        </div>
                        <div class="quick-contact-one__location-inner">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="quick-contact-one__location-single">
                                        <div class="quick-contact-one__location-icon">
                                            <i class="icon-phone-call"></i>
                                        </div>
                                        <div class="quick-contact-one__location-text">
                                            <p>Contact Us</p>
                                            <h3><a href="tel:558270575405">+55 827 057 5405</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="quick-contact-one__location-single">
                                        <div class="quick-contact-one__location-icon">
                                            <i class="icon-email"></i>
                                        </div>
                                        <div class="quick-contact-one__location-text">
                                            <p>Email Us</p>
                                            <h3><a href="mailto:example@gamil.com">example@gamil.com</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="quick-contact-one__location-single">
                                        <div class="quick-contact-one__location-icon">
                                            <i class="icon-pin"></i>
                                        </div>
                                        <div class="quick-contact-one__location-text">
                                            <p>Our Office Location</p>
                                            <h3>12 Green Road 05 New Yark</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="quick-contact-one__location-single">
                                        <div class="quick-contact-one__location-icon">
                                            <i class="fa fa-solid fa-clock"></i>
                                        </div>
                                        <div class="quick-contact-one__location-text">
                                            <p>Office Hours</p>
                                            <h3>Mon - Sat: 8.30am to 5.30pm</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-contact-one__location-btn">
                                <a href="#" class="thm-btn">
                                    <span class="fas fa-arrow-right"></span>
                                    View On Map
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick Contact One End -->


    <!-- Main Contact Form Start -->
    <section class="main-contact-form">
        <div class="container">
            <div class="main-contact-form__inner">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <span class="icon-tooth"></span>
                        <p class="section-title__tagline">Care Call</p>
                    </div>
                    <h2 class="section-title__title title-animation">
                        Get A Free <span>Quote</span>
                    </h2>
                </div>
                <form id="contact-form" class="contact-form-validated contact-page__form" action="{{ route('contact.send') }}"
                    method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-page__input">
                                <input type="text" name="name" placeholder="Your name" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-page__input">
                                <input type="email" name="email" placeholder="Your Email" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-page__input">
                                <input type="text" placeholder="phone" name="phone" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-page__input">
                                <input type="text" placeholder="Subject" name="subject" >
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-page__input">
                                <textarea name="message" placeholder="Message" ></textarea>
                            </div>
                        </div>
                        <div class="contact-page__btn">
                            <button type="submit" class="thm-btn" data-loading-text="Please wait...">
                                <span class="fas fa-arrow-right"></span>
                                Send A Message
                            </button>
                        </div>
                    </div>
                    <div class="result"></div>
                </form>
            </div>
        </div>
    </section>
    <!-- Main Contact Form End -->


    <!-- Google Map One Start -->
    <section class="google-map-one">
        <div class="container">
            <div class="google-map-one__inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                    class="google-map__one-box" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- Google Map One End -->

@endsection
