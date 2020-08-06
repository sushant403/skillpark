<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Skillpark Inc.
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Skillpark Inc.">
    <meta name="keywords"
        content="bootstrap, business, consulting, heiring space, services, dashboard, multipurpose, software, landing, html5, css3, javascript">
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
    <!-- Vendor Styles-->
    <link rel="stylesheet" href="/vendor/font-awesome/css/all.min.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="/css/theme.css">
    <link rel="stylesheet" media="screen" href="/css/theme.min.css">
</head>
<!-- Body-->

<body>

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
                    <a class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block"
                        href="{{ route('home') }}">Dashboard</a>
                    @endguest
                </div>
            </div>
        </header>

        @yield('content')

    </main>

    <!-- Footer-->
    <footer class="cs-footer container pt-5">
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
    <script src="/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <!-- Main theme script-->
    <script src="/js/theme.js"></script>
    <script src="/js/theme.min.js"></script>
</body>

</html>