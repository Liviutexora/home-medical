@extends('layouts.default')
@section('title', 'Blog Standard || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Blog Standard' pageSubtitle='Blog Standard' />

    <!--Blog Standard Start -->
    <section class="blog-standard">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-standard__left">
                        <!--Blog Standard Single Start -->
                        <div class="blog-standard__single">
                            <div class="blog-standard__img">
                                <img src="{{ asset('assets/images/blog/blog-standard-1-1.jpg') }}" alt="">
                            </div>
                            <div class="blog-standard__content">
                                <div class="blog-standard__content-inner">
                                    <ul class="blog-standard__meta list-unstyled">
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
                                    <h3 class="blog-standard__title"><a href="{{ route('blog-details') }}">Smile Brighter:
                                            Your
                                            Guide
                                            to Daily Dental Care</a></h3>
                                    <p class="blog-standard__text">Progressively plagiarize quality metrics for
                                        impactful data. Assertively. Holisticly leverage existing magnetic
                                        functionalities. Assertively orchestrate high-quality customer service
                                        vis-a-vis intuitive interfaces. Conveniently enhance highly efficient
                                        infomediaries.</p>
                                    <div class="blog-standard__btn">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">
                                            <span class="fas fa-arrow-right"></span>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog Standard Single End -->
                        <!--Blog Standard Single Start -->
                        <div class="blog-standard__single">
                            <div class="blog-standard__img">
                                <img src="{{ asset('assets/images/blog/blog-standard-1-2.jpg') }}" alt="">
                            </div>
                            <div class="blog-standard__content">
                                <div class="blog-standard__content-inner">
                                    <ul class="blog-standard__meta list-unstyled">
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
                                    <h3 class="blog-standard__title"><a href="{{ route('blog-details') }}">The Importance of
                                            Regular Visits to a Dental Clinic</a></h3>
                                    <p class="blog-standard__text">Progressively plagiarize quality metrics for
                                        impactful data. Assertively. Holisticly leverage existing magnetic
                                        functionalities. Assertively orchestrate high-quality customer service
                                        vis-a-vis intuitive interfaces. Conveniently enhance highly efficient
                                        infomediaries.</p>
                                    <div class="blog-standard__btn">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">
                                            <span class="fas fa-arrow-right"></span>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog Standard Single End -->
                        <!--Blog Standard Single Start -->
                        <div class="blog-standard__single">
                            <div class="blog-standard__img">
                                <img src="{{ asset('assets/images/blog/blog-standard-1-3.jpg') }}" alt="">
                            </div>
                            <div class="blog-standard__content">
                                <div class="blog-standard__content-inner">
                                    <ul class="blog-standard__meta list-unstyled">
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
                                    <h3 class="blog-standard__title"><a href="{{ route('blog-details') }}">Why Choosing the
                                            Right Dental Clinic Matters for Your Smile</a></h3>
                                    <p class="blog-standard__text">Progressively plagiarize quality metrics for
                                        impactful data. Assertively. Holisticly leverage existing magnetic
                                        functionalities. Assertively orchestrate high-quality customer service
                                        vis-a-vis intuitive interfaces. Conveniently enhance highly efficient
                                        infomediaries.</p>
                                    <div class="blog-standard__btn">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">
                                            <span class="fas fa-arrow-right"></span>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog Standard Single End -->
                        <div class="blog-list__pagination">
                            <ul class="pg-pagination list-unstyled">
                                <li class="count active"><a href="#">1</a></li>
                                <li class="count"><a href="#">2</a></li>
                                <li class="count"><a href="#">3</a></li>
                                <li class="next">
                                    <a href="#" aria-label="Next"><i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Start Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__search wow fadeInUp" data-wow-delay=".1s">
                            <form action="#" class="sidebar__search-form">
                                @csrf
                                <input type="search" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--End Sidebar Single-->


                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__category wow fadeInUp" data-wow-delay=".1s">
                            <h3 class="sidebar__title">Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a href="#">Eye treatment <span>(12)</span></a></li>
                                <li class="active"><a href="#">Ophthalmology
                                        <span>(15)</span></a></li>
                                <li><a href="#">Paediatric <span>(08)</span></a></li>
                                <li><a href="#">Medical Health <span>(20)</span></a></li>
                                <li><a href="#">Dental Clinic <span>(14)</span></a></li>
                                <li><a href="#">Oral Health <span>(05)</span></a></li>
                            </ul>
                        </div>
                        <!--End Sidebar Single-->

                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__post wow fadeInUp" data-wow-delay=".1s">
                            <h3 class="sidebar__title">Recent Post</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('assets/images/blog/blog-lp-1.jpg') }}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <p class="sidebar__post-date"><span class="icon-calendar"></span>March 18,
                                            2026</p>
                                        <h3 class="sidebar__post-title"><a href="{{ route('blog-details') }}">Top Reasons
                                                to
                                                Visit a Professional Dental Clinic</a></h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('assets/images/blog/blog-lp-2.jpg') }}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <p class="sidebar__post-date"><span class="icon-calendar"></span>April 18,
                                            2026</p>
                                        <h3 class="sidebar__post-title"><a href="{{ route('blog-details') }}">The
                                                Importance
                                                of Regular Visits to a Dental Clinic</a></h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('assets/images/blog/blog-lp-3.jpg') }}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <p class="sidebar__post-date"><span class="icon-calendar"></span>Jun 18,
                                            2026</p>
                                        <h3 class="sidebar__post-title"><a href="{{ route('blog-details') }}">Your Guide
                                                to a
                                                Modern Dental Clinic</a></h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End Sidebar Single-->

                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__tags wow fadeInUp" data-wow-delay=".1s">
                            <h3 class="sidebar__title">Tags Cloud</h3>
                            <ul class="sidebar__tags-list clearfix list-unstyled">
                                <li><a href="#">Dental Service</a></li>
                                <li><a href="#">Health Care</a></li>
                                <li><a href="#">Oral Health</a></li>
                                <li><a href="#">Eye Care</a></li>
                                <li><a href="#">Eye Checkup</a></li>
                                <li><a href="#">Protect Eyes</a></li>
                                <li><a href="#">Vision Care</a></li>
                                <li><a href="#">Geometrical</a></li>
                            </ul>
                        </div>
                        <!--End Sidebar Single-->

                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
    <!--Blog Standard Start-->

@endsection
