@extends('layouts.clients.clientmaster')

@section('title', 'Post Job | ' . Auth::user()->name)

@section('content')

<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Hero Section -->
    <div class="row">
        <div class="col-lg-8 col-md-12 mx-auto">
            <!-- Title -->
            <div class="py-6 text-center mx-md-auto ">
                <h3>Provide information about your project</h3>
                <p>To find the specific group of talents, narrow down the information and options.</p>
            </div>
            <!-- End Title -->

            <!-- Project Submission Form Section -->
            <div class="container space-bottom-lg-3">
                <form method="POST" action="{{ route('jobs.store') }}" enctype="multipart/form-data"
                    class="js-validate row justify-content-lg-center">
                    @csrf
                    <div class="col-lg-11 offset-1">
                        <!-- Input -->
                        <div class="js-form-message mb-4 mb-md-6">
                            <label class="input-label">Project Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Eg. Flutter App.."
                                required data-msg="Please enter name of your project">
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="js-form-message mb-4 mb-md-6">
                            <label class="input-label">Description about your project</label>
                            <textarea class="form-control" rows="5" minlength="50" maxlength="250" name="description"
                                placeholder="Hi there, I would like to ..." aria-label="Hi there, I would like to ..."
                                required data-msg="Please describe your project in at least 50 characters"></textarea>
                        </div>
                        <!-- End Input -->

                        <!-- Category Custom Select -->
                        <div class="js-form-message mb-4 mb-md-6">
                            <h4>Topic</h4>
                            <select class="js-custom-select" id="categoryLabel" name="topic" data-hs-select2-options='{
                                "customClass": "custom-select",
                                "placeholder": "Select Category",
                                "searchInputPlaceholder": "Search a Category"
                              }' required data-msg="Topic helps find specific talent group.">
                                <option label="empty"></option>
                                @foreach ($topics as $category) <option value="{{ $category->id }}"
                                    data-option-template='<span class="d-flex align-items-center"><span class="text-truncate">{{ $category->name }}</span></span>'>
                                    {{ $category->name }}</option> @endforeach
                            </select>
                        </div>
                        <!-- End Category Custom Select -->

                        <div class="js-form-message mb-4 mb-md-6">
                            <h5>Related Category</h5>
                            <select name="categories[]" class="js-custom-select-multiple" multiple="multiple"
                                data-hs-select2-options='{
                                "minimumResultsForSearch": "3",
                                "searchInputPlaceholder": "Search a Category"
                                }' required data-msg="Select at least one category.">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Input -->
                        <div class="mb-4 mb-md-6">
                            <label class="input-label">Company name <span
                                    class="text-muted font-weight-normal ml-1">(optional)</span></label>
                            <input type="text" class="form-control" name="company" placeholder="Eg. Skillpark Inc."
                                aria-label="Skillpark Inc.">
                        </div>
                        <!-- End Input -->

                        <!-- Platform -->
                        <div class="mb-4 mb-md-6">
                            <label class="input-label">Choose your Delivery Time <span
                                    class="text-muted font-weight-normal ml-1"></span></label>
                            <!-- Button Group -->
                            <div class="btn-group btn-group-toggle btn-group-segment d-flex" data-toggle="buttons">
                                <label class="btn flex-fill active">
                                    <input type="radio" name="delivery_time" value="48 Hours" checked> Express 48 Hours
                                </label>
                                <label class="btn flex-fill active">
                                    <input type="radio" name="delivery_time" value="7 Days"> Within a week
                                </label>
                                <label class="btn flex-fill active">
                                    <input type="radio" name="delivery_time" value="Upon Discussion"> Will Discuss Later
                                </label>
                            </div>
                            <!-- End Button Group -->
                        </div>
                        <!-- End Platform -->

                        {{-- <!-- Budget Custom Select -->
                        <div class="js-form-message mb-4 mb-md-6">
                            <label class="input-label">Your Estimated Budget?</label>
                            <select class="form-control custom-select" name="budget"
                                data-msg="Please select your budget." required>
                                <option class="text-muted" label="Choose your Budget" selected disabled></option>
                                <option value="5,000 - 20,000">Rs. 5,000 to Rs. 20,000</option>
                                <option value="20,000 - 50,000">Rs. 20,000 to Rs. 50,000</option>
                                <option value="50,000 - 1,00,000">Rs. 50,000 to Rs. 1,00,000</option>
                                <option value="1 Lakh +">Rs. 1,00,000+</option>
                            </select>
                        </div>
                        <!-- End Budget Custom Select --> --}}

                        <!-- Input -->
                        <div class="js-form-message mb-4 mb-md-6">
                            <label class="input-label">Your Estimated Budget? (NPR)<i
                                    class="far fa-question-circle text-body ml-1" data-toggle="tooltip"
                                    data-placement="right" title=""
                                    data-original-title="1% Service Fee will be deducted."></i></label>
                            <input type="number" class="form-control" name="budget" min="1000" max="100000"
                                placeholder="Enter your Budget" required
                                data-msg="Please enter your estimated Budget. (Between 1000 and One-Lakh NPR)">
                        </div>
                        <!-- End Input -->

                        <!-- Attachment Custom Select -->
                        <div class="form-group {{ $errors->has('attachments') ? 'has-error' : '' }}">
                            <label for="attachments">{{ trans('global.job.fields.attachments') }}</label>
                            <div class="needsclick dropzone border-1 border-dashed" id="attachments-dropzone">

                            </div>
                            @if($errors->has('attachments'))
                            <p class="help-block">
                                {{ $errors->first('attachments') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.job.fields.attachments_helper') }}
                            </p>
                        </div>
                        <!-- End Attachment Custom Select -->

                        <div class="text-center space-top-1">
                            <div class="mb-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <p class="small">By clicking 'Submit', you agree to the <a href="terms">Terms &
                                    Conditions</a>
                                and <a href="policy"> Privacy Policy </a></p>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Project Submission Form Section -->
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="position-relative">
                <div class="bg-img-hero" style="background-image: url(/images/svg/components/abstract-shapes-12.svg);">
                    <div class="container space-top-1 space-bottom-1 position-relative z-index-2">
                        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-2 mb-md-7">
                            <h3>Post a Job</h3>
                            <p>We'll help you connect to the most qualifed freelancers.</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <!-- Card -->
                            <a class="card text-center h-100 transition-3d-hover" href="#">
                                <div class="card-body p-lg-5">
                                    <figure class="max-w-8rem w-100 mx-auto mb-4">
                                        <img class="img-fluid" src="/images/svg/icons/icon-7.svg" alt="SVG">
                                    </figure>
                                    <h3 class="h4">Diverse Talents</h3>
                                    <p class="text-body mb-0">Find the freelancer with the specific requried
                                        skillset.</p>
                                </div>
                                <div class="card-footer font-weight-bold py-3 px-lg-5">
                                    Learn More <i class="fas fa-angle-right fa-sm ml-1"></i>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-md-12 mb-3">
                            <!-- Card -->
                            <a class="card text-center h-100 transition-3d-hover" href="#">
                                <div class="card-body p-lg-5">
                                    <figure class="max-w-8rem w-100 mx-auto mb-4">
                                        <img class="img-fluid" src="/images/svg/icons/icon-4.svg" alt="SVG">
                                    </figure>
                                    <h3 class="h4">Bid and Connect</h3>
                                    <p class="text-body mb-0">Let the freelancers bid on your project and you get to
                                        choose
                                        the best.</p>
                                </div>
                                <div class="card-footer font-weight-bold py-3 px-lg-5">
                                    Learn More <i class="fas fa-angle-right fa-sm ml-1"></i>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-md-12 mb-md-n11">
                            <!-- Card -->
                            <a class="card text-center h-100 transition-3d-hover" href="#">
                                <div class="card-body p-lg-5">
                                    <figure class="max-w-8rem w-100 mx-auto mb-4">
                                        <img class="img-fluid" src="/images/svg/icons/icon-31.svg" alt="SVG">
                                    </figure>
                                    <h3 class="h4">Simplified Payments</h3>
                                    <p class="text-body mb-0">Your money is safe with us, until the project is
                                        completed.
                                    </p>
                                </div>
                                <div class="card-footer font-weight-bold py-3 px-lg-5">
                                    Learn More <i class="fas fa-angle-right fa-sm ml-1"></i>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>
                    </div>
                </div>

                <!-- SVG Shape -->
                <figure class="position-absolute bottom-0 right-0 left-0">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        viewBox="0 0 1921 273">
                        <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
                    </svg>
                </figure>
                <!-- End SVG Shape -->
            </div>
            <!-- End Hero Section -->
        </div>

    </div>

</main>

@section('script')
<script>
    var uploadedAttachmentsMap = {}
Dropzone.options.attachmentsDropzone = {
    url: '{{ route('jobs.storeMedia') }}',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="attachments[]" value="' + response.name + '">')
      uploadedAttachmentsMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedAttachmentsMap[file.name]
      }
      $('form').find('input[name="attachments[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($proposal) && $proposal->attachments)
          var files =
            {!! json_encode($proposal->attachments) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="attachments[]" value="' + file.file_name + '">')
            }
@endif
    }
}
</script>
@stop

@endsection