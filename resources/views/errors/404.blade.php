@extends('layouts.master')

@section('content')
<!-- 404 Page -->
      <div class="container d-flex flex-column justify-content-center pt-5 mt-n6 vh-100" style="flex: 1 0 auto;">
        <div class="pt-7 pb-5">
          <div class="text-center mb-2 pb-4">
            <h1 class="mb-grid-gutter"><img class="d-inline-block pt-4" width="270" src="/images/svg/404.svg" alt=""/><span class="sr-only">Error 404</span><span class="d-block pt-3 font-size-xs font-weight-semibold text-danger" style="font-size: 14px">Error code: 404</span>
            </h1>
            <h2>Page not found!</h2>
            <p class="pb-2">It seems we can’t find the page you are looking for.</p><a class="btn btn-primary mr-3" href="{{ url('/') }}">Go to homepage</a><span>Or try</span>
          </div>
          <div class="form-group-overlay mx-auto" style="max-width: 390px;">
            <input class="form-control prepended-form-control" type="text" placeholder="Search">
          </div>
        </div>
      </div>
    </main>

<!-- End 404 Page -->
@endsection