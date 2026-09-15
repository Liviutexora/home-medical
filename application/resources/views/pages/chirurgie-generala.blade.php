@extends('layouts.default')
@section('title', 'Chirurgie generală')

@section('content')

    <x-page-header pageTitle='Chirurgie generală' pageSubtitle='Chirurgie generală' />

    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__sidebar">
                        <div class="service-details__services-box">
                            <h3 class="service-details__services-title">Servicii</h3>
                            <ul class="service-details__services-list list-unstyled">
                                <li class="active">
                                    <a href="{{ route('chirurgie-generala') }}">Chirurgie generală<span class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('dermatologie') }}">Dermatologie<span class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('gastroenterologie') }}">Gastroenterologie<span class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('medicina-interna') }}">Medicină internă<span class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('ortopedie') }}">Ortopedie<span class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('orl') }}">ORL<span class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('pneumologie') }}">Pneumologie<span class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('psihiatrie') }}">Psihiatrie<span class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('recuperare-medicala') }}">Recuperare medicală<span class="fas fa-arrow-right"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="service-details__get-started">
                            <h3 class="service-details__get-started-title">Începeți astăzi</h3>
                            <p class="service-details__get-started-text">Consultați departamentul nostru pentru evaluare, diagnostic și plan de tratament.</p>
                            <ul class="service-details__get-started-points list-unstyled">
                                <li>
                                    <div class="icon"><span class="icon-phone-call"></span></div>
                                    <p><a href="tel:+40213123456">+40 213 123 456</a></p>
                                </li>
                                <li>
                                    <div class="icon"><span class="icon-email"></span></div>
                                    <p><a href="mailto:contact@home-medical.ro">contact@home-medical.ro</a></p>
                                </li>
                                <li>
                                    <div class="icon"><span class="icon-pin"></span></div>
                                    <p>Str. Clinicii, Nr. 1,<br> București</p>
                                </li>
                            </ul>
                            <div class="service-details__get-started-btn-box">
                                <a href="{{ route('contact') }}" class="thm-btn"><span class="fas fa-arrow-right"></span>Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__left">
                        <div class="service-details__img">
                            <img src="{{ asset('assets/images/services/service-details-img-1.jpg') }}" alt="">
                        </div>
                        <h3 class="service-details__title-1">Chirurgie generală</h3>
                        <p class="service-details__text-1">Acest departament oferă evaluare clinică și management chirurgical, cu respectarea protocoalelor și a standardelor de siguranță.</p>
                        <p class="service-details__text-2">Structura detaliată va fi adaptată ulterior, însă pagina de detalii este deja creată și funcțională pentru acest departament.</p>
                        <ul class="service-details__points-list list-unstyled">
                            <li><div class="icon"><span class="icon-check"></span></div><p>Evaluare inițială și diagnostic.</p></li>
                            <li><div class="icon"><span class="icon-check"></span></div><p>Plan de tratament individualizat.</p></li>
                            <li><div class="icon"><span class="icon-check"></span></div><p>Monitorizare și îndrumare medicală.</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
