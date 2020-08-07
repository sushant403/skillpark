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
                            <div class="col-sm col-md-6 col-lg mb-2">
                                <div class="js-form-message">
                                    <label class="sr-only"
                                        for="signupSrEmail">{{ __('nepali.Search for Services') }}..</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="search"
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
        <div class="col-lg-5">
            <div class="row align-items-end mx-n2">
                <img src="/images/svg/banner.svg" width="600">
            </div>
        </div>
        <!-- End Gallery -->
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Icon Blocks Section -->
    <div class="container space-2 space-lg-2">

        <div class="row">
            <div class="col-md-4 mb-5 mb-md-0">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-10rem mx-auto mb-4">
                        <img class="img-fluid" src="/images/svg/icons/icon-1.svg" alt="SVG">
                    </figure>
                    <h3>Searching the Best Job</h3>
                    <p>Find Jobs according to categories and work on what best qualifies your
                        skills and
                        payments you deserve.</p>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-4 mb-5 mb-md-0">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-10rem mx-auto mb-4">
                        <img class="img-fluid" src="/images/svg/icons/icon-7.svg" alt="SVG">
                    </figure>
                    <h3>Quality Hires</h3>
                    <p>Thousands of Qualified Freelancers ready for your projects and business.
                        Either find them
                        or let them bid.</p>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-4">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-10rem mx-auto mb-4">
                        <img class="img-fluid" src="/images/svg/icons/icon-31.svg" alt="SVG">
                    </figure>
                    <h3>Simplified Payment</h3>
                    <p>Using the national payment system, now the payments are faster and more
                        secure. Contracts
                        are there to backup.</p>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
    </div>
    <!-- End Icon Blocks Section -->

    <section class="container pt-3 pb-4 mt-3 mt-md-0 mb-md-3 pb-md-5 pt-md-5">
        <h2 class="text-center mb-6">Explore the Marketplace</h2>
        <div class="row">
            <div class="col-sm-6 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-9.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Sales and Marketing</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-16.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Web Development</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-17.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Transalation</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-7.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6"> Architecture Design</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-11.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6">Financial Advices</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-13.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6"> Blogs Writing</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                        src="/images/homepage/categories/icon-14.svg" alt="Icon" />
                    <a href="">
                        <h3 class="h6"> Legal Advices</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 py-3">
                <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
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

    <!-- Features Section -->
    <div class="overflow-hidden">
        <div class="container space-top-2 space-top-lg-3 space-bottom-3">
            <!-- Title -->
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <h2>Features built for scale</h2>
                <p>Get insights to dig down into what's powering your growth the most.</p>
            </div>
            <!-- End Title -->

            <div class="row">
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-7">
                            <!-- Icon Blocks -->
                            <div class="pr-lg-6">
                                <figure class="max-w-6rem w-100 mb-4">
                                    <img class="img-fluid" src="/images/svg/icons/icon-2.svg" alt="SVG">
                                </figure>
                                <h3 class="h4">Smart Dashboards</h3>
                                <p class="text-body">This is where we really begin to visualize your napkin sketches and
                                    make them into beautiful pixels.</p>
                            </div>
                            <!-- End Icon Blocks -->
                        </div>

                        <div class="col-sm-6 mb-3 mb-sm-7">
                            <!-- Icon Blocks -->
                            <div class="pr-lg-6">
                                <figure class="max-w-6rem w-100 mb-4">
                                    <img class="img-fluid" src="/images/svg/icons/icon-1.svg" alt="SVG">
                                </figure>
                                <h4>Control Center</h4>
                                <p class="text-body">Now that we've aligned the details, it's time to get things mapped
                                    out and organized.</p>
                            </div>
                            <!-- End Icon Blocks -->
                        </div>

                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <!-- Icon Blocks -->
                            <div class="pr-lg-6">
                                <figure class="max-w-6rem w-100 mb-4">
                                    <img class="img-fluid" src="/images/svg/icons/icon-15.svg" alt="SVG">
                                </figure>
                                <h4>Email Reports</h4>
                                <p class="text-body">We strive to embrace and drive change in our industry which allows
                                    us to keep our clients relevant.</p>
                            </div>
                            <!-- End Icon Blocks -->
                        </div>

                        <div class="col-sm-6 mb-sm-0">
                            <!-- Icon Blocks -->
                            <div class="pr-lg-6">
                                <figure class="max-w-6rem w-100 mb-4">
                                    <img class="img-fluid" src="/images/svg/icons/icon-26.svg" alt="SVG">
                                </figure>
                                <h4>Forecasting</h4>
                                <p class="text-body">Staying focused allows us to turn every project we complete into
                                    something we love.</p>
                            </div>
                            <!-- End Icon Blocks -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-6 col-lg-5">
                    <!-- Article -->
                    <article class="position-relative">
                        <a class="card shadow-none bg-img-hero w-100 min-h-450rem" href="#"
                            style="background-image: url(/images/svg/ipad.svg);">
                        </a>

                        <!-- SVG Elements -->
                        <figure class="max-w-19rem w-100 position-absolute bottom-0 right-0 z-index-n1">
                            <div class="mb-n7 mr-n7">
                                <img class="img-fluid" src="/images/svg/components/dots-2.svg" alt="Image Description">
                            </div>
                        </figure>
                        <!-- End SVG Elements -->
                    </article>
                    <!-- End Article -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Section -->

    <div class="container space-bottom-3">
        <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <!-- Card -->
                <article class="card h-100">
                    <div class="w-sm-65 p-4">
                        <h3>Explore the Freelancers</h3>
                        <div class="mb-4">
                            <p>Start your business on various platforms with one click.</p>
                        </div>
                        <a class="btn btn-sm btn-soft-primary btn-pill transition-3d-hover" href="#">Find out More <i
                                class="fas fa-angle-right ml-1"></i></a>
                    </div>

                    <div class="position-absolute bottom-0 right-0 w-sm-35 max-w-27rem">
                        <img class="img-fluid" src="/images/svg/illustrations/support-man.svg"
                            alt="Image Description">
                    </div>
                </article>
                <!-- End Card -->
            </div>

            <div class="col-lg-6">
                <!-- Card -->
                <article class="card h-100">
                    <div class="w-sm-65 p-4">
                        <h3>Skillpark gives every team the freedom to hire</h3>
                        <div class="mb-4">
                            <p>Evaluate your options better and learn more about them.</p>
                        </div>
                        <a class="btn btn-sm btn-soft-primary btn-pill transition-3d-hover" href="#">Find out More <i
                                class="fas fa-angle-right ml-1"></i></a>
                    </div>

                    <div class="position-absolute bottom-0 right-0 w-sm-35 max-w-27rem">
                        <img class="img-fluid" src="/images/svg/illustrations/list-app.svg"
                            alt="Image Description">
                    </div>
                </article>
                <!-- End Card -->
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="container space-bottom-1">
        <div class="w-lg-85 mx-lg-auto">
            <div class="card overflow-hidden p-4">
                <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                    <div class="col-md-5 offset-md-3 mb-3 mb-md-0">
                        <h3 class="h4 mb-0">Thousands of businesses trust Skillpark for their business.</h3>
                    </div>
                    <div class="col-md-4 text-md-right">
                        @guest
                        <a class="btn btn-primary" href="{{ route('register') }}">Get Started</a>
                        @else
                        <a class="btn btn-primary" href="{{ url('home') }}">Dashboard</a>
                        @endguest
                    </div>
                </div>

                <!-- SVG Component -->
                <figure class="w-25 d-none d-md-block position-absolute top-0 left-0 mt-n2">
                    <img class="img-fluid" src="/images/svg/illustrations/apps.svg" alt="Image Description">
                </figure>
                <!-- End SVG Component -->
            </div>
        </div>
    </div>
    <!-- End CTA Section -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection