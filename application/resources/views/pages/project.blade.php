@extends('layouts.default')
@section('title', 'Project || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Project' pageSubtitle='Project' />

    <!-- Project Page One Start -->
    <section class="project-page-one">
        <div class="container">
            <div class="project-page-one__filter-box">
                <ul class="project-page-one__filter project-page-one-filter post-filter list-unstyled clearfix">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All Departments</span>
                    </li>
                    <li data-filter=".dental"><span class="filter-text">Dental Care</span></li>
                    <li data-filter=".eye"><span class="filter-text">Eye Care</span></li>
                    <li data-filter=".health"><span class="filter-text">Health Care</span></li>
                </ul>
            </div>
            <div class="row filter-layout">
                <!--Start Gallery One Single-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item dental">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img">
                            <img src="{{ asset('assets/images/project/project-page-v1__img3.jpg') }}" alt="Image">
                            <div class="gallery-one__content">
                                <h4 class="gallery-one__title">
                                    <a href="{{ route('project-details') }}">
                                        Tooth-colored fillings
                                    </a>
                                </h4>
                                <p class="gallery-one__sub-title">Mediplace dental care</p>
                            </div>
                            <div class="gallery-one__single-icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/project-page-v1__img1.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->
                <!--Start Gallery One Single-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item eye">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img">
                            <img src="{{ asset('assets/images/project/project-page-v1__img4.jpg') }}" alt="Image">
                            <div class="gallery-one__content">
                                <h4 class="gallery-one__title">
                                    <a href="{{ route('project-details') }}">
                                        Tooth-colored fillings
                                    </a>
                                </h4>
                                <p class="gallery-one__sub-title">Mediplace dental care</p>
                            </div>
                            <div class="gallery-one__single-icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/project-page-v1__img4.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->
                <!--Start Gallery One Single-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item health">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img">
                            <img src="{{ asset('assets/images/project/project-page-v1__img9.jpg') }}" alt="Image">
                            <div class="gallery-one__content">
                                <h4 class="gallery-one__title">
                                    <a href="{{ route('project-details') }}">
                                        Tooth-colored fillings
                                    </a>
                                </h4>
                                <p class="gallery-one__sub-title">Mediplace dental care</p>
                            </div>
                            <div class="gallery-one__single-icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/project-page-v1__img9.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->
                <!--Start Gallery One Single-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item eye">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img">
                            <img src="{{ asset('assets/images/project/project-page-v1__img5.jpg') }}" alt="Image">
                            <div class="gallery-one__content">
                                <h4 class="gallery-one__title">
                                    <a href="{{ route('project-details') }}">
                                        Tooth-colored fillings
                                    </a>
                                </h4>
                                <p class="gallery-one__sub-title">Mediplace dental care</p>
                            </div>
                            <div class="gallery-one__single-icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/project-page-v1__img5.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->
                <!--Start Gallery One Single-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item health">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img">
                            <img src="{{ asset('assets/images/project/project-page-v1__img7.jpg') }}" alt="Image">
                            <div class="gallery-one__content">
                                <h4 class="gallery-one__title">
                                    <a href="{{ route('project-details') }}">
                                        Tooth-colored fillings
                                    </a>
                                </h4>
                                <p class="gallery-one__sub-title">Mediplace dental care</p>
                            </div>
                            <div class="gallery-one__single-icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/project-page-v1__img7.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->
                <!--Start Gallery One Single-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item dental">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img">
                            <img src="{{ asset('assets/images/project/project-page-v1__img2.jpg') }}" alt="Image">
                            <div class="gallery-one__content">
                                <h4 class="gallery-one__title">
                                    <a href="{{ route('project-details') }}">
                                        Tooth-colored fillings
                                    </a>
                                </h4>
                                <p class="gallery-one__sub-title">Mediplace dental care</p>
                            </div>
                            <div class="gallery-one__single-icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/project-page-v1__img2.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->
                <!--Start Gallery One Single-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item dental">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img">
                            <img src="{{ asset('assets/images/project/project-page-v1__img1.jpg') }}" alt="Image">
                            <div class="gallery-one__content">
                                <h4 class="gallery-one__title">
                                    <a href="{{ route('project-details') }}">
                                        Tooth-colored fillings
                                    </a>
                                </h4>
                                <p class="gallery-one__sub-title">Mediplace dental care</p>
                            </div>
                            <div class="gallery-one__single-icon">
                                <a class="img-popup"
                                    href="{{ asset('assets/images/project/project-page-v1__img1.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->
                <!--Start Gallery One Single-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item eye">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img">
                            <img src="{{ asset('assets/images/project/project-page-v1__img6.jpg') }}" alt="Image">
                            <div class="gallery-one__content">
                                <h4 class="gallery-one__title">
                                    <a href="{{ route('project-details') }}">
                                        Tooth-colored fillings
                                    </a>
                                </h4>
                                <p class="gallery-one__sub-title">Mediplace dental care</p>
                            </div>
                            <div class="gallery-one__single-icon">
                                <a class="img-popup"
                                    href="{{ asset('assets/images/project/project-page-v1__img6.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->
                <!--Start Gallery One Single-->
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item health">
                    <div class="gallery-one__single">
                        <div class="gallery-one__single-img">
                            <img src="{{ asset('assets/images/project/project-page-v1__img8.jpg') }}" alt="Image">
                            <div class="gallery-one__content">
                                <h4 class="gallery-one__title">
                                    <a href="{{ route('project-details') }}">
                                        Tooth-colored fillings
                                    </a>
                                </h4>
                                <p class="gallery-one__sub-title">Mediplace dental care</p>
                            </div>
                            <div class="gallery-one__single-icon">
                                <a class="img-popup"
                                    href="{{ asset('assets/images/project/project-page-v1__img8.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Gallery One Single-->
            </div>
        </div>
    </section>
    <!-- Project Page One End -->

@endsection
