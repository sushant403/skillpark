<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Skillpark Inc. | Home')</title>
  <!-- SEO Meta Tags-->
  <meta name="description" content="Skillpark Inc.">
  <meta name="keywords"
    content="business, freelance, heiring space, services, dashboard, multipurpose, software, landing, html5, css3, javascript">
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
  <link rel="stylesheet" href="/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
  <link rel="stylesheet" href="/vendor/cubeportfolio/css/cubeportfolio.min.css">
  <link rel="stylesheet" href="/vendor/select2/dist/css/select2.min.css">


  <!-- CSS Skillpark Template -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/theme.css">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" style="font-size: 0.9rem"
    class="header left-aligned-navbar header-box-shadow-on-scroll header-abs-top header-show-hide"
    data-hs-header-options='{
   "fixMoment": 700,
   "fixEffect": "slide"
 }'>

    <div class="header-section">
      <!-- Topbar -->
      <div class="container header-hide-content py-2">
        <div class="d-flex align-items-center">
          <!-- Language -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker dropdown-nav-link dropdown-toggle d-flex align-items-center"
              href="javascript:;" data-hs-unfold-options='{
       "target": "#languageDropdown",
       "type": "css-animation",
       "event": "click",
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
            <!-- Jump To -->
            <div class="hs-unfold d-sm-none mr-2">
              <a class="js-hs-unfold-invoker dropdown-nav-link dropdown-toggle d-flex align-items-center"
                href="javascript:;" data-hs-unfold-options='{
         "target": "#jumpToDropdown",
         "type": "css-animation",
         "event": "hover",
         "hideOnScroll": "true"
        }'>
                Jump to
              </a>

              <div id="jumpToDropdown" class="hs-unfold-content dropdown-menu">
                <a class="dropdown-item" href="home">Find Jobs</a>
                <a class="dropdown-item" href="faq">Help</a>
                <a class="dropdown-item" href="report">Report</a>
              </div>
            </div>
            <!-- End Jump To -->

            <!-- Links -->
            <div class="nav nav-sm nav-y-0 d-none d-sm-flex ml-sm-auto">
              <a class="nav-link" href="home">Find Jobs</a>
              <a class="nav-link" href="faq">Help</a>
              <a class="nav-link" href="report">Report</a>
            </div>
            <!-- End Links -->
          </div>
        </div>
      </div>
      <!-- End Topbar -->

      <div id="logoAndNav" class="container ">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <div class="navbar-nav-wrap">
            <!-- Logo -->
            <a class="navbar-brand navbar-nav-wrap-brand" href="{{ route('freelancer') }}" aria-label="Skillpark">
              <img src="/images/logo/biglogo.svg" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-content">
              <!-- Search Classic -->
              <div class="hs-unfold d-lg-none d-inline-block position-static">
                <a class="js-hs-unfold-invoker btn btn-xs btn-icon rounded-circle" href="javascript:;"
                  data-hs-unfold-options='{
                    "target": "#searchClassic",
                    "type": "css-animation",
                    "animationIn": "slideInUp"
                   }'>
                  <i class="fas fa-search"></i>
                </a>

                <div id="searchClassic" class="hs-unfold-content dropdown-menu w-100 border-0 rounded-0 px-3 mt-0">
                  <form class="js-validate d-flex align-items-center">
                    <label class="sr-only" for="signupSrEmail">Search for apps</label>
                    <div class="d-inline-block w-75 mr-2">
                      <input type="email" class="form-control" name="email" id="signupSrEmail"
                        placeholder="Search for apps" aria-label="Search for apps">
                    </div>
                    <button type="submit" class="btn btn-primary">
                      <span class="fas fa-search"></span>
                    </button>
                  </form>
                </div>
              </div>
              <!-- End Search Classic -->

              <!-- Account -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker dropdown-toggle px-3 u-sidebar--account__toggle-bg"
                  style="padding: 0.6rem" href="javascript:;" data-hs-unfold-options='{
                    "target": "#accountDropdown",
                    "type": "css-animation",
                    "event": "click",
                    "duration": 50,
                    "delay": 0,
                    "hideOnScroll": "true"
                   }'>
                  <span class="position-relative">
                    <span class="u-sidebar--account__toggle-text">{{ Auth::user()->name }}</span>
                    <img class="u-sidebar--account__toggle-img" src="{{ asset(Auth::user()->avatar) }}" width="35" alt="">
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
                          <img class="avatar-img" src="{{ asset(Auth::user()->avatar) }}" alt="">
                        </div>
                        <div class="media-body">
                          <span class="d-block font-weight-bold">{{ Auth::user()->name }} </span>
                          <span class="d-block small text-muted">{{ Auth::user()->email }}</span>
                        </div>
                      </a>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body py-3">
                      <a class="dropdown-item px-0" href="dashboard">
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
                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>&nbsp; Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                    <!-- End Body -->
                  </div>
                </div>
              </div>
              <!-- End Account -->
            </div>
            <!-- End Secondary Content -->

            <!-- Responsive Toggle Button -->
            <button type="button"
              class="navbar-toggler navbar-nav-wrap-navbar-toggler btn btn-icon btn-sm rounded-circle"
              aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse"
              data-target="#navBar">
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
            <div id="navBar" class="navbar-nav-wrap-navbar collapse navbar-collapse">
              <ul class="navbar-nav">
                <!-- Catgories -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;" aria-haspopup="true"
                    aria-expanded="false" aria-labelledby="coursesSubMenu">
                    <i class="fa fa-th font-size-1 mr-1"></i>
                    Categories
                  </a>

                  <!-- Courses - Submenu -->
                  <div id="coursesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="coursesMegaMenu"
                    style="min-width: 270px;">
                    <!-- Development -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkCoursesDevelopment" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle"
                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                        aria-controls="navSubmenuCoursesDevelopment">
                        <span class="min-w-4rem text-center opacity-lg mr-1">
                          <i class="fa fa-laptop-code font-size-1 mr-1"></i>
                        </span>
                        Development
                      </a>

                      <div id="navSubmenuCoursesDevelopment" class="hs-sub-menu dropdown-menu"
                        aria-labelledby="navLinkCoursesDevelopment" style="min-width: 270px;">
                        <a class="dropdown-item" href="#">All Web Development</a>
                        <a class="dropdown-item" href="#">Web Development</a>
                        <a class="dropdown-item" href="#">Mobile apps</a>
                        <a class="dropdown-item" href="#">Programming languages</a>
                        <a class="dropdown-item" href="#">Databases</a>
                        <a class="dropdown-item" href="#">Software testing</a>
                      </div>
                    </div>
                    <!-- End Development -->

                    <!-- Business -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkCoursesBusiness" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle"
                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                        aria-controls="navSubmenuCoursesBusiness">
                        <span class="min-w-4rem text-center opacity-lg mr-1">
                          <i class="fa fa-chart-bar font-size-1 mr-1"></i>
                        </span>
                        Business
                      </a>

                      <div id="navSubmenuCoursesBusiness" class="hs-sub-menu dropdown-menu"
                        aria-labelledby="navLinkCoursesBusiness" style="min-width: 270px;">
                        <a class="dropdown-item" href="#">All Business</a>
                        <a class="dropdown-item" href="#">Finance</a>
                        <a class="dropdown-item" href="#">Communications</a>
                        <a class="dropdown-item" href="#">Management</a>
                        <a class="dropdown-item" href="#">Strategy</a>
                        <a class="dropdown-item" href="#">Project management</a>
                        <a class="dropdown-item" href="#">Data & Analytics</a>
                      </div>
                    </div>
                    <!-- Business -->

                    <!-- IT & Software -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkCoursesITSoftware" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle"
                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                        aria-controls="navSubmenuCoursesITSoftware">
                        <span class="min-w-4rem text-center opacity-lg mr-1">
                          <i class="fa fa-desktop font-size-1 mr-1"></i>
                        </span>
                        IT & Software
                      </a>

                      <div id="navSubmenuCoursesITSoftware" class="hs-sub-menu dropdown-menu"
                        aria-labelledby="navLinkCoursesITSoftware" style="min-width: 270px;">
                        <a class="dropdown-item" href="#">All IT & Software</a>
                        <a class="dropdown-item" href="#">IT Certification</a>
                        <a class="dropdown-item" href="#">Network & security</a>
                        <a class="dropdown-item" href="#">Hardware</a>
                        <a class="dropdown-item" href="#">Operating systems</a>
                      </div>
                    </div>
                    <!-- IT & Software -->

                    <!-- Design -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkDesignServices" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle"
                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                        aria-controls="navSubmenuDesignServices">
                        <span class="min-w-4rem text-center opacity-lg mr-1">
                          <i class="fa fa-pencil-ruler font-size-1 mr-1"></i>
                        </span>
                        Design
                      </a>

                      <div id="navSubmenuDesignServices" class="hs-sub-menu dropdown-menu"
                        aria-labelledby="navLinkDesignServices" style="min-width: 270px;">
                        <a class="dropdown-item" href="#">All Design</a>
                        <a class="dropdown-item" href="#">Web design</a>
                        <a class="dropdown-item" href="#">Graphic design</a>
                        <a class="dropdown-item" href="#">Design tools</a>
                        <a class="dropdown-item" href="#">Game design</a>
                        <a class="dropdown-item" href="#">Design thinking</a>
                        <a class="dropdown-item" href="#">3D & animation</a>
                      </div>
                    </div>
                    <!-- Design -->

                    <div class="dropdown-divider my-3"></div>

                    <div class="px-4">
                      <a class="btn btn-block btn-sm btn-primary transition-3d-hover" href="#">All Categories</a>
                    </div>
                  </div>
                  <!-- End Categories - Submenu -->
                </li>
                <!-- End Categories -->

                <li class="navbar-nav-item">
                  <a href="saved-jobs" class="nav-link px-0 px-md-3"><i class="fa fa-bookmark font-size-1 mr-1"></i> Saved Jobs</a>
                </li>

                <!-- Search Form -->
                <li class="d-none d-lg-inline-block navbar-nav-item flex-grow-1 mx-2">
                  <form class="d-flex align-items-center">
                    <label class="sr-only" for="signupSEmail">Search for apps</label>
                    <div class="d-inline-block w-65 mr-2">
                      <input type="text" class="form-control" name="search" id="signupSEmail"
                        placeholder="@hasrole('freelancer') Search for Jobs @else Search for Categories @endhasrole"
                        aria-label="@hasrole('freelancer') Search for Jobs @else Search for Categories @endhasrole">
                    </div>
                    <button type="submit" class="btn btn-primary">
                      <span class="fas fa-search"></span>
                    </button>
                  </form>
                </li>
                <!-- End Search Form -->

              </ul>
            </div>
            <!-- End Navigation -->
          </div>
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <div class="space-bottom-2 pt-5"></div>

  @yield('content')

  <!-- ========== FOOTER ========== -->
  <footer class="border-top text-center">
    <div class="container">
      <div class="row justify-content-lg-between">
        <div class="col-lg-3 mb-5">
          <div class="d-flex align-items-start flex-column h-100">
            <a class="w-100 mb-3 mb-lg-auto" href="" aria-label="Skillpark">
              <img class="brand" src="/images/logo/biglogo.svg" alt="Logo">
            </a>
            <p class="small text-muted mb-0 mx-auto">&copy; Skillpark Inc. 2020.</p>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 ml-lg-auto mb-5 mb-lg-0">
          <h5>Account</h5>

          <!-- Nav Link -->
          <ul class="nav nav-sm nav-x-0 flex-column">
            <li class="nav-item"><a class="nav-link" href="#">Posting a Project</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Bidding options</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Tracking activity</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Location Based</a></li>
          </ul>
          <!-- End Nav Link -->
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-5 mb-lg-0">
          <h5>Company</h5>

          <!-- Nav Link -->
          <ul class="nav nav-sm nav-x-0 flex-column">
            <li class="nav-item"><a class="nav-link" href="#">Financing</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Trending</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Hiring policy</a></li>
          </ul>
          <!-- End Nav Link -->
        </div>

        <div class="col-md-4 col-lg-2 mb-5 mb-lg-0">
          <h5>Account Services</h5>

          <!-- Nav Link -->
          <ul class="nav nav-sm nav-x-0 flex-column">
            <li class="nav-item">
              <a class="nav-link" href="../help-desk/index">
                <span class="media align-items-center">
                  <span class="media-body"> <i class="fas fa-info-circle mr-2"></i>Help</span>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="media align-items-center">
                  <span class="media-body">
                    <i class="fas fa-user-circle mr-2"></i>Your Account</span>
                </span>
              </a>
            </li>
            <li class="position-relative">
              <!-- Country -->
              <div class="hs-unfold position-static">
                <a class="js-hs-unfold-invoker nav-link" href="javascript:;" data-hs-unfold-options='{
                    "target": "#footerCountry",
                    "type": "css-animation",
                    "animationIn": "slideInDown"
                   }'>
                  <img class="dropdown-item-icon" src="/vendor/flag-icon-css/flags/4x3/us.svg" alt="English">
                  <span>English</span>
                </a>

                <div id="footerCountry"
                  class="hs-unfold-content dropdown-menu dropdown-card dropdown-menu-md-right dropdown-menu-bottom w-100 w-sm-auto mb-0">
                  <div class="card">
                    <!-- Body -->
                    <div class="card-body">
                      <h5>Skillpark available in</h5>

                      <div class="row">
                        <div class="col-6">
                          <!-- Nav Link -->
                          <a class="nav-link" href="/lang/ne">
                            <img class="max-w-3rem mr-1" src="/images/svg/np.svg" alt="Nepal Flag">
                            नेपाली
                          </a>
                          <a class="nav-link active " href="/lang/en">
                            <img class="max-w-3rem mr-1" src="/vendor/flag-icon-css/flags/4x3/us.svg"
                              alt="United States Flag">
                            English
                          </a>
                          <!-- End Nav Link -->
                        </div>
                      </div>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <!-- End Footer -->
                  </div>
                </div>
              </div>
              <!-- End Country -->
            </li>
          </ul>
          <!-- End Nav Link -->
        </div>
      </div>

      <hr class="my-0">

      <div class="row align-items-md-center space-1">
        <div class="col-md-4 mb-4 mb-md-0">
          <!-- Social Networks -->
          <ul class="list-inline mb-0">
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
              <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                <i class="fab fa-github"></i>
              </a>
            </li>
          </ul>
          <!-- End Social Networks -->
        </div>

        <div class="col-md-8 text-md-right">
          <!-- Links -->
          <ul class="nav nav-sm justify-content-md-end justify-content-center">
            <li class="nav-item">
              <a class="nav-link pl-0" href="../pages/privacy">Privacy &amp; policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/terms">Terms &amp; conditions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pr-0" href="../pages/careers">Careers</a>
            </li>
          </ul>
          <!-- End Links -->
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- JS Global Compulsory -->
  <script src="/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
  <script src="/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
  <script src="/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
  <script src="/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
  <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
  <script src="/vendor/select2/dist/js/select2.full.min.js"></script>

  <!-- JS Skillpark -->
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

    // initialization of select2
    $('.js-custom-select').each(function () {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
        $('.js-custom-select-multiple').select2({
        placeholder: 'Select options',
        width: '100%',
      maximumSelectionLength: 3,
      });
    });

      // initialization of HSMegaMenu component
      var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();

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
      
      $(document).on('ready', function () {
    // initialization of sticky blocks
    $('.js-sticky-block').each(function () {
      var stickyBlock = new HSStickyBlock($(this)).init();
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

      // initialization of go to
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
  </script>

</body>

</html>