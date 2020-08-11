@extends('layouts.clients.clientmaster')

@section('content')
<script>
    document.title = 'Home - {{ Auth::user()->name }}';
</script>

</style>

<main class="browse-section">
    <div class="container">
        <div class="featured-candidates py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="main-heading">
                            <h2>Featured Candidates</h2>
                            <span>Discover, Intelligent, Experienced, Professional, Trustworthy, Freelancer &
                                Full Time
                                Candidates.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-5 col-lg-3 col-xl-3 bg-white">
                <!-- Filters -->
                <div class="border-bottom pb-4 mb-4 pt-4">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('client') }}">
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

            <div class="col-lg-9 col-md-7 mainpage">

                <div class="main-tabs">
                    <div class="prjoects-content">
                        <div class="row">
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.png" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Rajesh Hamal</h4>
                                                </a>
                                                <span>UX Designer</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 5000/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.9</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.png" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Nitika Bhatta</h4>
                                                </a>
                                                <span>Wordpress Developer</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 5000/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.9</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.png" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Divesh Chhetri</h4>
                                                </a>
                                                <span>Php Developer</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 6000/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.png" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Ariana Grande</h4>
                                                </a>
                                                <span>Android Developer</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 6000/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.png" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Sanaya Sharma</h4>
                                                </a>
                                                <span>Accountant manager</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 3000/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.png" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Hari Singh</h4>
                                                </a>
                                                <span>Skillpark End Developer</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 2500/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="main-p-pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    PREV
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">24</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    NEXT
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Body End -->
@endsection