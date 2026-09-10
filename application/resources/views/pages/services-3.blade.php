@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Service Health Care' pageSubtitle='Service Health Care' />

    <!-- Service Page Three Start -->
    <section class="services-three service-page-three">
        <div class="container">
            <div class="row">
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-orthopaedics"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Fitness</p>
                                <h3 class="services-three__title"><a
                                        href="{{ route('medicine-and-health') }}">Orthopaedics</a></h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-heart"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Health</p>
                                <h3 class="services-three__title"><a
                                        href="{{ route('medicine-and-health') }}">Cardiology</a>
                                </h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-intensive-care-unit"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Vitality</p>
                                <h3 class="services-three__title"><a href="{{ route('ear-nose-and-throat') }}">Intensive
                                        Care</a></h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-maternity"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Health</p>
                                <h3 class="services-three__title"><a href="{{ route('medicine-and-health') }}">maternity</a>
                                </h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-neurology"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">care</p>
                                <h3 class="services-three__title"><a href="{{ route('ear-nose-and-throat') }}">Orthopedics</a>
                                </h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-medicine"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Strength</p>
                                <h3 class="services-three__title"><a href="{{ route('ear-nose-and-throat') }}">dental-care</a>
                                </h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-heart"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Health</p>
                                <h3 class="services-three__title"><a
                                        href="{{ route('pregnancy-and-child-birth') }}">Cardiology</a></h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-intensive-care-unit"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Vitality</p>
                                <h3 class="services-three__title"><a href="{{ route('general-surgery') }}">Intensive
                                        Care</a>
                                </h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-orthopaedics"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Fitness</p>
                                <h3 class="services-three__title"><a
                                        href="{{ route('ear-nose-and-throat') }}">Orthopaedics</a></h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-neurology"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">care</p>
                                <h3 class="services-three__title"><a href="{{ route('ear-nose-and-throat') }}">Orthopedics</a>
                                </h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-medicine"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Strength</p>
                                <h3 class="services-three__title"><a
                                        href="{{ route('medicine-and-health') }}">dental-care</a>
                                </h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-maternity"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Health</p>
                                <h3 class="services-three__title"><a href="{{ route('heart-specialist') }}">maternity</a>
                                </h3>
                                <p class="services-three__text">we offer a wide range of medical services designed
                                    to meet the needs of patients at every stage of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
            </div>
        </div>
    </section>
    <!-- Service Page Three End -->

@endsection
