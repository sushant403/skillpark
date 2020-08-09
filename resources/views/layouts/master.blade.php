<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Skillpark Inc. | Hire Expert Freelancers Any Time</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Skillpark Inc.">
    <meta name="keywords"
        content="business, consulting, heiring space, services, dashboard, multipurpose, software, landing, html5, css3, javascript">
    <meta name="author" content="Skillpark Inc.">

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Individual Title -->
    <script>
        document.title = 'Skillpark Inc. | Hire Expert Freelancers Any Time'; 
    </script>

    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.svg">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="/favicon.svg">
    <meta name="msapplication-TileColor" content="#1dc8cc">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome kit's code here -->
    <script src="https://kit.fontawesome.com/29847b83db.js" crossorigin="anonymous"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="/vendor/cubeportfolio/css/cubeportfolio.min.css">

    <!-- CSS Skillpark Template -->
    <link rel="stylesheet" href="/css/theme.css">
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header"
        class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-show-hide "
        data-hs-header-options='{
   "fixMoment": 500,
   "fixEffect": "slide"
 }'>
        <div class="header-section">
            <div id="logoAndNav" class="container">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a class="navbar-brand" href="/" aria-label="Skillpark">
                        <img src="/images/logo/biglogo.svg" alt="Logo">
                    </a>
                    <!-- End Logo -->

                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
                        <span class="navbar-toggler-default">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                            </svg>
                        </span>
                        <span class="navbar-toggler-toggled">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                            </svg>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Navigation -->
                    <div id="navBar" class="collapse navbar-collapse">
                        <div class="navbar-body header-sticky-top-inner">
                            <ul class="navbar-nav">
                                <!-- Home -->
                                <li class="hs-has-mega-menu navbar-nav-item">
                                    <a id="homeMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;"
                                        aria-haspopup="true" aria-expanded="false">{{ __('nepali.Solutions') }}</a>

                                    <!-- Home - Mega Menu -->
                                    <div class="hs-mega-menu dropdown-menu col-lg-10" aria-labelledby="homeMegaMenu">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <!-- Banner Image -->
                                                <div class="navbar-banner"
                                                    style="background-image: url(/images/svg/banner.svg);">
                                                    <div class="navbar-banner-content">
                                                        <div class="mb-6">
                                                            <span class="h2 d-block text-white">Skillpark Inc.</span>
                                                            <p style="color: #fff">Experience the simplified modern way
                                                                of hiring freelancers.</p>
                                                        </div>
                                                        <a class="btn btn-primary btn-sm"
                                                            href="{{ route('register') }}">Get Started <i
                                                                class="fas fa-angle-right fa-sm ml-1"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Banner Image -->
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="row mega-menu-body">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <span class="d-block h5">How It Works</span>
                                                        <a class="dropdown-item" href="/">About Skillpark</a>
                                                        <a class="dropdown-item" href="">Hire Freelancers</a>
                                                        <a class="dropdown-item" href="">Post Project</a>
                                                        <a class="dropdown-item" href="">Explore Categories</a>
                                                        <a class="dropdown-item" href="" target="_blank">Feature
                                                            Business <span
                                                                class="badge badge-primary badge-pill ml-2">New</span></a>
                                                        <a class="dropdown-item" href="">Payment Methods</a>
                                                        <a class="dropdown-item" href="">Advertisment</a>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <span class="d-block h5">Company</span>
                                                        <div class="mb-3">
                                                            <a class="dropdown-item" href="creators">Creators</a>
                                                            <a class="dropdown-item" href="contact">Contact</a>
                                                            <a class="dropdown-item" href="terms">Terms and
                                                                Conditions</a>
                                                            <a class="dropdown-item" href="blogs">Events and Blogs</a>
                                                            <a class="dropdown-item" href="funds">Development Fund</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Home - Mega Menu -->
                                </li>
                                <!-- End Home -->

                                <!-- Pages -->
                                <li class="hs-has-sub-menu navbar-nav-item">
                                    <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;"
                                        aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="pagesSubMenu">{{ __('nepali.Explore') }}</a>

                                    <!-- Pages - Submenu -->
                                    <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu"
                                        aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                                        <!-- Account -->
                                        <div class="hs-has-sub-menu">
                                            <a id="navLinkPagesAccount"
                                                class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-controls="navSubmenuPagesAccount">Trending Skills </a>

                                            <div id="navSubmenuPagesAccount" class="hs-sub-menu dropdown-menu"
                                                aria-labelledby="navLinkPagesAccount" style="min-width: 230px;">
                                                <a class="dropdown-item" href="">Full Stack
                                                    Developer</a>
                                                <a class="dropdown-item" href="">IT
                                                    &amp; Security</a>
                                                <a class="dropdown-item" href="">C#</a>
                                                <a class="dropdown-item" href="">Django</a>
                                                <a class="dropdown-item" href="">Laravel</a>
                                                <a class="dropdown-item" href="">PHP</a>
                                                <a class="dropdown-item" href="">Skillpark End &amp;
                                                    Developer</a>
                                            </div>
                                            <!-- Account -->
                                            <a class="dropdown-item" href="">Freelancers</a>
                                            <a class="dropdown-item" href="">Companies</a>
                                            <a class="dropdown-item" href="">Popular Jobs</a>
                                            <a class="dropdown-item" href="">Featured</a>
                                        </div>
                                        <!-- End Pages - Submenu -->
                                </li>
                                <!-- End Pages -->

                                <li class="navbar-nav-item">
                                    <a href="" class="nav-link">{{ __('nepali.Enterprise') }}</a>
                                </li>


                                <!-- Support -->
                                <li class="hs-has-mega-menu navbar-nav-item" data-hs-mega-menu-item-options='{
                                            "desktop": {
                                            "position": "right",
                                            "maxWidth": "260px"
                                            }
                                        }'>
                                    <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;"
                                        aria-haspopup="true" aria-expanded="false">{{ __('nepali.Support') }}</a>

                                    <!-- Docs - Submenu -->
                                    <div class="hs-mega-menu dropdown-menu" aria-labelledby="docsMegaMenu"
                                        style="min-width: 330px;">
                                        <!-- Promo Item -->
                                        <div class="navbar-promo-item">
                                            <a class="navbar-promo-link" href="">
                                                <div class="media align-items-center">
                                                    <img class="navbar-promo-icon" src="/images/svg/icons/icon-2.svg"
                                                        alt="SVG">
                                                    <div class="media-body">
                                                        <span class="navbar-promo-title">
                                                            Skillpark Inc.
                                                            <span
                                                                class="badge badge-primary badge-pill ml-1">v0.4.1</span>
                                                        </span>
                                                        <small class="navbar-promo-text">Under Development</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- End Promo Item -->

                                        <div class="navbar-promo-footer">
                                            <!-- List -->
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="navbar-promo-footer-item">
                                                        <span
                                                            class="navbar-promo-footer-text">{{ __('nepali.Questionaires')}}</span>
                                                        <a class="navbar-promo-footer-text" href="faq">
                                                            {{ __('nepali.FAQ')}}
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6 navbar-promo-footer-ver-divider">
                                                    <div class="navbar-promo-footer-item">
                                                        <span
                                                            class="navbar-promo-footer-text">{{ __('nepali.Have a question?')}}</span>
                                                        <a class="navbar-promo-footer-text"
                                                            href="mailto:skillparknepal@gmail.com">
                                                            {{ __('nepali.Contact Us')}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End List -->
                                        </div>
                                    </div>
                                    <!-- End Docs - Submenu -->
                                </li>
                                <!-- End Docs -->

                                <!-- Search -->
                                <li class="navbar-nav-item">
                                    <div class="hs-unfold mr-2">
                                        <a class="js-hs-unfold-invoker nav-link" href="javascript:;"
                                            data-hs-unfold-options='{
                                                    "target": "#searchClassic",
                                                    "type": "css-animation",
                                                    "animationIn": "slideInUp"
                                                }'>
                                            <i class="fas fa-search la-lg"></i>&nbsp; {{ __('nepali.Search') }}
                                        </a>

                                        <div id="searchClassic"
                                            class="hs-unfold-content dropdown-menu w-100 border-0 rounded-0 px-3 mt-0"
                                            style="min-width: 400px;">
                                            <form class="input-group input-group-sm input-group-merge">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ __('nepali.Search for Services') }}.."
                                                    aria-label="{{ __('nepali.Search for Services') }}..">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Search -->
                                @guest

                                <!-- Account Login -->
                                <li class="navbar-nav-item">
                                    <div class="hs-unfold">
                                        <a class="js-hs-unfold-invoker nav-link" href="javascript:;"
                                            data-hs-unfold-options='{
                                                                                        "target": "#sidebarContent",
                                                                                        "type": "css-animation",
                                                                                        "animationIn": "fadeInRight",
                                                                                        "animationOut": "fadeOutRight",
                                                                                        "hasOverlay": "rgba(55, 125, 255, 0.1)",
                                                                                        "smartPositionOff": true
                                                                                        }'>
                                            <i class="fa fa-user"></i>&nbsp; {{ __('nepali.Login') }}
                                        </a>
                                    </div>
                                </li>
                                <!-- End Account Login -->

                                <li class="navbar-nav-last-item pl-0">
                                    <a class="btn btn-sm btn-primary" href="{{ route('register') }}">
                                        {{ __('nepali.Join') }}
                                    </a>
                                </li>
                                @else
                                <!-- Account Login -->
                                <li class="navbar-nav-last-item pl-0 dropdown">
                                    <!-- Account Sidebar Toggle Button -->
                                    <a style="padding-top: 1rem;padding-bottom:1rem"
                                        class="hs-mega-menu-invoker nav-link dropdown-toggle u-sidebar--account__toggle-bg ml-1"
                                        href="javascript:;" id="dropdownSubMenu" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="position-relative">
                                            <span
                                                class="u-sidebar--account__toggle-text">{{ Auth::user()->name }}</span>
                                            <img class="u-sidebar--account__toggle-img" src="/images/spacer.png"
                                                width="35" alt="Profile">
                                        </span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownSubMenu"
                                        style="min-width: 230px;">
                                        <a class="dropdown-item" href="dashboard"><i class="fa fa-dashcube"></i>&nbsp;
                                            Dashboard</a>
                                        <a class="dropdown-item" href="dashboard"><i class="fa fa-user-alt"></i>&nbsp;
                                            Profile</a>
                                        <a class="dropdown-item" href="settings"><i class="fa fa-gear"></i>&nbsp;
                                            Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                                class="fa fa-sign-out-alt"></i>&nbsp; Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                    <!-- End Account Sidebar Toggle Button -->
                                </li>
                                <!-- End Account Login -->
                                @endguest
                                <!-- End Button -->
                            </ul>
                        </div>
                    </div>
                    <!-- End Navigation -->
                </nav>
                <!-- End Nav -->
            </div>
        </div>
    </header>
    <!-- ========== END HEADER ========== -->


    @yield('content')

    <!-- ========== FOOTER ========== -->

    @guest
    <footer class="gradient-x-overlay-sm-indigo overflow-hidden">
        <div class="container space-top-2 space-bottom-1">
            <!-- CTA -->
            <div class="row justify-content-lg-between align-items-lg-center text-center text-lg-left">
                <div class="col-lg-5 mb-3 mb-lg-0">
                    <h2 class="text">{{ __('nepali.Thousands of businesses trust Skillpark for their business.')}}</h2>
                </div>
                <div class="col-lg-5 text-lg-right">
                    <a class="btn btn-primary" href="{{ route('register') }}">Get Started</a>
                    <small class="text-muted my-3 my-sm-0 mx-2 mx-sm-3">or</small>
                    <a class="btn btn-secondary" href="{{ url('categories') }}">Explore</a>
                </div>
            </div>
            <!-- End CTA -->
    </footer>
    @else
    <div class="d-none"></div>
    @endguest

    <footer class="container">
        <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
            <div class="row justify-content-lg-between">
                <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
                    <!-- Logo -->
                    <div class="mb-4">
                        <a href="/" aria-label="Skillpark">
                            <img class="brand" src="/images/logo/biglogo.svg" alt="Logo">
                        </a>
                    </div>
                    <!-- End Logo -->

                    <!-- Nav Link -->
                    <ul class="nav nav-sm nav-x-0 flex-column">
                        <li class="nav-item">
                            <a class="nav-link media" href="javascript:;">
                                <span class="media">
                                    <span class="fas fa-location-arrow mt-1 mr-2"></span>
                                    <span class="media-body">
                                        44700 Balkumari Road, Lalitpur
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link media" href="tel:9779860489494">
                                <span class="media">
                                    <span class="fas fa-phone-alt mt-1 mr-2"></span>
                                    <span class="media-body">
                                        +977 (986) 048-9494
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Nav Link -->
                </div>

                <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                    <h5>Company</h5>

                    <!-- Nav Link -->
                    <ul class="nav nav-sm nav-x-0 flex-column">
                        <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Careers <span
                                    class="badge badge-primary ml-1">We're hiring</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="blogs">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Customers</a></li>
                        <li class="nav-item"><a class="nav-link" href="creators">Creators</a></li>
                    </ul>
                    <!-- End Nav Link -->
                </div>

                <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                    <h5>Features</h5>

                    <!-- Nav Link -->
                    <ul class="nav nav-sm nav-x-0 flex-column">
                        <li class="nav-item"><a class="nav-link" href="#">Press</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Release notes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Integrations</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    </ul>
                    <!-- End Nav Link -->
                </div>

                <div class="col-6 col-md-3 col-lg">
                    <h5>Documentation</h5>

                    <!-- Nav Link -->
                    <ul class="nav nav-sm nav-x-0 flex-column">
                        <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Docs</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Status</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">API Reference</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Tech Requirements</a></li>
                    </ul>
                    <!-- End Nav Link -->
                </div>

                <div class="col-6 col-md-3 col-lg">
                    <h5>Resources</h5>

                    <!-- Nav Link -->
                    <ul class="nav nav-sm nav-x-0 flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="faq">
                                <span class="media align-items-center">
                                    <i class="fa fa-info-circle mr-2"></i>
                                    <span class="media-body">Help</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home">
                                <span class="media align-items-center">
                                    <i class="fa fa-user-circle mr-2"></i>
                                    <span class="media-body">Your Account</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Nav Link -->
                </div>
            </div>
        </div>

        <hr class="opacity-xs my-0">

        <div class="space-1">
            <div class="row align-items-md-center mb-7">
                <div class="col-md-6 mb-4 mb-md-0">
                    <!-- Nav Link -->
                    <ul class="nav nav-sm nav-x-sm align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="policy">Privacy &amp; Policy</a>
                        </li>
                        <li class="nav-item opacity mx-3">&#47;</li>
                        <li class="nav-item">
                            <a class="nav-link" href="terms">Terms</a>
                        </li>
                        <li class="nav-item opacity mx-3">&#47;</li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Site Map</a>
                        </li>
                    </ul>
                    <!-- End Nav Link -->
                </div>

                <div class="col-md-6 text-md-right">
                    <ul class="list-inline mb-0">
                        <!-- Social Networks -->
                        <li class="list-inline-item">
                            <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-xs btn-icon btn-soft-secondary" href="https://github.com/skillpark">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <!-- End Social Networks -->

                        <!-- Language -->
                        <li class="list-inline-item">
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker dropdown-toggle btn btn-xs btn-soft-secondary"
                                    href="javascript:;" data-hs-unfold-options='{
                                                        "target": "#footerLanguage",
                                                        "type": "css-animation",
                                                        "animationIn": "slideInDown"
                                                        }'>
                                    <i class="fa fa-globe"></i>&nbsp;
                                    <span> English</span>
                                </a>

                                <div id="footerLanguage"
                                    class="hs-unfold-content dropdown-menu dropdown-unfold dropdown-menu-bottom mb-2">
                                    <a class="dropdown-item active" href="/lang/en">English</a>
                                    <a class="dropdown-item" href="/lang/ne">Nepali</a>
                                </div>
                            </div>
                        </li>
                        <!-- End Language -->
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="w-md-75 text-lg-center mx-lg-auto">
                <p class="text-muted small">&copy; Skillpark Inc. 2020. All rights reserved.</p>
                <p class="text-muted small">When you visit or interact with our sites, services or tools,
                    we or our authorised service providers may use cookies for storing information to help provide
                    you with a better, faster and safer experience and for marketing purposes.</p>
            </div>
            <!-- End Copyright -->
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->


    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Account Sidebar Navigation -->
    <aside id="sidebarContent" class="hs-unfold-content sidebar">
        <div class="sidebar-scroller">
            <div class="sidebar-container">
                <div class="sidebar-footer-offset" style="padding-bottom: 7rem;">
                    <!-- Toggle Button -->
                    <div class="d-flex justify-content-end align-items-center pt-4 px-4">
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-soft-secondary" href="javascript:;"
                                data-hs-unfold-options='{
                                                            "target": "#sidebarContent",
                                                            "type": "css-animation",
                                                            "animationIn": "fadeInRight",
                                                            "animationOut": "fadeOutRight",
                                                            "hasOverlay": "rgba(55, 125, 255, 0.1)",
                                                            "smartPositionOff": true
                                                            }'>
                                <svg width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- End Toggle Button -->

                    <!-- Content -->
                    <div class="scrollbar sidebar-body">
                        <div class="sidebar-content py-1 px-7">
                            <form enctype="multipart/form-data" class="js-validate" method="POST"
                                action="{{ route('login') }}" novalidate>
                                @csrf
                                <!-- Login -->
                                <div id="login">
                                    <!-- Title -->
                                    <div class="text-center mb-7">
                                        <h4 class="mb-0">Sign in to stay updated on your freelancing
                                            world.</h4>
                                    </div>
                                    <!-- End Title -->

                                    <!-- Input Group -->
                                    <div class="js-form-message mb-4">
                                        <label class="input-label">Email</label>
                                        <div class="input-group input-group-sm mb-2">
                                            <input type="email" class="form-control" name="email" id="signinEmail"
                                                placeholder="Email" value="{{ old('email') }}" aria-label="Email"
                                                required data-msg="Please enter a valid email address.">
                                        </div>
                                        @error('email')
                                        <span class="feedback" style="color:red;font-size:12px" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <!-- End Input Group -->

                                    <!-- Input Group -->
                                    <div class="js-form-message mb-3">
                                        <label class="input-label">Password</label>
                                        <div class="input-group input-group-sm mb-2">
                                            <input type="password" class="form-control" name="password"
                                                id="signinPassword" placeholder="Password" aria-label="Password"
                                                required data-msg="Your password is invalid. Please try again.">
                                        </div>
                                        @error('password')
                                        <span class="feedback" style="color:red;font-size:13px" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <!-- End Input Group -->

                                    <div class="d-flex justify-content-end mb-4">
                                        <a class="small link-underline" href="{{ route('password.update') }}">Forgot
                                            Password?</a>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                                    </div>

                                    <div class="text-center mb-3">
                                        <span class="divider divider-xs divider-text">OR</span>
                                    </div>

                                    <div class="text-center"><a
                                            class="social-btn sb-facebook sb-outline sb-lg mx-1 mb-2"
                                            href="http://skillpark.herokuapp.com/oauth/facebook"><i
                                                class="fab fa-facebook" aria-hidden="true"></i></a>
                                        <a class="social-btn sb-twitter sb-outline sb-lg mx-1 mb-2"
                                            href="http://skillpark.herokuapp.com/oauth/twitter"><i
                                                class="fab fa-twitter" aria-hidden="true"></i></a>
                                        <a class="social-btn sb-github sb-outline sb-lg mx-1 mb-2"
                                            href="http://skillpark.herokuapp.com/oauth/github"><i class="fab fa-github"
                                                aria-hidden="true"></i></a>
                                        <a class="social-btn sb-google sb-outline sb-lg mx-1 mb-2"
                                            href="http://skillpark.herokuapp.com/oauth/google"><i class="fab fa-google"
                                                aria-hidden="true"></i></a>
                                    </div>

                                    <div class="text-center pt-3">
                                        <span class="small text-muted">Do not have an account?</span>
                                        <a class="small font-weight-bold" href="{{ route('register') }}">Sign Up
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
    </aside>
    <!-- End Account Sidebar Navigation -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Global Compulsory -->
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="/vendor/hs-video-player/dist/hs-video-player.min.js"></script>
    <script src="/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="/vendor/appear.js"></script>
    <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- JS Skillpark -->
    <script src="/js/hs.core.js"></script>
    <script src="/js/hs.validation.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
      // initialization of header
      var header = new HSHeader($('#header')).init();

      // initialization of mega menu
      var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
        desktop: {
          position: 'left'
        }
      }).init();

// initialization of video player
$('.js-inline-video-player').each(function () {
  var videoPlayer = new HSVideoPlayer($(this)).init();
});

      // initialization of unfold
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

      // initialization of form validation
      $('.js-validate').each(function() {
        $.HSCore.components.HSValidation.init($(this), {
          rules: {
            confirmPassword: {
              equalTo: '#signupPassword'
            }
          }
        });
      });

      // initialization of show animations
      $('.js-animation-link').each(function () {
        var showAnimation = new HSShowAnimation($(this)).init();
      });

      // initialization of go to
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });
    </script>

</body>

</html>