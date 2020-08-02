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
    <link rel="icon" type="image/png" href="/images/logo/block-logo.svg">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <style>
        .fas,
        .fa {
            padding: 3%;
        }

        .fab {
            font-size: 14px;
        }

        .btn-block {
            font-size: 13px !important;
            padding: 10px;
        }

        .btn-block:hover {
            opacity: 0.9;
        }

        .col-6 {
            padding: 5px 5px 0 5px !important;
        }

        .browse-section {
            padding-top: 20px;
        }

        a {
            color: inherit;
        }

        a:hover {
            color: #1dc8cc
        }

        .form-control {
            font-size: 13px;
        }

        li {
            border: none !important;
        }

        .btn-outline-google {
            border-color: #ea4335;
            background-color: #ea4335;
            color: #fff !important;
        }

        .btn-outline-twitter {
            border-color: #1da1f2;
            background-color: #1da1f2;
            color: #fff !important;
        }

        .btn-outline-github {
            border-color: #24292e;
            background-color: #24292e;
            color: #fff !important;
        }

        .btn-outline-facebook {
            border-color: #0d8df1;
            background-color: #0d8df1;
            color: #fff !important;
        }

        @media (max-width: 1200px) {
            .banner {
                display: none;
            }

            .fas,
            .fa {
                padding: 3%;
            }
        }
    </style>
</head>

<body>

    @yield('content')

    <!-- footer Start -->
    <footer class="footer bg-transparent">

        <div class="copy-social my-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright">
                            <i class="far fa-copyright"></i>Copyright 2020 <a href="{{ url('/') }}">Skillpark Inc.</a>. All Right Reserved.
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

    <!-- <script>
        window.oncontextmenu = function() {
            return false;
        }
        $(document).keydown(function(event) {
            if (event.keyCode == 123) {
                return false;
            } else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
                return false;
            }
        });
    </script>
    Scripts js -->
    <script src="/js/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/OwlCarousel/owl.carousel.js"></script>

</body>

</html>