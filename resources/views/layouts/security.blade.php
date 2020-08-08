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

    <!-- CSS Skillpark Template -->
    <link rel="stylesheet" href="/css/theme.css">
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="header header-box-shadow-on-scroll header-sticky-top header-show-hide"
        data-hs-header-options='{
   "fixMoment": 600,
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
                                @guest
                                <li class="navbar-nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">{{ __('nepali.Login') }}</a>
                                </li>

                                <li class="navbar-nav-last-item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('register') }}">
                                        {{ __('nepali.Join') }}
                                    </a>
                                </li>
                                @else
                                <li class="navbar-nav-last-item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('hoe') }}">
                                        {{ __('nepali.Dashboard') }}
                                    </a>
                                </li>
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
    <footer class="container space-2 text-center">
        <!-- Logo -->
        <a class="d-inline-flex align-items-center mb-3" href="/" aria-label="Skillpark">
            <img class="brand" src="/images/logo/biglogo.svg" alt="Logo">
        </a>
        <!-- End Logo -->

        <p class="font-size-1">&copy; Skillpark Inc. 2020. All rights reserved.</p>

        <!-- Social Networks -->
        <ul class="list-inline mb-0">
            <li class="list-inline-item mb-2 mb-sm-0">
                <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="list-inline-item mb-2 mb-sm-0">
                <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#">
                    <i class="fab fa-github"></i>
                </a>
            </li>
            <li class="list-inline-item mb-2 mb-sm-0">
                <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item mb-2 mb-sm-0">
                <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        </ul>
        <!-- End Social Networks -->
    </footer>
    <!-- ========== END FOOTER ========== -->
    <!-- JS Global Compulsory -->
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- JS Skillpark -->
    <script src="/js/hs.core.js"></script>
    <script src="/js/hs.validation.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
      // initialization of header
      var header = new HSHeader($('#header')).init();

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
    });
    </script>

</body>

</html>