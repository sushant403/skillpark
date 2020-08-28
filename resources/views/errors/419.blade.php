@extends('layouts.errormaster')

@section('title', 'Page Expired - Skillpark Inc.')
@section('content')
<!-- 419 Page -->
<div class="container d-flex flex-column justify-content-center pt-5 mt-n6 vh-100" style="flex: 1 0 auto;">
  <div class="pt-7 pb-5">
    <div class="text-center mb-3 pb-4">
      <h1 class="mb-grid-gutter mb-5"><img class="d-inline-block pt-4" width="270" src="/images/svg/404.svg" alt="" /><span
          class="sr-only">Error 404</span><span class="d-block pt-3 font-size-xs font-weight-semibold text-danger"
          style="font-size: 14px">Error code: 419</span>
      </h1>
      <h3>Uh oh! Page Expired!</h3>
      <p class="pb-2">We are not being able to process. Please try again later.</p><a class="btn btn-primary mr-3"
        href="{{ url('/') }}">Go to homepage</a>
    </div>
  </div>
</div>
<!-- End 419 Page -->
@endsection