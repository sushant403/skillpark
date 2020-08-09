@extends('layouts.freelancers.freelancermaster')

@section('content')
    
 <!-- ========== MAIN ========== -->
 <main id="content" role="main" class="bg-light">

    <!-- Content Section -->
    <div class="container pt-3">
      <div class="row">
        <div class="col-lg-3">
          <!-- Navbar -->
          <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
            <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
              <!-- Card -->
              <div class="card mb-5">
                <div class="card-body">
                  <!-- Avatar -->
                  <div class="d-none d-lg-block text-center mb-5">
                    <div class="avatar avatar-xxl avatar-circle mb-3">
                      <img class="avatar-img" src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
                      <img class="avatar-status avatar-lg-status" src="/images/svg/illustrations/top-vendor.svg" alt="Image" data-toggle="tooltip" data-placement="top" title="Verified user">
                    </div>

                    <h4 class="card-title">{{ Auth::user()->name }}</h4>
                    <p class="card-text font-size-1">{{ Auth::user()->email }}</p>
                  </div>
                  <!-- End Avatar -->

                  <h6 class="text-cap small">Account</h6>

                  <!-- List -->
                  <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2 mb-4">
                    <li class="nav-item">
                      <a class="nav-link active" href="index">
                        <i class="fas fa-id-card nav-icon"></i>
                        Personal info
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="login-and-security">
                        <i class="fas fa-shield-alt nav-icon"></i>
                        Login &amp; security
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="notifications">
                        <i class="fas fa-bell nav-icon"></i>
                        Notifications
                        <span class="badge badge-soft-navy badge-pill nav-link-badge">1</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="preferences">
                        <i class="fas fa-sliders-h nav-icon"></i>
                        Preferences
                      </a>
                    </li>
                  </ul>
                  <!-- End List -->

                  <h6 class="text-cap small">Billing</h6>

                  <!-- List -->
                  <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                    <li class="nav-item">
                      <a class="nav-link" href="billing">
                        <i class="fas fa-credit-card nav-icon"></i>
                        Plans &amp; payment
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="address">
                        <i class="fas fa-map-marker-alt nav-icon"></i>
                        Address
                      </a>
                    </li>
                  </ul>
                  <!-- End List -->

                  <div class="d-lg-none">
                    <div class="dropdown-divider"></div>

                    <!-- List -->
                    <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                      <li class="nav-item">
                        <a class="nav-link text-primary" href="#">
                          <i class="fas fa-sign-out-alt nav-icon"></i>
                          Log out
                        </a>
                      </li>
                    </ul>
                    <!-- End List -->
                  </div>
                </div>
              </div>
              <!-- End Card -->
            </div>
          </div>
          <!-- End Navbar -->
        </div>

        <div class="col-lg-9">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <div class="card-header">
              <h5 class="card-title">Basic info</h5>
            </div>

            <!-- Body -->
            <div class="card-body">
              <form>
                <!-- Form Group -->
                <div class="row form-group">
                  <label class="col-sm-3 col-form-label input-label">Profile photo</label>

                  <div class="col-sm-9">
                    <div class="media align-items-center">
                      <label class="avatar avatar-xl avatar-circle mr-4" for="avatarUploader">
                        <img id="avatarImg" class="avatar-img" src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
                      </label>

                      <div class="media-body">
                        <div class="btn btn-sm btn-primary file-attachment-btn mb-2 mb-sm-0 mr-2">Upload Photo
                          <input type="file" class="js-file-attach file-attachment-btn-label" id="avatarUploader"
                                 data-hs-file-attach-options='{
                                    "textTarget": "#avatarImg",
                                    "mode": "image",
                                    "targetAttr": "src"
                                 }'>
                        </div>

                        <a class="btn btn-sm btn-white mb-2 mb-sm-0" href="javascript:;">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed Publically."></i></label>

                  <div class="col-sm-9">
                    <div class="input-group">
                      <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="{{ Auth::user()->name }}" aria-label="Clarice" value="{{ Auth::user()->name }}">
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="emailLabel" placeholder="{{ Auth::user()->email }}" aria-label="{{ Auth::user()->email }}" value="{{ Auth::user()->email }}">
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-add-field row form-group"
                     data-hs-add-field-options='{
                        "template": "#addPhoneFieldTemplate",
                        "container": "#addPhoneFieldContainer",
                        "defaultCreated": 0
                      }'>
                  <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                  <div class="col-sm-9">
                    <div class="input-group align-items-center">
                      <input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+977(xxx)xxx-xx-xx" aria-label="+977(xxx)xxx-xx-xx" value="+977(605)5618932"
                             data-hs-mask-options='{
                               "template": "+977(000)000-00-00"
                             }'>
                    </div>

                    <!-- Container For Input Field -->
                    <div id="addPhoneFieldContainer"></div>

                    <a href="javascript:;" class="js-create-field form-link btn btn-xs btn-no-focus btn-ghost-primary">
                      <i class="fas fa-plus mr-1"></i>
                      Add phone
                    </a>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Tagline <i class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top" title="Your Title (Public)."></i></label>

                  <div class="col-sm-9">
                    <div class="input-group">
                      <input type="text" class="form-control" name="firstName" id="firsttagLabel" placeholder="{{ Auth::user()->tagline }}" aria-label="Clarice" value="{{ Auth::user()->tagline }}">
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label class="col-sm-3 col-form-label input-label">BIO</label>

                  <div class="col-sm-9">
                    <!-- Quill -->
                    <div class="quill-custom">
                      <div class="js-quill" style="min-height: 15rem;"
                           data-hs-quill-options='{
                           "placeholder": "Type your message...",
                            "modules": {
                              "toolbar": [
                                ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                              ]
                            }
                           }'>{{ Auth::user()->about }}
                      </div>
                    </div>
                    <!-- End Quill -->
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row align-items-center">
                  <label for="disableAdCheckbox" class="col-sm-3 col-form-label input-label">Disable ads <span class="badge badge-primary text-uppercase ml-1">PRO</span></label>

                  <div class="col-sm-9">
                    <!-- Custom Checkbox -->
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="disableAdCheckbox">
                      <label class="custom-control-label" for="disableAdCheckbox">With your Pro account, you can disable ads across the site.</label>
                    </div>
                    <!-- End Custom Checkbox -->
                  </div>
                </div>
                <!-- End Form Group -->
              </form>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer d-flex justify-content-end">
              <a class="btn btn-white" href="javascript:;">Cancel</a>
              <span class="mx-2"></span>
              <a class="btn btn-primary" href="javascript:;">Save Changes</a>
            </div>
            <!-- End Footer -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div id="editAddressCard" class="card mb-3 mb-lg-5">
            <div class="card-header">
              <h5 class="card-title">Address</h5>
            </div>

            <!-- Body -->
            <div class="card-body">
              <form>
                <!-- Form Group -->
                <div class="row form-group">
                  <label for="locationLabel" class="col-sm-3 col-form-label input-label">Location</label>

                  <div class="col-sm-9">
                    <!-- Select -->
                    <div class="mb-3">
                      <select class="js-custom-select" id="locationLabel"
                              data-hs-select2-options='{
                                "customClass": "custom-select",
                                "placeholder": "Select country",
                                "searchInputPlaceholder": "Search a country"
                              }'>
                        <option label="empty"></option>
                        <option value="AF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/images/vendor/flag-icon-css/flags/1x1/af.svg" alt="Afghanistan Flag" /><span class="text-truncate">Afghanistan</span></span>'>Afghanistan</option>
                       
                        <option value="ZW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/images/vendor/flag-icon-css/flags/1x1/zw.svg" alt="Zimbabwe Flag" /><span class="text-truncate">Zimbabwe</span></span>'>Zimbabwe</option>
                      </select>
                    </div>
                    <!-- End Select -->

                    <div class="mb-3">
                      <input type="text" class="form-control" name="city" id="cityLabel" placeholder="City" aria-label="City" value="London">
                    </div>
                    <input type="text" class="form-control" name="state" id="stateLabel" placeholder="State" aria-label="State">
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Address line 1</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="addressLine1" id="addressLine1Label" placeholder="Your address" aria-label="Your address" value="45 Roker Terrace, Latheronwheel">
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-add-field row form-group"
                     data-hs-add-field-options='{
                        "template": "#addAddressFieldTemplate",
                        "container": "#addAddressFieldContainer",
                        "defaultCreated": 0
                      }'>
                  <label for="addressLine2Label" class="col-sm-3 col-form-label input-label">Address line 2 <span class="input-label-secondary">(Optional)</span></label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="addressLine2" id="addressLine2Label" placeholder="Your address" aria-label="Your address">

                    <!-- Container For Input Field -->
                    <div id="addAddressFieldContainer"></div>

                    <a href="javascript:;" class="js-create-field form-link btn btn-xs btn-no-focus btn-ghost-primary">
                      <i class="fas fa-plus mr-1"></i>
                      Add address
                    </a>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Add Phone Input Field -->
                <div id="addAddressFieldTemplate" style="display: none;">
                  <div class="input-group-add-field">
                    <input type="text" class="form-control" data-name="addressLine" placeholder="Your address" aria-label="Your address">

                    <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                      <i class="fas fa-times"></i>
                    </a>
                  </div>
                </div>
                <!-- End Add Phone Input Field -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="zipCodeLabel" class="col-sm-3 col-form-label input-label">Zip code <i class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top" title="You can find your code in a postal address."></i></label>

                  <div class="col-sm-9">
                    <input type="text" class="js-masked-input form-control" name="zipCode" id="zipCodeLabel" placeholder="Your zip code" aria-label="Your zip code" value="KW5 8NW"
                           data-hs-mask-options='{
                             "template": "AA0 0AA"
                           }'>
                  </div>
                </div>
                <!-- End Form Group -->
              </form>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer d-flex justify-content-end">
              <a class="btn btn-white" href="javascript:;">Cancel</a>
              <span class="mx-2"></span>
              <a class="btn btn-primary" href="javascript:;">Save Changes</a>
            </div>
            <!-- End Footer -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <div class="card-header">
              <h5 class="card-title">Privacy</h5>
            </div>

            <!-- Body -->
            <div class="card-body">
              <form>
                <!-- Form Group -->
                <div class="row form-group">
                  <div class="col-sm-3">
                    <span class="d-block font-size-1 mb-2">Who can see your profile photo? <i class="far fa-question-circle" data-toggle="tooltip" data-placement="top" title="Your visibility setting only applies to your profile photo. Your header image is always visible to anyone."></i></span>
                  </div>

                  <div class="col-sm-9">
                    <!-- Select -->
                    <div class="select2-custom">
                      <select class="js-custom-select"
                              data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select"
                              }'>
                        <option value="privacy1" data-option-template='<span class="media"><i class="fas fa-globe-americas text-body mt-1 mr-2"></i><span class="media-body"><span class="d-block">Anyone</span><small class="select2-custom-hide">Visible to anyone who can view your content. Accessible by installed apps.</small></span></span>'>Anyone</option>
                        <option value="privacy2" data-option-template='<span class="media"><i class="fas fa-user-lock text-body mt-1 mr-2"></i><span class="media-body"><span class="d-block">Only you</span><small class="select2-custom-hide">Only visible to you.</small></span></span>'>Only you</option>
                      </select>
                     </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Form Group -->
              </form>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Delete your account</h5>
            </div>

            <!-- Body -->
            <div class="card-body">
              <p class="card-text">When you delete your account, you lose access to Front account services, and we permanently delete your personal data. You can cancel the deletion for 14 days.</p>

              <div class="form-group">
                <!-- Custom Checkbox -->
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="deleteAccountCheckbox">
                  <label class="custom-control-label" for="deleteAccountCheckbox">Confirm that I want to delete my account.</label>
                </div>
                <!-- End Custom Checkbox -->
              </div>

              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-danger transition-3d-hover">Delete</button>
              </div>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN ========== -->

@endsection