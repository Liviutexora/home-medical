@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Echipa Medicală' pageSubtitle='Echipa Medicală' />

    <!-- Team Page Start -->
    <section class="team-page">
        <div class="container">
            <div class="team-page__filter-box">
                <div class="team-page__filter-wrapper">
                    <button type="button" class="team-page__filter-arrow team-page__filter-arrow--prev" aria-label="Previous departments">
                        <span class="fa fa-angle-left"></span>
                    </button>
                    <div class="team-page__filter-scroll">
                        <ul class="team-page__filter team-page-one post-filter list-unstyled clearfix">
                            <li data-filter=".filter-item" class="active"><span class="filter-text">Toate departamentele</span></li>
                            <li data-filter=".chirurgie-generala"><span class="filter-text">Chirurgie generală</span></li>
                            <li data-filter=".dermatologie"><span class="filter-text">Dermatologie</span></li>
                            <li data-filter=".gastroenterologie"><span class="filter-text">Gastroenterologie</span></li>
                            <li data-filter=".medicina-interna"><span class="filter-text">Medicină internă</span></li>
                            <li data-filter=".ortopedie"><span class="filter-text">Ortopedie</span></li>
                            <li data-filter=".orl"><span class="filter-text">ORL</span></li>
                            <li data-filter=".pneumologie"><span class="filter-text">Pneumologie</span></li>
                            <li data-filter=".psihiatrie"><span class="filter-text">Psihiatrie</span></li>
                            <li data-filter=".recuperare-medicala"><span class="filter-text">Recuperare medicală</span></li>
                        </ul>
                    </div>
                    <button type="button" class="team-page__filter-arrow team-page__filter-arrow--next" aria-label="Next departments">
                        <span class="fa fa-angle-right"></span>
                    </button>
                </div>
            </div>
            <div class="row filter-layout">
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item medicina-interna">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-1.jpg') }}" alt="Oniciu Marciana Alexandra">
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
                            <p class="team-two__designation">Medicină internă</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'oniciu-marciana-alexandra']) }}">Oniciu Marciana Alexandra</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item orl">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-2.jpg') }}" alt="Dumitru Cristina Ștefania">
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
                            <p class="team-two__designation">ORL</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'dumitru-cristina-stefania']) }}">Dumitru Cristina Ștefania</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item dermatologie">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-3.jpg') }}" alt="Agajani Heshmatollah">
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
                            <p class="team-two__designation">Dermatologie</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'agajani-heshmatollah']) }}">Agajani Heshmatollah</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item psihiatrie">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-4.jpg') }}" alt="Ciobanu Andra Vera Livia">
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
                            <p class="team-two__designation">Psihiatrie</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'ciobanu-andra-vera-livia']) }}">Ciobanu Andra Vera Livia</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item pneumologie">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-1.jpg') }}" alt="Buță Marius Cătălin">
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
                            <p class="team-two__designation">Pneumologie</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'buta-marius-catalin']) }}">Buță Marius Cătălin</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item gastroenterologie">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-2.jpg') }}" alt="Abdel Majid Damra">
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
                            <p class="team-two__designation">Gastroenterologie</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'abdel-majid-damra']) }}">Abdel Majid Damra</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item recuperare-medicala">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-3.jpg') }}" alt="Țălan Claudia Loredana">
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
                            <p class="team-two__designation">Recuperare medicală</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'talan-claudia-loredana']) }}">Țălan Claudia Loredana</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item medicina-interna">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-4.jpg') }}" alt="Ilin Simona Ramona">
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
                            <p class="team-two__designation">Medicină internă</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'ilin-simona-ramona']) }}">Ilin Simona Ramona</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item chirurgie-generala">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-1.jpg') }}" alt="Dandea Cristina">
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
                            <p class="team-two__designation">Chirurgie generală</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'dandea-cristina']) }}">Dandea Cristina</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item gastroenterologie">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-2.jpg') }}" alt="Burdan Ghiță Adrian">
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
                            <p class="team-two__designation">Gastroenterologie</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'burdan-ghita-adrian']) }}">Burdan Ghiță Adrian</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item ortopedie">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-3.jpg') }}" alt="Drira Ouassim">
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
                            <p class="team-two__designation">Ortopedie</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'drira-ouassim']) }}">Drira Ouassim</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item ortopedie">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-4.jpg') }}" alt="Mușat Ionuț Marian">
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
                            <p class="team-two__designation">Ortopedie</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'musat-ionut-marian']) }}">Mușat Ionuț Marian</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->
                <!--Team Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item chirurgie-generala">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-page-v1-1.jpg') }}" alt="Mărginean Andrei">
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
                            <p class="team-two__designation">Chirurgie generală</p>
                            <h3 class="team-two__name"><a href="{{ route('our-doctors-details', ['slug' => 'marginean-andrei']) }}">Mărginean Andrei</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End -->

                {{--
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                {{--
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                                    <li><a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="18" height="18" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a></li>
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
                --}}
                --}}
            </div>
        </div>
    </section>
    <!-- Team Page End -->

    <style>
        .team-page__filter-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .team-page__filter-scroll {
            position: relative;
            flex: 1 1 auto;
            overflow-x: auto;
            overflow-y: hidden;
            padding: 6px 12px;
            box-sizing: border-box;
            scrollbar-width: none;
            -ms-overflow-style: none;
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x proximity;
        }

        .team-page__filter-scroll::-webkit-scrollbar {
            display: none;
        }

        .team-page__filter {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-wrap: nowrap;
            white-space: nowrap;
            min-width: max-content;
            margin: 0;
            padding: 0;
            gap: 18px;
        }

        .team-page-one li {
            flex: 0 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            scroll-snap-align: start;
        }

        .team-page-one li+li {
            margin-left: 0;
        }

        .team-page__filter-arrow {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border: 1px solid rgba(0, 0, 0, 0.12);
            border-radius: 50%;
            background: var(--mediplace-white);
            color: var(--mediplace-black);
            box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.18);
            cursor: pointer;
            z-index: 2;
            transition: all 0.3s ease;
            flex: 0 0 auto;
        }

        .team-page__filter-arrow:hover {
            background: var(--mediplace-black);
            color: var(--mediplace-white);
            border-color: var(--mediplace-black);
        }

        @media (max-width: 767px) {
            .team-page__filter-wrapper {
                gap: 8px;
            }

            .team-page__filter-arrow {
                width: 36px;
                height: 36px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var filterScroll = document.querySelector('.team-page__filter-scroll');
            if (!filterScroll) return;

            var prevBtn = document.querySelector('.team-page__filter-arrow--prev');
            var nextBtn = document.querySelector('.team-page__filter-arrow--next');

            if (prevBtn) {
                prevBtn.addEventListener('click', function () {
                    filterScroll.scrollBy({ left: -200, behavior: 'smooth' });
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function () {
                    filterScroll.scrollBy({ left: 200, behavior: 'smooth' });
                });
            }
        });
    </script>

@endsection
