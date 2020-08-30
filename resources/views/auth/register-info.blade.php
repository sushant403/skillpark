@extends('layouts.registration')

@section('title', 'Complete your Profile - ' . Auth::user()->name)
@section('content')

<main class="pb-7" role="main" id="content">
    <div class="container">
        <div class="text-center py-7"
            style="background: url(/images/svg/components/abstract-shapes-19.svg) center no-repeat;">
            <h3>Complete Your Profile</h3>
            <p>Answer a few questions and match your skills to the qualifying projects.</p>
        </div>
    </div>
    <div class="col-lg-10 col-sm-12 mx-auto">
        <!-- Tab Content -->
        <!-- Step Form -->
        <form method="POST" action="{{ route('addprofile') }}" class="js-step-form js-validate"
            data-hs-step-form-options='{
                      "progressSelector": "#advancedFormStepFormProgress",
                      "stepsSelector": "#advancedFormStepFormContent",
                      "isValidate": true
                    }'>
            @csrf
            <!-- Step -->
            <ul id="advancedFormStepFormProgress" class="js-step-progress step step-md step-inline mb-5">
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-primary">1</span>
                        <div class="step-content">
                            <span class="step-inline-title">Account</span>
                        </div>
                    </div>
                </li>

                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-primary">2</span>
                        <div class="step-content">
                            <span class="step-inline-title">Profile</span>
                        </div>
                    </div>
                </li>

                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-primary">3</span>
                        <div class="step-content">
                            <span class="step-inline-title">Role Information</span>
                        </div>
                    </div>
                </li>

                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-primary">4</span>
                        <div class="step-content">
                            <span class="step-inline-title">Completed</span>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- End Step -->

            <!-- Content Step Form -->
            <div id="advancedFormStepFormContent" class="border rounded p-4">
                <div id="advancedFormSelectStepOne" class="active">
                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="validationFormUsernameLabel" class="input-label">Email</label>
                        <div class="js-form-message">
                            <input type="email" class="form-control" name="email"
                                placeholder="{{ Auth::user()->email }}" disabled>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="validationFormNewPasswordLabel" class="input-label">Location</label>

                        <div class="js-form-message">
                            <select class="js-custom-select" id="locationLabel" name="city_id" data-hs-select2-options='{
                                    "customClass": "custom-select",
                                    "placeholder": "Select Your City/District",
                                    "searchInputPlaceholder": "Search a City/District"
                                  }' required data-msg="Please Select your Location">
                                <option label="empty"></option>
                                @foreach ($cities as $city)<option value="{{ $city->id }}"
                                    data-option-template='<span class="d-flex align-items-center"><span class="text-truncate">{{ $city->name }}</span></span>'>
                                    {{ $city->name }}</option> @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="validationFormCurrentPasswordLabel" class="input-label pb-2">Display Picture</label>

                        <label class="avatar avatar-xl avatar-circle mr-4" for="avatarUploader">
                            <img id="avatarImg" class="avatar-img" src="{{ asset(Auth::user()->avatar) }}"
                                alt="Image Description">
                        </label>
                        <div class="btn btn-sm btn-primary file-attachment-btn">Upload Photo
                            <input type="file" class="js-file-attach file-attachment-btn-label" id="avatarUploader"
                                data-hs-file-attach-options='{
                                      "textTarget": "#avatarImg",
                                      "mode": "image",
                                      "targetAttr": "src"
                                   }'>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1"
                            data-hs-step-form-next-options='{
                                "targetSelector": "#advancedFormSelectStepTwo"
                              }'>Next</button>
                    </div>
                </div>

                <div id="advancedFormSelectStepTwo" style="display: none;">
                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="validationFormFirstNameLabel" class="input-label">Tagline</label>

                        <div class="js-form-message">
                            <input type="text" class="form-control" value="{{ Auth::user()->tagline }}" name="tagline"
                                id="validationFormFirstNameLabel"
                                placeholder="A title that best defines you (e.g. Python Developer)"
                                aria-label="A title that best defines you (e.g. Python Developer)" required
                                data-msg="A title is required for clients to understand your skill.">
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="validationFormAboutLabel" class="input-label">About</label>

                        <div class="js-form-message">
                            <textarea class="form-control" maxlength="200" value="{{ Auth::user()->about }}"
                                minlength="50" class="form-control" rows="5" name="about" id="validationFormAboutLabel"
                                placeholder="Write something about your skills, passion, interests..."
                                aria-label="Write something about your skills, passion, interests..." required
                                data-msg="Describe yourself in at least 50 characters."></textarea>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="validationFormSkillsLabel" class="input-label">Skills</label>
                        <div class="js-form-message">
                            <select id="validationFormSkillsLabel" placeholder="Select at most three skills" required
                                data-msg="Please select a skill that represents you." name="topic"
                                class="js-custom-select-multiple form-control" multiple data-hs-select2-options='{
                            "minimumResultsForSearch": "3",
                            }'>
                                <option label="empty"></option>
                                @foreach($topics as $topic)<option value="{{ $topic->id }}">{{ $topic->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <div class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-soft-secondary transition-3d-hover mr-1" href="javascript:;"
                            data-hs-step-form-prev-options='{
                           "targetSelector": "#advancedFormSelectStepOne"
                         }'>Back</a>
                        <button type="button" class="btn btn-sm btn-primary transition-3d-hover"
                            data-hs-step-form-next-options='{
                                "targetSelector": "#advancedFormSelectStepThree"
                              }'>Next</button>
                    </div>
                </div>

                <div id="advancedFormSelectStepThree" style="display: none;">
                    <!-- Form Group -->
                    <div class="form-group">
                        <div class="plans150 offset-xl-1">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-5 col-md-4">
                                    <div class="plan_item">
                                        <div class="plan_icon1">
                                            <div class="cfp_icon py-3">
                                                <img src="/images/svg/cp_icon.svg" alt="">
                                            </div>
                                        </div>
                                        <h4>Freelancer</h4>
                                        <div class="plan_price1">
                                            <span><b>Start a Freelancer Profile</b></span>
                                        </div>
                                        <ul class="plan_dt1">
                                            <li>
                                                <p>- Share your skills, place bids on projects listed.</p>
                                            </li>
                                            <li>
                                                <p>- Freelancers are the future of remote work and working from home.
                                                    Skillpark provides genuine platform for both working and heiring</p>
                                            </li>
                                        </ul>
                                        <div class="plan_btn">
                                            <button type="submit" class="btn btn-primary" name="role" value="1">Signup
                                                as a Freelancer</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4">
                                    <div class="plan_item">
                                        <div class="plan_icon1">
                                            <div class="cfp_icon py-3">
                                                <img src="/images/svg/fp_icon.svg" alt="">
                                            </div>
                                        </div>
                                        <h4>Employer</h4>
                                        <div class="plan_price1">
                                            <span><b>Start an Employer Profile</b></span>
                                        </div>
                                        <ul class="plan_dt1">
                                            <li>
                                                <p>- Post jobs and projects and select freelancers to do the job.</p>
                                            </li>
                                            <li>
                                                <p>- Simplified Process for the employers and freelancers to do heir
                                                    and do the assigned jobs.</p>
                                            </li>
                                        </ul>
                                        <div class="plan_btn">
                                            <button type="submit" class="btn btn-primary" name="role" value="2">Signup
                                                as an Employer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <div class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-soft-secondary transition-3d-hover mr-1" href="javascript:;"
                            data-hs-step-form-prev-options='{
                           "targetSelector": "#advancedFormSelectStepTwo"
                         }'>Back</a>
                        <button type="button" class="btn btn-sm btn-primary transition-3d-hover"
                            data-hs-step-form-next-options='{
                                "targetSelector": "#advancedFormSelectStepFour"
                              }'>Finish</button>
                    </div>
                </div>

                <div id="advancedFormSelectStepFour" style="display: none;">
                    You have successfully completed the form! You may now choose role and start exploring the
                    freelancing
                    world.

                    <div class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-soft-secondary transition-3d-hover mr-1" href="javascript:;"
                            data-hs-step-form-prev-options='{
                           "targetSelector": "#advancedFormSelectStepThree"
                         }'>Back</a>
                    </div>
                </div>
            </div>
            <!-- End Content Step Form -->
        </form>
        <!-- End Step Form -->
    </div>
    </div>
    <!-- end main content -->
