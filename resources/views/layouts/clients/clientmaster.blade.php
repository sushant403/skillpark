<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Skillpark Inc.
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Skillpark Inc.">
    <meta name="keywords"
        content="bootstrap, business, consulting, heiring space, services, dashboard, multipurpose, software, landing, html5, css3, javascript">
    <meta name="author" content="Skillpark Inc.">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.svg">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#1dc8cc">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
        .cs-page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .cs-page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .cs-page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .cs-page-loading.active>.cs-page-loading-inner {
            opacity: 1;
        }

        .cs-page-loading-inner>span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #1bb7bb;
        }

        .cs-page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #1bb7bb;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <!-- Page loading scripts-->
    <script>
        (function() {
            window.onload = function() {
                var preloader = document.querySelector('.cs-page-loading');
                preloader.classList.remove('active');
                setTimeout(function() {
                    preloader.remove();
                }, 2000);
            };
        })();
    </script>
    <!-- Fontawesome kit's code here -->
    <script src="https://kit.fontawesome.com/29847b83db.js" crossorigin="anonymous"></script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="/vendor/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen" href="/vendor/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen" href="/vendor/tiny-slider/dist/tiny-slider.css" />
    <link rel="stylesheet" media="screen" href="/vendor/lightgallery.js/dist/css/lightgallery.min.css" />
    <!-- Main Theme Styles + Bootstrap-->
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="/css/theme.min.css">
</head>
<!-- Body-->

