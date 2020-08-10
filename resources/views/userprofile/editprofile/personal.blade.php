@extends('layouts.userprofilemaster')

@section('content')

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
          <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i
              class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top"
              title="Displayed Publically."></i></label>

          <div class="col-sm-9">
            <div class="input-group">
              <input type="text" class="form-control" name="firstName" id="firstNameLabel"
                placeholder="{{ Auth::user()->name }}" aria-label="Clarice" value="{{ Auth::user()->name }}">
            </div>
          </div>
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="row form-group">
          <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email <i
              class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top"
              title="Registered Email Cannot be changed."></i></label>

          <div class="col-sm-9">
            <input type="email" class="form-control" name="email" id="emailLabel"
              placeholder="{{ Auth::user()->email }}" aria-label="{{ Auth::user()->email }}"
              value="{{ Auth::user()->email }}" readonly>
          </div>
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="js-add-field row form-group" data-hs-add-field-options='{
                        "template": "#addPhoneFieldTemplate",
                        "container": "#addPhoneFieldContainer",
                        "defaultCreated": 0
                      }'>
          <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span
              class="input-label-secondary">(Optional)</span></label>

          <div class="col-sm-9">
            <div class="input-group align-items-center">
              <input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel"
                placeholder="+977(xxx)xxx-xx-xx" aria-label="+977(xxx)xxx-xx-xx" value="+977(605)5618932"
                data-hs-mask-options='{
                               "template": "+977(000)000-00-00"
                             }'>
            </div>
          </div>
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="row form-group">
          <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Tagline <i
              class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top"
              title="Your Title (Public)."></i></label>

          <div class="col-sm-9">
            <div class="input-group">
              <input type="text" class="form-control" name="firstName" id="firsttagLabel"
                placeholder="{{ Auth::user()->tagline }}" aria-label="Clarice" value="{{ Auth::user()->tagline }}">
            </div>
          </div>
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="row form-group">
          <label class="col-sm-3 col-form-label input-label">BIO</label>

          <div class="col-sm-9">
            <!-- Quill -->
            <div class="form-group">
              <textarea class="form-control" placeholder="Short Description about yourself about skills and passion.."
                rows="5">{{ Auth::user()->about }}</textarea>
            </div>
            <!-- End Quill -->
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
      <form method="POST" action="{{ route('editProfile') }}">
        <!-- Form Group -->
        <div class="row form-group">
          <label for="locationLabel" class="col-sm-3 col-form-label input-label">Location</label>

          <div class="col-sm-9">
            <!-- Select -->
            <div class="mb-3">
              <select disabled class="js-custom-select" id="location" data-hs-select2-options='{
                                "customClass": "custom-select",
                                "placeholder": "Select country",
                                "searchInputPlaceholder": "Search a country"
                              }'>
                <option value="AF"
                  data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/images/svg/np.svg" alt="" /><span class="text-truncate">Nepal</span></span>'>
                  Nepal</option>
              </select>
            </div>
            <!-- End Select -->

            <!-- Select -->
            <div class="mb-3">
              <select class="js-custom-select" id="locationLabel" name="city_id" data-hs-select2-options='{
                                "customClass": "custom-select",
                                "placeholder": "Select City/District",
                                "searchInputPlaceholder": "Search a City/District"
                              }'>
                <option label="empty"></option>
                @foreach ($cities as $city)
                <option value="{{ $city->id }}"
                  data-option-template='<span class="d-flex align-items-center"><span class="text-truncate">{{ $city->name }}</span></span>'>
                  {{ $city->name }}</option>
                @endforeach
              </select>
            </div>
            <!-- End Select -->

          </div>
        </div>
        <!-- End Form Group -->

        <!-- Add Phone Input Field -->
        <div id="addAddressFieldTemplate" style="display: none;">
          <div class="input-group-add-field">
            <input type="text" class="form-control" data-name="addressLine" placeholder="Your address"
              aria-label="Your address">

            <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
              <i class="fas fa-times"></i>
            </a>
          </div>
        </div>
        <!-- End Add Phone Input Field -->

        <!-- Form Group -->
        <div class="row form-group">
          <label for="zipCodeLabel" class="col-sm-3 col-form-label input-label">Zip code <i
              class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top"
              title="You can find your code in a postal address."></i></label>

          <div class="col-sm-9">
            <input type="text" class="js-masked-input form-control" name="zipCode" id="zipCodeLabel"
              placeholder="Your zip code" aria-label="Your zip code" value="44700 LP" data-hs-mask-options='{
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
            <span class="d-block font-size-1 mb-2">Who can see your profile photo? <i class="far fa-question-circle"
                data-toggle="tooltip" data-placement="top"
                title="Your visibility setting only applies to your profile photo. Your header image is always visible to anyone."></i></span>
          </div>

          <div class="col-sm-9">
            <!-- Select -->
            <div class="select2-custom">
              <select class="js-custom-select" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select"
                              }'>
                <option value="privacy1"
                  data-option-template='<span class="media"><i class="fas fa-globe-americas text-body mt-1 mr-2"></i><span class="media-body"><span class="d-block">Anyone</span><small class="select2-custom-hide">Visible to anyone who can view your content.</small></span></span>'>
                  Anyone</option>
                <option value="privacy2"
                  data-option-template='<span class="media"><i class="fas fa-user-lock text-body mt-1 mr-2"></i><span class="media-body"><span class="d-block">Only you</span><small class="select2-custom-hide">Only visible to you.</small></span></span>'>
                  Only you</option>
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
      <p class="card-text">When you delete your account, you lose access to Front account services, and we
        permanently delete your personal data. You can cancel the deletion for 14 days.</p>

      <div class="form-group">
        <!-- Custom Checkbox -->
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="deleteAccountCheckbox">
          <label class="custom-control-label" for="deleteAccountCheckbox">Confirm that I want to delete my
            account.</label>
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

@endsection