@extends('layouts.security')

@section('content')
<script>
    document.title = 'Reset Password | SKILLPARK - Hire Expert Freelancers Any Time';
</script>

<!-- Login -->
<main class="browse-section" style="padding: 30;">
    <div class="container">
        <div class="row justify-content-center d-flex vh-100">
            <div class="col-lg-4 mx-auto">
                <div class="osahan-login py-4" style="font-size: 13px !important;">
                    <div class="text-center mb-4">
                        <a href="{{ route('login') }}"><img src="{{ asset('images/logo/block-logo.svg') }}" alt=""></a>
                        <h5 class="font-weight-bold mt-3">First, let's find your account</h5>
                        <p class="text-muted">Please enter your email address</p>

                        @if (session('status'))
                        <div class="notification notice" style="text-align: center;" role="alert">
                            <span class="feedback" style="color:#1bb7bb;font-weight:600" role="alert"> {{ session('status') }} </span>
                        </div>
                        @endif
                    </div>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label class="mb-1">Email Address</label>
                            <div class="position-relative icon-form-control">
                                <i class="fas fa-user position-absolute"></i>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="off">
                                @error('email')
                                <span class="feedback" style="color:red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-success btn-block text-uppercase" type="submit"> Find account </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<!-- End Login -->

@endsection