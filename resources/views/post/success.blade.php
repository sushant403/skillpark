@extends('layouts.clients.clientmaster')

@section('content')

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- Cart Section -->
    <div class="container space-2 space-lg-3">
        <div class="w-md-80 w-lg-50 text-center mx-md-auto">
            <i class="fas fa-check-circle text-success fa-5x mb-3"></i>
            <div class="mb-5">
                <h1 class="h2">Your Process is completed!</h1>
                <p>Thank you! Your job has been posted successfully. You will receive emails if you get
                    any freelancer's bidding. The transaction amount will be returned to your account if anything goes
                    wrong. </p>
            </div>
            <a class="btn btn-primary btn-pill transition-3d-hover px-5" href="{{ route('myprojects') }}">My
                Projects</a>
            <a class="btn btn-secondary btn-pill px-5" href="{{ route('client') }}">Homepage</a>
        </div>
    </div>
    <!-- End Cart Section -->
</main>

@endsection