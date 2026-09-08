@extends('layouts.default')
@section('title', 'Sign Up || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Sign Up' pageSubtitle='Sign Up' />

    <!--Start Sign Up One-->
    <section class="sign-up-one">
        <div class="container">
            <div class="sign-up-one__form">
                <div class="inner-title text-center">
                    <h2>Sing Up</h2>
                </div>
                <form id="sign-up-one__form" name="sign-up-one_form" action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" name="form_name" id="formName" placeholder="Name..."
                                         value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="email" name="form_email" id="formEmail" placeholder="Email..."
                                         value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" name="form_phone" id="formPhone" placeholder="Phone..."
                                         value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="password" name="form_password" id="formPassword" placeholder="Password..."
                                         value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                    <span class="fas fa-arrow-right"></span>
                                    Sign UP
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="google-facebook">
                        <a href="https://www.google.com/">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/icon-google-2.png') }}" alt="Google">
                            </div>
                            Continue with Google
                        </a>
                        <a href="https://www.facebook.com/">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/icon-facebook.png') }}" alt="Google">
                            </div>
                            Continue with Facebook
                        </a>
                    </div>
                    <div class="create-account text-center">
                        <p>Already have an account? <a href="{{ route('login') }}">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Sign Up One-->

@endsection
