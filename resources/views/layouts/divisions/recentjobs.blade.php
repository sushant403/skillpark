<div class="container space-2">
    <!-- Title -->
    <div class="w-md-80 text-center mx-md-auto mb-9">
        <h3>Trending Jobs and Services of <span class="text-highlight-success" id="date"></span></h3>
        <p>Discover your perfect requirement.</p>
    </div>
    <!-- End Title -->

    <script>
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];;
    var date = new Date();
     document.getElementById('date').innerHTML = months[date.getMonth()] ;
    </script>

    <!-- Featured Topics Carousel -->
    <div class="row mb-5">
        @foreach($recentJobs as $job)
        <article class="col-md-4 col-lg-3 mb-5">
            <!-- Article -->
            <div class="card border h-100">
                <div class="card-img-top position-relative">
                    <img class="card-img-top" src={{ asset($job->thumbnail) ?? '/images/svg/components/graphics-1.svg' }}
                        alt="">

                    <div class="position-absolute top-0 left-0 mt-3 ml-3">
                        <small class="btn btn-xs btn-success btn-pill text-uppercase shadow-soft mb-3">Verified</small>
                    </div>

                    <div class="position-absolute bottom-0 left-0 mb-3 ml-4">
                        <div class="d-flex align-items-center flex-wrap">
                            <ul class="list-inline mt-n1 mb-0 mr-2">
                                <li class="list-inline-item mx-0"><img src="/images/svg/illustrations/star.svg"
                                        alt="Review rating" width="14"></li>
                            </ul>
                            <span class="d-inline-block">
                                <small
                                    class="font-weight-bold text-white mr-1">{{ $job->company ?? 'Verified Seller' }}</small>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <small
                        class="d-block small font-weight-bold text-cap mb-2">{{ $job->category->name ?? 'General Category'}}
                    </small>

                    <div class="mb-3">
                        <h4>
                            <a class="text-inherit" href="{{ route('job.show', $job->id) }}">{{ $job->title }}</a>
                        </h4>
                    </div>

                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar-group">
                            <a class="avatar avatar-xs avatar-circle" href="javascript:;">
                                <img class="avatar-img"
                                    src="{{ asset($job->employer->avatar) ?? '/images/uploads/default/png' }}" alt="">
                            </a><span class="small text-muted">{{ $job->employer->name }}</span>
                        </div>
                        <div class="d-flex align-items-center ml-auto">
                            <div class="small text-muted">
                                <i class="fa fa-book-reader d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                {{ $job->budget }}
                            </div>
                        </div>
                    </div>
                    <p style="font-size: 14px">{{ Str::limit($job->description, 60) }}</p>
                </div>

                <div class="card-footer border-0 pt-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <a class="btn btn-sm btn-primary transition-3d-hover"
                            href="{{ route('job.show', $job->id) }}">See
                            More</a>
                    </div>
                </div>
            </div>
            <!-- End Article -->
        </article>
        @endforeach
    </div>
    <!-- End Featured Topics Carousel -->

    <div class="text-center">
        <a class="font-weight-bold" href="">Browse Services <i class="fa fa-angle-right fa-sm ml-1"></i></a>
    </div>
</div>
<!-- End Featured Topics Section -->