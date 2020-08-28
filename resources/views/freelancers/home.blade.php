@extends('layouts.freelancers.freelancermaster')

@section('title', Auth::user()->name . ' - Home')
@section('content')

<main class="bg-light pt-5" role="main" id="content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 col-lg-3 col-xl-3 mb-7 bg-white">
                <form enctype="multipart/form-data" method="POST" action="{{ route('freelancer') }}">
                    <!-- Filters -->
                    <div class="border-bottom pb-4 mb-4 pt-4">
                        @csrf
                        <h5>Budget</h5>
                        <!-- radioes -->
                        <div
                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="budget" id="5k">
                                <label class="custom-control-label" for="5k">Rs. 5000 - Rs. 10,000</label>
                            </div>
                        </div>
                        <div
                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="budget" id="10k">
                                <label class="custom-control-label" for="10k">Rs. 10,000 - Rs. 20,000</label>
                            </div>
                        </div>
                        <div
                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="budget" id="20k">
                                <label class="custom-control-label" for="20k">Rs. 20,000 - Rs. 50,000</label>
                            </div>
                        </div>
                        <!-- End radioes -->

                        <!-- View More - Collapse -->
                        <div class="collapse" id="collapseBrand">
                            <div
                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="budget" id="50k">
                                    <label class="custom-control-label" for="50k">Rs. 50,000 - Rs. 1 Lakh</label>
                                </div>
                            </div>
                            <div
                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="budget" id="1l">
                                    <label class="custom-control-label" for="1l">Rs. 1 Lakh +</label>
                                </div>
                            </div>
                        </div>
                        <!-- End View More - Collapse -->

                        <!-- Link -->
                        <a class="link link-collapse small font-size-1" data-toggle="collapse" href="#collapseBrand"
                            role="button" aria-expanded="false" aria-controls="collapseBrand">
                            <span class="link-collapse-default">View more</span>
                            <span class="link-collapse-active">View less</span>
                            <span class="link-icon ml-1">+</span>
                        </a>
                        <!-- End Link -->
                    </div>

                    <div class="border-bottom pb-4 mb-4">
                        <h5>Categories</h5>
                        <select class="js-custom-select" id="categoryLabel" name="city_id" data-hs-select2-options='{
                            "customClass": "custom-select",
                            "placeholder": "Select Category",
                            "searchInputPlaceholder": "Search a Category"
                          }'>
                            <option label="empty"></option>
                            @foreach ($categories as $category)<option value="{{ $category->id }}"
                                data-option-template='<span class="d-flex align-items-center"><span class="text-truncate">{{ $category->name }}</span></span>'>
                                {{ $category->name }}</option>@endforeach
                        </select>
                    </div>

                    <div class="border-bottom pb-4 mb-4">
                        <h5>Skills Required</h5>
                        <select class="js-custom-select-multiple" multiple data-hs-select2-options='{
                                "minimumResultsForSearch": "3",
                                }'>
                            @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="border-bottom pb-4 mb-4">
                        <h5>Location</h5>
                        <select class="js-custom-select" id="locationLabel" name="city_id" data-hs-select2-options='{
                            "customClass": "custom-select",
                            "placeholder": "Select City/District",
                            "searchInputPlaceholder": "Search a City/District"
                          }'>
                            <option label="empty"></option>
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}"
                                data-option-template='<span class="d-flex align-items-center"><span class="text-truncate">{{ $city->name }}</span></span>'>
                                {{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-block btn-primary transition-3d-hover">Apply</button>
                    <!-- End Filters -->

                </form>
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
                            <span>{{ $job->category->name ?? 'General' }}</span>
                        </div>

                        <div class="post__actions">
                            <a class="post__actions-btn post__actions-btn--green" href="javascript:;">
                                <i class="fa fa-bookmark fa-sm"></i>
                            </a>
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
                        <div class="col-5">
                            <div class="post__tags">
                                <a href="#">#HTML</a>
                                <a href="#">#CSS</a>
                                <a href="#">#JS</a>
                            </div>
                        </div>
                        <div class="col-7">
                            <p class="float-right" style="font-size: 14px;"></u><b class="mr-1">Expected
                                    Delivery:</b></u> {{ $job->delivery_time }}</p>
                        </div>
                    </div>

                    <div class="post__stats justify-content-end">
                        <div>
                            <div>
                                <i class="fas fa-user-friends mr-2 fa-sm"></i>
                                Bidding Count&nbsp;<span
                                    class="badge badge-light mr-5 font-size-1">{{ $job->proposals->count() }}</span>
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
                 "stickyOffsetTop": 80,
                 "stickyOffsetBottom": 20
               }'>
                    <div class="mb-7">

                        <!-- App Info -->
                        <div class="mr-lg-2">
                            <div class="mb-3">
                                <div class="text-center mx-auto mb-3">
                                    <img class="img-fluid" src="/images/svg/work.svg" alt="" width="130">
                                </div>

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