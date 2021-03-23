@extends('layouts.freelancers.freelancermaster')

@section('title', $job->title . ' - Job Detail | ' . Auth::user()->name)

@section('content')

<link rel="stylesheet" href="/css/style.css">
<div class="third-menu space-top-n1">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-lg-9 left">
                <ul>
                    <li class="nav-overview selected"><a href="#overview">Overview</a></li>
                    <li class="nav-overview"><a href="#description">Description</a></li>
                    <li class="nav-aboutSeller"><a href="#aboutSeller">About The Seller</a></li>
                    <li class="nav-recommendations"><a href="#recommendations">Recommendations</a></li>
                </ul>
            </div>
            <div class="col-lg-3 right">
                <ul class="d-flex align-items-center justify-content-end">
                    <li>
                        <a href="javascript:;">
                            <button>
                                <i class="fas fa-th-large mr-2" aria-hidden="true"></i>
                                Proposal Biddings
                            </button>
                        </a>
                    </li>
                    <li>
                        <span class="collect-count font-weight-bolder">{{ $job->proposals->count() }}</span>
                    </li>
                    <li class="ml-2">
                        <a href="javascript:;">
                            <button>
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                Share
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main-page py-5">
    <div class="container">
        <div class="row">
            <div id="overview" class="col-lg-8 left">
                <h2>{{ $job->title }}</h2>
                <div class="slider mt-2">
                    <div id="aniimated-thumbnials" class="slider-for slick-slider-single">
                        @if($job->thumbnail)
                        <img class="img-fluid" width="500" src="{{ asset($job->thumbnail)}}">
                        @else
                        <img class="img-fluid" width="500" src="/images/svg/discussion-scene.svg">
                        @endif
                    </div>
                </div>
                <div id="description" class="description">
                    <h3>About This Job</h3>
                    <p>{{ $job->title }}</p>
                    <p>{{ $job->description }}
                    </p>
                </div>
                @if($job->attachments)
                <ul class="border-bottom py-4 mt-3 mb-7">
                    <li class="metadata-attribute">
                        <u><small class="text-cap font-weight-bold">Associated File(s)</small></u>
                        <div class="row mx-n1 d-flex attachment-container">
                            @if($job->attachments)
                            @foreach($job->attachments as $key => $media)
                            <a class="attachment-box ripple-effect" href="{{ $media->getUrl() }}" target="_blank">
                                <span>Attachment</span></a>
                            </a>
                            @endforeach
                            @endif
                        </div>
                    </li>
                </ul>
                @endif
                <h3 id="aboutSeller">About The Client</h3>
                <div class="profile-card">
                    <div class="user-profile-image d-flex">
                        <label class="profile-pict" for="profile_image">
                            <img src="{{ asset($job->employer->avatar) ?? '/images/spacer.png' }}"
                                class="profile-pict-img img-fluid" alt="">
                        </label>
                        <div class="right">
                            <div class="profile-name">
                                <span class="user-status">
                                    <a href="#" class="seller-link">{{ $job->employer->name }}</a>
                                </span>
                            </div>
                            <div class="user-info">
                                <span class="user-info-rating d-flex align-items-center">
                                    <div class="star-rating-s15-wrapper">
                                        <i class="fa fa-map-marker"></i> {{ $job->employer->location ?? 'Nepal' }}
                                    </div>
                                </span>
                                <a href="#">Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="stats-desc">
                        <ul class="user-stats">
                            <li>From<strong>{{ $job->employer->location ?? 'Nepal' }}</strong></li>
                            <li>Member since<strong>{{ $job->employer->created_at ?? 'Nepal' }}</strong></li>
                        </ul>
                        <article class="seller-desc">
                            <h4 class="font-weight-bolder mb-3 mt-2">{{ $job->employer->tagline }}</h4>
                            <div class="inner">{{ $job->employer->about }}</div>
                        </article>
                    </div>
                </div>
                <di class="tags">
                    <h3>Related tags</h3>
                    <ul class="d-flex">
                        @foreach($job->categories as $category)
                        <li>
                            <a href="{{ route('categories.show', $category) }}"
                                target="_blank">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </di>
            </div>
            <div class="col-lg-4 right">
                <div class="sticky">
                    <div class="tab-content">
                        <div id="basic" class="tab-pane fade show active">
                            <div class="header">
                                <h3><b class="title">Send Proposal</b><span class="price text-muted">NPR
                                        {{ $job->budget }}</span></h3>
                                <p>{{ $job->title }}. {{ Str::limit($job->description, 60) }}
                                </p>
                            </div>
                            <article>
                                <div class="d-flex">
                                    <b class="delivery"><i class="fa fa-clock-o" aria-hidden="true"></i>Delivery Time:
                                        {{ $job->delivery_time }}</b>
                                </div>
                                <ul class="features">
                                    <li class="feature included"><i class="fa fa-check" aria-hidden="true"></i>Source
                                        File
                                    </li>
                                    <li class="feature included"><i class="fa fa-check" aria-hidden="true"></i>Verified
                                        Client
                                    </li>
                                    <li class="feature included"><i class="fa fa-check"
                                            aria-hidden="true"></i>Interactive
                                        Mockup
                                    </li>
                                </ul>
                            </article>
                            <a href="{{ route('proposals.create') }}?job_id={{ $job->id }}">
                                <button>Continue</button>
                            </a>
                            @if($job->paid_at == NULL)
                            <i style="font-weight:bolder;">Payment Unverified</i>
                            @else
                            <i style="font-weight:bolder;color:#1dc8cc">Payment Verified</i><i class="fa fa-check ml-2"
                                style="color: #1dc8cc"></i>
                            @endif
                        </div>
                    </div>
                    <div class="contact-seller-wrapper mt-1">
                        <a class="fit-button" href="#">Contact Seller</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div id="recommendations" class="view_slider recommended">
            <h3>People Who Viewed This Job Also Viewed</h3>
        </div>
    </div>
</div>

@endsection