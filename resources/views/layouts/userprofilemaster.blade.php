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
    <link rel="stylesheet" href="/vendor/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="/vendor/select2/dist/css/select2.min.css">


    <!-- CSS Skillpark Template -->
    <link rel="stylesheet" href="/css/theme.css">
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="header header-box-shadow-on-scroll header-abs-top header-show-hide"
        data-hs-header-options='{
   "fixMoment": 400,
   "fixEffect": "slide"
 }'>

        <div class="header-section">
            <!-- Topbar -->
            <div class="container py-2">
                <div class="d-flex align-items-center">
                    <img src="/images/logo/biglogo.svg" class="mr-4" width="130px" />
                    <!-- Language -->
                    <div class="hs-unfold">
                        <a class="js-hs-unfold-invoker dropdown-nav-link dropdown-toggle d-flex align-items-center"
                            href="javascript:;" data-hs-unfold-options='{
                                                                            "target": "#languageDropdown",
                                                                            "type": "css-animation",
                                                                            "event": "hover",
                                                                            "hideOnScroll": "true"
                                                                            }'>
                            <img class="dropdown-item-icon mr-2" src="/vendor/flag-icon-css/flags/4x3/us.svg" alt="SVG">
                            <span class="d-none d-sm-inline-block">English</span>
                        </a>

                        <div id="languageDropdown" class="hs-unfold-content dropdown-menu">
                            <a class="dropdown-item" href="/lang/en">English</a>
                            <a class="dropdown-item" href="/lang/ne">नेपाली</a>
                        </div>
                    </div>
                    <!-- End Language -->


                    <div class="ml-auto">

                        <!-- Links -->
                        <div class="nav nav-sm nav-y-0 d-none d-sm-flex ml-sm-auto">
                            <a class="nav-link" href="">Help</a>
                        </div>
                        <!-- End Links -->
                    </div>

                    <ul class="list-inline ml-2 mb-0">
                        @guest
                        <!-- Account Login -->
                        <li class="list-inline-item">
                            <div class="hs-unfold">
                                <a class="btn btn-icon btn-xs" href="">
                                    <i class="fas fa-user-circle"></i>
                                </a>
                            </div>
                        </li>
                        <!-- End Account Login -->
                        @else
                        <!-- Account Login -->
                        <li class="list-inline-item dropdown">
                            <!-- Account Sidebar Toggle Button -->
                            <a id="sidebarNavToggler"
                                class="hs-mega-menu-invoker nav-link btn btn-xs u-btn-text-secondary dropdown-toggle u-sidebar--account__toggle-bg ml-1 px-3"
                                href="javascript:;" id="dropdownSubMenu" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="position-relative">
                                    <span class="u-sidebar--account__toggle-text">{{ Auth::user()->name }}</span>
                                    <img class="u-sidebar--account__toggle-img" src="/images/spacer.png" width="35"
                                        alt="Profile">
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownSubMenu" style="min-width: 230px;">
                                <a class="dropdown-item pb-2" href="dashboard"><i class="fa fa-dashcube"></i>&nbsp;
                                    Dashboard</a>
                                <a class="dropdown-item" href="settings"><i class="fa fa-gear"></i>&nbsp; Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt"></i>&nbsp; Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            <!-- End Account Sidebar Toggle Button -->
                        </li>
                        <!-- End Account Login -->
                        @endguest
                    </ul>
                </div>
            </div>
            <!-- End Topbar -->
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <div class="pt-7"></div>


    <!-- ========== MAIN ========== -->
    <main id="content" role="main" class="bg-light">

        <!-- Breadcrumb Section -->
        <div class="bg-navy d-lg-none d-sm-block"
            style="background-image: url(/images/svg/components/abstract-shapes-20.svg);">
            <div class="container space-1 space-top-lg-2 space-bottom-lg-3">
                <div class="row align-items-center">
                    <div class="col">
                        <!-- Breadcrumb -->
                        <ol class="breadcrumb breadcrumb-light breadcrumb-no-gutter mb-0">
                            <li class="breadcrumb-item">Account</li>
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
                        </ol>
                        <!-- End Breadcrumb -->
                    </div>
                    <div class="col-auto">
                        <!-- Responsive Toggle Button -->
                        <button type="button" class="navbar-toggler btn btn-icon btn-sm rounde-circle d-lg-none"
                            aria-label="Toggle navigation" aria-expanded="false" aria-controls="sidebarNav"
                            data-toggle="collapse" data-target="#sidebarNav">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Section -->
        <!-- Content Section -->
        <div class="container pt-3">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Navbar -->
                    <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
                        <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
                            <!-- Card -->
                            <div class="card mb-5">
                                <div class="card-body">
                                    <!-- Avatar -->
                                    <div class="d-none d-lg-block text-center mb-5">
                                        <div class="avatar avatar-xxl avatar-circle mb-3">
                                            <img class="avatar-img" src="{{ Auth::user()->avatar }}"
                                                alt="{{ Auth::user()->name }}">
                                            <img class="avatar-status avatar-lg-status"
                                                src="/images/svg/illustrations/top-vendor.svg" alt="Image"
                                                data-toggle="tooltip" data-placement="top" title="Verified user">
                                        </div>

                                        <h4 class="card-title">{{ Auth::user()->name }}</h4>
                                        <p class="card-text font-size-1">{{ Auth::user()->email }}</p>
                                    </div>
                                    <!-- End Avatar -->

                                    <h6 class="text-cap small">Account</h6>

                                    <!-- List -->
                                    <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2 mb-4">
                                        <li class="nav-item">
                                            <a class="{{ Request::is('settings') ? 'nav-link-active' : 'nav-link' }}"
                                                href="settings">
                                                <i class="fas fa-id-card nav-icon"></i>
                                                Personal info
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="{{ Request::is('auth') ? 'nav-link-active' : 'nav-link' }}"
                                                href="auth">
                                                <i class="fas fa-shield-alt nav-icon"></i>
                                                Login &amp; security
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="{{ Request::is('notification') ? 'nav-link-active' : 'nav-link' }}"
                                                href="notification">
                                                <i class="fas fa-bell nav-icon"></i>
                                                Notifications
                                                <span class="badge badge-soft-navy badge-pill nav-link-badge">1</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="{{ Request::is('preference') ? 'nav-link-active' : 'nav-link' }}"
                                                href="preference">
                                                <i class="fas fa-sliders-h nav-icon"></i>
                                                Preferences
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End List -->

                                    <h6 class="text-cap small">Privacy</h6>

                                    <!-- List -->
                                    <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                                        <li class="nav-item">
                                            <a class="{{ Request::is('terms') ? 'nav-link-active' : 'nav-link' }}"
                                                href="terms">
                                                <i class="fas fa-book-open nav-icon"></i>
                                                Terms &amp; Conditions
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout').submit();">
                                                <i class="fas fa-sign-out-alt nav-icon"></i>
                                                Logout
                                            </a>
                                            <form id="logout" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                    <!-- End List -->

                                    <div class="d-lg-none">
                                        <div class="dropdown-divider"></div>

                                        <!-- List -->
                                        <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                                            <li class="nav-item">
                                                <a class="nav-link text-primary" href="#">
                                                    <i class="fas fa-sign-out-alt nav-icon"></i>
                                                    Log out
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End List -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                    <!-- End Navbar -->
                </div>


                @yield('content')

            </div>
            <!-- End Row -->
        </div>
        <!-- End Content Section -->
    </main>
    <!-- ========== END MAIN ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="gradient-x-overlay-sm-indigo overflow-hidden pt-3">
        <div class="container space-top-2 space-bottom-1 bg-white text-center">

            <!-- Content -->
            <div class="row">
                <div class="col-6 col-lg-3 order-lg-2 mb-7 mb-lg-0">
                    @hasrole('freelancer')
                    <h5>Freelancer</h5>
                    <ul class="nav nav-sm nav-x-0 flex-column">
                        <li class="nav-item"><a class="nav-link" href="">Trending Jobs</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Popular Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Careers</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Location</a></li>
                    </ul>
                    @else
                    <h5>Clients</h5>
                    <ul class="nav nav-sm nav-x-0 flex-column">
                        <li class="nav-item"><a class="nav-link" href="">Trending Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Popular Freelancers</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Featured Clients</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Location</a></li>
                    </ul>
                    @endhasrole
                </div>

                <div class="col-6 col-lg-3 order-lg-3 mb-7 mb-lg-0">
                    <h5>Legal</h5>

                    <!-- Nav Link -->
                    <ul class="nav nav-sm nav-x-0 flex-column">
                        <li class="nav-item"><a class="nav-link" href="faq">Help</a></li>
                        <li class="nav-item"><a class="nav-link" href="terms">Terms &amp; Conditions</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="privacy">Privacy &amp; Policy</a>
                        </li>
                    </ul>
                    <!-- End Nav Link -->
                </div>

                <div class="col-sm-6 col-lg-3 order-lg-1 mb-3 mb-lg-0">
                    <!-- Logo -->
                    <a class="d-inline-flex align-items-center" href="" aria-label="skillpark">
                        <img class="brand" src="/images/logo/biglogo.svg" alt="Logo">
                    </a>
                    <!-- End Logo -->
                </div>

                <div class="col-sm-6 col-lg-3 order-lg-4 align-self-center align-self-lg-start">
                    <p class="small">&copy; Skillpark Inc. 2020</p>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- JS Global Compulsory -->
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
    <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="/vendor/select2/dist/js/select2.full.min.js"></script>

    <!-- JS Front -->
    <script src="/js/hs.core.js"></script>
    <script src="/js/hs.validation.js"></script>
    <script src="/js/hs.mask.js"></script>
    <script src="/js/hs.select2.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
      // initialization of header
      var header = new HSHeader($('#header')).init();
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

      // initialization of masked input
      $('.js-masked-input').each(function () {
        var mask = $.HSCore.components.HSMask.init($(this));
      });

      // initialization of file attach
      $('.js-file-attach').each(function () {
        var customFile = new HSFileAttach($(this)).init();
      });

      // initialization of select2
      $('.js-custom-select').each(function () {
        var select2 = $.HSCore.components.HSSelect2.init($(this));
      });

      // initialization of go to
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    </script>

</body>

</html>