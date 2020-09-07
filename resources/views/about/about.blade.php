@extends('layouts.master')

@section('title', 'About | Skillpark Inc.')
@section('content')

<!-- Body Start -->
<div class="main-heading space-top-1 text-center">
    <h2>About Us</h2>
</div>
<section class="space-top-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="pl-4 col-lg-5 col-md-5 pr-4">
                <img class="rounded img-fluid" src="/images/svg/ipad.svg" alt="Card image cap">
            </div>
            <div class="col-lg-6 col-md-6 pl-5 pr-5">
                <h2 class="mb-5">The leading global marketplace for learning and instructions.
                </h2>
                <h5 class="mt-2">Our Vision</h5>
                <p>SKILLPARK INC. is a incorporated company which is legally acceptable nationwide. The
                    application is a Nepal National Payment Gateway Verified website. Trusted by the
                    Government of Nepal. © Skillpark Inc.
                </p>
                <h5 class="mt-4">Our Goal</h5>
                <p>When looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to using 'Content here,</p>
            </div>
        </div>
    </div>
</section>
<!-- End About -->
<main class="browse-section space-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 space-bottom-3">
                <!-- Title -->
                <div class="w-lg-65 text-center mx-auto space-bottom-2 space-top-1">
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
                <img class="img-fluid d-none d-md-block w-75 mx-auto mb-7"
                    src="/images/svg/components/three-pointers.svg" alt="SVG Arrow">

                <!-- CTA Section -->
                <div class="container">
                    <div class="w-lg-85 mx-lg-auto">
                        <div class="card overflow-hidden p-5">
                            <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                                <div class="col-md-8 col-lg-5 offset-lg-3 mb-3 mb-md-0">
                                    <h3 class="h4 text-grey mb-0">
                                        {{ __('nepali.Revolutionizing the way Company hires!') }}
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
            </div>
        </div>
    </div>
    <div class="choose_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="choose_left">
                        <div class="main-heading bids_heading">
                            <h2>Why Choose Us</h2>
                        </div>
                        <div class="choose_des">
                            <p>Fusce dictum mauris nec magna consequat, ut semper leo pulvinar. Cras rhoncus lorem
                                lorem, a fermentum lacus congue vehicula. Nullam luctus mi eget nisl tincidunt lobortis.
                            </p>
                            <ul>
                                <li>
                                    <div class="abt142">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Cras rhoncus lorem lorem, a fermentum lacus congue vehicula. Nullam luct us
                                            mi eget nisl tincidunt lobortis.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="abt142">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Cras rhoncus lorem lorem, a fermentum lacus congue vehicula. Nullam luct us
                                            mi eget nisl tincidunt lobortis.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about_video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/h2JcePh7vls" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Body End -->



@endsection