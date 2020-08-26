@extends('layouts.clients.clientmaster')

@section('title', Auth::user()->name . ' - My Projects')
@section('content')

<div class="row space-1">
    <div class="col-lg-3">
        <!-- Navbar -->
        <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
            <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
                <!-- Card -->
                <div class="card mb-5">
                    <div class="card-body">
                        <!-- Avatar -->
                        <div class="d-none d-lg-block text-center mb-5">
                            <div class="avatar avatar-xxl avatar-circle mb-3">
                                <img class="avatar-img" src="{{ asset(Auth::user()->avatar) }}" alt="Image Description">
                                <img class="avatar-status avatar-lg-status"
                                    src="/images/svg/illustrations/top-vendor.svg" alt="Image Description"
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
                                <a class="nav-link active" href="Projects">
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

    <div class="col-lg-9">
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

                            <!-- Card -->
                            <li class="card card-bordered mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-md mb-3 mb-md-0">
                                            <small class="text-cap">Budget</small>
                                            <small class="text-dark font-weight-bold">Rs. 5700</small>
                                        </div>
                                        <div class="col-6 col-md mb-3 mb-md-0">
                                            <small class="text-cap">Freelancer</small>
                                            <small class="text-dark font-weight-bold">Sushant Poudel</small>
                                        </div>
                                        <div class="col-6 col-md">
                                            <small class="text-cap">Project No.</small>
                                            <small class="text-dark font-weight-bold">1</small>
                                        </div>
                                        <div class="col-6 col-md">
                                            <small class="text-cap">Job Posted Date:</small>
                                            <small class="text-dark font-weight-bold">14 August, 2020</small>
                                        </div>
                                    </div>
                                    <!-- End Row -->

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-8">

                                            <div class="row mx-n1">
                                                <div class="col-4 px-1">
                                                    <img class="img-fluid" src="/images/img/380x360/img2.jpg" alt="">
                                                </div>
                                                <div class="col-4 px-1">
                                                    <img class="img-fluid" src="/images/img/380x360/img7.jpg" alt="">
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>

                                        <div class="col-md-4">
                                            <a class="btn btn-sm btn-block btn-white mb-2" href="#">
                                                <i class="fas fa-Posting Jobs-cart fa-sm mr-2"></i> View Project
                                            </a>
                                            <a class="btn btn-sm btn-block btn-white" href="#">
                                                <i class="fas fa-truck-loading fa-sm mr-2"></i>Track Proposals (2)
                                            </a>
                                            <a class="btn btn-sm btn-block btn-primary" href="#"><i
                                                    class="fa fa-print fa-sm mr-2"></i>Print Invoice</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Item -->
                            </li>
                            <!-- End End Card -->
                        </ul>

                        <!-- Pagination -->
                        <nav class="d-flex justify-content-end mt-5" aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                        <!-- End Pagination -->
                    </div>

                    <div class="tab-pane fade" id="open-Projects" role="tabpanel" aria-labelledby="open-Projects-tab">
                        <!-- Empty State -->
                        <div class="text-center space-1">
                            <img class="avatar avatar-xl mb-3" src="/images/svg/components/empty-state-no-data.svg"
                                alt="Image Description">
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
                                alt="Image Description">
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