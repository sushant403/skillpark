@extends('layouts.security')

@section('content')
<script>
    document.title = 'Reset Password | SKILLPARK - Hire Expert Freelancers Any Time';
</script>

<div class="container">
    <div class="row justify-content-center pt-4">
        <div class="col-lg-7 col-md-9 col-sm-11">
            <h2 class="h3 pb-3">{{ __('nepali.Forgot your password?') }}</h2>
            <p class="font-size-sm">Change your password in three easy steps. This helps to keep your new password
                secure.</p>
            <ul class="list-unstyled font-size-sm pb-1 mb-4">
                <li><span class="text-primary font-weight-semibold mr-1">1.</span>Fill in your email address below.</li>
                <li><span class="text-primary font-weight-semibold mr-1">2.</span>We'll send you a verification email.
                </li>
                <li><span class="text-primary font-weight-semibold mr-1">3.</span>Follow the provided link and set the
                    new secure password..</li>
            </ul>

            @if (session('status'))
            <div class="alert alert-info text-center my-4" role="alert">
                {{ __('Password reset link has been sent to your email address.') }}
            </div>
            @endif

            <div class="bg-light rounded-lg px-3 py-4 p-sm-4">
                <form method="POST" action="{{ route('password.email') }}" class="needs-validation p-2" novalidate>
                    @csrf

                    <div class="form-group">
                        <label class="form-label"
                            for="recovery-email"><b>{{ __('Enter your email address') }}</b></label>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}"
                            autocomplete="off" required id="recovery-email">
                        @error('email')
                        <span class="feedback" style="color:red;font-size:13px" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary" onclick="this.disabled=true;this.form.submit();"
                        type="submit">{{ __('Request Verification Link') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection