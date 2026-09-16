@extends('layouts.default')
@section('title', 'Gastroenterologie')

@section('content')

    <x-page-header pageTitle='Gastroenterologie' pageSubtitle='Gastroenterologie' />

    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__sidebar">
                        <div class="service-details__services-box">
                            <h3 class="service-details__services-title">Servicii</h3>
                            <ul class="service-details__services-list list-unstyled">
                                <li><a href="{{ route('chirurgie-generala') }}">Chirurgie generală<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('dermatologie') }}">Dermatologie<span class="fas fa-arrow-right"></span></a></li>
                                <li class="active"><a href="{{ route('gastroenterologie') }}">Gastroenterologie<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('medicina-interna') }}">Medicină internă<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('ortopedie') }}">Ortopedie<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('orl') }}">ORL<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('pneumologie') }}">Pneumologie<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('psihiatrie') }}">Psihiatrie<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('recuperare-medicala') }}">Recuperare medicală<span class="fas fa-arrow-right"></span></a></li>
                            </ul>
                        </div>
                        <div class="service-details__get-started">
                            <h3 class="service-details__get-started-title">Începeți astăzi</h3>
                            <p class="service-details__get-started-text">Consultați medicul pentru evaluare, diagnostic și recomandări.</p>
                            <ul class="service-details__get-started-points list-unstyled">
                                <li><div class="icon"><span class="icon-phone-call"></span></div><p><a href="tel:0723716085">0723 716 085</a></p></li>
                                <li><div class="icon"><span class="icon-email"></span></div><p><a href="mailto:homemedicalvmc@gmail.com">homemedicalvmc@gmail.com</a></p></li>
                                <li><div class="icon"><span class="icon-pin"></span></div><p>Timișoara, Str. Ulpia Traiana, Nr. 27</p></li>
                            </ul>
                            <div class="service-details__get-started-btn-box">
                                <a href="{{ route('contact') }}" class="thm-btn"><span class="fas fa-arrow-right"></span>Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__left">
                        <div class="service-details__img"><img src="{{ asset('assets/images/services/service-details-img-1.jpg') }}" alt=""></div>
                        <h3 class="service-details__title-1">Gastroenterologie</h3>
                        <p class="service-details__text-1">Departamentul de gastroenterologie asigură evaluarea simptomelor digestive și gestionarea afecțiunilor tractului gastrointestinal.</p>
                        <p class="service-details__text-2">Conținutul detaliat va fi completat ulterior, iar structura paginii este deja pregătită și funcțională.</p>
                        <ul class="service-details__points-list list-unstyled">
                            <li><div class="icon"><span class="icon-check"></span></div><p>Consult gastroenterologic.</p></li>
                            <li><div class="icon"><span class="icon-check"></span></div><p>Evaluare și monitorizare.</p></li>
                            <li><div class="icon"><span class="icon-check"></span></div><p>Plan terapeutic personalizat.</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
