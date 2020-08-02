<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Skillpark">
    <meta name="author" content="Skillpark">
    <title>Skillpark Inc. - Hire Expert Freelancers Any Time</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/images/fav-miver.svg">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <style>
        .container {
            width: auto;
            box-shadow: none;
        }

        .main {
            padding: 0;
            padding-top: 60px;
        }

        .fieldset-content {
            height: auto !important;
        }

        .plans150 {
            margin-top: -60px;
        }

        .steps ul .done a .number:after {
            font-family: 'Font Awesome 5 Free';
            content: '\f00c';
        }

        label.error {
            right: 400px;
            font-size: 12px;
            font-weight: 700;
        }

        @media screen and (max-width: 768px) {
            label.error {
                position: unset;
            }
        }
    </style>

</head>

<body>
    <!-- Header Start -->
    <header>

        <div class="sub-header" style="font-family:'Muli', sans-serifs;font-weight:500">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
                            <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="#"><img src="/images/logo.svg" alt=""></a>
                            <button class="navbar-toggler align-self-start" type="button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                                <ul class="navbar-nav align-self-stretch">
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Learn More</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="#">Employers</a>
                                            <a class="link-item" href="#">Freelancers</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown pages152">
                                        <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                            Need Help Signing Up? <i class="fas fa-caret-down p-crt"></i>
                                        </a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="#">Profile Information</a>
                                            <a class="link-item" href="#">Personal Account</a>
                                            <a class="link-item" href="#">Avatar and Roles</a>
                                        </div>
                                    </li>
                                </ul>
                                @guest
                                <a href="{{ route('login') }}" class="add-post">Login</a>
                                <a href="{{ route('register') }}" class="add-project">Signup</a>
                                @else
                                <a href="#" style="border: 2px solid #1dc8cc" class="add-post">Complete Profile</a>
                                @endguest
                            </div>
                            <div class="responsive-search order-1">
                                <input type="text" class="rsp-search" placeholder="Search...">
                                <i class="fas fa-search r-sh1"></i>
                            </div>
                        </nav>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

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
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="about-jobby">
                        <a href=""><img src="/images/logo.svg" alt=""></a>
                        <p>SKILLPARK INC. is a incorporated company which is legally acceptable nationwide. The
                            application is a Nepal National Payment Gateway Verified website. Trusted by the Government
                            of Nepal. &copy; Skillpark Inc.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-2">
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
                <div class="col-lg-3 col-xl-2">
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
                    </div>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="footer-links">
                        <h4>Categories</h4>
                        <ul class="list">
                            <li><a href="#">Graphics &amp; Design</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Writing &amp; Translation</a></li>
                            <li><a href="#">Video &amp; Animation</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Music &amp; Audio</a></li>
                            <li><a href="#">Programming &amp; Tech</a></li>
                            <li><a href="#">Business</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="footer-links">
                        <h4>Community</h4>
                        <ul class="list">
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Community Standards</a></li>
                            <li><a href="#">Invite a Friend</a></li>
                            <li><a href="#">Become a Seller</a></li>
                            <li><a href="#">Skillpark Elevate</a>
                            </li>
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
                            <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="#"><img src="/images/logo.svg" alt=""></a>
                            Copyright 2020 <i class="far fa-copyright"></i><a href="#">Skillpark Inc.</a>.
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
    <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="/vendor/minimalist-picker/dobpicker.js"></script>
    <script src="/vendor/jquery.pwstrength/jquery.pwstrength.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/custom1.js"></script>
    <script src="/js/registration.js"></script>

</body>

</html>