@extends('layouts.security')

@section('content')
<script>
    document.title = 'Login | SKILLPARK - Hire Expert Freelancers Any Time';
</script>

<!-- Login -->
<main class="browse-section justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 justify-content-center align-items-center d-flex vh100">
                <img src="/images/svg/login.svg" class="banner" style="width:500px">
            </div>
            <div class="col-xl-4 col-lg-12 col-sm-12 justify-content-center align-items-center">
                <div class="osahan-login" style="font-size: 13px !important;">
                    <div class="text-center mb-4">
                        <a href="{{ url('/') }}"><img src="/images/logo/block-logo.svg" style="width: 50px;" alt=""></a>
                        <h5 class="font-weight-bold mt-3">Welcome Back</h5>
                        <p class="text-muted" style="font-size: 12px;">Don't miss your next opportunity. Sign in to stay updated on your freelancing world.</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label class="mb-1">Email Address</label>
                            <div class="position-relative icon-form-control">
                                <i class="fas fa-user position-absolute"></i>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                @error('email')
                                <span class="feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mb-1">Password</label>
                            <div class="position-relative icon-form-control">
                                <i class="fas fa-key position-absolute"></i>
                                <input type="password" name="password" id="password" class="form-control" />
                                @error('password')
                                <span class="feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                            <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                        <button class="btn btn-success btn-block text-uppercase" type="submit"> Sign in </button>
                        <div class="text-center mt-3 border-bottom pb-3">
                            <p class="small text-muted">or login with</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('social.oauth', 'google') }}"> <button type="button" class="btn btn-outline-google btn-block"><i class="fab fa-google"></i> Google</button></a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('social.oauth', 'facebook') }}"> <button type="button" class="btn btn-outline-facebook btn-block"><i class="fab fa-facebook"></i> Facebook</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('social.oauth', 'twitter') }}"><button type="button" class="btn btn-outline-twitter btn-block"><i class="fab fa-twitter"></i> Twitter</button></a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('social.oauth', 'github') }}"> <button type="button" class="btn btn-outline-github btn-block"><i class="fab fa-github"></i> GitHub</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="py-3 d-flex align-item-center">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                @endif
                                Forgot password?</a>
                            <span class="ml-auto"> New to Skillpark? <a href="{{ route('register') }}">Join now</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Login -->

@endsection