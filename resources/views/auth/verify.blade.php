@extends('layouts.security')

@section('content')

<!-- Page content-->
<section class="container d-flex justify-content-center align-items-center pt-5 pb-4" style="flex: 1 0 auto;">
    <div class="cs-signin-form mt-3">
        <div class="cs-signin-form-inner">
            <!-- Sign in view-->
            <div class="cs-view show">
                <center><img src="/images/logo/logo.svg" class="pb-4" width="50"/></center>
                <h4 class="text-center">Verify Your Account</h4>

                @if (session('resent'))
                <div class="alert alert-info text-center" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
                @endif

                <p class="font-size-md mb-4 text-center">Email Verification Link has been
                    sent to <b>{{ Auth::user()->email }}</b>.</p>
            </div>
        
        <div class="border-top text-center mt-4 pt-4">
            <p class="font-size-sm font-weight-medium text-heading"> If you haven't received our email in 15 minutes,
                please
                check your spam folder or,</p>
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button class="btn btn-outline-primary"
                    type="submit">{{ __('Request a fresh verification link.') }}</button>
            </form>
            <p class="font-size-sm font-weight-medium pt-4 text-muted">Get verified by skillpark and explore the
                freelancing world.</p>
        </div>
    </div>
    </div>
</section>


<script>
    document.title = 'Verify E-mail Address | {{ Auth::user()->name }}';
</script>
@endsection