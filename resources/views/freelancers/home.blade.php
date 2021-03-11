@extends('layouts.freelancers.freelancermaster')

@section('title','Home - ' . Auth::user()->name)
@section('content')

<main class="bg-light space-bottom-1" role="main" id="content">
    <!-- Sorting -->
    <div class="row text-center text-md-left mb-5 py-1 bg-white mx-auto">
        <div class="col-lg-6 mb-3 mb-lg-0">
            <span class="font-size-1 ml-6 font-weight-bold">{{ $countJobs }} Jobs Available</span>
        </div>
    </div>
    <!-- End Sorting -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-3 col-xl-3">
                <!-- Breadcrumb Section -->
                <div class="bg-navy d-lg-none d-sm-block mb-5"
                    style="background-image: url(/images/svg/components/abstract-shapes-20.svg);">
                    <div class="container space-1 space-top-lg-2 space-bottom-lg-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Breadcrumb -->
                                <ol class="breadcrumb breadcrumb-light breadcrumb-no-gutter mb-0">
                                    <li class="breadcrumb-item">Account</li>
                                    <li class="breadcrumb-item active" aria-current="page">Menu</li>
                                </ol>
                                <!-- End Breadcrumb -->
                            </div>
                            <div class="col-auto">
                                <!-- Responsive Toggle Button -->
                                <button type="button" class="navbar-toggler btn btn-icon btn-sm rounde-circle d-lg-none"
                                    aria-label="Toggle navigation" aria-expanded="false" aria-controls="sidebarNav"
                                    data-toggle="collapse" data-target="#sidebarNav">
                                    <span class="navbar-toggler-default">
                                        <svg width="14" height="14" viewBox="0 0 18 18"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor"
                                                d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                                        </svg>
                                    </span>
                                    <span class="navbar-toggler-toggled">
                                        <svg width="14" height="14" viewBox="0 0 18 18"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor"
                                                d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                        </svg>
                                    </span>
                                </button>
                                <!-- End Responsive Toggle Button -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Breadcrumb Section -->
                <!-- Content Section -->
                <!-- Navbar -->
                <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
                    <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
                        <!-- Card -->
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="text-cap small">Explore</h6>
                                <!-- List -->
                                <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2 mb-4">

                                    <li class="nav-item mb-2">
                                        <a class="{{ Request::is('ab/home') ? 'nav-link-active' : 'nav-link' }}"
                                            href={{ route('home') }}>
                                            <i class="fas fa-home nav-icon"></i>
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ Request::is('explore') ? 'nav-link-active' : 'nav-link' }}"
                                            href={{ url('coming-soon') }}>
                                            <i class="fas fa-hashtag nav-icon"></i>
                                            Explore
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ Request::is('messages') ? 'nav-link-active' : 'nav-link' }}"
                                            href="ab/messages">
                                            <i class="fas fa-envelope nav-icon"></i>
                                            Messages
                                            <span class="badge badge-soft-navy badge-pill nav-link-badge">3</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End List -->

                                <h6 class="text-cap small">Account</h6>

                                <!-- List -->
                                <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2 mb-4">
                                    <li class="nav-item">
                                        <a class="{{ Request::is('notification') ? 'nav-link-active' : 'nav-link' }}"
                                            href="notification">
                                            <i class="fas fa-bell nav-icon"></i>
                                            Notifications
                                            <span class="badge badge-soft-navy badge-pill nav-link-badge">1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ Request::is('preference') ? 'nav-link-active' : 'nav-link' }}"
                                            href="preference">
                                            <i class="fas fa-sliders-h nav-icon"></i>
                                            Preferences
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ Request::is('settings') ? 'nav-link-active' : 'nav-link' }}"
                                            href={{ url('settings') }}>
                                            <i class="fas fa-id-card nav-icon"></i>
                                            Personal info
                                        </a>
                                    </li>
                                </ul>
                                <!-- End List -->

                                <h6 class="text-cap small">Privacy</h6>

                                <!-- List -->
                                <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                                    <li class="nav-item">
                                        <a class="{{ Request::is('terms') ? 'nav-link-active' : 'nav-link' }}"
                                            href="{{ url('terms') }}" target="_blank">
                                            <i class="fas fa-book-open nav-icon"></i>
                                            Terms &amp; Conditions
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout').submit();">
                                            <i class="fas fa-sign-out-alt nav-icon"></i>
                                            Logout
                                        </a>
                                        <form id="logout" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                                <!-- End List -->
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
                <!-- End Navbar -->
            </div>

            <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                <div class="row bg-light no-gutters">
                    <h3 class=" font-weight-bolder">Find Jobs</h3>
                    <div class="col-lg-10 align-self-lg-end align-self-sm-center text-lg-right">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <!-- Select -->
                                <select class="form-control btn-soft btn btn-xs dropdown-toggle"
                                    onchange="location = this.value;">
                                    <option value="" class="text-muted" selected>Sort By Date</option>
                                    <option
                                        value="{{ route('freelancer', ['jobs'=> request()->jobs, 'sort' => 'newest']) }}">
                                        Newest</option>
                                    <option
                                        value="{{ route('freelancer', ['jobs'=> request()->jobs, 'sort' => 'oldest']) }}">
                                        Oldest</option>
                                </select>
                                <!-- End Select -->
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-soft-primary active" href="{{ route('proposals.index') }}">
                                    <i class="fas fa-th-large"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @foreach($jobs->sortByDesc('created_at') as $key => $job)
                <div class="post">
                    <div class="post__head">
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
                            <p>{{ Str::limit($job->description, 170) }}</p>
                        </div>
                    </a>

                    <div class="row w-100">
                        <div class="post__tags">
                            @foreach($job->categories as $id => $category)
                            <a href="{{ route('categories.show', $category) }}">#{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="w-100">
                        <p class="float-left" style="font-size: 14px;"></u><b class="mr-1">Expected
                                Delivery:</b></u> {{ $job->delivery_time }}</p>

                        <a class="btn btn-sm btn-ghost-secondary float-right border "
                            href="{{ route('jobs.details', $job->id) }}">
                            View Job Details
                        </a>
                    </div>
                </div>
                @endforeach
                <div class="mx-auto mt-4" style="width:max-content"> {{ $jobs->appends(request()->query())->links() }}
                </div>

                <!-- Sticky Block End Point -->
                <div id="stickyBlockEndPoint"></div>
            </div>

            <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                <!-- Sticky Block Start Point -->
                <div id="stickyBlockStartPoint"></div>

                <div class="js-sticky-block" data-hs-sticky-block-options='{
                            "parentSelector": "#stickyBlockStartPoint",
                            "breakpoint": "lg",
                            "startPoint": "#stickyBlockStartPoint",
                            "endPoint": "#stickyBlockEndPoint",
                            "stickyOffsetTop": 70,
                            "stickyOffsetBottom": 30
                        }'>

                    <!-- App Info -->
                    <div class="mr-lg-2">
                        <div class="mb-2">
                            <div class="mb-3">
                                <h5>Trending Jobs</h5>
                            </div>
                            @foreach($trendingJobs as $trendingJob)
                            <article class="mb-5">
                                <div class="media align-items-center text-inherit">
                                    <div class="avatar avatar-lg mr-3">
                                        <a href="{{ route('job.show', $trendingJob->id) }}">
                                            <img class="avatar-img"
                                                src="{{ asset($trendingJob->thumbnail) ?? '/images/banner/service1.jpg' }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="h6 mb-0"><a class="text-inherit"
                                                href="{{ route('job.show', $trendingJob->id) }}">{{ $trendingJob->title }} -
                                                <span class="text-muted">{{ $trendingJob->employer->name }} -
                                                    {{ $trendingJob->delivery_time }}</span></a></h4>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <a class="btn btn-sm btn-block btn-primary transition-3d-hover"
                                href="{{ route("proposals.index") }}">My Biddings</a>
                        </div>

                        @include('layouts.divisions.topcategory')

                        <div class="d-none d-md-block mb-3">
                            <h3 class="h5">Quick links</h3>

                            <ul class="list-unstyled font-size-1">
                                <li><a class="text-body" href="#"><i class="fas fa-angle-right mr-1"></i>
                                        Support</a></li>
                                <li><a class="text-body" href="{{ url('policy') }}"><i
                                            class="fas fa-angle-right mr-1"></i> Privacy
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
    <!-- end main content -->
</main>
@endsection
