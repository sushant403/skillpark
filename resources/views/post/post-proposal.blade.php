@extends('layouts.freelancers.freelancermaster')

@section('title','Post a Proposal | ' . Auth::user()->name)
@section('content')

<!-- main content -->
<main class="main main--breadcrumb">

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-8 col-xl-9 mx-auto">
                <div class="bg-primary rounded p-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light mb-0">
                            <li class="breadcrumb-item"><a class="breadcrumb-link"
                                    href="{{ route('freelancer') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Back to Details</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
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
                                    <input type="text" class="form-control" name="comment" id="tagLabel"
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
                                    <input type="text" class="form-control" name="url" id="urlLabel"
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