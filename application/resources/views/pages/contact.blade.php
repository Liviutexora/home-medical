@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Contact' pageSubtitle='Contact' />

    <!-- Quick Contact One Start -->
    <div class="quick-contact-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="quick-contact-one__location">
                        <div class="quick-contact-one__location-title">
                            <h3>Contact Info :</h3>
                        </div>
                        <div class="quick-contact-one__location-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="quick-contact-one__location-single">
                                        <div class="quick-contact-one__location-icon">
                                            <i class="icon-phone-call"></i>
                                        </div>
                                        <div class="quick-contact-one__location-text">
                                            <p>Contactați-ne</p>
                                            <h3><a href="tel:0356171818">0356 171 818</a></h3>
                                            <h3><a href="tel:0723716085">0723 716 085</a></h3>
                                            <div class="quick-contact-one__social quick-contact-one__social--inline">
                                                <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                                                <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="quick-contact-one__location-single">
                                        <div class="quick-contact-one__location-icon">
                                            <i class="fa fa-solid fa-clock"></i>
                                        </div>
                                        <div class="quick-contact-one__location-text">
                                            <p>Program</p>
                                            <h3>Luni – Vineri: 09:00 – 17:00</h3>
                                            <h3><span class="program-service-name">Consultații clinice</span></h3>
                                            <h3>Luni – Vineri: 09:00 – 16:00</h3>
                                            <h3><span class="program-service-name">Fișe medicale tip A(B) · Port armă</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="quick-contact-one__location-single">
                                        <div class="quick-contact-one__location-icon">
                                            <i class="icon-pin"></i>
                                        </div>
                                        <div class="quick-contact-one__location-text">
                                            <p>Adresa clinicii</p>
                                            <h3>Timișoara, Str. Ulpia Traiana, Nr. 27</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="quick-contact-one__location-single">
                                        <div class="quick-contact-one__location-icon">
                                            <i class="icon-email"></i>
                                        </div>
                                        <div class="quick-contact-one__location-text">
                                            <p>Email</p>
                                            <h3><a href="mailto:homemedicalvmc@gmail.com">homemedicalvmc@gmail.com</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-contact-one__location-btn">
                                <a href="https://maps.app.goo.gl/dVyGtGinTZFE6Biw6" class="thm-btn" target="_blank" rel="noopener noreferrer">
                                    <span class="fas fa-arrow-right"></span>
                                    Vezi pe hartă
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick Contact One End -->

    <style>
        .program-service-name {
            color: var(--mediplace-gray);
        }
    </style>

    <!-- Main Contact Form Start -->
    {{--
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
    --}}
    <!-- Main Contact Form End -->


    <!-- Google Map One Start -->
    <section class="google-map-one">
        <div class="container">
            <div class="google-map-one__inner">
                <iframe class="google-map-one__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2647.049482823864!2d21.2257552!3d45.73428140000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455da2c634b1e1%3A0xef79105d9343358d!2sStrada%20Ulpia%20Traiana%2027%2C%20300211%20Timi%C8%99oara!5e1!3m2!1sen!2sro!4v1789539437609!5m2!1sen!2sro" style="border:0; display:block; width:100%; height:100%;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>
    </section>
    <!-- Google Map One End -->

@endsection
