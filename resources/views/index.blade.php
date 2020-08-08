@extends('layouts.master')

@section('content')


<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="overflow-hidden">
    <!-- Hero Section -->
    <div class="position-relative bg-img-hero"
        style="background-image: url(/images/svg/components/abstract-shapes-12.svg);">
        <div class="container space-top-3 space-bottom-lg-3">
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
                    <form class="mb-7">
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
                </div>
                <!-- Gallery -->
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="row align-items-end mx-n2">
                        <img src="/images/svg/banner.svg" width="500">
                    </div>
                </div>
                <!-- End Gallery -->
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Features Section -->
    <div id="featuresSection" class="container space-2 space-lg-2">
        <!-- Title -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h2">{{ __('nepali.Why Skillpark')}}</h2>
            <p>{{ __('nepali.Modern and Simplified Freelancer Platform.')}}</p>
        </div>
        <!-- End Title -->

        <div class="row mx-n2">
            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-lg-0">
                <!-- Icon Blocks -->
                <a class="card h-100" href="#">
                    <div class="card-body">
                        <figure class="w-100 max-w-8rem mb-4">
                            <img class="img-fluid" src="/images/svg/icons/icon-1.svg" alt="SVG">
                        </figure>
                        <h4>{{ __('nepali.Searching the Best Job')}}</h4>
                        <p class="font-size-1 text-body mb-0">Find Jobs according to categories and work on what best
                            qualifies your
                            skills and
                            payments you deserve.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <span class="font-size-1">{{ __('nepali.Learn more ')}}<i class="fas fa-angle-right fa-sm ml-1"></i></span>
                    </div>
                </a>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-lg-0">
                <!-- Icon Blocks -->
                <a class="card h-100" href="#">
                    <div class="card-body">
                        <figure class="w-100 max-w-8rem mb-4">
                            <img class="img-fluid" src="/images/svg/icons/icon-7.svg" alt="SVG">
                        </figure>
                        <h4>{{ __('nepali.Quality Hires')}}</h4>
                        <p class="font-size-1 text-body mb-0">{{ __('nepali.Thousands of Qualified Freelancers ready for your projects and business.')}}
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
                        <figure class="w-100 max-w-8rem mb-4">
                            <img class="img-fluid" src="/images/svg/icons/icon-2.svg" alt="SVG">
                        </figure>
                        <h4>{{ __('nepali.Collaborate easily')}}
                        </h4>
                        <p class="font-size-1 text-body mb-0">Use Skillpark to connect, share files, and track project milestones directly from the website.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <span class="font-size-1">Learn more <i class="fas fa-angle-right fa-sm ml-1"></i></span>
                    </div>
                </a>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-3 px-2 mb-3 mb-sm-0">
                <!-- Icon Blocks -->
                <a class="card h-100" href="#">
                    <div class="card-body">
                        <figure class="w-100 max-w-8rem mb-4">
                            <img class="img-fluid" src="/images/svg/icons/icon-31.svg" alt="SVG">
                        </figure>
                        <h4>{{ __('nepali.Simplified Payment ')}}</h4>
                        <p class="font-size-1 text-body mb-0">Using the national payment system, now the payments are faster and more
                            secure. Contracts
                            are there to backup.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <span class="font-size-1">Learn more <i class="fas fa-angle-right fa-sm ml-1"></i></span>
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
                    <h2 class="mb-3">Lightning-fast development with pre-built solutions</h2>
                    <p>Every team has a unique process for shipping software. Use an out-of-the-box workflow, or create
                        one to match the way your team works.</p>
                </div>

                <!-- Info -->
                <div class="media pb-3">
                    <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Extensive API documentation</p>
                    </div>
                </div>
                <div class="media py-3">
                    <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Customizable &amp; open source</p>
                    </div>
                </div>
                <div class="media pt-3">
                    <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Continiously improved</p>
                    </div>
                </div>
                <!-- End Info -->
            </div>

            <div class="col-lg-7 order-lg-1">
                <!-- Card Block -->
                <div class="pr-lg-4" data-aos="fade-up">
                    <div
                        class="card shadow-none bg-soft-primary text-indigo text-center w-lg-75 overflow-hidden pt-9 px-5 mx-lg-auto">
                        <div class="px-5 mb-5">
                            <h3>Choose a workflow, or make your own with Front Software</h3>
                        </div>

                        <!-- Device Mockup -->
                        <div class="device device-half-iphone-x w-85 mx-auto">
                            <img class="device-half-iphone-x-frame" src="/images/svg/components/half-iphone-x.svg"
                                alt="Image Description">
                            <img class="device-half-iphone-x-screen" src="/images/img/407x472/img7.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Device Mockup -->
                    </div>
                </div>
                <!-- End Card Block -->
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
                        <h3 class="h4 text-indigo mb-0">{{ __('nepali.Revolutionizing the way your team works!')}}</h3>
                    </div>

                    <div class="col-md-4 text-md-right">
                        <a class="btn btn-primary" href="#">{{ __('nepali.Explore Docs')}}</a>
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

    <section class="container pt-5 pb-4 mt-3 mt-md-0 pb-md-5 space-lg-3">
        <h2 class="text-center mb-6">{{ __('nepali.Explore the Marketplace')}}</h2>
        <div class="row">
            <div class="col-sm-3 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-9.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Sales and Marketing</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-16.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Web Development</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-17.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Transalation</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-7.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6"> Architecture Design</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-11.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Financial Advices</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-13.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6"> Blogs Writing</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-14.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6"> Legal Advices</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-3">
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
                Want to Explore more? <a class="font-weight-bold ml-3" href="#">View all Categories <span
                        class="fas fa-angle-right ml-1"></span></a>
            </div>
        </div>
    </section>

</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection