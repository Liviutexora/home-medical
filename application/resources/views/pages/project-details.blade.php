@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Project Details' pageSubtitle='Project Details' />

    <!--Project Details Start-->
    <section class="project-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="project-details__left">
                        <div class="project-details__img">
                            <img src="{{ asset('assets/images/project/project-details-img-1.jpg') }}" alt="">
                        </div>
                        <h3 class="project-details__title-1">About The Project Overview</h3>
                        <p class="project-details__text-1">Consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut laborer et dolore magna aliqua. Out enigma ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure
                            dolor in the reprehenderit in voluptate velit esse cillum dolore eu fugiat null
                            pariatur. Excepteur snit occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.</p>
                        <h3 class="project-details__title-2">The Project Challenge</h3>
                        <p class="project-details__text-2">Out enigma ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure dolor in the
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat null pariatur. Excepteur
                            snit occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                            est laborum.</p>
                        <div class="project-details__text-and-img">
                            <p class="project-details__text-3">The wise man therefore always holds in these matters
                                to this principle of selection. He rejects pleasures to secure other greater
                                pleasures, or else he endures pains to avoid worse pains to the selection point. But
                                in certain to all this circumstances</p>
                            <div class="project-details__text-img">
                                <img src="{{ asset('assets/images/project/project-details-text-img.jpg') }}" alt="">
                            </div>
                        </div>
                        <h3 class="project-details__title-3">The Result Of Our Project</h3>
                        <p class="project-details__text-4">Out enigma ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure dolor in the
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat null pariatur. Excepteur
                            snit occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                            est laborum.</p>
                        <div class="project-details__img-and-points">
                            <div class="project-details__points-img">
                                <img src="{{ asset('assets/images/project/project-details-points-img.jpg') }}"
                                    alt="">
                            </div>
                            <ul class="project-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    <p>Fact that a reader will be distr acted bioiiy dablea </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    <p>Acted bioiiy the rea dablea content of a page </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    <p>When looking at its layout toile point</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    <p>Bioiiy the rea dablea content of a page looking</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="project-details__sidebar">
                        <div class="project-details__information">
                            <h3 class="project-details__information-title">Project Information</h3>
                            <ul class="project-details__information-list list-unstyled">
                                <li>
                                    <h4>Client :</h4>
                                    <p>Jonathan Smith</p>
                                </li>
                                <li>
                                    <h4>Category :</h4>
                                    <p>Medical Health</p>
                                </li>
                                <li>
                                    <h4>date :</h4>
                                    <p>02 June 2026</p>
                                </li>
                                <li>
                                    <h4>location :</h4>
                                    <p>12 Green Road 05 New Yark</p>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-details__previous-next">
                        <ul>
                            <li>
                                <div class="icon">
                                    <a href="#"><span class="fal fa-long-arrow-right"></span></a>
                                </div>
                                <div class="text-box">
                                    <a href="#">Previous Project</a>
                                </div>
                            </li>

                            <li>
                                <div class="text-box">
                                    <a href="#">Next Project</a>
                                </div>
                                <div class="icon">
                                    <a href="#"><span class="fal fa-long-arrow-right"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project Details End-->

@endsection
