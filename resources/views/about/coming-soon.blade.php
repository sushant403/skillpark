@extends('layouts.security')

@section('content')

    <!-- Page content-->
    <div class="container d-flex flex-column justify-content-center py-5" style="flex: 1 0 auto;padding-top:120px !important">
        <div class="row align-items-center pb-2">
            <div class="col-xl-5 col-md-6 text-center text-md-left mb-5 mb-md-0">
                <h1 class="mb-3">Coming soon...</h1>
                <p class="mb-grid-gutter">We are working hard to deliver best possible experience. The website is
                    currently under construction. <u>It goes live in:</u></p>
                <div class="cs-countdown h2 justify-content-center justify-content-md-start"
                    data-countdown="08/13/2020 09:00:00 AM">
                    <div class="cs-countdown-days mr-grid-gutter"><span class="cs-countdown-value">0</span><span
                            class="cs-countdown-label text-body font-size-sm">Days</span></div>
                    <div class="cs-countdown-hours mr-grid-gutter"><span class="cs-countdown-value">0</span><span
                            class="cs-countdown-label text-body font-size-sm">Hours</span></div>
                    <div class="cs-countdown-minutes mr-grid-gutter"><span class="cs-countdown-value">0</span><span
                            class="cs-countdown-label text-body font-size-sm">Mins</span></div>
                    <div class="cs-countdown-seconds"><span class="cs-countdown-value">0</span><span
                            class="cs-countdown-label text-body font-size-sm">Secs</span></div>
                </div>
                <p class="pt-4">Let me know when your website is live.</p>
                <form class="d-flex align-items-start needs-validation" novalidate>
                    <div class="mr-2 mr-sm-3 w-100">
                        <input class="form-control" type="email" placeholder="Email address" required>
                        <div class="invalid-tooltip">Please provide a valid email address!</div>
                    </div>
                    <button class="btn btn-primary" type="submit">Notify Me</button>
                </form>
            </div>
            <div class="col-md-6 offset-xl-1"><img class="d-block mx-auto" src="images/svg/ipad.svg"
                    alt="Illustration" />
            </div>
        </div>
    </div>

@endsection