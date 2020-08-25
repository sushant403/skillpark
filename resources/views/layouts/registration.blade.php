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

    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.svg">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="/favicon.svg">
    <meta name="msapplication-TileColor" content="#1dc8cc">
    <meta name="theme-color" content="#ffffff">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/vendor/select2/dist/css/select2.min.css">

    <!-- CSS Skillpark Template -->
    <link rel="stylesheet" href="/css/theme.css">
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" style="font-size: 0.9rem"
        class="header left-aligned-navbar header-box-shadow-on-scroll header-abs-top" data-hs-header-options='{
   "fixMoment": 700,
   "fixEffect": "slide"
 }'>

        <div class="header-section">

            <div id="logoAndNav" class="container ">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-lg">
                    <div class="navbar-nav-wrap">
                        <!-- Logo -->
                        <a class="navbar-brand navbar-nav-wrap-brand" href="#" aria-label="Skillpark">
                            <img src="/images/logo/biglogo.svg" alt="Logo">
                        </a>
                        <!-- End Logo -->

                        <!-- Secondary Content -->
                        <div class="navbar-nav-wrap-content">
                            <!-- Account -->
                            <div class="hs-unfold">
                                <a class="px-3 u-sidebar--account__toggle-bg px-2" style="padding: 0.6rem"
                                    href="javascript:;">
                                    <span class="position-relative">
                                        <span class="u-sidebar--account__toggle-text">{{ Auth::user()->name }}</span>
                                        <img class="u-sidebar--account__toggle-img"
                                            src="{{ asset(Auth::user()->avatar) }}" width="35" alt="">
                                    </span>
                                </a>
                            </div>
                            <!-- End Account -->
                        </div>
                        <!-- End Secondary Content -->

                        <!-- Responsive Toggle Button -->
                        <button type="button"
                            class="navbar-toggler navbar-nav-wrap-navbar-toggler btn btn-icon btn-sm rounded-circle"
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
                        <div id="navBar" class="navbar-nav-wrap-navbar collapse navbar-collapse">
                            <ul class="navbar-nav py-1">
                                <li class="navbar-nav-item">
                                    <a href="{{ url('faq') }}" target="_blank" class="nav-link px-0 py-3 px-md-3"><i
                                            class="fa fa-question-circle font-size-1 mr-1"></i> Help</a>
                                </li>
                                <li class="navbar-nav-item">
                                    <a href="{{ url('report') }}" target="_blank" class="nav-link px-0 py-3 px-md-3"><i
                                            class="fa fa-ring font-size-1 mr-1"></i> Report a Problem</a>
                                </li>
                                <li class="navbar-nav-item">
                                    <a class="nav-link px-0 py-3 px-md-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt"></i>&nbsp; Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
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

    <div class="space-bottom-1 pt-5"></div>

    @yield('content')

    <!-- ========== FOOTER ========== -->
    <footer class="border-top text-center pt-4">
        <div class="container">
            <div class="row justify-content-lg-between">
                <div class="col-lg-3 mb-5">
                    <div class="d-flex align-items-start flex-column h-100">
                        <a class="w-100 mb-3 mb-lg-auto" href="#" aria-label="Skillpark">
                            <img class="brand" src="/images/logo/biglogo.svg" alt="Logo">
                        </a>
                        <p class="small text-muted mb-0 mx-auto">&copy; Skillpark Inc. 2020.</p>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 ml-lg-auto mb-5 mb-lg-0">
                    <h5>Registration</h5>

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
                            <a class="nav-link" href="">
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
                                    <img class="dropdown-item-icon" src="/vendor/flag-icon-css/flags/4x3/us.svg"
                                        alt="English">
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
                                                        <img class="max-w-3rem mr-1" src="/images/svg/np.svg"
                                                            alt="Nepal Flag">
                                                        नेपाली
                                                    </a>
                                                    <a class="nav-link active " href="/lang/en">
                                                        <img class="max-w-3rem mr-1"
                                                            src="/vendor/flag-icon-css/flags/4x3/us.svg"
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
    <script src="/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
    <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="/vendor/select2/dist/js/select2.full.min.js"></script>
    <script src="/vendor/hs-step-form/dist/hs-step-form.min.js"></script>

    <!-- JS Skillpark -->
    <script src="/js/hs.core.js"></script>
    <script src="/js/hs.validation.js"></script>
    <script src="/js/hs.mask.js"></script>
    <script src="/js/hs.select2.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {

            $("#exampleModalTopCover").modal('show');

      // initialization of header
      var header = new HSHeader($('#header')).init();

        // initialization of step form
        $('.js-step-form').each(function () {
        var stepForm = new HSStepForm($(this)).init();
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

    // initialization of select2
    $('.js-custom-select').each(function () {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
        $('.js-custom-select-multiple').select2({
        placeholder: 'Select options',
        width: '100%',
      maximumSelectionLength: 3,
      });
    });

      // initialization of masked input
      $('.js-masked-input').each(function () {
        var mask = $.HSCore.components.HSMask.init($(this));
      });

      // initialization of file attach
      $('.js-file-attach').each(function () {
        var customFile = new HSFileAttach($(this)).init();
      });
      
  });
    </script>

</body>

</html>