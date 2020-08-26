@extends('layouts.master')

@section('content')
<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Hero Section -->
    <div class="bg-img-hero" style="background-image: url(/images/svg/components/abstract-shapes-12.svg);">
        <div class="container space-top-3 space-bottom-2 position-relative z-index-2">
            <div class="w-md-80 w-lg-60 text-center mx-md-auto">
                <h1>FAQ</h1>
                <p>Search our FAQ for answers to anything you might ask.</p>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- FAQ Topics Section -->
    <div class="container space-2 space-bottom-lg-3">
        <div class="row justify-content-lg-center">
            <div class="col-lg-8">
                <div id="basics" class="space-bottom-1">
                    <h2>Basics</h2>

                    <!-- Basics Accordion -->
                    <div id="basicsAccordion">
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="basicsHeadingOne">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#basicsCollapseOne" aria-expanded="false"
                                    aria-controls="basicsCollapseOne">
                                    Do you have any built-in caching?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne"
                                data-parent="#basicsAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="basicsHeadingTwo">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#basicsCollapseTwo" aria-expanded="false"
                                    aria-controls="basicsCollapseTwo">
                                    Can I add/upgrade my plan at any time?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo"
                                data-parent="#basicsAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="basicsHeadingThree">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#basicsCollapseThree" aria-expanded="false"
                                    aria-controls="basicsCollapseThree">
                                    What access comes with my hosting plan?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree"
                                data-parent="#basicsAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="basicsHeadingFour">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#basicsCollapseFour" aria-expanded="false"
                                    aria-controls="basicsCollapseFour">
                                    How do I change my password?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour"
                                data-parent="#basicsAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Basics Accordion -->
                </div>

                <div id="syncing" class="space-1">
                    <h2>Syncing</h2>

                    <!-- Syncing Accordion -->
                    <div id="syncingAccordion">
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="syncingHeadingOne">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#syncingCollapseOne" aria-expanded="false"
                                    aria-controls="syncingCollapseOne">
                                    How does syncing work?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="syncingCollapseOne" class="collapse" aria-labelledby="syncingHeadingOne"
                                data-parent="#syncingAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="syncingHeadingTwo">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#syncingCollapseTwo" aria-expanded="false"
                                    aria-controls="syncingCollapseTwo">
                                    How do I upload files from my phone or tablet?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="syncingCollapseTwo" class="collapse" aria-labelledby="syncingHeadingTwo"
                                data-parent="#syncingAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="syncingHeadingThree">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#syncingCollapseThree" aria-expanded="false"
                                    aria-controls="syncingCollapseThree">
                                    How do I link to a file or folder?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="syncingCollapseThree" class="collapse" aria-labelledby="syncingHeadingThree"
                                data-parent="#syncingAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Syncing Accordion -->
                </div>

                <div id="account" class="space-1">
                    <h2>Account &amp; settings</h2>

                    <!-- Account Accordion -->
                    <div id="accountAccordion">
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="accountHeadingOne">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#accountCollapseOne" aria-expanded="false"
                                    aria-controls="accountCollapseOne">
                                    How do I change my password?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="accountCollapseOne" class="collapse" aria-labelledby="accountHeadingOne"
                                data-parent="#accountAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="accountHeadingTwo">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#accountCollapseTwo" aria-expanded="false"
                                    aria-controls="accountCollapseTwo">
                                    How do I delete my account?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="accountCollapseTwo" class="collapse" aria-labelledby="accountHeadingTwo"
                                data-parent="#accountAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="accountHeadingThree">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#accountCollapseThree" aria-expanded="false"
                                    aria-controls="accountCollapseThree">
                                    How do I change my account settings?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="accountCollapseThree" class="collapse" aria-labelledby="accountHeadingThree"
                                data-parent="#accountAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="accountHeadingFour">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#accountCollapseFour" aria-expanded="false"
                                    aria-controls="accountCollapseFour">
                                    I forgot my password. How do I reset it?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="accountCollapseFour" class="collapse" aria-labelledby="accountHeadingFour"
                                data-parent="#accountAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Account Accordion -->
                </div>

                <div id="privacy" class="space-1">
                    <h2>Privacy</h2>

                    <!-- Privacy Accordion -->
                    <div id="privacyAccordion">
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="privacyHeadingOne">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#privacyCollapseOne" aria-expanded="false"
                                    aria-controls="privacyCollapseOne">
                                    Can I specify my own private key?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="privacyCollapseOne" class="collapse" aria-labelledby="privacyHeadingOne"
                                data-parent="#privacyAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="privacyHeadingTwo">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#privacyCollapseTwo" aria-expanded="false"
                                    aria-controls="privacyCollapseTwo">
                                    My files are missing! How do I get them back?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="privacyCollapseTwo" class="collapse" aria-labelledby="privacyHeadingTwo"
                                data-parent="#privacyAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="privacyHeadingThree">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#privacyCollapseThree" aria-expanded="false"
                                    aria-controls="privacyCollapseThree">
                                    How can I access my privacy data?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="privacyCollapseThree" class="collapse" aria-labelledby="privacyHeadingThree"
                                data-parent="#privacyAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="privacyHeadingFour">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                    href="javascript:;" role="button" data-toggle="collapse"
                                    data-target="#privacyCollapseFour" aria-expanded="false"
                                    aria-controls="privacyCollapseFour">
                                    How can I control if other search engines can link to my profile?

                                    <span class="card-btn-toggle">
                                        <span class="card-btn-toggle-default">&plus;</span>
                                        <span class="card-btn-toggle-active">&minus;</span>
                                    </span>
                                </a>
                            </div>
                            <div id="privacyCollapseFour" class="collapse" aria-labelledby="privacyHeadingFour"
                                data-parent="#privacyAccordion">
                                <div class="card-body px-0">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    <p>Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Privacy Accordion -->
                </div>

                <div class="row mx-n2 space-top-lg-2">
                    <div class="col-md-6 px-2 mb-3 mb-lg-0">
                        <!-- Icon Block -->
                        <a class="card card-frame h-100" href="#">
                            <div class="card-body">
                                <div class="media">
                                    <figure class="w-100 max-w-6rem mr-3">
                                        <img class="img-fluid" src="/images/svg/icons/icon-4.svg" alt="SVG">
                                    </figure>
                                    <div class="media-body">
                                        <h3>Ask a question</h3>
                                        <p class="text-body">Chat live with community members to get your questions
                                            answered.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End Icon Block -->
                    </div>

                    <div class="col-md-6 px-2 mb-3 mb-lg-0">
                        <!-- Icon Block -->
                        <a class="card card-frame h-100" href="#">
                            <div class="card-body">
                                <div class="media">
                                    <figure class="w-100 max-w-6rem mr-3">
                                        <img class="img-fluid" src="/images/svg/icons/icon-2.svg" alt="SVG">
                                    </figure>
                                    <div class="media-body">
                                        <h3>Read documentation</h3>
                                        <p class="text-body">Dig into the technical details of our products and
                                            consensus algorithm.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End Icon Block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ Topics Section -->
</main>
<!-- ========== END MAIN ========== -->

@endsection