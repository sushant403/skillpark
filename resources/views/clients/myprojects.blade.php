@extends('layouts.clients.clientmaster')

@section('title', Auth::user()->name . ' - My Projects')
@section('content')

<div class="row no-gutters space-lg-1 space-sm-0">
    <div class="col-lg-2 mx-auto">
        <!-- Navbar -->
        <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
            <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
                <!-- Card -->
                <div class="card mb-5">
                    <div class="card-body">
                        <!-- Avatar -->
                        <div class="d-none d-lg-block text-center mb-5">
                            <div class="avatar avatar-xxl avatar-circle mb-3">
                                <img class="avatar-img" src="{{ asset(Auth::user()->avatar) }}" alt="">
                                <img class="avatar-status avatar-lg-status"
                                    src="/images/svg/illustrations/top-vendor.svg" alt=""
                                    data-toggle="tooltip" data-placement="top" title="Verified user">
                            </div>

                            <h4 class="card-title">{{ Auth::user()->name }}</h4>
                            <p class="card-text font-size-1">{{ Auth::user()->email }}</p>
                        </div>
                        <!-- End Avatar -->
                        <h6 class="text-cap small">Job Posts</h6>

                        <!-- List -->
                        <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2 mb-4">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('myprojects') }}">
                                    <i class="fas fa-shopping-basket nav-icon"></i>
                                    Your Projects
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/faq">
                                    <i class="fas fa-heart nav-icon"></i>
                                    FAQ
                                </a>
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

    <div class="col-lg-9 mx-auto">
        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header pb-0">
                <form class="input-group input-group-merge input-group-borderless">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <input type="search" class="form-control" placeholder="Search Projects"
                        aria-label="Search Projects">
                </form>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
                <!-- Nav -->
                <ul class="nav nav-segment nav-fill mb-5" id="editUserTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="all-Projects-tab" data-toggle="tab" href="#all-Projects"
                            role="tab">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="open-Projects-tab" data-toggle="tab" href="#open-Projects"
                            role="tab">Received Proposals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cenceled-Projects-tab" data-toggle="tab" href="#cenceled-Projects"
                            role="tab">Cancelled Projects</a>
                    </li>
                </ul>
                <!-- End Nav -->

                <!-- Tab Content -->
                <div class="tab-content" id="editUserTabContent">
                    <div class="tab-pane fade show active" id="all-Projects" role="tabpanel"
                        aria-labelledby="all-Projects-tab">
                        <ul class="list-unstyled">

                            @foreach($jobs->sortByDesc('created_at') as $key => $job)
                            <li class="card card-bordered mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-md">
                                            <small class="text-cap">Project No.</small>
                                            <small class="text-dark font-weight-bold">{{ $job->id }}</small>
                                        </div>
                                        <div class="col-6 col-md mb-3 mb-md-0">
                                            <small class="text-cap">Project Name</small>
                                            <small class="text-dark font-weight-bold">{{ $job->title ?? '' }}</small>
                                        </div>
                                        <div class="col-6 col-md mb-3 mb-md-0">
                                            <small class="text-cap">Hired Freelancer</small>
                                            <small
                                                class="text-dark font-weight-bold">{{ $job->candidate->name ?? '(to be choosen)' }}</small>
                                        </div>
                                        <div class="col-6 col-md mb-3 mb-md-0">
                                            <small class="text-cap">Budget</small>
                                            <small class="text-dark font-weight-bold">NPR
                                                {{ $job->budget ?? '' }}</small>
                                        </div>
                                        <div class="col-6 col-md">
                                            <small class="text-cap">Job Posted Date:</small>
                                            <small
                                                class="text-dark font-weight-bold">{{ $job->created_at ?? '' }}</small>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <small class="text-cap mb-4">Associated File(s)</small>
                                            <div class="row mx-n1 d-flex">
                                                @if($job->attachments)
                                                @foreach($job->attachments as $key => $media)
                                                <a class="link-underline mr-4" href="{{ $media->getUrl() }}"
                                                    target="_blank">
                                                    Attachment
                                                </a>
                                                @endforeach
                                                @endif
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                        <div class="col-md-4">
                                            <a class="btn btn-sm btn-block btn-white mb-2"
                                                href="{{ route('jobs.show', $job->id) }}">
                                                <i class="fas fa-Posting Jobs-cart fa-sm mr-2"></i> View Project
                                            </a>
                                            <a class="btn btn-sm btn-block btn-white"
                                                href="{{ route('jobs.show', $job->id) }}#biddings">
                                                <i class="fas fa-truck-loading fa-sm mr-2"></i>Track Proposals
                                                ({{ $job->proposals->count() }})
                                            </a>
                                            <a class="btn btn-sm btn-block btn-primary" href="#"><i
                                                    class="fa fa-print fa-sm mr-2"></i>Print Invoice</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                       <div class="mx-auto" style="width:max-content"> {{ $jobs->appends(request()->query())->links() }} </div>
                    </div>

                    <div class="tab-pane fade" id="open-Projects" role="tabpanel" aria-labelledby="open-Projects-tab">
                        <!-- Empty State -->
                        <div class="text-center space-1">
                            <img class="avatar avatar-xl mb-3" src="/images/svg/components/empty-state-no-data.svg"
                                alt="">
                            <p class="card-text">No data to show</p>
                            <a class="btn btn-sm btn-white" href="#">Start Posting Jobs</a>
                        </div>
                        <!-- End Empty State -->
                    </div>

                    <div class="tab-pane fade" id="cenceled-Projects" role="tabpanel"
                        aria-labelledby="cenceled-Projects-tab">
                        <!-- Empty State -->
                        <div class="text-center space-1">
                            <img class="avatar avatar-xl mb-3" src="/images/svg/components/empty-state-no-data.svg"
                                alt="">
                            <p class="card-text">No data to show</p>
                            <a class="btn btn-sm btn-white" href="#">Start Posting Jobs</a>
                        </div>
                        <!-- End Empty State -->
                    </div>
                </div>
                <!-- End Tab Content -->
            </div>
            <!-- End Body -->
        </div>
        <!-- End Card -->
    </div>
</div>

@endsection