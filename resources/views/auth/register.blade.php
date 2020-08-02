@extends('layouts.security')

@section('content')
<script>
    document.title = 'Register | SKILLPARK - Hire Expert Freelancers Any Time';
</script>

<!-- Register -->
<main class="browse-section">
    <div class="container">
        <div class="row  ">
            <div class="col-xl-7 justify-content-center align-items-center d-flex vh100">
                <img src="/images/svg/ipad.svg" class="banner" style="width:500px">
            </div>
            <div class="col-xl-4 col-lg-12 col-sm-12 justify-content-center align-items-center">
                <div class="osahan-login" style="font-size: 13px !important;">
                    <div class="text-center mb-4">
                        <a href="{{ url('/') }}"><img src="/images/logo/block-logo.svg" style="width: 50px;" alt=""></a>
                        <h5 class="font-weight-bold mt-3" style="font-size: 1.25rem;">Join Skillpark</h5>
                        <p class="text-muted" style="color:#6c757d;font-size:12px">Connect with the verified businesses and clients and make the most of your freelancing
                            life. </p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="mb-1">Name</label>
                                    <div class="position-relative icon-form-control">
                                        <i class="fas fa-user position-absolute"></i>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                        @error('name')
                                        <span class="feedback" style="color: red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="mb-1">Email</label>
                            <div class="position-relative icon-form-control">
                                <i class="fa fa-envelope position-absolute"></i>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                @error('email')
                                <span class="feedback" style="color: red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mb-1">Password (8 or more characters)</label>
                            <div class="position-relative icon-form-control">
                                <i class="fas fa-key position-absolute"></i>
                                <input type="password" name="password" class="form-control">
                                @error('password')
                                <span class="feedback" style="color: red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mb-1">You agree to the SkillPark Inc. <a href="{{ url('agreement') }}" style="color: #1dbf73;">User Agreement</a>, <a style="color: #1dbf73;" href="{{ url('policy') }}">Privacy Policy</a>, and <a href="{{ url('cookies') }}" style="color: #1dbf73;">Cookie Policy</a>.</label>
                        </div>
                        <button class="btn btn-success btn-block text-uppercase" type="submit"> Agree & Join </button>
                        <div class="text-center mt-3 border-bottom pb-3">
                            <p class="small text-muted">or Register via</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('social.oauth', 'google') }}"> <button type="button" class="btn btn-outline-google btn-block"><i class="fab fa-google"></i>
                                            Google</button></a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('social.oauth', 'facebook') }}"> <button type="button" class="btn btn-outline-facebook btn-block"><i class="fab fa-facebook"></i>
                                            Facebook</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('social.oauth', 'twitter') }}"><button type="button" class="btn btn-outline-twitter btn-block"><i class="fab fa-twitter"></i>
                                            Twitter</button></a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('social.oauth', 'github') }}"> <button type="button" class="btn btn-outline-github btn-block"><i class="fab fa-github"></i>
                                            GitHub</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="py-3 d-flex align-item-center">
                            <a href="{{ route('password.update') }}">Forgot password?</a>
                            <span class="ml-auto"> Already on Skillpark? <a href="{{ route('login') }}">Sign in</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Register -->

@endsection