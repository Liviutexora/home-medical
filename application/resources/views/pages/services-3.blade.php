@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Servicii Medicale' pageSubtitle='Servicii Medicale' />

    <!-- Service Page Three Start -->
    <section class="services-three service-page-three">
        <div class="container">
            <div class="row">
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single" data-link="{{ route('chirurgie-generala') }}">
                        <div class="services-three__icon">
                            <span class="icon-first-aid-kit"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Chirurgie</p>
                                <h3 class="services-three__title"><a href="{{ route('chirurgie-generala') }}">Chirurgie Generală</a></h3>
                                <p class="services-three__text">Acest departament oferă evaluare clinică și management chirurgical, cu respectarea protocoalelor și a standardelor de siguranță.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single" data-link="{{ route('dermatologie') }}">
                        <div class="services-three__icon">
                            <span class="icon-dermatology"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Piele</p>
                                <h3 class="services-three__title"><a href="{{ route('dermatologie') }}">Dermatologie</a></h3>
                                <p class="services-three__text">Departamentul de dermatologie oferă evaluare pentru afecțiuni ale pielii, părului și unghiilor, cu soluții adaptate fiecărei situații.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single" data-link="{{ route('gastroenterologie') }}">
                        <div class="services-three__icon">
                            <span class="icon-medicine"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Digestiv</p>
                                <h3 class="services-three__title"><a href="{{ route('gastroenterologie') }}">Gastroenterologie</a></h3>
                                <p class="services-three__text">Departamentul de gastroenterologie asigură evaluarea simptomelor digestive și gestionarea afecțiunilor tractului gastrointestinal.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single" data-link="{{ route('medicina-interna') }}">
                        <div class="services-three__icon">
                            <span class="icon-heart"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Medicină internă</p>
                                <h3 class="services-three__title"><a href="{{ route('medicina-interna') }}">Medicină Internă</a></h3>
                                <p class="services-three__text">Departamentul de medicină internă este dedicat evaluării și gestionării afecțiunilor generale, cu accent pe prevenție, diagnostic și tratament.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single" data-link="{{ route('ortopedie') }}">
                        <div class="services-three__icon">
                            <span class="icon-orthopaedics"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Aparat locomotor</p>
                                <h3 class="services-three__title"><a href="{{ route('ortopedie') }}">Ortopedie</a></h3>
                                <p class="services-three__text">Departamentul de ortopedie abordează evaluarea și gestionarea problemelor musculo-scheletale, cu focus pe mobilitate și funcție.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single" data-link="{{ route('orl') }}">
                        <div class="services-three__icon">
                            <span class="icon-medical-team"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">ORL</p>
                                <h3 class="services-three__title"><a href="{{ route('orl') }}">ORL</a></h3>
                                <p class="services-three__text">Departamentul ORL tratează afecțiuni ale urechii, nasului, gâtului și căilor respiratorii superioare.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single" data-link="{{ route('pneumologie') }}">
                        <div class="services-three__icon">
                            <span class="icon-heart-rate"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Respirație</p>
                                <h3 class="services-three__title"><a href="{{ route('pneumologie') }}">Pneumologie</a></h3>
                                <p class="services-three__text">Departamentul de pneumologie se ocupă cu evaluarea și tratamentul afecțiunilor respiratorii, inclusiv a celor cronice.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single" data-link="{{ route('psihiatrie') }}">
                        <div class="services-three__icon">
                            <span class="icon-brain"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Sănătate mintală</p>
                                <h3 class="services-three__title"><a href="{{ route('psihiatrie') }}">Psihiatrie</a></h3>
                                <p class="services-three__text">Departamentul de psihiatrie asigură evaluarea și îndrumarea pentru tulburările mentale și emoționale.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-three__single" data-link="{{ route('recuperare-medicala') }}">
                        <div class="services-three__icon">
                            <span class="icon-physical-therapy"></span>
                        </div>
                        <div class="services-three__single-inner">
                            <div class="services-three__shape-1">
                                <img src="{{ asset('assets/images/shapes/services-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-three__count"></div>
                            <div class="services-three__content">
                                <p class="services-three__sub-title">Recuperare</p>
                                <h3 class="services-three__title"><a href="{{ route('recuperare-medicala') }}">Recuperare Medicală</a></h3>
                                <p class="services-three__text">Departamentul de recuperare medicală are rolul de a sprijini refacerea funcțională și revenirea la o stare optimă de sănătate.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
            </div>
        </div>
    </section>
    <!-- Service Page Three End -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.services-three__single[data-link]').forEach(function (card) {
                card.style.cursor = 'pointer';
                card.setAttribute('role', 'link');
                card.tabIndex = 0;

                card.addEventListener('click', function () {
                    window.location.href = card.dataset.link;
                });

                card.addEventListener('keydown', function (event) {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        window.location.href = card.dataset.link;
                    }
                });
            });
        });
    </script>

@endsection
