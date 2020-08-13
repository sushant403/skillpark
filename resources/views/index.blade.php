@extends('layouts.master')

@section('content')


<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="overflow-hidden">
    <!-- Hero Section -->
    <div class="position-relative bg-img-hero"
        style="background-image: url(/images/svg/components/abstract-shapes-12.svg);">
        <div class="container space-top-3 space-bottom-3 vh-100">
            <div class="row justify-content-lg-between align-items-lg-center pt-lg-5">
                <div class="col-lg-6">
                    <!-- Info -->
                    <div class="mb-5">
                        <h2 class="display-6 mb-3">
                            {{ __('nepali.Seek the perfect freelancer talents for your business!') }}</h2>
                        <p class="lead">{{ __('nepali.Hire expert freelancers for any job, any time') }}</p>
                    </div>
                    <!-- End Info -->

                    <!-- Form -->
                    <form class="mb-3">
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
                        </div>
                    </form>
                    <!-- End Form -->
                    <div class="col-lg-6">
                        <!-- Tags -->
                        <div class="d-sm-flex align-items-sm-center text-center text-sm-left">
                          <span class="d-block mr-sm-3 mb-2 mb-sm-1 text-muted" style="font-size: 13px">{{ __('nepali.Trending') }}:</span>
                          <a class="btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1" href="javascript:;">Flutter</a>
                          <a class="btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1" href="javascript:;">Laravel</a>
                          <a class="btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1" href="javascript:;">Django</a>
                          <a class="btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1" href="javascript:;">Translation</a>
                        </div>
                        <!-- End Tags -->
                      </div>
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
                        <span class="font-size-1">{{ __('nepali.Learn more')}}<i class="fas fa-angle-right fa-sm ml-1"></i></span>
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
                        <span class="font-size-1">{{ __('nepali.Learn more')}}<i class="fas fa-angle-right fa-sm ml-1"></i></span>
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
                        <span class="font-size-1">{{ __('nepali.Learn more')}}<i class="fas fa-angle-right fa-sm ml-1"></i></span>
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
                        <span class="font-size-1">{{ __('nepali.Learn more')}}<i class="fas fa-angle-right fa-sm ml-1"></i></span>
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
                    <h2 class="mb-3">{{ __('Grab the platform to enrich your potential and turn your passion into profession.') }}</h2>
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

    <!-- CTA Section -->
    <div class="container">
        <div class="w-lg-85 mx-lg-auto">
            <div class="card overflow-hidden p-5">
                <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                    <div class="col-md-8 col-lg-5 offset-lg-3 mb-3 mb-md-0">
                        <h3 class="h4 text-grey mb-0">{{ __('nepali.Revolutionizing the way Company hires!') }}</h3>
                    </div>

                    <div class="col-md-4 text-md-right">
                        <a class="btn btn-primary" href="#">{{ __('nepali.Learn more') }}</a>
                    </div>
                </div>

                <!-- SVG Component -->
                <figure class="w-35 position-absolute top-0 left-0 mt-n11 ml-n11">
                    <img class="img-fluid" src="/images/svg/components/half-circle-2.svg" alt="Image Description">
                </figure>
                <!-- End SVG Component -->
            </div>
        </div>
    </div>
    <!-- End CTA Section -->

    <section class="container pt-5 pb-4 mt-3 mt-md-0 pb-md-5 space-3">
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
                {{ __('nepali.Want to Explore more?') }} <a class="font-weight-bold ml-3" href="#">View all Categories <span
                        class="fas fa-angle-right ml-1"></span></a>
            </div>
        </div>
    </section>

    <!-- Icon Blocks Section -->
    <div id="aboutSection" class="container">
        <!-- Title -->
        <div class="w-lg-65 text-center mx-auto mb-5 mb-sm-9">
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
        <div class="w-md-60 w-lg-50 text-center mx-auto mb-7">
            <p class="text-dark"><span class="font-weight-bold">It is fast and easy.</span> Create your new or
                ongoing project with Qualified Freelancers.</p>
        </div>

</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection