@extends('layouts.default')
@section('title', '404 Error || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='404 Error' pageSubtitle='404 Error' />

    <!--Start Error Page-->
    <section class="error-page">
        <div class="container">
            <div class="error-page__inner text-center">
                <div class="error-page__img float-bob-y">
                    <img src="{{ asset('assets/images/resources/error-page-img1.png') }}" alt="">
                </div>

                <div class="error-page__content">
                    <h2>Oops! Page Not Found!</h2>
                    <p>The page you are looking for does not exist. It might have been moved or deleted.</p>
                    <div class="btn-box">
                        <a class="thm-btn" href="{{ route('index') }}">
                            <span class="fas fa-arrow-right"></span>
                            Back To Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Error Page-->

@endsection
