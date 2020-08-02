@extends('layouts.registration')

@section('content')


<div class="main">

    <div class="container">
        <form method="POST" action="{{ route('addprofile') }}" id="signup-form" class="signup-form">
            @csrf
            <h3>
                <span class="title_text">Account Infomation</span>
            </h3>
            <fieldset>
                <div class="fieldset-content">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" disabled />
                    </div>
                    <div class="form-group">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" name="name" id="username" value="{{ Auth::user()->name }}" />
                    </div>
                    <div class="form-group form-password">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="(Leave empty for your previous password)"
                            id="password" data-indicator="pwindicator" />
                        <div id="pwindicator">
                            <div class="bar-strength">
                                <div class="bar-process">
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="label"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="your_avatar" class="form-label">Select avatar</label>
                        <div class="form-file">
                            <input type="file" name="your_avatar" id="your_avatar" class="custom-file-input" />
                            <span id='val'></span>
                            <span id='button'>Select File</span>
                        </div>
                    </div>
                </div>
                <div class="fieldset-footer">
                    <span>Step 1 of 3</span>
                </div>
            </fieldset>

            <h3>
                <span class="title_text">Personal Information</span>
            </h3>
            <fieldset>

                <div class="fieldset-content">
                    <div class="form-select">
                        <label for="country" class="form-label">City</label>
                        <select name="city_id" id="country" data-live-search="true" title="Select Your City" required />
                        <option value="">Select Your City/District</option>
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="about_us" class="form-label">Tagline</label>
                        <input type="text" name="tagline" id="about_us" value="{{ Auth::user()->tagline }}" placeholder="Title that best defines you.."
                            required />
                    </div>
                    <!--  <div class="form-radio">
                        <label for="gender" class="form-label">Gender</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" value="male" id="male" checked="checked" />
                            <label for="male">Male</label>

                            <input type="radio" name="gender" value="female" id="female" />
                            <label for="female">Female</label>
                        </div>
                    </div> -->

                    <div class="form-textarea">
                        <label for="about_us" class="form-label">About (Optional)</label>
                        <textarea name="about" id="about_us" minlength="50" maxlength="200"
                            placeholder="Minimum of 50 characters that describes your talents, skills and interests"
                             /></textarea>
                    </div>
                </div>

                <div class="fieldset-footer">
                    <span>Step 2 of 3</span>
                </div>

            </fieldset>

            <h3>
                <span class="title_text">Choose Your Profile</span>
            </h3>
            <fieldset>
                <div class="fieldset-content">

                    <div class="plans150 offset-xl-1">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-5 col-md-4">
                                <div class="plan_item">
                                    <div class="plan_icon1">
                                        <div class="cfp_icon">
                                            <img src="/images/svg/cp_icon.svg" alt="">
                                        </div>
                                    </div>
                                    <h4>Freelancer</h4>
                                    <div class="plan_price1">
                                        <span>Start a Freelancer Profile</span>
                                    </div>
                                    <ul class="plan_dt1">
                                        <li>
                                            <p>1. Share your skills, place bids on projects listed.</p>
                                        </li>
                                        <li>
                                            <p>2. Freelancers are the future of remote work and working from home.
                                                Skillpark provides genuine platform for both working and heiring</p>
                                        </li>
                                    </ul>
                                    <div class="plan_btn">
                                        <button type="submit" name="role" value="1">Signup as a Freelancer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4">
                                <div class="plan_item">
                                    <div class="plan_icon1">
                                        <div class="cfp_icon">
                                            <img src="/images/svg/fp_icon.svg" alt="">
                                        </div>
                                    </div>
                                    <h4>Employer</h4>
                                    <div class="plan_price1">
                                        <span>Start an Employer Profile</span>
                                    </div>
                                    <ul class="plan_dt1">
                                        <li>
                                            <p>01. Post jobs and projects and select freelancers to do the job.</p>
                                        </li>
                                        <li>
                                            <p>2. Simplified Process for the employers and freelancers to do heir and do
                                                the assigned jobs.</p>
                                        </li>
                                    </ul>
                                    <div class="plan_btn">
                                        <button type="submit" name="role" value="2">Signup as an Employer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fieldset-footer">
                    <span>Step 3 of 3</span>
                </div>
            </fieldset>
        </form>

    </div>
    <link rel="stylesheet" href="/css/popup.css">
    <div class="modal-container"></div>
    <div class="modal">
        <div class="modal-container">
            <div class="modal-left">
                <h1 class="modal-title">Welcome! {{ Auth::user()->name }}</h1>
                <img src="/images/svg/login.svg" style="width: 110px;">

                <h4 class="modal-title" style="font-size:16px;font-weight:600">The final stop of your freelancing search
                    is here.</h4>
                <p class="modal-desc"> You will be able to hire freelancers as per your need.</p>
                <p class="modal-desc">Or get paid for your skills by the verified employers and businesses.</p>

                <p class="modal-desc">We need some information to make <b>skillpark</b> more dynamic and as per your
                    need.</p>

                <img src="/images/logo/logo.svg">
                <div class="col-lg-12 col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="modal-right">
                <img src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=dfd2ec5a01006fd8c4d7592a381d3776&auto=format&fit=crop&w=1000&q=80"
                    alt="">
            </div>
            <button class="icon-button close-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path
                        d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z">
                    </path>
                </svg>
            </button>
        </div>
        <button class="modal-button">Get Started &nbsp; <i class="fa fa-play fa-sm" aria-hidden="true"></i></button>
    </div>

    <script src="/js/popup.js"></script>
</div>
@endsection