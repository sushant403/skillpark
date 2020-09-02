@extends('layouts.master')

@section('content')

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="overflow-hidden">
    <!-- Hero Section -->
    <div class="position-relative bg-img-hero"
        style="background-image: url(/images/svg/components/abstract-shapes-12.svg);">
        <div class="container space-top-3 space-bottom-1 space-bottom-lg-5">
            <div class="row justify-content-lg-between align-items-lg-center pt-md-5">
                <div class="col-lg-6 ml-7 pt-2">
                    <!-- Info -->
                    <div class="mb-5">
                        <h2 class="display-6 mb-3">
                            {{ __('nepali.Seek the perfect freelancer talents for your business!') }}</h2>
                        {{-- <p class="lead">{{ __('nepali.Hire experts for any job, any where, any time') }}</p> --}}
                    </div>
                    <!-- End Info -->

                    <!-- Form -->
                    <form action="{{ route('search') }}" class="mb-3">
                        <div class="form-row">
                            <div class="col-sm col-md-6 col-lg-9 mb-2">
                                <div class="js-form-message">
                                    <label class="sr-only"
                                        for="signupSrEmail">{{ __('nepali.Search for Services') }}..</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search"
                                            placeholder="{{ __('nepali.Search for Services') }}.."
                                            aria-label="{{ __('nepali.Search for Services') }}.." required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-auto">
                                <button type="submit"
                                    class="btn btn-primary btn-block">{{ __('nepali.Search') }}</button>
                            </div>
                    </form>
                </div>
                </form>
                <!-- End Form -->
                <!-- Tags -->
                <div class="d-sm-flex align-items-sm-center text-center text-sm-left">
                    <span class="d-block mr-1 mb-2 mb-sm-1 text-muted"
                        style="font-size: 13px">{{ __('nepali.Trending') }}:</span>
                    @foreach($searchByCategory as $id=>$searchByCategory)
                    <a class="btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1"
                        href="{{ route('categories.show', $id) }}">{{ $searchByCategory }}</a>@if(!$loop->last)@endif
                    @endforeach
                </div>
                <!-- End Tags -->
            </div>
            <!-- SVG Shape -->
            <figure class="col-lg-6 col-xl-6 d-none d-lg-block position-absolute top-0 right-0 pr-0 ie-main-hero"
                style="margin-top: 4.45rem;">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1137.5 979.2">

                    <defs>
                        <path id="mainHeroSVG1"
                            d="M1137.5,0H450.4l-278,279.7C22.4,430.6,24.3,675,176.8,823.5l0,0C316.9,960,537.7,968.7,688.2,843.6l449.3-373.4V0z" />
                    </defs>
                    <clipPath id="mainHeroSVG2">
                        <use xlink:href="#mainHeroSVG1" />
                    </clipPath>
                    <g transform="matrix(1 0 0 1 0 0)" clip-path="url(#mainHeroSVG2)">
                        <image width="700" height="700" xlink:href="/images/homepage/banner.jpg"
                            transform="matrix(1.4462 0 0 1.4448 52.8755 0)"></image>
                    </g>
                </svg>
            </figure>
            <!-- End SVG Shape -->
        </div>
    </div>
    </div>
    <!-- End Hero Section -->

    <!-- Features Section -->
    <div id="featuresSection" class="container space-2 space-lg-2 text-center">
        <!-- Title -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h3">{{ __('nepali.Why Skillpark') }}</h2>
            <p>{{ __('nepali.Modern and Simplified Freelancer Platform') }}</p>
        </div>
        <!-- End Title -->

        <div class="row mx-n2">
            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-lg-0">
                <!-- Icon Blocks -->
                <a class="card h-100" href="#">
                    <div class="card-body">
                        <figure class="w-100 max-w-8rem mb-4 mx-auto">
                            <img class="img-fluid" src="/images/svg/icons/icon-1.svg" alt="SVG">
                        </figure>
                        <h4>{{ __('nepali.Searching the Best Job')}}</h4>
                        <p class="font-size-1 text-body mb-0">Find Jobs according to categories and work on what best
                            qualifies your
                            skills and
                            payments you deserve.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <span class="font-size-1">{{ __('nepali.Learn more')}}<i
                                class="fas fa-angle-right fa-sm ml-1"></i></span>
                    </div>
                </a>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-lg-0">
                <!-- Icon Blocks -->
                <a class="card h-100" href="#">
                    <div class="card-body">
                        <figure class="w-100 max-w-8rem mb-4 mx-auto">
                            <img class="img-fluid" src="/images/svg/icons/icon-7.svg" alt="SVG">
                        </figure>
                        <h4>{{ __('nepali.Quality Hires') }}</h4>
                        <p class="font-size-1 text-body mb-0">Thousands of Qualified Freelancers ready for your projects
                            and business.
                            Either find them
                            or let them bid.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <span class="font-size-1">{{ __('nepali.Learn more')}}<i
                                class="fas fa-angle-right fa-sm ml-1"></i></span>
                    </div>
                </a>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2">
                <!-- Icon Blocks -->
                <a class="card h-100" href="#">
                    <div class="card-body">
                        <figure class="w-100 max-w-8rem mb-4 mx-auto">
                            <img class="img-fluid" src="/images/svg/icons/icon-2.svg" alt="SVG">
                        </figure>
                        <h4>{{ __('nepali.Collaborate easily')}}
                        </h4>
                        <p class="font-size-1 text-body mb-0">Use Skillpark to connect, share files, and track project
                            milestones directly from the website.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <span class="font-size-1">{{ __('nepali.Learn more')}}<i
                                class="fas fa-angle-right fa-sm ml-1"></i></span>
                    </div>
                </a>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-sm-0">
                <!-- Icon Blocks -->
                <a class="card h-100" href="#">
                    <div class="card-body">
                        <figure class="w-100 max-w-8rem mb-4 mx-auto">
                            <img class="img-fluid" src="/images/svg/icons/icon-31.svg" alt="SVG">
                        </figure>
                        <h4>{{ __('nepali.Simplified Payment') }} </h4>
                        <p class="font-size-1 text-body mb-0">Using the national payment system, now the payments are
                            faster and more
                            secure with contracts</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <span class="font-size-1">{{ __('nepali.Learn more')}}<i
                                class="fas fa-angle-right fa-sm ml-1"></i></span>
                    </div>
                </a>
                <!-- End Icon Blocks -->
            </div>
        </div>
    </div>
    <!-- End Features Section -->

    <!-- Features Section -->
    <div class="container space-2 space-lg-2">
        <div class="row align-items-lg-center">
            <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                <div class="mb-5">
                    <h2 class="mb-3">
                        {{ __('Grab the platform to enrich your potential and turn your passion into profession.') }}
                    </h2>
                    <p>{{ __('Finding the passionate and independent job has never been this simple and secure.') }}</p>
                </div>

                <!-- Info -->
                <div class="media pb-3">
                    <span class="icon icon-xs icon-soft-grey icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Easy to Post Job <b>(and free)</b></p>
                    </div>
                </div>
                <div class="media py-3">
                    <span class="icon icon-xs icon-soft-grey icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Controlled &amp; dynamic bidding</p>
                    </div>
                </div>
                <div class="media pt-3">
                    <span class="icon icon-xs icon-soft-grey icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Continiously improved</p>
                    </div>
                </div>
                <!-- End Info -->
            </div>

            <div class="col-lg-7 order-lg-1">
                <!-- Video Block -->
                <div id="youTubeVideoPlayerExample1" class="video-player bg-dark">
                    <!-- Cover Image -->
                    <img class="img-fluid video-player-preview" src="/images/homepage/videobanner.png" alt="Image">

                    <!-- Play Button -->
                    <a class="js-inline-video-player video-player-btn video-player-centered" href="javascript:;"
                        data-hs-video-player-options='{
                                                        "videoId": "h2JcePh7vls",
                                                        "parentSelector": "#youTubeVideoPlayerExample1",
                                                        "targetSelector": "#youTubeVideoIframeExample1",
                                                        "isAutoplay": true,
                                                        "classMap": {
                                                        "toggle": "video-player-played"
                                                        }
                                                    }'>
                        <span class="video-player-icon">
                            <i class="fas fa-play"></i>
                        </span>
                    </a>
                    <!-- End Play Button -->

                    <!-- Video Iframe -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <div id="youTubeVideoIframeExample1"></div>
                    </div>
                    <!-- End Video Iframe -->
                </div>
                <!-- End Video Block -->
            </div>
        </div>
    </div>
    <!-- End Features Section -->

    <section class="container pb-4 pb-md-5 space-2">
        <h3 class="text-center mb-6">{{ __('nepali.Explore the Marketplace') }}</h3>
        <div class="row">
            <div class="col-sm-3 col-md-3 py-3 w-50">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-9.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Sales and Marketing</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3 w-50">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-16.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Web Development</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3 w-50">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-17.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Transalation</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3 w-50">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-7.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6"> Architecture Design</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3 w-50">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-11.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Financial Advices</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3 w-50">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-13.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6"> Blogs Writing</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3 w-50">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-14.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6"> Legal Advices</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3 w-50">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-15.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6"> Networking</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4">
                {{ __('nepali.Want to Explore more?') }} <a class="font-weight-bold ml-3" href="#">View all Categories
                    <span class="fas fa-angle-right ml-1"></span></a>
            </div>
        </div>
    </section>

        @include('layouts.divisions.recentjobs')

    <!-- Features Section -->
    <div class="overflow-hidden">
        <div class="container space-2">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-lg-6 mb-9 mb-lg-0">
                    <!-- Mockups -->
                    <div class="position-relative max-w-40rem mx-auto">
                        <div class="device device-iphone-x w-85 mx-auto">
                            <img class="device-iphone-x-frame" src="/images/svg/components/iphone-x.svg" alt="">
                            <img class="device-iphone-x-screen" src="/images/banner/screenstep.jfif" alt="">
                        </div>

                        <div class="position-absolute top-0 right-0 z-index-2 max-w-33rem mr-n11 mt-9">
                            <img class="img-fluid shadow-lg rounded" src="/images/banner/slackprice.jpg" alt="">
                        </div>
                        <div class="position-absolute bottom-0 left-0 z-index-2 max-w-33rem ml-n10 mb-10">
                            <img class="img-fluid shadow-lg rounded" src="/images/banner/stepwoman.jpg" alt="">
                        </div>

                        <div class="position-absolute bottom-0 right-0 max-w-50rem w-100 z-index-n1 mx-auto">
                            <img class="img-fluid" src="/images/svg/components/abstract-shapes-3.svg" alt="">
                        </div>
                    </div>
                    <!-- End Mockups -->
                </div>

                <div class="col-lg-5">
                    <div class="mb-5">
                        <h2>Qualified Freelancers Awaits</h2>
                        <p>Mobile Friendly within the Comfort of your hand
                    </div>

                    <!-- Icon Block -->
                    <ul class="step step-dashed mb-7">
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-xs step-icon-soft-primary">1</span>
                                <div class="step-content">
                                    <h3 class="h4">Tap into an amazing talent network</h3>
                                    <p>Get unmatched quality from proven
                                        independent professionals and specialized agencies. Get a smarter shortlist,
                                        instantly
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-xs step-icon-soft-primary">2</span>
                                <div class="step-content">
                                    <h4>Get a smarter shortlist, instantly</h4>
                                    <p>Our instant matching tech generates a shortlist based on the criteria you
                                        select.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="step-item mb-0">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-xs step-icon-soft-primary">3</span>
                                <div class="step-content">
                                    <h4>Dynamic Bidding System</h4>
                                    <p class="mb-0">Find any service within minutes and know exactly what you’ll
                                        pay. No
                                        hourly rates, just a fixed price.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- End Icon Block -->

                    <div class="mt-2">
                        @guest
                        <a class="btn btn-primary transition-3d-hover px-4" href="{{ route('register') }}">Join
                            Skillpark</a>
                        @else
                        <a class="btn btn-primary transition-3d-hover px-4" href="{{ route('home') }}">Dashboard</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Section -->


    <!-- Icon Blocks Section -->
    <div id="aboutSection" class="container">
        <!-- Title -->
        <div class="w-lg-65 text-center mx-auto space-2">
            <h2 class="h3">{{ __('nepali.What we do?') }}</h2>
            <p>{{ __('nepali.A dynamic platform for modern job hiring.') }}</p>
        </div>
        <!-- End Title -->

        <div class="row">
            <div class="col-md-4 mb-7">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-8rem mx-auto mb-4">
                        <img class="img-fluid" src="/images/svg/icons/icon-45.svg" alt="SVG">
                    </figure>
                    <h3>Industry-leading freelancers</h3>
                    <p>Achieve virtually any skills with the dynamicity of Skillpark.</p>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-4 mb-7">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-8rem mx-auto mb-4">
                        <img class="img-fluid" src="/images/svg/icons/icon-14.svg" alt="SVG">
                    </figure>
                    <h3>Learn from the experts</h3>
                    <p>Whether you're a startup or an enterprise, learn how to integrate with Skillpark.</p>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-4 mb-7">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-8rem mx-auto mb-4">
                        <img class="img-fluid" src="/images/svg/icons/icon-23.svg" alt="SVG">
                    </figure>
                    <h3>Accelerate your business</h3>
                    <p>We have helped power hundreds of businesses to build and run smoothly.</p>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
        <img class="img-fluid d-none d-md-block w-75 mx-auto mb-7" src="/images/svg/components/three-pointers.svg"
            alt="SVG Arrow">

        <!-- CTA Section -->
        <div class="container">
            <div class="w-lg-85 mx-lg-auto">
                <div class="card overflow-hidden p-5">
                    <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                        <div class="col-md-8 col-lg-5 offset-lg-3 mb-3 mb-md-0">
                            <h3 class="h4 text-grey mb-0">{{ __('nepali.Revolutionizing the way Company hires!') }}
                            </h3>
                        </div>

                        <div class="col-md-4 text-md-right">
                            <a class="btn btn-secondary" href="#">{{ __('nepali.Learn more') }}</a>
                        </div>
                    </div>

                    <!-- SVG Component -->
                    <figure class="w-35 position-absolute top-0 left-0 mt-n11 ml-n11">
                        <img class="img-fluid" src="/images/svg/components/half-circle-2.svg" alt="">
                    </figure>
                    <!-- End SVG Component -->
                </div>
            </div>
        </div>
        <!-- End CTA Section -->

        <!-- Title -->
        <div class="w-lg-65 text-center mx-auto space-top-3">
            <h2 class="h3">{{ __('Happy Customers') }}</h2>
            <p>{{ __('Skillpark always keeps customers satisfaction in the front.') }}</p>
        </div>
        <!-- End Title -->
        <div class="bg-light rounded mx-3 my-7 mx-md-11">
            <div class="container space-bottom-lg-0 space-bottom-md-2">
                <div class="card bg-transparent shadow-none">
                    <div class="row">
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="auto-init height-is-based-on-content use-loading mode-scroll bg-light"
                                style="overflow: visible;">
                                <div style="transform: translate3d(0px, 1.13488rem, 0px);">
                                    <img class="img-fluid rounded shadow-lg max-w-23rem"
                                        src="/images/homepage/dipeshbhattarai.jpg" alt="">

                                    <!-- SVG Shapes -->
                                    <figure class="max-w-15rem w-100 position-absolute bottom-0 left-0 z-index-n1">
                                        <div class="mb-n7 ml-n7">
                                            <img class="img-fluid" src="/images/svg/components/dots-5.svg" alt="">
                                        </div>
                                    </figure>
                                    <!-- End SVG Shapes -->
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <!-- Card Body -->
                            <div class="card-body h-100 rounded p-0 p-md-4">
                                <!-- SVG Quote -->
                                <figure class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36"
                                        viewBox="0 0 8 8">
                                        <path fill="#377dff" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                            C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                            c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                            C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"></path>
                                    </svg>
                                </figure>
                                <!-- End SVG Quote -->

                                <div class="row">
                                    <div class="col-lg-8 mb-3 mb-lg-0">
                                        <div class="pr-lg-5">
                                            <blockquote class="h3 font-weight-normal mb-4">Awesome. एस्लाई Launch
                                                गर्नु
                                                पर्छ ।</blockquote>
                                            <div class="media">
                                                <div class="avatar avatar-xs avatar-circle d-lg-none mr-2">
                                                    <img class="avatar-img" src="images/homepage/dipeshbhattarai.jpg"
                                                        alt="">
                                                </div>
                                                <div class="media-body">
                                                    <span class="text-dark font-weight-bold">Er. Dipesh
                                                        Bhattarai</span>
                                                    <span class="font-size-1">— Project Supervisor</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 column-divider-lg">
                                        <hr class="d-lg-none">

                                        <div class="pl-lg-5">
                                            <span class="h3 text-primary">A Start</span>
                                            <p class="font-size-1">Motivations like this encourges the eager to
                                                learn
                                                students for more.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card Body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection