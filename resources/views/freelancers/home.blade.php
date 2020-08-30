@extends('layouts.freelancers.freelancermaster')

@section('title', Auth::user()->name . ' - Home')
@section('content')

<main class="bg-light" role="main" id="content">
    <div class="container">
        <!-- Sorting -->
        <div class="row text-center text-md-left mb-5 py-2 bg-white mx-auto">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <span class="font-size-1 ml-1 font-weight-bold">100+ Jobs Found</span>
            </div>
            <div class="col-lg-6 align-self-lg-end align-self-sm-center text-lg-right">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <!-- Select -->
                        <select class="js-custom-select" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "btn btn-xs btn-white dropdown-toggle",
                            "dropdownAutoWidth": false,
                            "width": "auto"
                          }'>
                            <option value="mostRecent" selected>Sort by</option>
                            <option value="newest">Newest first</option>
                            <option value="budgetHighLow">Budget (high - low)</option>
                            <option value="budgetLowHigh">Budget (low - high)</option>
                            <option value="relevance">Relevance</option>
                        </select>
                        <!-- End Select -->
                    </li>
                    <li class="list-inline-item">
                        <!-- Select -->
                        <select class="js-custom-select" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "btn btn-xs btn-white dropdown-toggle",
                            "dropdownAutoWidth": false,
                            "width": "auto"
                          }'>
                            <option value="alphabeticalOrderSelect1" selected>A-to-Z</option>
                            <option value="alphabeticalOrderSelect2">Z-to-A</option>
                        </select>
                        <!-- End Select -->
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-xs btn-soft-secondary active" href="{{ route('proposals.index') }}">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Sorting -->
        <div class="row">
            <div class="col-12 col-md-5 col-lg-3 col-xl-3 mb-3 bg-white">
                <div class="navbar-expand-lg navbar-expand-lg-collapse-block py-3">
                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn btn-block border py-3"
                        aria-label="Toggle navigation" aria-expanded="false" aria-controls="sidebarNavExample2"
                        data-toggle="collapse" data-target="#sidebarNavExample2">
                        <span class="d-flex justify-content-between align-items-center">
                            <span class="h5 mb-0">View all categories</span>
                            <span class="navbar-toggler-default">
                                <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                                </svg>
                            </span>
                            <span class="navbar-toggler-toggled">
                                <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                </svg>
                            </span>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <div id="sidebarNavExample2" class="collapse navbar-collapse">
                        <div class="mt-5 mt-lg-0">
                            <h2 class="h4"><a class="text-inherit" href="#">Artificial Intelligence</a></h2>

                            <!-- Nav Link -->
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                AI Product Manager
                                <span class="badge bg-soft-secondary badge-pill">30+</span>
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                AI Programming with Python
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                Deep Learning
                            </a>
                            <!-- End Nav Link -->

                            <!-- View More - Collapse -->
                            <div class="collapse" id="collapseSectionOne">
                                <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                    href="#">
                                    Machine Learning
                                </a>
                                <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                    href="#">
                                    Natural Language Processing
                                </a>
                            </div>
                            <!-- End View More - Collapse -->

                            <!-- Link -->
                            <a class="link link-collapse small font-size-1 font-weight-bold pt-1" data-toggle="collapse"
                                href="#collapseSectionOne" role="button" aria-expanded="false"
                                aria-controls="collapseSectionOne">
                                <span class="link-collapse-default">View more</span>
                                <span class="link-collapse-active">View less</span>
                                <span class="link-icon ml-1">+</span>
                            </a>
                            <!-- End Link -->
                        </div>

                        <div class="mt-5">
                            <h3 class="h4"><a class="text-inherit" href="#">Programming and Development</a></h3>

                            <!-- Nav Link -->
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                AI Programming with Python
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                Android Developer
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                Blockchain
                                <span class="badge bg-soft-secondary badge-pill">4</span>
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                C++
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                Front End Web Developer
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                Java Developer
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                iOS
                                <span class="badge badge-success badge-pill ml-1">New</span>
                            </a>
                            <!-- End Nav Link -->

                            <!-- View More - Collapse -->
                            <div class="collapse" id="collapseSectionTwo">
                                <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                    href="#">
                                    Java Developer
                                </a>
                                <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                    href="#">
                                    React
                                </a>
                            </div>
                            <!-- End View More - Collapse -->

                            <!-- Link -->
                            <a class="link link-collapse small font-size-1 font-weight-bold pt-1" data-toggle="collapse"
                                href="#collapseSectionTwo" role="button" aria-expanded="false"
                                aria-controls="collapseSectionTwo">
                                <span class="link-collapse-default">View more</span>
                                <span class="link-collapse-active">View less</span>
                                <span class="link-icon ml-1">+</span>
                            </a>
                            <!-- End Link -->
                        </div>

                        <div class="mt-5">
                            <h3 class="h4"><a class="text-inherit" href="#">Business</a></h3>

                            <!-- Nav Link -->
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                Business Analytics
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                Digital Marketing
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                Marketing Analytics
                            </a>
                            <!-- End Nav Link -->

                            <!-- View More - Collapse -->
                            <div class="collapse" id="collapseSectionThree">
                                <a class="nav-link" href="#">
                                    Predictive Analytics for Business
                                </a>
                            </div>
                            <!-- End View More - Collapse -->

                            <!-- Link -->
                            <a class="link link-collapse small font-size-1 font-weight-bold pt-1" data-toggle="collapse"
                                href="#collapseSectionThree" role="button" aria-expanded="false"
                                aria-controls="collapseSectionThree">
                                <span class="link-collapse-default">View more</span>
                                <span class="link-collapse-active">View less</span>
                                <span class="link-icon ml-1">+</span>
                            </a>
                            <!-- End Link -->
                        </div>

                        <div class="mt-5">
                            <h3 class="h4"><a class="text-inherit" href="#">Career <span
                                        class="badge badge-success badge-pill ml-1">New</span></a></h3>

                            <!-- Nav Link -->
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                Applying to Jobs
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center px-0" href="#">
                                Interviewing
                            </a>
                            <!-- End Nav Link -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-7 col-lg-6 col-xl-6">
                @foreach($jobs->sortByDesc('created_at') as $key => $job)
                <div class="post">
                    <div class="post__head">
                        <a href="javascript:;" class="post__head-img">
                            <img src="{{ asset($job->employer->avatar ?? '/images/uploads/default.png') }}" alt="">
                        </a>
                        <div class="post__head-title">
                            <h5><a href="javascript:;">{{ $job->employer->name ?? '' }}</a></h5>
                            <p>Posted at {{ $job->created_at ?? '' }}</p>
                        </div>
                    </div>

                    <div class="post__wrap">
                        <div class="post__company">
                            <i class="fa fa-briefcase fa-sm"></i>
                            <span>{{ $job->topic->name ?? 'General' }}</span>
                        </div>

                        <div class="post__actions">
                            <button id="snackbar-place-bid" class="post__actions-btn post__actions-btn--green border-0">
                                <i class="fa fa-bookmark fa-sm"></i>
                            </button>
                            <a class="post__actions-btn post__actions-btn--blue" href="javascript:;">
                                <i class="fa fa-thumbs-down fa-sm"></i>
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('jobs.details', $job->id) }}">
                        <h3 class="post__title">{{ $job->title ?? '' }}
                        </h3>

                        <div class="post__options">
                            <p><i class="far fa-money-bill-alt mr-1"></i> NPR {{ $job->budget ?? '' }}</p>
                        </div>
                        <div class="post__description">
                            <p>{{ $job->description ?? '' }}</p>
                        </div>
                    </a>

                    <div class="mb-5 w-100">
                        <a class="btn btn-sm btn-ghost-secondary float-right border "
                            href="{{ route('jobs.details', $job->id) }}">
                            View Job Details
                        </a>
                    </div>

                    <div class="row w-100">
                        <div class="col-md-12 col-sm-12">
                            <div class="post__tags">
                                @foreach($job->categories as $id => $categories)
                                <a href="#">#{{ $categories->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <p class="float-right" style="font-size: 14px;"></u><b class="mr-1">Expected
                                    Delivery:</b></u> {{ $job->delivery_time }}</p>
                        </div>
                    </div>

                    <div class="post__stats justify-content-end">
                        <div>
                            <div class="mr-3">
                                <i class="fas fa-user-friends mr-2 fa-sm"></i>
                                Bidding Count: {{ $job->proposals->count() }}
                            </div>
                            <a class="post__comments" data-toggle="collapse" href="#collapse3" role="button"
                                aria-expanded="false" aria-controls="collapse1"><i class="fas fa-comment fa-sm"></i>
                            </a>
                        </div>
                    </div>
                    <div class="collapse post__collapse" id="collapse3">
                        <form action="#" class="post__form">
                            <input type="text" placeholder="Type your comment...">
                            <button class=" border-0" type="button"><i class="fas fa-paper-plane fa-sm"></i></button>
                        </form>
                    </div>
                </div>
                @endforeach

                <!-- view more -->
                <button class="btn btn-primary mb-5" type="button"><span>Load more</span></button>
                <!-- end view more -->
                <!-- Sticky Block End Point -->
                <div id="stickyBlockEndPoint"></div>
            </div>

            <div class="d-none d-xl-block col-lg-3 col-xl-3">
                <!-- Sticky Block Start Point -->
                <div id="stickyBlockStartPoint"></div>

                <div class="js-sticky-block" data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPoint",
                 "breakpoint": "lg",
                 "startPoint": "#stickyBlockStartPoint",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 70,
                 "stickyOffsetBottom": 20
               }'>
                    <div class="mb-7">

                        <!-- App Info -->
                        <div class="mr-lg-2">
                            <div class="mb-2">
                                <div class="mb-3">
                                    <h5>Trending Jobs</h5>
                                </div>
                                <!-- Blog -->
                                <article class="mb-5">
                                    <div class="media align-items-center text-inherit">
                                        <div class="avatar avatar-lg mr-3">
                                            <img class="avatar-img" src="/images/banner/service1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0"><a class="text-inherit" href="#">Portfolio Freelancer
                                                    Website - NPR 5000 - 20,000</a></h4>
                                        </div>
                                    </div>
                                </article>
                                <!-- End Blog -->

                                <!-- Blog -->
                                <article class="mb-5">
                                    <div class="media align-items-center text-inherit">
                                        <div class="avatar avatar-lg mr-3">
                                            <img class="avatar-img" src="/images/banner/service3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0"><a class="text-inherit" href="#">Business Consultant -
                                                    Within 7 Days</a></h4>
                                        </div>
                                    </div>
                                </article>
                                <!-- End Blog -->
                            </div>
                            <div class="mb-3">
                                <a class="btn btn-sm btn-block btn-primary transition-3d-hover"
                                    href="{{ route("proposals.index") }}">My Biddings</a>
                            </div>

                            <div class="mb-md-3">
                                <h3 class="h5">Categories</h3>

                                <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                        href="#">Featured</a></span>
                                <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                        href="#">Flutter</a></span>
                                <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                        href="#">Django</a></span>
                                <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                        href="#">C++</a></span>
                                <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                        href="#">Laravel</a></span>
                                <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                        href="#">Logo Design</a></span>
                                <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                        href="#">Analysis</a></span>
                                <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                        href="#">Admin</a></span>
                            </div>

                            <div class="d-none d-md-block mb-3">
                                <h3 class="h5">Quick links</h3>

                                <ul class="list-unstyled font-size-1">
                                    <li><a class="text-body" href="#"><i class="fas fa-angle-right mr-1"></i>
                                            Support</a></li>
                                    <li><a class="text-body" href="#"><i class="fas fa-angle-right mr-1"></i> Privacy
                                            Policy</a></li>
                                </ul>
                            </div>

                            <div class="d-none d-md-block">
                                <a class="small text-body" href="#"><i class="far fa-flag mr-1"></i> Report abuse</a>
                            </div>
                        </div>
                        <!-- End App Info -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end main content -->
</main>
@endsection