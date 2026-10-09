@extends('layouts.default')
@section('title', 'Medicină internă')

@section('content')

    <x-page-header pageTitle='Medicină internă' pageSubtitle='Medicină internă' />

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
                                <li><a href="{{ route('gastroenterologie') }}">Gastroenterologie<span class="fas fa-arrow-right"></span></a></li>
                                <li class="active"><a href="{{ route('medicina-interna') }}">Medicină internă<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('ortopedie') }}">Ortopedie<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('orl') }}">ORL<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('pneumologie') }}">Pneumologie<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('psihiatrie') }}">Psihiatrie<span class="fas fa-arrow-right"></span></a></li>
                                <li><a href="{{ route('recuperare-medicala') }}">Recuperare medicală<span class="fas fa-arrow-right"></span></a></li>
                            </ul>
                        </div>
                        <div class="service-details__get-started">
                            <h3 class="service-details__get-started-title">Începeți astăzi</h3>
                            <p class="service-details__get-started-text">Programați o evaluare pentru stabilirea unui plan de îngrijire adecvat.</p>
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
                        <div class="service-details__img"><img src="{{ asset('assets/images/HM-servicii/8.jpg') }}" alt=""></div>
                        <h3 class="service-details__title-1">Medicină internă</h3>
                        <p class="service-details__text-1">Departamentul de medicină internă este dedicat evaluării și gestionării afecțiunilor generale, cu accent pe prevenție, diagnostic și tratament.</p>
                        <p class="service-details__text-2">Medicina internă oferă o abordare complexă a stării generale de sănătate și a afecțiunilor organelor interne. Evaluarea clinică integrată permite o perspectivă de ansamblu asupra pacientului și contribuie la stabilirea unei conduite medicale personalizate.</p>
                        <ul class="service-details__points-list list-unstyled">
                            <li><div class="icon"><span class="icon-check"></span></div><p>Consult internist.</p></li>
                            <li><div class="icon"><span class="icon-check"></span></div><p>Diagnostic și monitorizare.</p></li>
                            <li><div class="icon"><span class="icon-check"></span></div><p>Recomandări personalizate.</p></li>
                        </ul>
                        @php
                            $departmentDoctors = [
                                ['slug' => 'oniciu-marciana-alexandra', 'name' => 'Oniciu Marciana Alexandra', 'specialization' => 'Medicină internă', 'image' => '11111.jpg'],
                                ['slug' => 'ilin-simona-ramona', 'name' => 'Ilin Simona Ramona', 'specialization' => 'Medicină internă', 'image' => '88888.jpg'],
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
