<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="skillpark">
    <meta name="author" content="skillpark">

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/images/logo/block-logo.svg">

    <!-- Stylesheets -->
    <!-- Semantic Css -->
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/datepicker.min.css" rel="stylesheet">
    <link href="/css/jquery.range.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/profileheader.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">


</head>

<body>
    <div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light topbar static-top shadow-sm bg-white osahan-nav-top px-0"
        style="padding: 7px !important;font-size:13px">
        <div class="container">
            <!-- Sidebar Toggle (Topbar) -->
            <a class="navbar-brand" href=""><img src="/images/logo/logo.svg" alt=""></a>
            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-200 navbar-search">
                <div class="input-group" style="width: 300px;">
                    <input type="text" class="form-control bg-white small" placeholder="Find Services..."
                        aria-label="Search" aria-describedby="basic-addon2" style="font-size: 13px;">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button" style="font-size: 13px;">
                            <i class="fa fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications d-sm-none">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="#" id="searchDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group" style="width: 350px;">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item no-arrow no-caret">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="javascript:void(0);">
                        <i class="fas fa-envelope fa-m pt-2 mt-1"></i>
                    </a>

                </li>
                <li class="nav-item dropdown no-arrow no-caret dropdown-user">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                        href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><img class="img-fluid" src="{{ Auth::user()->avatar }}"></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                        aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="{{ Auth::user()->avatar }} ">
                            <div class=" dropdown-user-details">
                                <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                                <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('home') }}">
                            <div class="dropdown-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>
                            </div>
                            Account
                        </a>
                        <a class="dropdown-item" href="#" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <div class="dropdown-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                            </div>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Trending</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            Saved Jobs
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            Messages
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="seller">
                        <i class="fa fa-fw fa-trophy"></i>
                        <span>Become A Seller</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <img class="country-flag img-fluid" src="/images/svg/en.svg">
                        <span>English</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    </div>
    <div class="mb-5 mt-5 py-3"></div>

    @yield('content')

    <!-- footer Start -->
    <footer class="footer">
        <div class="subscribe-newsletter">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6">
                        <div class="subcribes">
                            <div class="text-step1">
                                <div class="btext-heading mt-2" style="color:#acacac; font-size:14px;">
                                    <i class="fas fa-check-circle"></i>All Rights Reserved &reg; Sushant Poudel, Nitika
                                    Bhatta and Divesh Thapa.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" style="float: right;margin-top:.5rem"
                            href=""><img src="/images/logo/logo.svg" alt=""></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="about-jobby">
                        <a href=""><img src="images/logo/logo.png" width="30" alt=""></a>
                        <p>SKILLPARK INC. is a incorporated company which is legally acceptable nationwide. The
                            application is a Nepal National Payment Gateway Verified website. Trusted by the Government
                            of Nepal. &copy; Skillpark Inc.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-links">
                        <h4>About</h4>
                        <ul class="list">
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Press &amp; News</a></li>
                            <li><a href="#">Partnerships</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Intellectual Property Claims</a></li>
                            <li><a href="#" target="_blank">Investor Relations</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-links">
                        <h4>For Companies</h4>
                        <ul class="list">
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Community Standards</a></li>
                            <li><a href="#">Podcast</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Invite a Friend</a></li>
                            <li><a href="#">Become a Seller</a></li>
                            <li><a href="#">Skillpark Elevate</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-links">
                        <h4>Support</h4>
                        <ul class="list">
                            <li><a href="#">Help &amp; Support</a></li>
                            <li><a href="#">Trust &amp; Safety</a></li>
                            <li><a href="#">Selling on Skillpark
                                </a>
                            </li>
                            <li><a href="#">Buying on Skillpark
                                </a>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Community Standards</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-social">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright">
                            <i class="far fa-copyright"></i>Copyright 2020 <a href="{{ url('/') }}">Skillpark Inc.</a>.
                            All Right Reserved.
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer End -->
    <!-- Scroll to Top Button Start -->
    <button onclick="topFunction()" id="pageup" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <!-- Scroll to Top Button End -->
    <!-- Scripts js -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/datepicker.min.js"></script>
    <script src="/js/i18n/datepicker.en.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.range-min.js"></script>
    <script src="/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="/vendor/semantic/semantic.min.js"></script>
    <script src="/js/custom1.js"></script>

</body>

</html>