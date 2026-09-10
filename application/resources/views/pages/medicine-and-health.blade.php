@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Medicine and Health' pageSubtitle='Medicine and Health' />

    <!--Service Details Start-->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__sidebar">
                        <div class="service-details__services-box">
                            <h3 class="service-details__services-title">Our Services</h3>
                            <ul class="service-details__services-list list-unstyled">
                                <li class="active">
                                    <a href="{{ route('medicine-and-health') }}">Medicine and Health<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('heart-specialist') }}">Heart Specialist<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('ear-nose-and-throat') }}">Eye Treatment<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('ear-nose-and-throat') }}">Ear Nose and Throat<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('general-surgery') }}">General Surgery<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('pregnancy-and-child-birth') }}">Pregnancy and Child Birth<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="service-details__get-started">
                            <h3 class="service-details__get-started-title">Get Started Today</h3>
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
                                    <span class="fas fa-arrow-right"></span>get in touch
                                </a>
                            </div>
                        </div>
                        <div class="service-details__sidebar-download-box">
                            <h3 class="service-details__services-title">Download</h3>
                            <div class="service-details__sidebar-single-download">

                                <ul class="clearfix list-unstyled">
                                    <li>
                                        <div class="content-box">
                                            <div class="icon">
                                                <span class="far fa-file-pdf"></span>
                                            </div>
                                            <div class="text-box">
                                                <h5><a href="#">Pdf Download</a></h5>
                                                <p><a href="#">Download</a></p>
                                            </div>
                                        </div>

                                        <div class="btn-box">
                                            <a href="#"><span class="far fa-cloud-download"></span></a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="content-box">
                                            <div class="icon">
                                                <span class="far fa-file-pdf"></span>
                                            </div>
                                            <div class="text-box">
                                                <h5><a href="#">Pdf Download</a></h5>
                                                <p><a href="#">Download</a></p>
                                            </div>
                                        </div>

                                        <div class="btn-box">
                                            <a href="#"><span class="far fa-cloud-download"></span></a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="content-box">
                                            <div class="icon">
                                                <span class="far fa-file-pdf"></span>
                                            </div>
                                            <div class="text-box">
                                                <h5><a href="#">Pdf Download</a></h5>
                                                <p><a href="#">Download</a></p>
                                            </div>
                                        </div>

                                        <div class="btn-box">
                                            <a href="#"><span class="far fa-cloud-download"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__left">
                        <div class="service-details__img">
                            <img src="{{ asset('assets/images/medical-general/brand/brand-1-1.png') }}" alt="">
                        </div>
                        <h3 class="service-details__title-1">Medicine and Health</h3>
                        <p class="service-details__text-1">Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa</p>
                        <p class="service-details__text-2">Consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut laborer et dolore magna aliqua. Out enigma ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure
                            dolor in the reprehenderit in voluptate velit esse cillum dolore eu fugiat null
                            pariatur. Excepteur snit occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.</p>
                        <ul class="service-details__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <p>It is a long established fact that a reader will be distr acted bioiiy the rea
                                    dablea </p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <p>Distr acted bioiiy the rea dablea content of a page when looking at its layout
                                </p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <p>Content of a page when looking at its layout toile point</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <p>Reader will be distr acted bioiiy the rea dablea content of a page when looking
                                </p>
                            </li>
                        </ul>
                        <div class="service-details__img-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        <div class="service-details__img-box-img">
                                            <img src="{{ asset('assets/images/medical-general/brand/client-photos/blog-3-2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-hydrotherapy"></span>
                                                </div>
                                                <h3 class="service-details__img-box-content-title">Quality Full Work
                                                </h3>
                                            </div>
                                            <p class="service-details__img-box-content-text">Duis acute arura dolor
                                                in
                                                reprehenderit in voluptate velit esse cillum dolore Velit esse quam
                                                nihil molestiae thos consequatur, Velia ease chillum dolore</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        <div class="service-details__img-box-img">
                                            <img src="{{ asset('assets/images/medical-general/brand/client-photos/15.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-customer-review"></span>
                                                </div>
                                                <h3 class="service-details__img-box-content-title">100% Work
                                                    Satisfication</h3>
                                            </div>
                                            <p class="service-details__img-box-content-text">Duis acute arura dolor
                                                in
                                                reprehenderit in voluptate velit esse cillum dolore Velit esse quam
                                                nihil molestiae thos consequatur, Velia ease chillum dolore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-details__faq-box">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How long should a business plan be</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>From personalized solutions to expert execution, we prioritize
                                                quality,
                                                reliability, and customer satisfaction in everything we do. Let us
                                                be
                                                your trusted partner in achieving success.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>Do I need a business plan?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>From personalized solutions to expert execution, we prioritize
                                                quality,
                                                reliability, and customer satisfaction in everything we do. Let us
                                                be
                                                your trusted partner in achieving success.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How to Soft Launch Your Business?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>From personalized solutions to expert execution, we prioritize
                                                quality,
                                                reliability, and customer satisfaction in everything we do. Let us
                                                be
                                                your trusted partner in achieving success.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How Can I Find My Solution?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>From personalized solutions to expert execution, we prioritize
                                                quality,
                                                reliability, and customer satisfaction in everything we do. Let us
                                                be
                                                your trusted partner in achieving success.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->

@endsection
