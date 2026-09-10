@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Appointment' pageSubtitle='Appointment' />

    <!-- Appointment Page Start -->
    <section class="appointment-page">
        <div class="container">
            <div class="appointment-three__form appointment-page__form">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <span class="icon-tooth"></span>
                        <p class="section-title__tagline">Appointment</p>
                    </div>
                    <h2 class="section-title__title title-animation">
                        Get A Free <span>Appointment</span>
                    </h2>
                </div>
                <form id="appointment-three__form" class="contact-form-validated" action="assets/inc/sendemail.php"
                    method="POST" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="appointment-three__input">
                                <input type="text" name="name" placeholder="Your Name" 
                                    aria-required="true">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="appointment-three__input">
                                <input type="text" placeholder="Phone No" name="phone" 
                                    aria-required="true">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="appointment-three__input">
                                <input type="email" name="email" placeholder="Your Email" 
                                    aria-required="true">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="appointment-three__input">
                                <div class="select-box clearfix">
                                    <select class="wide">
                                        <option data-display="Select Services">
                                            Select Services
                                        </option>
                                        <option value="1">Miror Surgery</option>
                                        <option value="2">Dental Implan</option>
                                        <option value="3">Teeth Cleaning</option>
                                        <option value="4">Tooth Extraction</option>
                                        <option value="5">Dental Fillings</option>
                                        <option value="6">Endodontics</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="appointment-three__input">
                                <input type="text" placeholder="MM/DD/YYYY" name="date" id="datepicker">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="appointment-three__input">
                                <div class="select-box clearfix">
                                    <input type="text" name="time" placeholder="0:00 am/pm">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-page__input">
                                <textarea name="message" placeholder="Message" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-three__btn">
                        <button type="submit" class="thm-btn">
                            <span class="fas fa-arrow-right"></span>
                            Book Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Appointment Page End -->

@endsection
