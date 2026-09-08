@extends('layouts.default')
@section('title', 'Blog || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Blog' pageSubtitle='Blog' />

    <!--Blog Page Start-->
    <section class="blog-one blog-page">
        <div class="blog-one__shape-2"></div>
        <div class="blog-one__shape-3"></div>
        <div class="container">
            <div class="row">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__shape-1">
                                <img src="{{ asset('assets/images/shapes/blog-one-shape-1.png') }}" alt="">
                            </div>
                            <div class="blog-one__content-inner">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-comments"></span>By Lifecure
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-calendar-alt"></span>14 Feb,2026
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Smile Brighter: Your Guide
                                        to Daily Dental Care</a></h3>
                                <div class="blog-one__btn">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">
                                        <span class="fas fa-arrow-right"></span>
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__shape-1">
                                <img src="{{ asset('assets/images/shapes/blog-one-shape-1.png') }}" alt="">
                            </div>
                            <div class="blog-one__content-inner">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-comments"></span>By Lifecure
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-calendar-alt"></span>14 Feb,2026
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Wisdom Teeth: Should You
                                        Remove Them?</a></h3>
                                <div class="blog-one__btn">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">
                                        <span class="fas fa-arrow-right"></span>
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__shape-1">
                                <img src="{{ asset('assets/images/shapes/blog-one-shape-1.png') }}" alt="">
                            </div>
                            <div class="blog-one__content-inner">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-comments"></span>By Lifecure
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-calendar-alt"></span>14 Feb,2026
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Clients Say Cheese:
                                        Exploring Cosmetic Dentistry</a></h3>
                                <div class="blog-one__btn">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">
                                        <span class="fas fa-arrow-right"></span>
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-4.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__shape-1">
                                <img src="{{ asset('assets/images/shapes/blog-one-shape-1.png') }}" alt="">
                            </div>
                            <div class="blog-one__content-inner">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-comments"></span>By Lifecure
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-calendar-alt"></span>14 Feb,2026
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Why Choosing the Right
                                        Dental Clinic</a></h3>
                                <div class="blog-one__btn">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">
                                        <span class="fas fa-arrow-right"></span>
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-5.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__shape-1">
                                <img src="{{ asset('assets/images/shapes/blog-one-shape-1.png') }}" alt="">
                            </div>
                            <div class="blog-one__content-inner">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-comments"></span>By Lifecure
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-calendar-alt"></span>14 Feb,2026
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Your Guide to a Modern
                                        Dental Clinic</a></h3>
                                <div class="blog-one__btn">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">
                                        <span class="fas fa-arrow-right"></span>
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-6.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__shape-1">
                                <img src="{{ asset('assets/images/shapes/blog-one-shape-1.png') }}" alt="">
                            </div>
                            <div class="blog-one__content-inner">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-comments"></span>By Lifecure
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}">
                                            <span class="fas fa-calendar-alt"></span>14 Feb,2026
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">The Importance of
                                        Regular
                                        Visits to a Dental Clinic</a></h3>
                                <div class="blog-one__btn">
                                    <a href="{{ route('blog-details') }}" class="thm-btn">
                                        <span class="fas fa-arrow-right"></span>
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
            </div>
        </div>
    </section>
    <!--Blog Page End-->

@endsection
