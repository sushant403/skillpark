@extends('layouts.master')

@section('content')
<!-- 404 Page -->
<section class="py-5 bg-white border-top border-bottom">
    <div class="container">
        <div class="row" style="padding-top: 6rem">
            <div class="col-lg-8 col-md-8 mx-auto text-center">
                <h1><img class="img-fluid" src="/images/404.png" alt="404" width="400"></h1>
                <h1>Sorry! Page not found.</h1>
                <p class="land">Unfortunately the page you are looking for has been moved or deleted.</p>
                <div class="mt-5">
                    <a href="{{ url('/') }}" class="btn btn-success"><i class="mdi mdi-home"></i> GO TO HOME PAGE</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End 404 Page -->
@endsection