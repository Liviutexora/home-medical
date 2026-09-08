@extends('layouts.default')
@section('title', 'Department || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Department' pageSubtitle='Department' />

    <!--Department Page Start-->
    <section class="department-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="department-page__sidebar">
                        <div class="department-page__form-box">
                            <form id="department-page__form" class="contact-form-validated" action="assets/inc/sendemail.php"
                                method="POST" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="department-page__input">
                                            <div class="select-box clearfix">
                                                <select class="wide">
                                                    <option data-display="Select Department">
                                                        Select Department
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
                                    <div class="col-xl-12">
                                        <div class="department-page__input">
                                            <input type="text" name="name" placeholder="Your Name" 
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="department-page__input">
                                            <input type="text" placeholder="Phone No" name="phone" 
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="department-page__input">
                                            <input type="email" name="email" placeholder="Your Email" 
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="department-page__input">
                                            <input type="text" placeholder="MM/DD/YYYY" name="date" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="department-page__input">
                                            <div class="select-box clearfix">
                                                <input type="text" name="time" placeholder="0:00 am/pm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="department-page__btn">
                                    <button type="submit" class="thm-btn">
                                        <span class="fas fa-arrow-right"></span>
                                        Book Appointment
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="service-details__get-started">
                            <h3 class="service-details__get-started-title">Book Appointment</h3>
                            <p class="service-details__get-started-text">Pianissimos of dulcimers qui therefore
                                always
                                holds in these matters to this principle</p>
                            <ul class="service-details__get-started-points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <p><a href="tel:585858575084">+58 585 857 5084</a></p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <p><a href="mailto:example@gmail.com">example@gmail.com</a></p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <p>4517 Washington Ave. Manchester,<br> Kentucky 39495</p>
                                </li>
                            </ul>
                            <div class="service-details__get-started-btn-box">
                                <a href="{{ route('contact') }}" class="thm-btn">
                                    <span class="fas fa-arrow-right"></span>Read More
                                </a>
                            </div>
                        </div>
                        <div class="department-page__services-box">
                            <h3 class="department-page__services-title">Our Services</h3>
                            <ul class="department-page__services-list list-unstyled">
                                <li>
                                    <a href="{{ route('medicine-and-health') }}"><span
                                            class="icon-health-professional"></span>
                                        Health Professional</a>
                                </li>
                                <li>
                                    <a href="{{ route('medicine-and-health') }}"><span class="icon-tooth"></span>
                                        Dental health</a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('medicine-and-health') }}"><span class="icon-human"></span>
                                        Personalized Care</a>
                                </li>
                                <li>
                                    <a href="{{ route('medicine-and-health') }}"><span class="icon-medicine"></span>
                                        Supply Medicine</a>
                                </li>
                                <li>
                                    <a href="{{ route('medicine-and-health') }}"><span class="icon-clock"></span>
                                        Health Support 24/7</a>
                                </li>
                                <li>
                                    <a href="{{ route('medicine-and-health') }}"><span class="icon-eye-examination"></span>
                                        Eye Examination</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="department-page__right">
                        <div class="department-page__main-content-box">
                            <div class="row">
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-health-professional"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Health Professional</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-x-ray"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">X-Ray Report</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-tooth"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Dental Health</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-syringe"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Proper Tretment</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-eye-drops"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Health Tretment</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-eye-examination"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Eye Examination</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-health-professional"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Health Professional</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-check-1"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Eye Check</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-medical-team"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Medical Team</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-health-professional"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Health Professional</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-x-ray"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">X-Ray Report</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-tooth"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Dental Health</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-syringe"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Proper Tretment</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-eye-drops"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Health Tretment</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                                <!--Department Page Single Start-->
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="department-page__single">
                                        <div class="department-page__icon">
                                            <span class="icon-eye-examination"></span>
                                        </div>
                                        <div class="department-page__content">
                                            <h4><a href="{{ route('medicine-and-health') }}">Eye Examination</a></h4>
                                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                laborer et dolore magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Department Page Single End-->
                            </div>
                            <div class="department-page__quality-performance">
                                <h3 class="department-page__quality-performance-title">Focused on Quality &
                                    Performance</h3>
                                <div class="row">
                                    <!--Department Page Quality Performance Single Start-->
                                    <div class="col-xl-6">
                                        <div class="department-page__quality-performance-single">
                                            <h4>Strategic Technology Appraisal</h4>
                                            <p>Strategic Technology Appraisal is the process of evaluating existing
                                                and emerging technologies to support an organization’s strategic
                                                goals.</p>
                                        </div>
                                    </div>
                                    <!--Department Page Quality Performance Single End-->
                                    <!--Department Page Quality Performance Single Start-->
                                    <div class="col-xl-6">
                                        <div class="department-page__quality-performance-single">
                                            <h4>Innovation and Research Strategy</h4>
                                            <p>Innovation and Research Strategy defines how an organization plans,
                                                manages, and invests in research and innovation to achieve
                                                competitive advantage.</p>
                                        </div>
                                    </div>
                                    <!--Department Page Quality Performance Single End-->
                                    <!--Department Page Quality Performance Single Start-->
                                    <div class="col-xl-6">
                                        <div class="department-page__quality-performance-single">
                                            <h4>We take the time you need</h4>
                                            <p>We Take the Time You Need means providing careful, personalized
                                                attention to ensure quality and accuracy without rushing.</p>
                                        </div>
                                    </div>
                                    <!--Department Page Quality Performance Single End-->
                                    <!--Department Page Quality Performance Single Start-->
                                    <div class="col-xl-6">
                                        <div class="department-page__quality-performance-single">
                                            <h4>Helping You Save Time and Money</h4>
                                            <p>Helping You Save Time and Money means providing efficient solutions
                                                that reduce effort, cut costs, and improve productivity.</p>
                                        </div>
                                    </div>
                                    <!--Department Page Quality Performance Single End-->
                                </div>
                            </div>
                            <div class="department-page__description-box">
                                <h3 class="department-page__quality-performance-title">Description</h3>
                                <div class="department-page__description">
                                    <p class="department-page__description-1">Dental care is essential for
                                        maintaining overall health and hygiene. It involves regular
                                        brushing, flossing, routine dental checkup to prevent tooth decay, gum
                                        disease,
                                        & bad breath healthy mouth not only. Dental care is essential for
                                        maintaining overall health and hygiene. It involves regular
                                        brushing, flossing, routine dental checkup to prevent tooth decay, gum
                                        disease,
                                        & bad breath healthy mouth not only.</p>
                                    <p class="department-page__description-2">we provide comprehensive eye care with
                                        a focus on precision, comfort, and long-term vision health. From routine
                                        checkups to advanced treatments, our experienced doctors are committed to
                                        helping you see the world more. we provide comprehensive eye care with a
                                        focus on precision, comfort, and long-term vision health. From routine
                                        checkups to advanced treatments, our experienced doctors are committed to
                                        helping you see the world more. we provide comprehensive eye care with a
                                        focus on precision, comfort, and long-term vision health. From routine
                                        checkups to advanced treatments, our experienced doctors are committed to
                                        helping you see the world more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Department Page End-->

@endsection
