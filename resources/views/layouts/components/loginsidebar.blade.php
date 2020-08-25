<!-- Account Login 

<li class="navbar-nav-item">
    <div class="hs-unfold">
        <a class="js-hs-unfold-invoker nav-link" href="javascript:;"
            data-hs-unfold-options='{
                                                        "target": "#sidebarContent",
                                                        "type": "css-animation",
                                                        "animationIn": "fadeInRight",
                                                        "animationOut": "fadeOutRight",
                                                        "hasOverlay": "rgba(55, 125, 255, 0.1)",
                                                        "smartPositionOff": true
                                                        }'>
            <i class="fa fa-user"></i>&nbsp; {{ __('nepali.Login') }}
        </a>
    </div>
</li>

 End Account Login -->


<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Account Sidebar Navigation -->
<aside id="sidebarContent" class="hs-unfold-content sidebar">
    <div class="sidebar-scroller">
        <div class="sidebar-container">
            <div class="sidebar-footer-offset" style="padding-bottom: 7rem;">
                <!-- Toggle Button -->
                <div class="d-flex justify-content-end align-items-center pt-4 px-4">
                    <div class="hs-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-soft-secondary" href="javascript:;"
                            data-hs-unfold-options='{
                                                            "target": "#sidebarContent",
                                                            "type": "css-animation",
                                                            "animationIn": "fadeInRight",
                                                            "animationOut": "fadeOutRight",
                                                            "hasOverlay": "rgba(55, 125, 255, 0.1)",
                                                            "smartPositionOff": true
                                                            }'>
                            <svg width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- End Toggle Button -->

                <!-- Content -->
                <div class="scrollbar sidebar-body">
                    <div class="sidebar-content py-1 px-7">
                        <form enctype="multipart/form-data" class="js-validate" method="POST"
                            action="{{ route('login') }}" novalidate>
                            @csrf
                            <!-- Login -->
                            <div id="login">
                                <!-- Title -->
                                <div class="text-center mb-7">
                                    <h4 class="mb-0">Sign in to stay updated on your freelancing
                                        world.</h4>
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
                                    <a class="small link-underline" href="{{ route('password.update') }}">Forgot
                                        Password?</a>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                                </div>

                                <div class="text-center mb-3">
                                    <span class="divider divider-xs divider-text">OR</span>
                                </div>

                                <div class="text-center"><a class="social-btn sb-facebook sb-outline sb-lg mx-1 mb-2"
                                        href="{{ route('social.oauth', 'facebook') }}"><i class="fab fa-facebook"
                                            aria-hidden="true"></i></a>
                                    <a class="social-btn sb-twitter sb-outline sb-lg mx-1 mb-2"
                                        href="{{ route('social.oauth', 'twitter') }}"><i class="fab fa-twitter"
                                            aria-hidden="true"></i></a>
                                    <a class="social-btn sb-github sb-outline sb-lg mx-1 mb-2"
                                        href="{{ route('social.oauth', 'github') }}"><i class="fab fa-github"
                                            aria-hidden="true"></i></a>
                                    <a class="social-btn sb-google sb-outline sb-lg mx-1 mb-2"
                                        href="{{ route('social.oauth', 'google') }}"><i class="fab fa-google"
                                            aria-hidden="true"></i></a>
                                </div>

                                <div class="text-center pt-3">
                                    <span class="small text-muted">Do not have an account?</span>
                                    <a class="small font-weight-bold" href="{{ route('register') }}">Sign Up
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </div>
</aside>
<!-- End Account Sidebar Navigation -->
<!-- ========== END SECONDARY CONTENTS ========== -->