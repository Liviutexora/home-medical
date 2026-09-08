@extends('layouts.default')
@section('title', 'Our Doctors || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Our Doctors' pageSubtitle='Our Doctors' />

    <!-- Team Page Start -->
    <section class="team-page">
        <div class="container">
            <div class="team-page__filter-box">
                <ul class="team-page__filter team-page-one post-filter list-unstyled clearfix">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All Departments</span>
                    </li>
                    <li data-filter=".dental"><span class="filter-text">Dental</span></li>
                    <li data-filter=".traumatology"><span class="filter-text">Traumatology</span></li>
                    <li data-filter=".pediatric"><span class="filter-text">Pediatric</span></li>
                    <li data-filter=".neurology"><span class="filter-text">Neurology</span></li>
                </ul>
            </div>
            <div class="row filter-layout">
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item dental">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/3.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Dental</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Sabrina Exe</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item traumatology">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/7.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Traumatology</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Zubair Hasan</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item neurology">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/8.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Neurology</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Nusrat Jenny</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item pediatric">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/9.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Pediatric</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Zubair Hasan</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item traumatology">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/10.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Traumatology</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Zubair Hasan</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item dental">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/3.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Dental</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Sabrina Exe</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item pediatric">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/7.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Pediatric</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Zubair Hasan</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item neurology">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/8.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Neurology</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Nusrat Jenny</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item dental">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/9.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Dental</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Nusrat Jenny</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item neurology">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/10.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Neurology</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Zubair Hasan</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item traumatology">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/3.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Traumatology</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Sabrina Exe</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item pediatric">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/7.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Pediatric</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Zubair Hasan</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item traumatology">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/8.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Traumatology</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Zubair Hasan</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item dental">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/9.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Dental</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Sabrina Exe</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item pediatric">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/7.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Pediatric</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Zubair Hasan</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item neurology">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/medical-general/brand/client-photos/3.jpg') }}" alt="Image">
                            </div>
                            <div class="team-two__arrow-and-social">
                                <div class="team-two__arrow">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <ul class="team-two__social list-unstyled">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__designation">Neurology</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details') }}">Dr. Nusrat Jenny</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
            </div>
        </div>
    </section>
    <!-- Team Page End -->

@endsection
