@extends('layouts.clients.clientmaster')

@section('content')
<script>
    document.title = 'Home - {{ Auth::user()->name }}';
</script>

</style>

<main class="py-2" role="main" id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <!--   header -->
                <div class="third-menu filter-options py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                <div class="left">
                                    <div class="dropdown-filters d-flex">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Freelancer Details
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <div class="options">
                                                    <h5>Main type</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" id="appdev"
                                                                        class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                        for="appdev">Mobile Apps</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" id="webdev"
                                                                        class="custom-control-input">
                                                                    <label class="custom-control-label" for="webdev">Web
                                                                        Dev</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" id="full"
                                                                        class="custom-control-input">
                                                                    <label class="custom-control-label" for="full">Full
                                                                        Stack</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" id="all"
                                                                        class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                        for="all">All</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dropdown ml-4">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="delivery" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Budget
                                            </button>
                                            <div class="dropdown-menu delivery" aria-labelledby="delivery">
                                                <div class="options">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div>
                                                                <form enctype="multipart/form-data" method="POST"
                                                                    action="{{ route('client') }}">
                                                                    @csrf
                                                                    <h4>Budget</h4>
                                                                    <!-- radioes -->
                                                                    <div
                                                                        class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="budget" id="5k">
                                                                            <label class="custom-control-label"
                                                                                for="5k">Rs. 5000 - Rs. 10,000</label>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="budget" id="10k">
                                                                            <label class="custom-control-label"
                                                                                for="10k">Rs. 10,000 - Rs.
                                                                                20,000</label>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="budget" id="20k">
                                                                            <label class="custom-control-label"
                                                                                for="20k">Rs. 20,000 - Rs.
                                                                                50,000</label>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End radioes -->

                                                                    <!-- View More - Collapse -->
                                                                    <div class="collapse" id="collapseBrand">
                                                                        <div
                                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="budget" id="50k">
                                                                                <label class="custom-control-label"
                                                                                    for="50k">Rs. 50,000 - Rs. 1
                                                                                    Lakh</label>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="budget" id="1l">
                                                                                <label class="custom-control-label"
                                                                                    for="1l">Rs. 1 Lakh +</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End View More - Collapse -->

                                                                    <!-- Link -->
                                                                    <a class="link link-collapse small font-size-1"
                                                                        data-toggle="collapse" href="#collapseBrand"
                                                                        role="button" aria-expanded="false"
                                                                        aria-controls="collapseBrand">
                                                                        <span class="link-collapse-default">View
                                                                            more</span>
                                                                        <span class="link-collapse-active">View
                                                                            less</span>
                                                                        <span class="link-icon ml-1">+</span>
                                                                    </a>
                                                                    <!-- End Link -->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown ml-4">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="delivery" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Delivery Time
                                            </button>
                                            <div class="dropdown-menu delivery" aria-labelledby="delivery">
                                                <div class="options">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div>
                                                                <form enctype="multipart/form-data" method="POST"
                                                                    action="{{ route('client') }}">
                                                                    @csrf
                                                                    <h4>Delivery Time</h4>
                                                                    <!-- radioes -->
                                                                    <div
                                                                        class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="budget" id="48hr">
                                                                            <label class="custom-control-label"
                                                                                for="48hr">Express 48 Hours</label>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="budget" id="7d">
                                                                            <label class="custom-control-label"
                                                                                for="7d">Within 7 Days</label>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-1">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="budget" id="ud">
                                                                            <label class="custom-control-label"
                                                                                for="ud">Upon Discussion</label>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End radioes -->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <ul class="d-flex align-items-center">
                                        <li>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                            <h5>Verified Services</h5>
                                        </li>
                                        <li>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                            <h5>Popular</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-page best-selling">
                    <div class="view_slider recommended pt-5">
                        <div class="container">
                            <h3>Trending Services of August</h3>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="services/description">
                                        <img class="img-fluid" src="/images/svg/discussion-scene.svg" />
                                    </a>
                                    <div class="inner-slider">
                                        <div class="inner-wrapper">
                                            <div class="d-flex align-items-center">
                                                <span class="seller-image">
                                                    <img class="img-fluid" src="{{ Auth::user()->avatar }}" alt='' />
                                                </span>
                                                <span class="seller-name">
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                    <span class="level hint--top level-one-seller">
                                                        Freelancer
                                                    </span>
                                                </span>
                                            </div>
                                            <h3>
                                                {{ Auth::user()->about }}
                                            </h3>
                                            <div class="content-info">
                                                <i class="fa fa-map-marker"></i> Kathmandu
                                            </div>
                                            <div class="footer">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                <div class="price">
                                                    <a href="#">
                                                        Starting At <span> Rs. 1,205</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a href="services/description">
                                        <img class="img-fluid" src="/images/svg/discussion-scene.svg" />
                                    </a>
                                    <div class="inner-slider">
                                        <div class="inner-wrapper">
                                            <div class="d-flex align-items-center">
                                                <span class="seller-image">
                                                    <img class="img-fluid" src="{{ Auth::user()->avatar }}" alt='' />
                                                </span>
                                                <span class="seller-name">
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                    <span class="level hint--top level-one-seller">
                                                        Freelancer
                                                    </span>
                                                </span>
                                            </div>
                                            <h3>
                                                {{ Auth::user()->about }}
                                            </h3>
                                            <div class="content-info">
                                                <i class="fa fa-map-marker"></i> Kathmandu
                                            </div>
                                            <div class="footer">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                <div class="price">
                                                    <a href="#">
                                                        Starting At <span> Rs. 1,205</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a href="services/description">
                                        <img class="img-fluid" src="/images/svg/discussion-scene.svg" />
                                    </a>
                                    <div class="inner-slider">
                                        <div class="inner-wrapper">
                                            <div class="d-flex align-items-center">
                                                <span class="seller-image">
                                                    <img class="img-fluid" src="{{ Auth::user()->avatar }}" alt='' />
                                                </span>
                                                <span class="seller-name">
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                    <span class="level hint--top level-one-seller">
                                                        Freelancer
                                                    </span>
                                                </span>
                                            </div>
                                            <h3>
                                                {{ Auth::user()->about }}
                                            </h3>
                                            <div class="content-info">
                                                <i class="fa fa-map-marker"></i> Kathmandu
                                            </div>
                                            <div class="footer">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                <div class="price">
                                                    <a href="#">
                                                        Starting At <span> Rs. 1,205</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a href="services/description">
                                        <img class="img-fluid" src="/images/svg/discussion-scene.svg" />
                                    </a>
                                    <div class="inner-slider">
                                        <div class="inner-wrapper">
                                            <div class="d-flex align-items-center">
                                                <span class="seller-image">
                                                    <img class="img-fluid" src="{{ Auth::user()->avatar }}" alt='' />
                                                </span>
                                                <span class="seller-name">
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                    <span class="level hint--top level-one-seller">
                                                        Freelancer
                                                    </span>
                                                </span>
                                            </div>
                                            <h3>
                                                {{ Auth::user()->about }}
                                            </h3>
                                            <div class="content-info">
                                                <i class="fa fa-map-marker"></i> Kathmandu
                                            </div>
                                            <div class="footer">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                <div class="price">
                                                    <a href="#">
                                                        Starting At <span> Rs. 1,205</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a href="services/description">
                                        <img class="img-fluid" src="/images/svg/discussion-scene.svg" />
                                    </a>
                                    <div class="inner-slider">
                                        <div class="inner-wrapper">
                                            <div class="d-flex align-items-center">
                                                <span class="seller-image">
                                                    <img class="img-fluid" src="{{ Auth::user()->avatar }}" alt='' />
                                                </span>
                                                <span class="seller-name">
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                    <span class="level hint--top level-one-seller">
                                                        Freelancer
                                                    </span>
                                                </span>
                                            </div>
                                            <h3>
                                                {{ Auth::user()->about }}
                                            </h3>
                                            <div class="content-info">
                                                <i class="fa fa-map-marker"></i> Kathmandu
                                            </div>
                                            <div class="footer">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                <div class="price">
                                                    <a href="#">
                                                        Starting At <span> Rs. 1,205</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a href="services/description">
                                        <img class="img-fluid" src="/images/svg/discussion-scene.svg" />
                                    </a>
                                    <div class="inner-slider">
                                        <div class="inner-wrapper">
                                            <div class="d-flex align-items-center">
                                                <span class="seller-image">
                                                    <img class="img-fluid" src="{{ Auth::user()->avatar }}" alt='' />
                                                </span>
                                                <span class="seller-name">
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                    <span class="level hint--top level-one-seller">
                                                        Freelancer
                                                    </span>
                                                </span>
                                            </div>
                                            <h3>
                                                {{ Auth::user()->about }}
                                            </h3>
                                            <div class="content-info">
                                                <i class="fa fa-map-marker"></i> Kathmandu
                                            </div>
                                            <div class="footer">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                <div class="price">
                                                    <a href="#">
                                                        Starting At <span> Rs. 1,205</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a href="services/description">
                                        <img class="img-fluid" src="/images/svg/discussion-scene.svg" />
                                    </a>
                                    <div class="inner-slider">
                                        <div class="inner-wrapper">
                                            <div class="d-flex align-items-center">
                                                <span class="seller-image">
                                                    <img class="img-fluid" src="{{ Auth::user()->avatar }}" alt='' />
                                                </span>
                                                <span class="seller-name">
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                    <span class="level hint--top level-one-seller">
                                                        Freelancer
                                                    </span>
                                                </span>
                                            </div>
                                            <h3>
                                                {{ Auth::user()->about }}
                                            </h3>
                                            <div class="content-info">
                                                <i class="fa fa-map-marker"></i> Kathmandu
                                            </div>
                                            <div class="footer">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                <div class="price">
                                                    <a href="#">
                                                        Starting At <span> Rs. 1,205</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a href="services/description">
                                        <img class="img-fluid" src="/images/svg/discussion-scene.svg" />
                                    </a>
                                    <div class="inner-slider">
                                        <div class="inner-wrapper">
                                            <div class="d-flex align-items-center">
                                                <span class="seller-image">
                                                    <img class="img-fluid" src="{{ Auth::user()->avatar }}" alt='' />
                                                </span>
                                                <span class="seller-name">
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                    <span class="level hint--top level-one-seller">
                                                        Freelancer
                                                    </span>
                                                </span>
                                            </div>
                                            <h3>
                                                {{ Auth::user()->about }}
                                            </h3>
                                            <div class="content-info">
                                                <i class="fa fa-map-marker"></i> Kathmandu
                                            </div>
                                            <div class="footer">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                <div class="price">
                                                    <a href="#">
                                                        Starting At <span> Rs. 1,205</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-pagination text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fa fa-chevron-left"
                                                aria-hidden="true"></i></span>
                                        <!--                    <span class="sr-only"></span>-->
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa fa-chevron-right"
                                                aria-hidden="true"></i></span>
                                        <!--                    <span class="sr-only"></span>-->
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <section class="related-links">
                        <h2>Explore the Marketplace</h2>
                        <ul>
                            <li>
                                <a href="#" class="related-link" target="">Email Templates Design</a>
                            </li>
                            <li>
                                <a href="#" class="related-link" target="">Landing Pages Design</a>
                            </li>
                            <li>
                                <a href="#" class="related-link" target="">Mobile Apps Design</a>
                            </li>
                        </ul>
                    </section>
                </div>

            </div>
        </div>
    </div>
</main>
<!-- Body End -->
@endsection