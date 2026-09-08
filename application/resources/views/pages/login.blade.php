@extends('layouts.default')
@section('title', 'Login || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Login' pageSubtitle='Login' />

    <!--Start Login One-->
    <section class="login-one">
        <div class="container">
            <div class="login-one__form">
                <div class="inner-title text-center">
                    <h2>Login Here</h2>
                </div>
                <form id="login-one__form" name="Login-one_form" action="#" method="post">
                    @csrf
                    <div class="row">
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
                                    <input type="password" name="form_password" id="formPassword" placeholder="Password..."
                                         value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                    <span class="fas fa-arrow-right"></span>
                                    Login Here
                                </button>
                            </div>
                        </div>
                        <div class="remember-forget">
                            <div class="checked-box1">
                                <input type="checkbox" name="saveMyInfo" id="saveinfo" checked="">
                                <label for="saveinfo">
                                    <span></span>
                                    Remember me
                                </label>
                            </div>
                            <div class="forget">
                                <a href="#">Forget password?</a>
                            </div>
                        </div>

                        <div class="create-account text-center">
                            <p>Not registered yet? <a href="{{ route('sign-up') }}">Create an Account</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Login One-->

@endsection
