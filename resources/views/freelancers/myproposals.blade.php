@extends('layouts.freelancers.freelancermaster')

@section('title', 'My Proposals | ' . Auth::user()->name)
@section('content')

<!-- ========== MAIN CONTENT ========== -->
<main id="content" class="mt-3" role="main">
    <!-- Cart Section -->
    <div class="container space-lg-1 space-md-3">
        <div class="row">
            <div class="col-lg-8 mb-7 mb-lg-0">
                <!-- Title -->
                <div class="d-flex justify-content-between align-items-end border-bottom pb-3 mb-7">
                    <h1 class="h3 mb-0">My Proposal Biddings</h1>
                    <span>All</span>
                </div>
                <!-- End Title -->

                @foreach($proposals->sortByDesc('created_at') as $key => $proposal)
                <div class="border-bottom pb-5 mb-5">
                    <div class="media">
                        <div class="max-w-15rem w-100 mr-3">
                            <img class="img-fluid"
                                src="{{ asset($proposal->job->employer->avatar ?? '/images/upload/default.jpg') }}"
                                alt="">
                        </div>
                        <div class="media-body">
                            <div class="row">
                                <div class="col-md-9 mb-3 mb-md-0">
                                    <a class="h5 d-block" href="#">{{ $proposal->job->title ?? '' }}</a>

                                    <div class="text-body font-size-1 mb-1">
                                        <span>Delivery Time:</span>
                                        <span>{{ $proposal->job->delivery_time ?? '' }}</span>
                                    </div>

                                    <span class="d-block mb-1" style="color: #333"><i
                                            class="far fa-money-bill-alt mr-1 mt-2"></i> NPR
                                        {{ $proposal->job->budget ?? '' }}</span>

                                    {{-- @foreach($proposal->attachments as $key => $media) --}}
                                    {{-- <a href="{{ $media->getUrl() }}" target="_blank"> --}}
                                    {{-- @endforeach --}}
                                    <span class="d-block mb-1" style="color: #333"><i
                                            class="fa fa-file-alt mr-1 mt-2"></i>
                                        View File</span></a>

                                    <div class="text-body font-size-1 mb-1 mt-3">
                                        <span><b><u>Job Description:</u></b></span><br>
                                        <span>{{ Str::limit($proposal->job->description, 150) }}</span>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-auto">
                                            <form action="{{ route('proposals.destroy', $proposal->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you wanna delete your Proposal?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="mb-2 border-0"
                                                    style="background: none; color:#666">
                                                    <span class="font-size-1 text-hover-primary"><i
                                                            class="far fa-trash-alt text-hover-primary mr-1"></i>Delete
                                                        Proposal</span>
                                                </button>
                                            </form>

                                            <a class="d-block text-body font-size-1" href="javascript:;">
                                                <i class="far fa-edit text-hover-primary"></i>
                                                <span class="link-underline mr-1">Edit</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="mx-auto" style="width:max-content"> {{ $proposals->appends(request()->query())->links() }} </div>

                <div class="d-sm-flex justify-content-end">
                    <a class="font-weight-bold" href="{{ route('home') }}">
                        <i class="fas fa-angle-left fa-xs mr-1"></i>
                        Back to Finding Jobs
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pl-lg-4">
                    <!-- Order Summary -->
                    <div class="card shadow-soft p-4 mb-4">
                        <!-- Title -->
                        <div class="border-bottom pb-4 mb-4">
                            <h2 class="h3 mb-0">Job summary</h2>
                        </div>
                        <!-- End Title -->

                        <div class="border-bottom pb-4 mb-4">
                            <div class="media align-items-center mb-3">
                                <span class="d-block font-size-1 mr-3">Proposals Total Applied</span>
                                <div class="media-body text-right">
                                    <span class="text-dark font-weight-bold">{{ $proposals->count() }}</span>
                                </div>
                            </div>

                            <!-- Checkbox -->
                            <div class="card shadow-none mb-3">
                                <div class="card-body p-0">
                                    <div class="custom-control custom-radio d-flex align-items-center small">
                                        <input type="radio" class="custom-control-input" id="deliveryRadio1"
                                            name="deliveryRadio" checked>
                                        <label class="custom-control-label ml-1" for="deliveryRadio1">
                                            <span class="d-block font-size-1 font-weight-bold mb-1">Excel - Standard
                                                Office</span>
                                            <span class="d-block text-muted">Excel File is Generated.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- End Checkbox -->

                            <!-- Checkbox -->
                            <div class="card shadow-none">
                                <div class="card-body p-0">
                                    <div class="custom-control custom-radio d-flex align-items-center small">
                                        <input type="radio" class="custom-control-input" id="deliveryRadio2"
                                            name="deliveryRadio">
                                        <label class="custom-control-label ml-1" for="deliveryRadio2">
                                            <span class="d-block font-size-1 font-weight-bold mb-1">Print PDF</span>
                                            <span class="d-block text-muted">PDF file will be generated of all the
                                                proposals.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- End Checkbox -->
                        </div>

                        <div class="row mx-1">
                            <div class="col px-1 my-1">
                                <a class="btn btn-primary btn-block btn-pill transition-3d-hover"
                                    href="javascript:;">Print Invoice</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Order Summary -->

                    <!-- Help Link -->
                    <div class="media align-items-center">
                        <figure class="w-100 max-w-6rem mr-2">
                            <img class="img-fluid" src="/images/svg/icons/icon-4.svg" alt="SVG">
                        </figure>
                        <div class="media-body text-body small">
                            <span class="font-weight-bold mr-1">Need Help?</span>
                            <a class="link-underline" href="#">Chat now</a>
                        </div>
                    </div>
                    <!-- End Help Link -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart Section -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection