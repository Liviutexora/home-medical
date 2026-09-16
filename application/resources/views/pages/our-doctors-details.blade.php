@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Detalii Medic' pageSubtitle='Detalii Medic' />

    <!--Team Details Start-->
    <section class="team-details">
        <div class="container">
            <div class="team-details__top">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="team-details__top-left">
                            <div class="team-details__img-1">
                                <img src="{{ asset('assets/images/Galerie-HM/' . $doctor['image']) }}" alt="{{ $doctor['name'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="team-details__top-right">
                            <div class="team-details__client-box">
                                <h3 class="team-details__client-name">{{ $doctor['name'] }}</h3>
                                <span class="team-details__client-sub-title">{{ $doctor['specialization'] }}</span>
                                <div class="team-details__social">
                                    <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="icon-facebook-app-symbol"></i></a>
                                    <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                                </div>
                                <p class="team-details__client-text">{{ $doctor['intro'] }}</p>
                                <ul class="team-details__client-address list-unstyled">
                                    <li>
                                        <p><span class="icon-pin"></span>Address</p>
                                        <h5>{{ $doctor['address'] }}</h5>
                                    </li>
                                    <li>
                                        <p><span class="icon-phone"></span>Phone Number</p>
                                        <h5><a href="tel:{{ preg_replace('/[^0-9]/', '', $doctor['phone']) }}">{{ $doctor['phone'] }}</a></h5>
                                    </li>
                                    <li>
                                        <p><span class="icon-email"></span>Email</p>
                                        <h5><a href="mailto:{{ $doctor['email'] }}">{{ $doctor['email'] }}</a>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-details__bottom">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-left">
                            <h3 class="team-details__bottom-title">Biography</h3>
                            <p class="team-details__bottom-text">Neque porro quisquam est, qui dolorem ipsum quia
                                dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                incidunt ut labore et dolore ma gnam aliquam quaerat voluptatem. Ut enim ad minima
                                veniam</p>
                            <div class="team-details__practice-area">
                                <h4 class="team-details__practice-area-title">Practice Area</h4>
                                <div class="team-details__practice-area-list-box">
                                    <ul class="list-unstyled team-details__practice-area-list">
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>Cancer Treatment</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>Eye treatment</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>Ocular</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul
                                        class="list-unstyled team-details__practice-area-list team-details__practice-area-list--two">
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>Paediatric</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>Oral Health</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>Surgery Dental</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-right">
                            <h3 class="team-details__progress-title-1">Skills</h3>
                            <ul class="team-details__progress-list list-unstyled">
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Repair Device</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="80%">
                                                <div class="count-text">80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Replace Device</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="95%">
                                                <div class="count-text">95%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Diagnostics</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="65%">
                                                <div class="count-text">65%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team Details End-->

    <!--Team Details Contact Start-->
    <section class="team-details-contact">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Contact Our
                        Team</span>
                </div>
                <h2 class="section-title__title title-animation">Give Us A <span>Message</span>
                </h2>
            </div>
            <div class="team-details-contact__inner">
                <form class="contact-form-validated team-details-contact__form" action="assets/inc/sendemail.php"
                    method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="text" name="name" placeholder="Your Name" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="email" name="Email" placeholder="Email Address" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="text" name="Phone" placeholder="Phone Number" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="text" name="subject" placeholder="Subject" >
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="team-details-contact__input-box text-message-box">
                                <textarea name="message" placeholder="Message" ></textarea>
                            </div>
                            <div class="team-details-contact__btn-box">
                                <button type="submit" class="thm-btn">
                                    <span class="fas fa-arrow-right"></span>
                                    send a
                                    message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="result"></div>
                </form>
            </div>
        </div>
    </section>
    <!--Team Details Contact End-->

@endsection
