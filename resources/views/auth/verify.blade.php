@extends('layouts.security')


@section('content')
<style>
    p {
        text-align: center;
        color: #666;
    }

    button:hover {
        background: #1dc8cc;
        transition: none;
    }

    button {
        margin-top: 20px;
    }
</style>
<!-- Login -->
<main class="browse-section">
    <div class="container">
        <div class="row justify-content-center d-flex vh-100">
            <div class="col-lg-4 mx-auto">
                <div class="osahan-login py-4" style="font-size: 14px !important;">
                    <div class="text-center mb-4">
                        <a href="{{ url('/') }}"><img src="/images/fav-miver.svg" style="width: 50px;" alt=""></a>
                        <h5 class="font-weight-bold mt-3">Verify Your Account</h5>
                        <p class="text-muted" style="font-size: 14px;font-weight:500">Email Verification Link has been
                            sent to <b>{{ Auth::user()->email }}</b>.</p>
                    </div>

                    @if (session('resent'))
                    <div class="feedback" role="alert">
                        <p> {{ __('A fresh verification link has been sent to your email address.') }}</p>
                    </div>
                    @endif

                    <p style="font-size: 15px;margin-bottom:5px"> If you haven't received our email in 15 minutes,
                        please
                        check your spam folder or,
                        <!-- Form -->
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <center> <b><button class="c-btn c-fill-color-btn" type="submit">{{ __('Request a fresh verification link.') }}</button></b>
                            </center>
                    </p>
                    </form>
                    <p class="text-muted" style="font-size: 14px;font-weight:600;margin-top:20px"> Get verified by skillpark and explore the freelancing world.</p>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Login -->


<script>
    document.title = 'Verify E-mail Address | {{ Auth::user()->name }}';
</script>
@endsection