<body>
    <!-- Page loading spinner-->
    <div class="cs-page-loading active">
        <div class="cs-page-loading-inner">
            <div class="cs-page-spinner"></div><span>Loading...</span>
        </div>
    </div>

    <main class="cs-page-wrapper">
        <!-- Navbar (Floating dark)-->
        <header class="cs-header navbar navbar-expand-lg navbar-light navbar-floating navbar-sticky" data-scroll-header>
            <div class="container px-0 px-xl-3">
                <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas"
                    data-offcanvas-id="primaryMenu"><span class="navbar-toggler-icon"></span></button><a
                    class="navbar-brand order-lg-1 mx-auto ml-lg-0 pr-lg-2 mr-lg-4" href="{{ url('/') }}"><img
                        class="d-none d-lg-block" width="143" src="/images/logo/biglogo.svg" alt="Around" /><img
                        class="d-lg-none" width="40" src="/images/logo/logo.svg" alt="Around" /></a>


                        <div class="d-flex align-items-center order-lg-3">
                            <img src="{{ Auth::user()->avatar }}" style="max-width: 60px">
                            <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block"
                                href="{{ route('home') }}">Profile</a>
                        </div>


                <div class="cs-offcanvas-collapse order-lg-2" id="primaryMenu">
                    <div class="cs-offcanvas-cap navbar-box-shadow">
                        <h5 class="mt-1 mb-0">Menu</h5>
                        <button class="close lead" type="button" data-toggle="offcanvas"
                            data-offcanvas-id="primaryMenu"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="cs-offcanvas-body">
                        <!-- Menu-->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#"
                                    data-toggle="dropdown">How It Works</a>
                                <div class="dropdown-menu"><a class="dropdown-column dropdown-column-img bg-secondary"
                                        href="" style="background-image: url(/images/svg/work.svg);"></a>
                                    <div class="dropdown-column"><a class="dropdown-item" href="">About
                                            Skillpark</a><a class="dropdown-item" href="g">Hire
                                            Freelancers</a><a class="dropdown-item" href="age">Post
                                            Project</a>
                                        <a class="dropdown-item" href="rectory">Explore
                                            Skills / Categories</a><a class="dropdown-item" href="">Post a Job</a><a
                                            class="dropdown-item" href="">Advertisement</a></div>
                                    <div class="dropdown-column"><a class="dropdown-item" href="dget">Creators</a><a
                                            class="dropdown-item" href="">Payment Methods</a><a class="dropdown-item"
                                            href="">Join Skillpark</a>
                                        <a class="dropdown-item" href="">Events and Blogs</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#"
                                    data-toggle="dropdown">Services / Categories</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-column mb-2 mb-lg-0">
                                        <h5 class="dropdown-header">Technology and IT</h5><a class="dropdown-item"
                                            href="blog-grid-rs">Grid Right Sidebar</a><a class="dropdown-item"
                                            href="blog-grid-ls">Grid Left Sidebar</a><a class="dropdown-item"
                                            href="blog-grid-ns">Grid No Sidebar</a>
                                        <a class="dropdown-item" href="blog-list-rs">List Right Sidebar</a><a
                                            class="dropdown-item" href="blog-list-ls">List Left Sidebar</a><a
                                            class="dropdown-item" href="blog-list-ns">List No Sidebar</a><a
                                            class="dropdown-item" href="blog-single-rs">Single Post Right
                                            Sidebar</a>
                                    </div>
                                    <div class="dropdown-column mb-2 mb-lg-0">
                                        <h5 class="dropdown-header">Design and Creatives</h5><a class="dropdown-item"
                                            href="portfolio-style-1">Grid Style 1</a><a class="dropdown-item"
                                            href="portfolio-style-2">Grid Style 2</a><a class="dropdown-item"
                                            href="portfolio-style-3">Grid Style 3</a>
                                        <a class="dropdown-item" href="portfolio-single-side-gallery-grid">Project
                                            Side
                                            Gallery (Grid)</a><a class="dropdown-item"
                                            href="portfolio-single-side-gallery-list">Project Side Gallery
                                            (List)</a><a class="dropdown-item" href="portfolio-single-carousel">Project
                                            Carousel</a>
                                        <a class="dropdown-item" href="portfolio-single-wide-gallery">Project Wide
                                            Gallery</a>
                                    </div>
                                    <div class="dropdown-column mb-2 mb-lg-0">
                                        <h5 class="dropdown-header">Sales and Analytics</h5><a class="dropdown-item"
                                            href="shop-ls">Grid Left Sidebar</a><a class="dropdown-item"
                                            href="shop-rs">Grid Right Sidebar</a><a class="dropdown-item"
                                            href="shop-ns">Grid No Sidebar</a><a class="dropdown-item"
                                            href="shop-single">Single Product</a><a class="dropdown-item"
                                            href="checkout">Cart &amp; Checkout</a><a class="dropdown-item"
                                            href="order-tracking">Order Tracking</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                    data-toggle="dropdown">Explore</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-toggle="dropdown">Popular Skills</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="dashboard-orders">Orders</a></li>
                                            <li><a class="dropdown-item" href="dashboard-sales">Sales</a></li>
                                            <li><a class="dropdown-item" href="dashboard-messages">Messages</a>
                                            </li>
                                            <li><a class="dropdown-item" href="dashboard-followers">Followers</a>
                                            </li>
                                            <li><a class="dropdown-item" href="dashboard-reviews">Reviews</a></li>
                                            <li><a class="dropdown-item" href="dashboard-favorites">Favorites</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="signin-illustration">Freelancers</a>
                                    </li>
                                    <li><a class="dropdown-item" href="signin-image">Companies</a></li>
                                    <li><a class="dropdown-item" href="signin-signup">Trending Jobs</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link" href="">Enterprise</a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                    data-toggle="dropdown">Support</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="font-size-xl text-muted"><img src="/images/svg/np.svg"
                                                        style="width: 25px;max-width:unset">
                                                </div>
                                                <div class="pl-3"><span class="d-block text-heading">नेपाली</span><small
                                                        class="d-block text-muted">Change to Nepali Language</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="font-size-xl text-muted"><img src="/images/svg/en.svg"
                                                        style="width: 25px;max-width:unset"></i></div>
                                                <div class="pl-3"><span
                                                        class="d-block text-heading">English</span><small
                                                        class="d-block text-muted">Change to English Language</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="mailto:skillparknepal@gmail.com">
                                            <div class="d-flex align-items-center">
                                                <div class="font-size-xl text-muted"><i
                                                        class="fas fa-question-circle fa-lg"></i>
                                                </div>
                                                <div class="pl-3"><span
                                                        class="d-block text-heading">Support</span><small
                                                        class="d-block text-muted">skillparknepal@gmail.com</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="pt-6"></div>

        @yield('content')

    </main>

    <!-- Footer-->
    <footer class="cs-footer container pt-5">
        <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-4 mb-5 text-center text-md-left">
                <h2 class="mb-4">Contact Us</h2><a class="btn btn-danger mb-4" href="#"><i
                        class="fa fa-envelope font-size-lg mr-2"></i>Email Now</a>
                <div class="pt-2"><a class="social-btn sb-outline sb-lg sb-facebook mr-2 mb-2" href="#"><i
                            class="fab fa-facebook"></i></a><a class="social-btn sb-outline sb-lg sb-twitter mr-2 mb-2"
                        href="#"><i class="fab fa-twitter"></i></a><a
                        class="social-btn sb-outline sb-lg sb-instagram mr-2 mb-2" href="#"><i
                            class="fab fa-instagram"></i></a><a class="social-btn sb-outline sb-lg sb-google mr-2 mb-2"
                        href="#"><i class="fab fa-google"></i></a></div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-8 mb-5">
                <div class="row">
                    <div class="col-6 col-sm-4">
                        <div class="cs-widget">
                            <h4 class="cs-widget-title">Enterprise</h4>
                            <ul>
                                <li><a class="cs-widget-link" href="#">About</a></li>
                                <li><a class="cs-widget-link" href="#">Jobs</a></li>
                                <li><a class="cs-widget-link" href="#">Freelancers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="cs-widget">
                            <h4 class="cs-widget-title">Services</h4>
                            <ul>
                                <li><a class="cs-widget-link" href="#">Strategy</a></li>
                                <li><a class="cs-widget-link" href="#">HR &amp; Talent</a></li>
                                <li><a class="cs-widget-link" href="#">Training</a></li>
                                <li><a class="cs-widget-link" href="#">Analytics</a></li>
                                <li><a class="cs-widget-link" href="#">Sales &amp; Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-none d-sm-block col-sm-4">
                        <div class="cs-widget">
                            <h4 class="cs-widget-title">Our news</h4>
                            <ul>
                                <li><a class="cs-widget-link" href="#">Latest news</a></li>
                                <li><a class="cs-widget-link" href="#">Insights</a></li>
                                <li><a class="cs-widget-link" href="#">Blogs</a></li>
                                <li><a class="cs-widget-link" href="#">Events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-top py-4">
            <div class="d-md-flex align-items-center justify-content-between py-2 text-center text-md-left">
                <ul class="list-inline font-size-sm mb-3 mb-md-0 order-md-2">
                    <li class="list-inline-item my-1"><a class="nav-link-style" href="#">Support</a></li>
                    <li class="list-inline-item my-1"><a class="nav-link-style" href="#">Privacy Policy</a></li>
                    <li class="list-inline-item my-1"><a class="nav-link-style" href="#">Terms &amp; Conditions</a></li>
                </ul>
                <p class="font-size-sm mb-0 mr-3 order-md-1"><span class="text-muted mr-1">© All rights reserved.
                    </span><a class="nav-link-style font-weight-normal" href="https://skillpark.herokuapp.com/"
                        target="_blank" rel="noopener">Skillpark Inc.</a></p>
            </div>
        </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted font-size-sm mr-2"></span><i
            class="btn-scroll-top-icon fa fa-arrow-up"> </i></a>
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="/vendor/jquery/dist/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="/vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="/vendor/lg-video.js/dist/lg-video.min.js"></script>
    <!-- Main theme script-->
    <script src="/js/custom1.js"></script>
    <script src="/js/theme.min.js"></script>
</body>

</html>