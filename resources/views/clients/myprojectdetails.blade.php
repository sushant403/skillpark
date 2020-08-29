@extends('layouts.clients.clientmaster')

@section('title', $job->title . ' | My Projects - ' . Auth::user()->name)
@section('content')

<!-- ========== MAIN ========== -->
<main id="content" role="main" class="bg-light">

    <!-- Content Section -->
    <div class="container space-1 space-top-lg-1 ">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h5 class="card-header-title">{{ $job->title }}<a class="btn btn-sm btn-ghost-secondary"
                                href="{{ route('jobs.index') }}">
                                <i class="fa fa-angle-left mr-1"></i>
                                Back to Projects List
                            </a></h5>

                        <a class="btn btn-sm btn-ghost-secondary" href="#">
                            <i class="fas fa-file-download mr-1"></i>
                            Download .PDF
                        </a>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 mb-4 mb-md-0">
                                <div class="mb-4">
                                    <small class="text-cap">Delivery: {{ $job->delivery_time }}</small>
                                    <h5><i class="fa fa-user-check mr-1"></i>Hired Freelancer: <a
                                            class="btn btn-sm btn-ghost-secondary pl-1"
                                            href="#">{{ $job->candidate->name ?? '(to be choosen)' }}</a></h5>
                                </div>

                                <div>
                                    <small class="text-cap">Total Budget</small>
                                    <h4 class="text-primary">NPR {{ $job->budget }}</h4>
                                </div>
                                <div class="mt-4">
                                    <p>{{ $job->description }}</p>
                                </div>

                                <small class="text-cap my-2 mt-4 font-weight-bold">Associated File(s)</small>
                                <div class="row mx-n1 mb-5 d-flex attachment-container">
                                    @if($job->attachments)
                                    @foreach($job->attachments as $key => $media)
                                    <a class="attachment-box ripple-effect" href="{{ $media->getUrl() }}"
                                        target="_blank">
                                        <span>Attachment</span></a>
                                    </a>
                                    @endforeach
                                    @endif
                                </div>
                                <!-- End Row -->
                            </div>

                            <div class="col-md-4 text-md-right">
                                <a class="btn btn-sm btn-white mr-1 mb-0 mb-md-2" href="#">Cancel Project</a>
                                <a class="btn btn-sm btn-primary transition-3d-hover mb-0 mb-md-2" href="">Update</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header" id="biddings">
                        <h5 class="card-header-title">Proposal Biddings</h5>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                        <!-- List Group -->
                        <ul class="list-group mb-5">
                            <!-- List Item -->
                            @foreach($job->proposals->sortByDesc('created_at') as $key => $proposal)
                            <li class="list-group-item">
                                <div class="mb-2">
                                    <h5>{{ $proposal->candidate->name ?? '' }} <span
                                            class="badge badge-primary ml-1">Verified</span></h5>
                                </div>
                                <div class="media">
                                    <img class="avatar avatar-sm mr-3"
                                        src="{{ asset($proposal->candidate->avatar ?? '') }} " alt="">

                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-sm mb-3 mb-sm-0">
                                                <span
                                                    class="d-block text-dark">{{ $proposal->delivery_time ?? $job->delivery_time}}</span>
                                                <small class="d-block text-muted">Bidded at:
                                                    {{ $proposal->created_at ?? '' }}</small>
                                                <div class="mt-4">
                                                    <p>{{ $proposal->proposal_text }}</p>
                                                </div>

                                                <small class="text-cap my-2 mt-5 font-weight-bold">Associated
                                                    File(s)</small>
                                                <div class="row mx-n1 d-flex attachment-container">
                                                    @if($proposal->attachments)
                                                    @foreach($proposal->attachments as $key => $media)
                                                    <a class="attachment-box ripple-effect"
                                                        href="{{ $media->getUrl() }}" target="_blank">
                                                        <span>Attachment</span></a>
                                                    </a>
                                                    @endforeach
                                                    @endif
                                                </div>

                                            </div>
                                            @if($job->candidate_id == NULL)
                                            <div class="col-sm-auto">
                                                <form action="{{ route("jobs.update", [$job->id]) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="candidate_id"
                                                        value="{{ $proposal->candidate_id }}" />

                                                    <button type="submit" class="btn btn-xs btn-white mr-2 my-2"><i
                                                            class="fa fa-user-alt mr-1"></i>Hire Freelancer
                                                    </button>
                                                </form>
                                                <button type="button" class="btn btn-xs btn-white">
                                                    <i class="fas fa-trash-alt mr-1"></i> Delete
                                                </button>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            <span class="mt-4 center text-muted text-center font-italic">(This is the end)</span>
                        </ul>
                        <!-- End List Group -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                        <h5 class="card-header-title">Project History</h5>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle">
                            <thead class="thead-light">
                                <tr>
                                    <th>Reference</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Updated</th>
                                    <th>Invoice</th>
                                    <th style="width: 5%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">#3682303</a></td>
                                    <td><span class="badge badge-soft-warning">Pending</span></td>
                                    <td>NPR</td>
                                    <td>22/04/2020</td>
                                    <td><a class="btn btn-xs btn-white" href="../pages/invoice.html"><i
                                                class="fas fa-file-download mr-1"></i> PDF</a></td>
                                    <td><a class="btn btn-xs btn-white" href="javascript:;" data-toggle="modal"
                                            data-target="#invoiceReceiptModal"><i class="fas fa-eye mr-1"></i> Quick
                                            view</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">#2333234</a></td>
                                    <td><span class="badge badge-soft-success">Successful</span></td>
                                    <td>NPR</td>
                                    <td>22/04/2019</td>
                                    <td><a class="btn btn-xs btn-white" href="../pages/invoice.html"><i
                                                class="fas fa-file-download mr-1"></i> PDF</a></td>
                                    <td><a class="btn btn-xs btn-white" href="javascript:;" data-toggle="modal"
                                            data-target="#invoiceReceiptModal"><i class="fas fa-eye mr-1"></i> Quick
                                            view</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">#9834283</a></td>
                                    <td><span class="badge badge-soft-success">Successful</span></td>
                                    <td>NPR</td>
                                    <td>22/04/2018</td>
                                    <td><a class="btn btn-xs btn-white" href="../pages/invoice.html"><i
                                                class="fas fa-file-download mr-1"></i> PDF</a></td>
                                    <td><a class="btn btn-xs btn-white" href="javascript:;" data-toggle="modal"
                                            data-target="#invoiceReceiptModal"><i class="fas fa-eye mr-1"></i> Quick
                                            view</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Content Section -->
</main>
<!-- ========== END MAIN ========== -->

@endsection