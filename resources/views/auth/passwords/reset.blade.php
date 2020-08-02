@extends('layouts.security')

@section('content')
<script>
    document.title = 'Reset Passowrd | SKILLPARK - Hire Expert Freelancers Any Time';
</script>

<!-- Login -->
<main class="browse-section" style="padding: 0;">
    <div class="container">
        <div class="row justify-content-center d-flex vh-100">
            <div class="col-lg-4 mx-auto">
                <div class="osahan-login py-4" style="font-size: 13px !important;">
                    <div class="text-center mb-4">
                        <a href="{{ url('/') }}"><img src="images/fav-miver.svg" style="width: 50px;" alt=""></a>
                        <h5 class="font-weight-bold mt-3">Choose New Password</h5>
                        <p class="text-muted" style="font-size: 12px;">Password must be at least 8 characters long. Include uppercase, lowercase and numbers.</p>
                    </div>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <label class="mb-1">Email Address</label>
                            <div class="position-relative icon-form-control">
                                <i class="fas fa-user position-absolute"></i>
                                <input type="email" style="pointer-events:none;background-color:aliceblue" name="email" value="{{ $email ?? old('email') }}" class="form-control" >
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
                        <div class="form-group">
                            <label class="mb-1">Password</label>
                            <div class="position-relative icon-form-control">
                                <i class="fas fa-key position-absolute"></i>
                                <input type="password" name="password_confirmation" id="password" class="form-control" />
                                @error('password')
                                <span class="feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>
                        <button class="btn btn-success btn-block text-uppercase" type="submit"> Reset Password </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Login -->

@endsection