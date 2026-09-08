@extends('layouts.default')
@section('title', 'Our Doctors Details || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Our Doctors Details' pageSubtitle='Our Doctors Details' />

    <!--Team Details Start-->
    <section class="team-details">
        <div class="container">
            <div class="team-details__top">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="team-details__top-left">
                            <div class="team-details__img-1">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/9.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="team-details__top-right">
                            <div class="team-details__client-box">
                                <h3 class="team-details__client-name">Ruksana Alex</h3>
                                <span class="team-details__client-sub-title">Dental Assistant</span>
                                <div class="team-details__social">
                                    <a href="#"><i class="icon-facebook-app-symbol"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                </div>
                                <p class="team-details__client-text">Neque porro quisquam est, qui dolorem ipsum
                                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                    tempora incidunt ut labore et dolore ma gnam aliquam quaerat voluptatem. Ut enim
                                    ad minima veniam</p>
                                <ul class="team-details__client-address list-unstyled">
                                    <li>
                                        <p><span class="icon-pin"></span>Address</p>
                                        <h5>4140 Parker Rd. Allentown, New Mexico 31134</h5>
                                    </li>
                                    <li>
                                        <p><span class="icon-phone"></span>Phone Number</p>
                                        <h5><a href="tel:2085550112">(208) 555-0112</a></h5>
                                    </li>
                                    <li>
                                        <p><span class="icon-email"></span>Email</p>
                                        <h5><a href="mailto:michael.mitc@example.com">michael.mitc@example.com</a>
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
