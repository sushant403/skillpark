<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Page Error - Skillpark Inc.')</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Skillpark Inc.">
    <meta name="keywords"
        content="business, consulting, heiring space, services, dashboard, multipurpose, software, landing, html5, css3, javascript">
    <meta name="author" content="Skillpark Inc.">

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                                                <a class="dropdown-item" href="">FrontEnd Developer</a>
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
                                    <div class="hs-unfold">
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
                                                    <button type="submit" class="btn">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Search -->
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


    <!-- JS Global Compulsory -->
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>

    <!-- JS Skillpark -->
    <script src="/js/hs.core.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
      // initialization of header
      var header = new HSHeader($('#header')).init();
    });

      // initialization of mega menu
      var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
        desktop: {
          position: 'left'
        }
      }).init();

      // initialization of unfold
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

    </script>

</body>

</html>