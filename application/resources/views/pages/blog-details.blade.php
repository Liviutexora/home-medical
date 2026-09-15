@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Blog Details' pageSubtitle='Blog Details' />

    <!--Blog Details Start -->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="{{ asset('assets/images/blog/blog-details-img-1.jpg') }}" alt="">
                            <div class="blog-details__date">
                                <p>12<br>Nov</p>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            <div class="blog-details__user-and-meta">
                                <div class="blog-details__user">
                                    <p><span class="fas fa-user"></span>By Admin</p>
                                </div>
                                <ul class="blog-details__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="fas fa-comments"></span>Comments (05)</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fas fa-clock"></span>4 Min Read</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="blog-details__title">Why Choosing the Right Dental Clinic Matters for Your
                                Smile
                            </h3>
                            <p class="blog-details__text-1">Out enigma ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure dolor in
                                the reprehenderit in voluptate velit esse cillum dolore eu fugiat null pariatur.
                                Excepteur snit occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                            <p class="blog-details__text-2">The wise man therefore always holds in these matters to
                                this principle of selection. He rejects pleasures to secure other greater pleasures,
                                or else he endures pains to avoid worse pains to the selection point.</p>
                            <div class="blog-details__author-box">
                                <h4 class="blog-details__author-text">“Globally cultivate ubiquitous growth
                                    strategies before team building users. Dramatically transform effective internal
                                    or "organic" sources for sound e-services. Authoritatively harness
                                    performance based customer service via intermandated”</h4>
                                <p class="blog-details__author-name">Kane Williamson<span> / CEO</span></p>
                            </div>
                            <h3 class="blog-details__title-2">The Importance of Regular Visits to a Dental Clinic
                            </h3>
                            <p class="blog-details__text-3">Out enigma ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure dolor in
                                the reprehenderit in voluptate velit esse cillum dolore eu fugiat null pariatur.
                                Excepteur snit occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                            <div class="blog-details__img-box">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="blog-details__img-box-img">
                                            <img src="{{ asset('assets/images/blog/blog-details-img-box-img-1.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="blog-details__img-box-img">
                                            <img src="{{ asset('assets/images/blog/blog-details-img-box-img-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details__tag-and-share">
                                <div class="blog-details__tag">
                                    <h3 class="blog-details__tag-title">Tags :</h3>
                                    <ul class="blog-details__tag-list list-unstyled">
                                        <li>
                                            <a href="#">Eye Care</a>
                                        </li>
                                        <li>
                                            <a href="#">Health</a>
                                        </li>
                                        <li>
                                            <a href="#">Management</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-details__share-box">
                                    <h3 class="blog-details__share-title">Share :</h3>
                                    <div class="blog-details__share">
                                        <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="icon-facebook-app-symbol"></span></a>
                    <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-one">
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('assets/images/blog/comment-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Theresa Webb</h3>
                                        <span>02 June 2026 at 03:30 pm</span>
                                        <p>The wise man therefore always holds in these matters to this principle of
                                            selection. He rejects pleasures to secure other greater pleasures, or
                                            else he endures pains to avoid worse pains to the selection point. But
                                            in certain to all this circumstances</p>
                                        <div class="comment-one__btn-box">
                                            <a href="{{ route('blog-details') }}" class="thm-btn">Reply<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('assets/images/blog/comment-1-2.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Cameron Williamson</h3>
                                        <span>02 June 2026 at 03:30 pm</span>
                                        <p>The wise man therefore always holds in these matters to this principle of
                                            selection. He rejects pleasures to secure other greater pleasures, or
                                            else he endures pains to avoid worse pains to the selection point. But
                                            in certain to all this circumstances</p>
                                        <div class="comment-one__btn-box">
                                            <a href="{{ route('blog-details') }}" class="thm-btn">Reply<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave A Reply</h3>
                                <p class="comment-form__text">By using form u agree with the message sorage, you can
                                    contact us directly now</p>
                                <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                    method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Your Email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write your Message"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">
                                                    <span class="fas fa-arrow-right"></span>
                                                    submit now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result"></div>
                                </form>
                            </div>
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
    <!--Blog Details Start-->

@endsection
