<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Skillpark Inc. | Hire Expert Freelancers Any Time
    </title>
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
    <link rel="mask-icon" color="#5bbad5" href="/safari-pinned-tab.svg">
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
    <link rel="stylesheet" href="/vendor/aos/dist/aos.css">
    <link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="/css/mover.css">
    <link rel="stylesheet" media="screen" href="/css/style.css">
    <link rel="stylesheet" media="screen" href="/css/theme.css">
    <link rel="stylesheet" media="screen" href="/css/theme.min.css">
</head>
<!-- Body-->
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
                    @guest
                    <a class="nav-link-style font-size-sm text-nowrap" href="{{ route('login') }}"><i
                            class="fa fa-user font-size-xl mr-2"></i>Sign in</a>

                    <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block"
                        href="{{ route('register') }}">Join</a>

                    @else
                    <div class="d-flex align-items-center order-lg-3 ml-lg-auto">
                        <div class="navbar-tool dropdown"><a class="navbar-tool-icon-box"
                                href="{{ url('dashboard') }}"><img class="navbar-tool-icon-box-img"
                                    src="{{ Auth::user()->avatar }}" /></a><a
                                class="navbar-tool-label dropdown-toggle"
                                href="account-profile"><small>Hello,</small>{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-right" style="width: 15rem;">
                                <li><a class="dropdown-item d-flex align-items-center"
                                        href="{{ url('coming-soon') }}"><i
                                            class="fa fa-envelope font-size-base opacity-60 mr-2"></i>Messages<span
                                            class="nav-indicator"></span><span
                                            class="ml-auto font-size-xs text-muted">1</span></a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="{{ url('dashboard') }}"><i
                                            class="fa fa-dashcube font-size-base opacity-60 mr-2"></i>Dashboard<span
                                            class="ml-auto font-size-xs text-muted">34</span></a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="{{ url('settings') }}"><i
                                            class="fa fa-cog font-size-base opacity-60 mr-2"></i>Settings<span
                                            class="ml-auto font-size-xs text-muted">15</span></a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"">
                                <i class=" fa fa-sign-out font-size-base opacity-60 mr-2"></i>Sign out</a></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                    @endguest
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
                                        <a class="dropdown-item" href="">Explore
                                            Skills / Categories</a><a class="dropdown-item" href="">Post a Job</a><a
                                            class="dropdown-item" href="">Advertisement</a></div>
                                    <div class="dropdown-column"><a class="dropdown-item" href="">Creators</a><a
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
                                            href="blog-grid-rs">Networking</a><a class="dropdown-item"
                                            href="blog-grid-ls">Engineering</a><a class="dropdown-item"
                                            href="blog-grid-ns">Data Science & Analytics</a>
                                        <a class="dropdown-item" href="blog-list-rs">Translation</a><a
                                            class="dropdown-item" href="blog-list-ls">Cloud Computing</a><a
                                            class="dropdown-item" href="blog-list-ns">Artificial Intelligence</a><a
                                            class="dropdown-item" href="blog-single-rs">Software Development</a>
                                    </div>
                                    <div class="dropdown-column mb-2 mb-lg-0">
                                        <h5 class="dropdown-header">Design and Creatives</h5><a class="dropdown-item"
                                            href="portfolio-style-1">UX Design</a><a class="dropdown-item"
                                            href="portfolio-style-2">Video Designing</a><a class="dropdown-item"
                                            href="portfolio-style-3">Graphic Design</a>
                                        <a class="dropdown-item" href="portfolio-single-side-gallery-grid">Art &
                                            illustration
                                        </a><a class="dropdown-item" href="portfolio-single-side-gallery-list">Audio
                                            Production</a><a class="dropdown-item"
                                            href="portfolio-single-carousel">Photography
                                        </a>
                                        <a class="dropdown-item" href="portfolio-single-wide-gallery">Motion
                                            Graphics</a>
                                    </div>
                                    <div class="dropdown-column mb-2 mb-lg-0">
                                        <h5 class="dropdown-header">Sales and Analytics</h5><a class="dropdown-item"
                                            href="">SEO</a><a class="dropdown-item" href="">Email Automation</a><a
                                            class="dropdown-item" href="">Public Relation</a><a class="dropdown-item"
                                            href="">Digital Marketing</a><a class="dropdown-item" href="">Community
                                            Management</a><a class="dropdown-item" href="">Market Research</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                    data-toggle="dropdown">Explore</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-toggle="dropdown">Popular Skills</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="">Skillpark End Developer</a></li>
                                            <li><a class="dropdown-item" href="">Back End Developer</a></li>
                                            <li><a class="dropdown-item" href="">Full Stack Developer</a>
                                            </li>
                                            <li><a class="dropdown-item" href="">Python</a>
                                            </li>
                                            <li><a class="dropdown-item" href="">C#</a></li>
                                            <li><a class="dropdown-item" href="">PHP</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="">Freelancers</a>
                                    </li>
                                    <li><a class="dropdown-item" href="">Companies</a></li>
                                    <li><a class="dropdown-item" href="">Trending Jobs</a></li>
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
        <div class="py-4"></div>

        @yield('content')

    </main>

    <!-- Footer-->
    <footer class="cs-footer container pt-5">
        <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-4 mb-5 text-center text-md-left">
                <h2 class="mb-4">Contact Us</h2><a class="btn btn-success mb-4" href="#"><i
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

    <!-- Vendor scripts: js libraries and plugins-->
    <script src="/vendor/jquery/dist/jquery.slim.min.js"></script>

  <!-- JS Global Compulsory -->
  <script src="/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
  <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="/vendor/slick-carousel/slick/slick.js"></script>
  <script src="/vendor/semantic/semantic.min.js"></script>

  <!-- JS Skillpark -->
  <script src="/js/theme.min.js"></script>
  <script src="/js/theme.min.js"></script>
  <script src="/js/hs.core.js"></script>
  <script src="/js/hs.validation.js"></script>
  <script src="/js/hs.slick-carousel.js"></script>
  
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

      // initialization of unfold
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

      // initialization of show animations
      $('.js-animation-link').each(function () {
        var showAnimation = new HSShowAnimation($(this)).init();
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

      // initialization of leaflet
      $('#map').each(function () {
        var leaflet = $.HSCore.components.HSLeaflet.init($(this)[0]);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          id: 'mapbox/light-v9'
        }).addTo(leaflet);
      });

      // initialization of go to
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });
  </script>

</body>

</html>