@extends('layouts.security')

@section('content')
<script>
    document.title = 'Register | SKILLPARK - Hire Expert Freelancers Any Time';
</script>

<!-- Page content-->
<!-- Background image-->
<div class="d-none d-md-block position-absolute w-50 h-100 bg-size-cover"
    style="top: 0; right: 0; background-image: url(/images/homepage/login.jpg);"></div>
<!-- Actual content-->
<section class="container pt-lg-0 pt-5 d-flex align-items-center pb-3 pb-md-4" style="flex: 1 0 auto;">
    <div class="w-100 pt-0">
        <div class="row">
            <div class="col-lg-4 col-md-6 offset-lg-1">
                <!-- Sign in view-->
                <div class="cs-view show" id="signin-view">
                    <h2 class="h4">Join Skillpark</h2>
                    <p class="font-size-ms text-muted mb-4">Connect with the verified businesses and clients and make
                        the most of your freelancing
                        life.</p>
                    <form class="js-validate" method="POST" action="{{ route('register') }}" novalidate>
                        @csrf

                        @error('name')
                        <span class="feedback" style="color:red;font-size:13px" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="js-form-message input-group-overlay form-group">
                            <div class="input-group-prepend-overlay"><span class="input-group-text" style="height: 46px"><i
                                        class="fa fa-user fa-sm"></i></span></div>
                            <input class="form-control prepended-form-control" type="text" name="name"
                                value="{{ old('name') }}" placeholder="Full Name" tabindex="2" required data-msg="Please enter a valid name. (e.g. Sushant Poudel)">
                        </div>

                        @error('email')
                        <span class="feedback" style="color:red;font-size:13px" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="js-form-message input-group-overlay form-group">
                            <div class="input-group-prepend-overlay"><span class="input-group-text" style="height: 46px"><i
                                        class="fa fa-envelope fa-sm"></i></span></div>
                            <input class="form-control prepended-form-control" type="email" name="email"
                                value="{{ old('email') }}" placeholder="Email Address" tabindex="2" required data-msg="Please enter a valid email address.">
                        </div>

                        @error('password')
                        <span class="feedback" style="color:red;font-size:13px" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="js-form-message input-group-overlay cs-password-toggle form-group">
                            <div class="input-group-prepend-overlay"><span class="input-group-text" style="height: 46px"><i
                                        class="fa fa-lock fa-sm"></i></span></div>
                            <input class="form-control prepended-form-control" name="password" type="password"
                                placeholder="Password" minlength="8" required data-msg="Password is required and should be at least 8 characters">
                            <label class="cs-password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><span class="sr-only">Show
                                    password</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="mb-1">You agree to the SkillPark Inc. <a href="{{ url('agreement') }}"
                                    style="color: #1dc8cc;">User Agreement</a>, <a style="color: #1dc8cc;"
                                    href="{{ url('policy') }}">Privacy Policy</a>, and <a href="{{ url('cookies') }}"
                                    style="color: #1dc8cc;">Cookie Policy</a>.</label>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Agree &amp; Join</button>
                    </form>
                </div>
                <div class="border-top text-center mt-4 pt-4">
                    <p class="font-size-sm font-weight-medium text-heading">Or register via</p><a
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