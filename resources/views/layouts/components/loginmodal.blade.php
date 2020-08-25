{{-- <!-- Modal Trigger -->

<a class="btn btn-primary transition-3d-hover" href="javascript:;" data-toggle="modal" data-target="#loginModal">Login</a>

<!-- End Modal Trigger --> --}}

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <button type="button" class="close position-absolute top-0 right-0 z-index-2 mt-3 mr-3" data-dismiss="modal"
                aria-label="Close">
                <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor"
                        d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                </svg>
            </button>

            <!-- Body -->
            <div class="modal-body">
                <form enctype="multipart/form-data" class="js-validate" method="POST" action="{{ route('login') }}"
                    novalidate>
                    @csrf
                    <!-- Login -->
                    <div id="login">
                        <!-- Title -->
                        <div class="text-center mb-5 mt-2">
                            <h3 class="mb-2">Welcome Back</h3>
                            <p>Login to stay updated on your freelancing
                                world.</p>
                        </div>
                        <!-- End Title -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-4">
                            <label class="input-label">Email</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="email" class="form-control" name="email" id="signinEmail"
                                    placeholder="Email" value="{{ old('email') }}" aria-label="Email" required
                                    data-msg="Please enter a valid email address.">
                            </div>
                            @error('email')
                            <span class="feedback" style="color:red;font-size:12px" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-3">
                            <label class="input-label">Password</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="password" class="form-control" name="password" id="signinPassword"
                                    placeholder="Password" aria-label="Password" required
                                    data-msg="Password is invalid. Please try again.">
                            </div>
                            @error('password')
                            <span class="feedback" style="color:red;font-size:13px" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- End Input Group -->

                        <div class="d-flex justify-content-end mb-4">
                            <a class="small link-underline"
                                href="{{ route('password.update') }}">Forgot Password?</a>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                        </div>
                </form>

                <div class="text-center py-3">
                    <p class="font-size-sm font-weight-medium text-heading">Or sign in with</p>

                    <a class="social-btn sb-facebook sb-outline sb-lg mx-1 mb-2"
                        href="{{ route('social.oauth', 'facebook') }}"><i class="fab fa-facebook"></i></a>

                    <a class="social-btn sb-twitter sb-outline sb-lg mx-1 mb-2"
                        href="{{ route('social.oauth', 'twitter') }}"><i class="fab fa-twitter"></i></a>

                    <a class="social-btn sb-github sb-outline sb-lg mx-1 mb-2"
                        href="{{ route('social.oauth', 'github') }}"><i class="fab fa-github"></i></a>

                    <a class="social-btn sb-google sb-outline sb-lg mx-1 mb-2"
                        href="{{ route('social.oauth', 'google') }}"><i class="fab fa-google"></i></a>
                </div>
                <div class="text-center">
                    <span class="small text-muted">Do not have an account?</span>
                    <a class="small font-weight-bold" href="{{ route('register') }}">Sign Up
                    </a>
                </div>
            </div>
        </div>
        <!-- End Body -->
    </div>
</div>
</div>
<!-- End Login Modal -->