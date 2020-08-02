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
    <link rel="icon" type="image/png" href="/images/logo/favicon.svg">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">
    <link href="/css/profileheader.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/datepicker.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
        .top-header{
            position: fixed;
            z-index: 9999;
            width: 100%;
            top: 0px;
        }
        .sub-header{
            position: fixed;
            z-index: 999;
            width: 100%;
            top: 40px;
        }
        
        #header-scroll{
            position: fixed;
            z-index: 999;
            width: 100%;
            top: 100px;
        }

        @media (max-width: 976px) and (min-width: 0px) {
            #header-scroll, #header-search {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="modal srch-model fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header sheader">
                    <button type="button" class="close srch-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="srch-input" placeholder="Search Keywords...">
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="top-header-full">
                            <div class="top-left-hd">
                                <ul>
                                    <li>
                                        <div class="wlcm-text">Welcome to Skillpark Inc.</div>
                                    </li>
                                    <li>
                                        <div class="lang-icon dropdown">
                                            <i class="fas fa-globe ln-glb"></i>
                                            <a href="#" class="icon15 dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                                EN <i class="fas fa-caret-down p-crt"></i>
                                            </a>
                                            <div class="dropdown-menu lanuage-dropdown dropdown-menu-left">
                                                <a class="link-item" href="#">EN</a>
                                                <a class="link-item" href="#">नेपाली</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="top-right-hd">
                                <ul>
                                    <li>
                                        <div class="account order-1 dropdown">
                                            @guest
                                            <a href="#" class="account-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                                <span style="color:#847577;font-size:12px">Learn More</span>
                                                <i style="color:#847577;font-size:12px" class="fas fa-sort-down"></i>
                                            </a>
                                            <div class="dropdown-menu account-dropdown dropdown-menu-right">
                                                <a class="link-item" href="terms">Terms and
                                                    Condition</a>
                                                <a class="link-item" href="policy">Privacy
                                                    Policy</a>
                                                <a class="link-item" href="{{ url('creators') }}">Creators /
                                                    Founders</a>
                                            </div>
                                            @else
                                            <a href="#" class="account-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                                <div class="user-dp"><img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}"></div>
                                                <span>Hi! {{ Auth::user()->name }}</span>
                                                <i class="fas fa-sort-down"></i>
                                            </a>
                                            <div class="dropdown-menu account-dropdown dropdown-menu-right">
                                                <a class="link-item" href="dashboard">Dashboard</a>
                                                <a class="link-item" href="settings">Setting</a>
                                                <a class="link-item" href="messages">Messages</a>
                                                <a class="link-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                            @endguest
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-header">				
				<div class="container">				
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
								<a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="index"><img src="/images/logo/logo.svg" width="120" alt=""></a>
								<button class="navbar-toggler align-self-start" type="button">
									<i class="fas fa-bars"></i>
                                </button>
                            <!-- Topbar Search -->
                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-3 my-2 my-md-0 mw-200 navbar-search">
                                <div class="input-group" id="header-search" style="width: 300px;">
                                    <input type="text" class="form-control bg-white small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2" style="font-size: 13px;">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button" style="font-size: 13px;">
                                            <i class="fa fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
								<div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                                    <ul class="navbar-nav align-self-stretch">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('about') }}">About <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{ url('/') }}">Enterprise</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Explore</a>
                                            <div class="dropdown-menu pages-dropdown">
                                                <a class="link-item" href="{{ url('/') }}">Companies</a>
                                                <a class="link-item" href="{{ url('/') }}">Freelancers</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                                Categories
                                            </a>
                                            <div class="dropdown-menu pages-dropdown">
                                                <a class="link-item" href="#">Graphics &amp; Design</a>
                                                <a class="link-item" href="#">Digital Marketing</a>
                                                <a class="link-item" href="#">Writing &amp; Translation</a>
                                                <a class="link-item" href="#">Video &amp; Animation</a>
                                                <a class="link-item" href="#">Lifestyle</a>
                                                <a class="link-item" href="#">Sitemap</a>
                                                <a class="link-item" href="#">Music &amp; Audio</a>
                                                <a class="link-item" href="#">Programming &amp; Tech</a>
                                                <a class="link-item" href="#">Business</a>
                                            </div>
                                        </li>
                                    </ul>
                                    @guest
                                    <a href="{{ route('login') }}" class="add-post">Login</a>
                                    <a href="{{ route('register') }}" class="add-task">Sign Up</a>		
                                    @else
                                    <a style="border: 2px solid #1dc8cc" href="{{ url('home') }}" class="add-post">Dashboard</a>	
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
    <div id="header-scroll">
        <nav id="third-header-scroll" class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Logo Design
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Web Application</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Blog Writing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Legal Advices
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Voice Over
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Graphics Design
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Video Editing
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                iOS App Dev
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Help Center
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="fa fa-fw fa-trophy"></i>
                            <span>Become A Seller</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

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
                        <a href=""><img src="/images/logo/logo.svg" alt=""></a>
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
                            Copyright 2020 <i class="far fa-copyright"></i><a href="{{ url('/') }}">Skillpark Inc.</a>.
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
    <script>
        $("#header-scroll").hide();
        $("#header-search").hide();
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#header-scroll').slideDown(300);
                $('#header-search').fadeIn(100);
            } else {
                $('#header-scroll').slideUp(300);
                $('#header-search').fadeOut(100);
            }
        });
    </script>

    <!-- Scripts js -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/datepicker.min.js"></script>
    <script src="/js/i18n/datepicker.en.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="vendor/semantic/semantic.min.js"></script>
    <script src="/js/custom1.js"></script>

</body>

</html>