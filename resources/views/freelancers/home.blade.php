@extends('layouts.freelancers.freelancermaster')

@section('content')

<script>
    document.title = 'Home - {{ Auth::user()->name }}';
</script>

<main class="bg-light" role="main" id="content">
    <div class="container" style="padding-top: 20px;">
        <div class="row">
            <div class="col-12 col-md-5 col-lg-3 col-xl-3 bg-white">
                <!-- Filters -->
                <div class="border-bottom pb-4 mb-4 pt-4">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('freelancer') }}">
                        @csrf
                        <h4>Budget</h4>
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
                    <h4>Categories</h4>
                    <select class="js-custom-select" id="categoryLabel" name="city_id" data-hs-select2-options='{
                            "customClass": "custom-select",
                            "placeholder": "Select Category",
                            "searchInputPlaceholder": "Search a Category"
                          }'>
                        <option label="empty"></option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            data-option-template='<span class="d-flex align-items-center"><span class="text-truncate">{{ $category->name }}</span></span>'>
                            {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="border-bottom pb-4 mb-4">
                    <h4>Skills Required</h4>
                    <select class="js-custom-select-multiple" multiple data-hs-select2-options='{
                                "minimumResultsForSearch": "3",
                                }'>
                        @foreach ($skills as $skill)
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="border-bottom pb-4 mb-4">
                    <h4>Location</h4>
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

                <!-- post -->
                <div class="post">
                    <div class="post__head">
                        <a href="#" class="post__head-img">
                            <img src="/images/uploads/default.png" alt="">
                        </a>
                        <div class="post__head-title">
                            <h5><a href="#">Divesh Thapa</a></h5>
                            <p>11 min ago</p>
                        </div>
                    </div>

                    <div class="post__wrap">
                        <div class="post__company">
                            <i class="fa fa-briefcase fa-sm"></i>
                            <span>Skillpark-end Developer</span>
                        </div>

                        <div class="post__actions">
                            <a class="post__actions-btn post__actions-btn--green" href="#">
                                <i class="fa fa-bookmark fa-sm"></i>
                            </a>
                            <a class="post__actions-btn post__actions-btn--red" href="#">
                                <i class="fa fa-envelope fa-sm"></i>
                            </a>
                            <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Bid now</span></a>
                        </div>
                    </div>

                    <h2 class="post__title"><a href="project">PSD to HTML</a></h2>

                    <div class="post__options">
                        <p>Rs. 400 - Rs. 450</p>
                    </div>

                    <div class="post__description">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered
                            alteration in some form, by injected humour, or randomised words which don't look even
                            slightly
                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't
                            anything embarrassing hidden in the middle of text.</p>
                    </div>

                    <div class="post__tags">
                        <a href="#">HTML</a>
                        <a href="#">CSS</a>
                        <a href="#">JS</a>
                        <a href="#">PSD</a>
                    </div>

                    <div class="post__stats">
                        <div>
                            <a class="post__likes" href="#"><i class="fa fa-heart fa-sm"></i> <span>15</span></a>
                            <a class="post__comments" data-toggle="collapse" href="#collapse3" role="button"
                                aria-expanded="false" aria-controls="collapse1"><i class="fa fa-comment fa-sm"></i>
                                <span>0</span></a>
                        </div>
                    </div>

                    <div class="collapse post__collapse" id="collapse3">
                        <form action="#" class="post__form">
                            <input type="text" placeholder="Type your comment...">
                            <button type="button"><i class="fas fa-paper-plane fa-sm"></i></button>
                        </form>
                    </div>
                </div>
                <!-- end post -->

                <!-- post -->
                <div class="post">
                    <div class="post__head">
                        <a href="#" class="post__head-img">
                            <img src="/images/uploads/default.png" alt="">
                        </a>
                        <div class="post__head-title">
                            <h5><a href="#">Aditi Budathoki</a></h5>
                            <p>22 min ago</p>
                        </div>
                    </div>

                    <div class="post__wrap">
                        <div class="post__company">
                            <i class="fa fa-briefcase fa-sm"></i>
                            <span>Skillpark-end Developer</span>
                        </div>

                        <div class="post__actions">
                            <a class="post__actions-btn post__actions-btn--green" href="#">
                                <i class="fa fa-bookmark fa-sm"></i>
                            </a>
                            <a class="post__actions-btn post__actions-btn--red" href="#">
                                <i class="fa fa-envelope fa-sm"></i>
                            </a>
                            <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Bid now</span></a>
                        </div>
                    </div>

                    <h2 class="post__title"><a href="project">PSD to HTML</a></h2>

                    <div class="post__options">
                        <p>Rs. 400 - Rs. 500</p>
                    </div>

                    <div class="post__description">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered
                            alteration in some form, by injected humour, or randomised words which don't look even
                            slightly
                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't
                            anything embarrassing hidden in the middle of text.</p>
                    </div>

                    <div class="post__tags">
                        <a href="#">HTML</a>
                        <a href="#">CSS</a>
                        <a href="#">JS</a>
                        <a href="#">PSD</a>
                    </div>

                    <div class="post__stats">
                        <div>
                            <a class="post__likes" href="#"><i class="fa fa-heart fa-sm"></i> <span>15</span></a>
                            <a class="post__comments" data-toggle="collapse" href="#collapse2" role="button"
                                aria-expanded="false" aria-controls="collapse1"><i class="fa fa-comment fa-sm"></i>
                                <span>0</span></a>
                        </div>
                    </div>

                    <div class="collapse post__collapse" id="collapse2">
                        <form action="#" class="post__form">
                            <input type="text" placeholder="Type your comment...">
                            <button type="button"><i class="fas fa-paper-plane fa-sm"></i></button>
                        </form>
                    </div>
                </div>
                <!-- end post -->

                <!-- post -->
                <div class="post">
                    <div class="post__head">
                        <a href="#" class="post__head-img">
                            <img src="/images/uploads/default.png" alt="">
                        </a>
                        <div class="post__head-title">
                            <h5><a href="#">Bibek Dhungana</a></h5>
                            <p>37 min ago</p>
                        </div>
                    </div>

                    <div class="post__wrap">
                        <div class="post__company">
                            <i class="fa fa-briefcase fa-sm"></i>
                            <span>Skillpark-end Developer</span>
                        </div>

                        <div class="post__actions">
                            <a class="post__actions-btn post__actions-btn--green" href="#">
                                <i class="fa fa-bookmark fa-sm"></i>
                            </a>
                            <a class="post__actions-btn post__actions-btn--red" href="#">
                                <i class="fa fa-envelope fa-sm"></i>
                            </a>
                            <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Bid now</span></a>
                        </div>
                    </div>

                    <h2 class="post__title"><a href="project">PSD to HTML</a></h2>

                    <div class="post__options">
                        <p>Rs. 100 - Rs. 150</p>
                    </div>

                    <div class="post__description">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered
                            alteration in some form, by injected humour, or randomised words which don't look even
                            slightly
                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't
                            anything embarrassing hidden in the middle of text.</p>
                    </div>

                    <div class="post__tags">
                        <a href="#">HTML</a>
                        <a href="#">CSS</a>
                        <a href="#">JS</a>
                        <a href="#">PSD</a>
                    </div>

                    <div class="post__stats">
                        <div>
                            <a class="post__likes" href="#"><i class="fa fa-heart fa-sm"></i> <span>15</span></a>
                            <a class="post__comments" data-toggle="collapse" href="#collapse1" role="button"
                                aria-expanded="false" aria-controls="collapse1"><i class="fa fa-comment fa-sm"></i>
                                <span>0</span></a>
                        </div>
                    </div>

                    <div class="collapse post__collapse" id="collapse1">
                        <form action="#" class="post__form">
                            <input type="text" placeholder="Type your comment...">
                            <button type="button"><i class="fas fa-paper-plane fa-sm"></i></button>
                        </form>
                    </div>
                </div>
                <!-- end post -->

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
                 "stickyOffsetTop": 40,
                 "stickyOffsetBottom": 20
               }'>
                    <div class="mb-7">
                        <div class="mb-3">
                            <h3>Featured Jobs</h3>
                        </div>

                        <div class="sidebox sidebox--desk">
                            <div class="sidebox__content">
                                <div class="sidebox__job">
                                    <div class="sidebox__job-title">
                                        <a href="#">PSD to HTML</a>
                                        <span>Rs. 200 - Rs. 250</span>
                                    </div>
                                    <div class="post__wrap">
                                        <div class="post__company">
                                            <i class="fa fa-briefcase fa-sm"></i>
                                            <span>Front-end Developer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebox__job">
                                    <div class="sidebox__job-title">
                                        <a href="#">Mobile App</a>
                                        <span>Rs. 7000</span>
                                    </div>
                                    <div class="post__wrap">
                                        <div class="post__company">
                                            <i class="fa fa-briefcase fa-sm"></i>
                                            <span>Java Developer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebox__job">
                                    <div class="sidebox__job-title">
                                        <a href="#">Landing page</a>
                                        <span>Rs. 400</span>
                                    </div>
                                    <div class="post__wrap">
                                        <div class="post__company">
                                            <i class="fa fa-briefcase fa-sm"></i>
                                            <span>UX/UI Designer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebox__job">
                                    <div class="sidebox__job-title">
                                        <a href="#">Site design</a>
                                        <span>Rs. 4000 - Rs. 5000</span>
                                    </div>
                                    <div class="post__wrap">
                                        <div class="post__company">
                                            <i class="fa fa-briefcase fa-sm"></i>
                                            <span>UX/UI Designer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebox__job">
                                    <div class="sidebox__job-title">
                                        <a href="#">WP Plugin</a>
                                        <span>Rs. 3800</span>
                                    </div>
                                    <div class="post__wrap">
                                        <div class="post__company">
                                            <i class="fa fa-briefcase fa-sm"></i>
                                            <span>Wordpress developer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="sidebox__more">View more</a>
                        </div>
                        <!-- end sidebox -->
                    </div>

                    <div class="mb-7">
                        <div class="mb-3">
                            <h3>Popular</h3>
                        </div>

                        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Business</a>
                        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Adventure</a>
                        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Community</a>
                        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Announcements</a>
                        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Tutorials</a>
                        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Resources</a>
                        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Classic</a>
                        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Photography</a>
                        <a class="btn btn-xs btn-soft-secondary mb-1" href="#">Interview</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end main content -->
    </div>
</main>
@endsection