</main>

{{-- more information modal --}}

<div id="exampleModalTopCover" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalTopCoverTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-top-cover bg-primary text-center">
                <figure class="position-absolute right-0 bottom-0 left-0">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        viewBox="0 0 1920 100.1">
                        <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z" />
                    </svg>
                </figure>

                <div class="modal-close">
                    <button type="button" class="btn btn-icon btn-sm btn-ghost-light" data-dismiss="modal"
                        aria-label="Close">
                        <svg width="16" height="16" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- End Header -->

            <div class="modal-top-cover-avatar">
                <img class="avatar avatar-lg avatar-circle avatar-border-lg avatar-centered shadow-soft"
                    src="{{ asset(Auth::user()->avatar) }}" alt="Logo">
            </div>

            <div class="modal-body text-center">
                <h3 class="modal-title ">Hello, {{ Auth::user()->name }}</h3>

                <h4 class="modal-title py-3" style="font-size:16px;font-weight:600">The final stop of your freelancing
                    search
                    is here.</h4>
                <p class="modal-desc">We need some information to make <b>skillpark</b> more dynamic and as per your
                    need.</p>
                <p class="modal-desc"> You will be able to hire freelancers as per your need.</p>
                <p class="modal-desc">Or get paid for your skills by the verified employers and businesses.</p>

                <div class="col-lg-12 col-md-12">
                    <div class="row align-items-md-center space-top-1">
                        <div class="col-md-6">
                            <!-- Social Networks -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Social Networks -->
                        </div>

                        <div class="col-md-6 text-md-right">
                            <!-- Links -->
                            <ul class="nav nav-sm justify-content-md-end justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="../pages/privacy">Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../pages/terms">Terms &amp; conditions</a>
                                </li>
                            </ul>
                            <!-- End Links -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
            </div>
        </div>
    </div>
</div>


{{-- moreinformationmodal --}}
@endsection