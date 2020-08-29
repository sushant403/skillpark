@extends('layouts.security')

@section('content')
<script>
    document.title = 'Login | SKILLPARK - Hire Expert Freelancers Any Time';
</script>

<!-- Page content-->
<!-- Background image-->
<div class="d-none d-md-block position-absolute w-50 h-100 bg-size-cover"
    style="top: 0; right: 0; background-image: url(/images/homepage/login.jpg);"></div>
<!-- Actual content-->
<section class="container pt-5 pt-lg-0 d-flex align-items-center pb-3 pb-md-4" style="flex: 1 0 auto;">
    <div class="w-100 pt-0">
        <div class="row">
            <div class="col-lg-4 col-md-6 offset-lg-1">
                <!-- Sign in view-->
                <div class="cs-view show" id="signin-view">
                    <h2 class="h4">Sign In to Skillpark</h2>
                    <p class="font-size-ms text-muted mb-4">Don't miss your next opportunity. Sign in to stay updated on
                        your freelancing world.</p>
                    <form class="js-validate" method="POST" action="{{ route('login') }}" novalidate>
                        @csrf

                        @error('email')
                        <span class="feedback" style="color:red;font-size:13px" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="js-form-message input-group-overlay form-group">
                            <div class="input-group-prepend-overlay"><span class="input-group-text"
                                    style="height: 46px"><i class="fa fa-envelope fa-sm"></i></span></div>
                            <input class="form-control prepended-form-control" type="email" name="email"
                                value="{{ old('email') }}" placeholder="Email" tabindex="2" required
                                data-msg="Please enter a valid email address.">
                        </div>
                        @error('password')
                        <span class="feedback" style="color:red;font-size:13px" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="js-form-message input-group-overlay cs-password-toggle form-group">
                            <div class="input-group-prepend-overlay"><span class="input-group-text"
                                    style="height: 46px"><i class="fa fa-lock fa-sm"></i></span></div>
                            <input class="form-control prepended-form-control" name="password" type="password"
                                placeholder="Password" minlength="8" required
                                data-msg="Password is Invalid. Please Try Again.">
                            <label class="cs-password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><span class="sr-only">Show
                                    password</span>
                            </label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" name="remember"
                                    {{ old('remember') ? 'checked' : '' }} type="checkbox" id="keep-signed-2">
                                <label class="custom-control-label" for="keep-signed-2">Keep me signed in</label>
                            </div><a class="nav-link-style font-size-ms" href="{{ route('password.update') }}">Forgot
                                password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                        <p class="font-size-sm pt-3 mb-0">Don't have an account? <a href='{{ route('register') }}'
                                class='font-weight-medium'>Sign up</a></p>
                    </form>
                </div>
                <div class="border-top text-center mt-4 pt-4">
                    <p class="font-size-sm font-weight-medium text-heading">Or sign in with</p><a
                        class="social-btn sb-facebook sb-outline sb-lg mx-1 mb-2"
                        href="{{ route('social.oauth', 'facebook') }}"><i class="fab fa-facebook"></i></a><a
                        class="social-btn sb-twitter sb-outline sb-lg mx-1 mb-2"
                        href="{{ route('social.oauth', 'twitter') }}"><i class="fab fa-twitter"></i></a><a
                        class="social-btn sb-github sb-outline sb-lg mx-1 mb-2"
                        href="{{ route('social.oauth', 'github') }}"><i class="fab fa-github"></i></a><a
                        class="social-btn sb-google sb-outline sb-lg mx-1 mb-2"
                        href="{{ route('social.oauth', 'google') }}"><i class="fab fa-google"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
