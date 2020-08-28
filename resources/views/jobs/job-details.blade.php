@extends('layouts.freelancers.freelancermaster')

@section('title', $job->title . ' - Job Detail | ' . Auth::user()->name)

@section('content')

<!-- main content -->
<main class="main main--breadcrumb">
    <!-- breadcrumb -->
    <div class="breadcrumb mb-n1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb__wrap mb-n1">
                        <li class="breadcrumb__item"><a class="font-weight-bold" href="{{ route('freelancer') }}">Back
                                to Finding Jobs</a></li>
                        <i class="mx-3 fa fa-angle-left"></i>
                        <li class="breadcrumb__item breadcrumb__item--active">{{ $job->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-8 col-xl-9">
                <!-- post -->
                <div class="post">
                    <div class="post__head">
                        <a href="#" class="post__head-img">
                            <img src="{{ asset($job->employer->avatar) ?? '/images/uploads/defailt.jpg' }}" alt="">
                        </a>
                        <div class="post__head-title">
                            <h5><a href="#">{{ $job->employer->name }}</a></h5>
                            <p>Job Posted: {{ $job->created_at }}</p>
                        </div>

                        <div class="post__dropdown">
                            <a class="dropdown-toggle post__dropdown-btn" href="#" role="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon ion-md-more"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right post__dropdown-menu"
                                aria-labelledby="dropdownMenu1">
                                <li><a href="#">Report</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="post__wrap">
                        <div class="post__company">
                            <i class="fa fa-briefcase"></i>
                            <span>{{ $job->company ?? 'N/A Company' }}</span>
                        </div>

                        <div class="post__location">
                            <i class="fa fa-map-marker-alt"></i>
                            <span>{{ $job->employer->city_id }}</span>
                        </div>

                        <div class="post__actions">
                            <a class="post__actions-btn post__actions-btn--green" href="#">
                                <i class="fa fa-bookmark fa-sm"></i>
                            </a>
                            <a class="post__actions-btn post__actions-btn--red" href="#">
                                <i class="fa fa-envelope fa-sm"></i>
                            </a>
                        </div>
                    </div>

                    <h2 class="post__title my-2">{{ $job->title }}</h2>

                    <div class="row col-12 no-gutters px-0">
                        <div class="col-6">
                            <div class="post__options mb-5">
                                <span>{{ $job->category->name ?? 'General Category'}}</span>
                                <p>NPR {{ $job->budget }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <small class="text-cap mb-3 font-weight-bold float-right">(Expected Delivery): <span
                                    class="text-dark">{{ $job->delivery_time }}</span></small>
                        </div>
                    </div>

                    <div class="post__description">
                        <p>{{ $job->description }}</p>
                    </div>

                    <small class="text-cap my-2 font-weight-bold">Skills Required</small>
                    <div class="post__tags">
                        <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                href="#">Featured</a></span>
                        <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                href="#">Flutter</a></span>
                        <span class="d-inline-block mr-1 mb-2"><a class="btn btn-xs btn-soft-secondary"
                                href="#">Django</a></span>
                    </div>

                    <small class="text-cap my-2 font-weight-bold">Associated File(s)</small>
                    <div class="row mx-n1 mb-5 d-flex attachment-container">
                        @if($job->attachments)
                        @foreach($job->attachments as $key => $media)
                        <a class="attachment-box ripple-effect" href="{{ $media->getUrl() }}" target="_blank">
                            <span>Attachment</span></a>
                        </a>
                        @endforeach
                        @endif
                    </div>

                    <a href="{{ route('proposals.create') }}?job_id={{ $job->id }}" class="post__apply"><span>Apply
                            now</span></a>

                    <div class="post__stats">
                        <div>
                            <a class="post__likes" href="#"><i class="fa fa-thumbs-up"></i> <span>15</span></a>
                            <a class="post__comments" data-toggle="collapse" href="#collapse1" role="button"
                                aria-expanded="false" aria-controls="collapse1"><i class="fas fa-comment border-0"></i>
                                <span>0</span></a>
                        </div>

                        <div class="post__views">
                            <i class="fa fa-user-friends"></i> <span>Bidding Count:
                                {{ $job->proposals->count() }}</span>
                        </div>
                    </div>

                    <div class="collapse post__collapse" id="collapse1">
                        <form action="#" class="post__form">
                            <input type="text" placeholder="Type your comment...">
                            <button type="button"><i class="fas fa-paper-plane fa-sm border-0"></i></button>
                        </form>
                    </div>
                </div>
                <!-- end post -->

                <h3 class="main__title space-1">Similar Jobs</h3>

                <div class="row">
                    <div class="col-12 col-xl-6">
                        To be Continued...
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                <!-- sidebox -->
                <div class="sidebox">
                    <h4 class="sidebox__title">Job summary</h4>
                    <ul class="sidebox__list">
                        <li><span>Budget:</span> <span>NPR {{ $job->budget }}</span></li>
                        <li><span>Employment status:</span> <span>Freelancer</span></li>
                        <li><span>Experience:</span> <span>2 to 3 year(s)</span></li>
                        <li><span>Location:</span> <span>{{ $job->employer->city_id }}</span></li>
                        <li><span>Company:</span> <span>{{ $job->employer->company ?? 'N/A'}}</span></li>
                        <li><span>Published:</span> <span>{{ $job->created_at }}</span></li>
                    </ul>
                </div>
                <!-- end sidebox -->

                <!-- apply btn -->
                <div class="sidebox">
                    <div class="sidebox__apply">
                        <a href="{{ route('proposals.create') }}?job_id={{ $job->id }}"><button
                                class="post__apply mb-0 w-100 border-0" type="button"><span>Apply
                                    now</span></button></a>
                    </div>
                </div>
                <!-- end apply btn -->

                <!-- share -->
                <div class="sidebox">
                    <div class="sidebox__share">
                        <span>Share this Job:</span>
                        <ul class="mb-n1">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook fa-sm"></i></a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-instagram fa-sm"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter fa-sm"></i></a></li>
                            <li class="vk"><a href="#"><i class="fa fa-linkedin fa-sm"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end share -->
            </div>
        </div>
    </div>
</main>
<!-- end main content -->

@endsection