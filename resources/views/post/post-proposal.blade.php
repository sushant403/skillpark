@extends('layouts.freelancers.freelancermaster')

@section('title','Post a Proposal | ' . Auth::user()->name)
@section('content')

<!-- ========== MAIN ========== -->
<main id="content" role="main" class="bg-light">
    <!-- Career Detail Section -->
    <div class="container space-top-1 space-top-lg-1 space-bottom-2 space-bottom-lg-3">
        <div class="w-lg-80 mx-auto">
            <!-- Jobs Link -->
            <div class="mb-4">
                <a class="font-weight-bold" href="{{ route('home') }}">
                    <i class="fas fa-angle-left fa-sm mr-1"></i>
                    Back to Job Listings
                </a>
            </div>
            <!-- End Jobs Link -->

            <div class="card space-bottom-2 p-4 p-md-7">
                <!-- Title -->
                <div class="row justify-content-sm-between align-items-sm-center mb-5">
                    <div class="col-sm mb-3 mb-sm-0">
                        <h1 class="h3">{{ $job->title ?? 'Job Title' }}</h1>
                        <p class="mb-0"><i class="fa fa-map-marker-alt mr-1"></i>
                            {{ $job->employer->city->name ?? 'Employer Location'}}</p>
                    </div>

                    <div class="col-sm-auto text-sm-right">
                        <a class="js-go-to position-static btn btn-primary transition-3d-hover" href="javascript:;"
                            data-hs-go-to-options='{
                                                    "targetSelector": "#applyForJob",
                                                    "compensationSelector": "#logoAndNav",
                                                    "offsetTop": 0,
                                                    "position": null,
                                                    "animationIn": false,
                                                    "animationOut": false
                                                    }'>
                            Apply Now
                        </a>
                    </div>
                </div>
                <!-- End Title -->

                <div class="mb-5">
                    <p>{{ $job->description ?? 'Job Description' }}</p>
                </div>

                <div class="mb-5">
                    <h3 class="h4">Requirements:</h3>

                    <ul>
                        <li>Excited to mentor more junior developers</li>
                        <li>Good at problem selection, problem solving, and course correcting</li>
                        <li>Focused on best practices</li>
                        <li>Highly pragmatic and collaborative</li>
                    </ul>
                </div>

                <div class="mb-5">
                    <p>Demonstrate your initiative, intuition and results from whatever you've been working on in the
                        past. Show us what you've been up to and we will do the same!</p>
                </div>

                <div id="applyForJob" class="border-top text-center pt-5 mb-4 mb-md-7">
                    <h3>Apply for this Job</h3>
                </div>

                <!-- Apply Form -->
                <form action="{{ route("proposals.store") }}" method="POST" enctype="multipart/form-data"
                    class="js-validate">
                    @csrf
                    <input type="hidden" name="job_id" value="{{ request('job_id') }}" />

                    <div class="mb-3 mb-md-5">
                        <!-- Input -->
                        <div class="js-form-message">
                            <label class="input-label">Proposal Text</label>
                            @if($errors->has('proposal_text'))
                            <p class="feedback">
                                {{ $errors->first('proposal_text') }}
                            </p>
                            @endif
                            <div class="input-group">
                                <textarea class="form-control" rows="6" minlength="50" maxlength="250"
                                    name="proposal_text"
                                    placeholder="Write Something that would attract client's attention..."
                                    aria-label="Write Something that would attract client's attention..." required
                                    data-msg="'Proposal Text' is required and should be at least 50 characters."></textarea>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3 mb-md-5">
                            <!-- Input -->
                            <div class="js-form-message">
                                <label class="input-label" for="tagLabel">Statement Of Purpose Title</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="delivery_time" id="tagLabel"
                                        placeholder="(eg. 3 years+ experience in PHP)"
                                        aria-label="(eg. 3 years+ experience in PHP)" required
                                        data-msg="First thing Client sees is your SOP.">
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>

                        <div class="col-md-6 mb-3 mb-md-5">
                            <!-- Input -->
                            <div class="js-form-message">
                                <label class="input-label" for="budgetLabel">Required Budget <span
                                        class="text-muted font-weight-normal ml-1">(Optional)</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="budget" id="budgetLabel"
                                        placeholder="Budget (NPR)" aria-label="Budget">
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>

                        <div class="col-md-6 mb-3 mb-md-5">
                            <!-- Input -->
                            <div class="js-form-message">
                                <label class="input-label" for="urlLabel">URL <span
                                        class="text-muted font-weight-normal ml-1">(Optional)</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="URL" id="urlLabel"
                                        placeholder="Linkedin" aria-label="Linkedin">
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>
                    </div>

                    <!-- Attachment Custom Select -->
                    <div class="form-group {{ $errors->has('attachments') ? 'has-error' : '' }}">
                        <label for="attachments">{{ trans('global.job.fields.attachments') }}</label>
                        <div class="needsclick dropzone border-1 border-dashed" id="attachments-dropzone">

                        </div>
                        @if($errors->has('attachments'))
                        <p class="feedback" style="color:red">
                            {{ $errors->first('attachments') }}
                        </p>
                        @endif
                        <p class="helper-block">
                            {{ trans('global.proposal.fields.attachments_helper') }}
                        </p>
                    </div>
                    <!-- End Attachment Custom Select -->

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary transition-3d-hover">Submit Proposal</button>
                    </div>
                    <p class="small text-center pt-3">By clicking 'Submit', you agree to the <a href="terms">Terms &
                            Conditions</a>
                        and <a href="policy"> Privacy Policy </a></p>
                </form>
                <!-- End Apply Form -->
            </div>
        </div>
    </div>
    <!-- End Bidding Detail Section -->
</main>
<!-- ========== END MAIN ========== -->

@section('script')
<script>
    var uploadedAttachmentsMap = {}
Dropzone.options.attachmentsDropzone = {
    url: '{{ route('proposals.storeMedia') }}',
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