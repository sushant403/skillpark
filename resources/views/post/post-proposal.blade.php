@extends('layouts.freelancers.freelancermaster')

@section('title','Post a Proposal | ' . Auth::user()->name)
@section('content')

<!-- main content -->
<main class="main main--breadcrumb">
    <!-- breadcrumb -->
    <div class="breadcrumb mb-n1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb__wrap mb-n1">
                        <li class="breadcrumb__item"><a class="font-weight-bold" href="{{ route('freelancer') }}">Find
                                Jobs</a></li>
                        <i class="mx-3 fa fa-angle-left"></i>
                        <li class="breadcrumb__item"><a class="font-weight-bold" href="javascript:history.back(-1)">Back
                                to Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-8 col-xl-9">
                <div id="applyForJob" class="border-top text-center pt-5 mb-4">
                    <h4>Post Your Proposal</h4>
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

            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                <!-- sidebox -->
                <div class="sidebox">
                    <h4 class="sidebox__title">Job summary</h4>
                    <ul class="sidebox__list">
                        <li><span>Budget:</span> <span>NPR {{ $job->budget ?? 'N/A' }}</span></li>
                        <li><span>Employment status:</span> <span>Freelancer</span></li>
                        <li><span>Experience:</span> <span>2 to 3 year(s)</span></li>
                        <li><span>Location:</span> <span>{{ $job->employer->city_id ?? 'N/A' }}</span></li>
                        <li><span>Company:</span> <span>{{ $job->employer->company ?? 'N/A'}}</span></li>
                        <li><span>Published:</span> <span>{{ $job->created_at ?? 'N/A' }}</span></li>
                    </ul>
                </div>
                <!-- end sidebox -->

                <!-- share -->
                <div class="sidebox">
                    <div class="sidebox__share">
                        <span>Share:</span>
                        <ul class="mb-n1">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook fa-sm"></i></a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-instagram fa-sm"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter fa-sm"></i></a></li>
                            <li class="vk"><a href="#"><i class="fa fa-linkedin fa-sm"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end share -->
            </div>
        </div>
    </div>
</main>
<!-- end main content -->

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