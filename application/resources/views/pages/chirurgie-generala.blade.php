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
                                    <p><a href="tel:0723716085">0723 716 085</a></p>
                                </li>
                                <li>
                                    <div class="icon"><span class="icon-email"></span></div>
                                    <p><a href="mailto:homemedicalvmc@gmail.com">homemedicalvmc@gmail.com</a></p>
                                </li>
                                <li>
                                    <div class="icon"><span class="icon-pin"></span></div>
                                    <p>Timișoara, Str. Ulpia Traiana, Nr. 27</p>
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
                            <img src="{{ asset('assets/images/HM-servicii/1.jpg') }}" alt="">
                        </div>
                        <h3 class="service-details__title-1">Chirurgie generală</h3>
                        <p class="service-details__text-1">Acest departament oferă evaluare clinică și management chirurgical, cu respectarea protocoalelor și a standardelor de siguranță.</p>
                        <p class="service-details__text-2">Chirurgia generală oferă evaluare clinică și orientare medicală pentru afecțiunile care necesită o abordare chirurgicală. Fiecare pacient beneficiază de o evaluare individualizată, în funcție de particularitățile și necesitățile sale medicale.</p>
                        <ul class="service-details__points-list list-unstyled">
                            <li><div class="icon"><span class="icon-check"></span></div><p>Evaluare inițială și diagnostic.</p></li>
                            <li><div class="icon"><span class="icon-check"></span></div><p>Plan de tratament individualizat.</p></li>
                            <li><div class="icon"><span class="icon-check"></span></div><p>Monitorizare și îndrumare medicală.</p></li>
                        </ul>
                        @php
                            $departmentDoctors = [
                                ['slug' => 'dandea-cristina', 'name' => 'Dandea Cristina', 'specialization' => 'Chirurgie generală', 'image' => '99999.jpg'],
                                ['slug' => 'marginean-andrei', 'name' => 'Mărginean Andrei', 'specialization' => 'Chirurgie generală', 'image' => '1333333.jpg'],
                            ];
                        @endphp
                        <div class="service-details__team" style="margin-top: 3rem;">
                            <h3 class="service-details__title-1" style="margin-bottom: 1.5rem;">Medici din acest departament</h3>
                            <div class="row">
                                @foreach($departmentDoctors as $doctor)
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="team-two__single">
                                            <div class="team-two__img-box">
                                                <div class="team-two__img">
                                                    <img src="{{ asset('assets/images/Galerie-HM/' . $doctor['image']) }}" alt="{{ $doctor['name'] }}">
                                                </div>
                                                <div class="team-two__arrow-and-social">
                                                    <div class="team-two__arrow">
                                                        <span class="fas fa-share-alt"></span>
                                                    </div>
                                                    <ul class="team-two__social list-unstyled">
                                                        <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                                        <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="team-two__content">
                                                <p class="team-two__designation">{{ $doctor['specialization'] }}</p>
                                                <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => $doctor['slug']]) }}">{{ $doctor['name'] }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.team-two__single').forEach(function (card) {
                var link = card.querySelector('.team-two__name a');

                if (!link) {
                    return;
                }

                card.dataset.link = link.href;
                card.style.cursor = 'pointer';
                card.setAttribute('role', 'link');
                card.tabIndex = 0;

                card.addEventListener('click', function (event) {
                    if (event.target.closest('a')) {
                        return;
                    }

                    window.location.href = card.dataset.link;
                });

                card.addEventListener('keydown', function (event) {
                    if ((event.key === 'Enter' || event.key === ' ') && !event.target.closest('a')) {
                        event.preventDefault();
                        window.location.href = card.dataset.link;
                    }
                });
            });
        });
    </script>

@endsection
