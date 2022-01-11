<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Skillpark Inc. | Hire Expert Freelancers Any Time')</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Skillpark Inc.">
    <meta name="keywords"
        content="business, consulting, heiring space, services, dashboard, multipurpose, software, landing, html5, css3, javascript">
    <meta name="author" content="Skillpark Inc.">

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.svg">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="/favicon.svg">
    <meta name="msapplication-TileColor" content="#1dc8cc">
    <meta name="theme-color" content="#ffffff">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="/vendor/slick-carousel/slick/slick.css">

    <!-- CSS Skillpark Template -->
    <link rel="stylesheet" href="/css/theme.css">
    @yield('extra-css')
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header"
        class="{{ Request::is('/') ? 'header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-show-hide' : 'header' }}"
        data-hs-header-options='{
   "fixMoment": 0,
   "fixEffect": "slide"
 }'>
        <div class="header-section">
            <div id="logoAndNav" class="container">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-lg">

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

                    <!-- Logo -->
                    <a class="navbar-brand d-none d-md-flex" href="/" aria-label="Skillpark">
                        <img src="/images/logo/biglogo.svg" alt="Logo">
                    </a>
                    <a class="navbar-brand w-auto d-md-none d-sm-flex" href="/" aria-label="Skillpark">
                        <img src="/images/logo/biglogo.svg" alt="Logo">
                    </a>
                    <!-- End Logo -->
                    @if(!Request::is('/'))
                    <!-- Search Form -->
                    <li class="d-none d-lg-inline-block navbar-nav-item flex-grow-1 ml-5">
                        <form action="{{ route('search') }}" class="d-flex align-items-center">
                            <label class="sr-only" for="signupSEmail">Search for apps</label>
                            <div class="d-inline-block w-100 mr-2">
                                <input type="text" required class="form-control" name="search" id="signupSEmail"
                                    placeholder="Search for Jobs " aria-label="Search for Jobs ">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <span class="fas fa-search"></span>
                            </button>
                        </form>
                    </li>
                    <!-- End Search Form -->
                    @endif
                    @guest
                    <!-- Secondary Content -->
                    <div class="navbar-nav-wrap-content d-none d-md-flex">
                        <a class="btn btn-sm btn-primary" href="{{ route('register') }}">
                            {{ __('nepali.Join') }}
                        </a>
                    </div>
                    <div class="navbar-nav-wrap-content d-md-none d-sm-flex">
                        <a class="btn btn-md btn-ghost-secondary font-weight-bolder" href="{{ route('register') }}">
                            {{ __('nepali.Join') }}
                        </a>
                    </div>
                    <!-- End Secondary Content -->
                    @else
                    <div class="d-none"></div>
                    @endguest

                    <!-- Navigation -->
                    <div id="navBar" class="collapse navbar-collapse">
                        <div class="navbar-body header-sticky-top-inner">
                            <ul class="navbar-nav">

                            <li class="navbar-nav-item mr-2 font-weight-bold">
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker nav-link badge badge-success text-white p-3" target="_blank" href="https://messagepark.herokuapp.com"><b>{{ __('nepali.Messenger') }}</b></a>
                                </div>
                            </li>

                                <!-- About -->
                                <li class="hs-has-mega-menu navbar-nav-item" data-hs-mega-menu-item-options='{
                                "desktop": {
                                  "position": "right",
                                  "maxWidth": "700px"
                                }
                              }'>
                                    <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;"
                                        aria-haspopup="true" aria-expanded="false">{{ __('nepali.Solutions') }}</a>

                                    <!-- About - Mega Menu -->
                                    <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="demosMegaMenu">
                                        <div class="row no-gutters">
                                            <div class="col-lg-8">
                                                <div class="navbar-promo-card-deck">
                                                    <!-- Promo Item -->
                                                    <div class="navbar-promo-card navbar-promo-item">
                                                        <a class="navbar-promo-link" href="{{ url('about') }}">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="navbar-promo-title">About</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- End Promo Item -->

                                                    <!-- Promo Item -->
                                                    <div class="navbar-promo-card navbar-promo-item">
                                                        <a class="navbar-promo-link" href="{{ url('about') }}">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span
                                                                        class="navbar-promo-title">{{ __('nepali.Enterprise') }}</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- End Promo Item -->
                                                </div>

                                                <div class="navbar-promo-card-deck">
                                                    <!-- Promo Item -->
                                                    <div class="navbar-promo-card navbar-promo-item">
                                                        <a class="navbar-promo-link" href="{{ url('coming-soon') }}">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="navbar-promo-title">How It Works</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- End Promo Item -->

                                                    <!-- Promo Item -->
                                                    <div class="navbar-promo-card navbar-promo-item">
                                                        <a class="navbar-promo-link" href="{{ route('post-project') }}">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="navbar-promo-title">Post a Job</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- End Promo Item -->
                                                </div>

                                                <div class="navbar-promo-card-deck">
                                                    <!-- Promo Item -->
                                                    <div class="navbar-promo-card navbar-promo-item">
                                                        <a class="navbar-promo-link disabled" href="{{ url('about') }}">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="navbar-promo-title">Payment
                                                                        Method</span>
                                                                    <span class="navbar-promo-text">Coming
                                                                        soon...</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- End Promo Item -->

                                                    <!-- Promo Item -->
                                                    <div class="navbar-promo-card navbar-promo-item">
                                                        <a class="navbar-promo-link" href="{{ url('creators') }}">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="navbar-promo-title">Creators</span>
                                                                    <span class="navbar-promo-text">Founder & CEO</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- End Promo Item -->
                                                </div>
                                            </div>
                                            <!-- Promo -->
                                            <div class="col-lg-4 navbar-promo d-none d-lg-block">
                                                <a class="d-block navbar-promo-inner" href="register">
                                                    <div class="position-relative">
                                                        <img class="img-fluid rounded" width="200"
                                                            src="/images/svg/banner.svg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- End Promo -->
                                        </div>
                                    </div>
                                    <!-- End About - Mega Menu -->
                                </li>
                                <!-- End About -->

                                <!-- Pages -->
                                <li class="hs-has-sub-menu navbar-nav-item">
                                    <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;"
                                        aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="pagesSubMenu">{{ __('nepali.Explore') }}</a>

                                    <!-- Pages - Submenu -->
                                    <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu"
                                        aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                                        <a class="dropdown-item" href="">Trending Services</a>
                                        <a class="dropdown-item" href="">Popular Jobs</a>
                                        <a class="dropdown-item" href="">Featured Freelancers</a>
                                    </div>
                                    <!-- End Pages - Submenu -->
                                </li>
                                <!-- End Pages -->

                                <!-- Language -->
                                <li class="hs-has-sub-menu navbar-nav-item">
                                    <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;"
                                        aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="pagesSubMenu">{{ __('nepali.Language') }}</a>

                                    <!-- Pages - Submenu -->
                                    <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu"
                                        aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                                        <a class="dropdown-item" href="/lang/ne"><img
                                                src="https://cdn.countryflags.com/thumbs/nepal/flag-3d-round-250.png"
                                                class="mr-2" width="20">Nepali</a>
                                        <a class="dropdown-item" href="/lang/en"><img
                                                src="https://cdn.countryflags.com/thumbs/united-states-of-america/flag-3d-round-250.png"
                                                class="mr-2" width="20">English</a>
                                    </div>
                                    <!-- End Pages - Submenu -->
                                </li>
                                <!-- End Language -->

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

                                @guest
                                <!-- Account Login -->
                                <li class="navbar-nav-item pr-2 font-weight-bold">
                                    <div class="hs-unfold">
                                        <a class="js-hs-unfold-invoker nav-link" href="javascript:;" data-toggle="modal"
                                            data-target="#loginModal">{{ __('nepali.Login') }}</a>
                                    </div>
                                </li>
                                <!-- End Account Login -->
                                @else
                                <!-- Account Login -->
                                <li class="navbar-nav-last-item pl-0 dropdown">
                                    <!-- Account -->
                                    <div class="hs-unfold">
                                        <a class="js-hs-unfold-invoker dropdown-toggle px-3 u-sidebar--account__toggle-bg"
                                            style="padding: 0.6rem" href="javascript:;" data-hs-unfold-options='{
                                                    "target": "#accountDropdown",
                                                    "type": "css-animation",
                                                    "event": "click",
                                                    "duration": 30,
                                                    "delay": 0,
                                                    "hideOnScroll": "true"
                                                }'>
                                            <span class="position-relative">
                                                <span
                                                    class="u-sidebar--account__toggle-text">{{ Auth::user()->name }}</span>
                                                <img class="u-sidebar--account__toggle-img"
                                                    src="{{ asset(Auth::user()->avatar) ?? '/images/uploads/avatar.png' }}"
                                                    width="35" alt="Profile">
                                            </span>
                                        </a>

                                        <div id="accountDropdown"
                                            class="hs-unfold-content dropdown-menu dropdown-menu-sm-right dropdown-menu-no-border-on-mobile p-0"
                                            style="min-width: 245px;">
                                            <div class="card">
                                                <!-- Header -->
                                                <div class="card-header p-4">
                                                    <a class="media align-items-center" href={{ url('settings') }}>
                                                        <div class="avatar mr-3">
                                                            <img class="avatar-img" src="{{ Auth::user()->avatar }}"
                                                                alt="Image Description">
                                                        </div>
                                                        <div class="media-body">
                                                            <span
                                                                class="d-block font-weight-bold">{{ Auth::user()->name }}
                                                            </span>
                                                            <span
                                                                class="d-block small text-muted">{{ Auth::user()->email }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Header -->

                                                <!-- Body -->
                                                <div class="card-body py-3">
                                                    <a class="dropdown-item px-0"
                                                        href="@hasrole('freelancer') fp/home @else cp/home @endhasrole">
                                                        <span class="dropdown-item-icon">
                                                            <i class="fa fa-home"></i>
                                                        </span>
                                                        Homepage
                                                    </a>
                                                    <a class="dropdown-item px-0"
                                                        href="@hasrole('freelancer') fp/dashboard @else cp/dashboard @endhasrole">
                                                        <span class="dropdown-item-icon">
                                                            <i class="fa fa-dashcube"></i>
                                                        </span>
                                                        Dashboard
                                                    </a>
                                                    <a class="dropdown-item px-0" href="messages">
                                                        <span class="dropdown-item-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </span>
                                                        Messages
                                                    </a>
                                                    <a class="dropdown-item px-0" href={{ url('settings') }}>
                                                        <span class="dropdown-item-icon">
                                                            <i class="fa fa-gear"></i>
                                                        </span>
                                                        Settings
                                                    </a>

                                                    <div class="dropdown-divider"></div>

                                                    <a class="dropdown-item px-0" href="faq">
                                                        <span class="dropdown-item-icon">
                                                            <i class="fas fa-question-circle"></i>
                                                        </span>
                                                        Help
                                                    </a>
                                                    <a class="dropdown-item px-0" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><i
                                                            class="fa fa-sign-out"></i>&nbsp; Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                                <!-- End Body -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Account -->
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
            {{-- @if(!Request::is('/')) --}}
            @include('layouts.divisions.categorybar')
            {{-- @endif --}}
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    @yield('content')

    @include('layouts.components.loginmodal')

    <!-- ========== FOOTER ========== -->

    @guest
    <footer class="gradient-x-overlay-sm-indigo overflow-hidden">
        <div class="container space-top-1 space-bottom-1">
            <!-- CTA -->
            <div class="row justify-content-lg-between align-items-lg-center text-center text-lg-left">
                <div class="col-lg-5 mb-3 mb-lg-0">
                    <h3 class="text">{{ __('nepali.Thousands of businesses trust Skillpark for their business.')}}</h3>
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

    <footer class="container text-center text-lg-left">
        <div class="space-top-2 space-bottom-1">
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
                    <ul class="nav nav-sm nav-x-0 flex-column align-items-lg-stretch align-items-center">
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
                        <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
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
                        <li class="nav-item"><a class="nav-link" href="#">API Reference</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Docs</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Status</a></li>
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
                                    <span class="media-body">
                                        <i class="fa fa-info-circle mr-1"></i>&nbsp;Help</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="@guest login @else @hasrole('freelancer') {{ route('freelancer') }} @else {{ route('client') }} @endhasrole @endguest">
                                <span class="media align-items-center">
                                    <span class="media-body">
                                        @guest
                                        <i class="fa fa-user-circle mr-1"></i>&nbsp;Register/Login</span>
                                    @else
                                    <i class="fa fa-user-circle mr-1"></i>&nbsp;Your Account</span>
                                @endguest
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
                <div class="col-md-6 col-sm-7 mb-4 mb-md-0 mx-auto">
                    <!-- Nav Link -->
                    <ul class="nav nav-sm nav-x-sm justify-content-center">
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
                            <div class="form-group">
                                <select class="form-control btn btn-xs btn-soft" onchange="location = this.value;">
                                    <option value="" selected> Choose Language </option>
                                    <option value="/lang/en"> English </option>
                                    <option value="/lang/ne">Nepali</option>
                                </select>
                            </div>
                        </li>
                        <!-- End Language -->
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="w-md-75 text-lg-center mx-lg-auto">
                <p class="text-muted small">&copy; Skillpark Inc. 2022. All rights reserved. <a href="https://sushantp.com.np" target="_blank">Creator</a></p>
            </div>
            <!-- End Copyright -->
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- JS Global Compulsory -->
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="/vendor/hs-video-player/dist/hs-video-player.min.js"></script>
    <script src="/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/vendor/slick-carousel/slick/slick.js"></script>

    <!-- JS Skillpark -->
    <script src="/js/core.js"></script>
    <script src="/js/validation.js"></script>
    <script src="/js/slick-carousel.js"></script>
    @yield('script')

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

          // initialization of slick carousel
          $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });
    
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
          
          // initialization of video player
          $('.js-inline-video-player').each(function () {
            var videoPlayer = new HSVideoPlayer($(this)).init();
          });
        
          // initialization of show animations
          $('.js-animation-link').each(function () {
            var showAnimation = new HSShowAnimation($(this)).init();
          });
        });
    </script>
    @if (count($errors) > 0)
    <script>
        $( document ).ready(function() {
            $('#loginModal').modal('show');
        });
    </script>
    @endif


</body>

</html>