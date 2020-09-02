<!DOCTYPE html>
<html lang="en">

<head>
  <title>Coming Soon | Skillpark Inc.</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="/vendor/font-awesome/css/all.min.css">

  <!-- CSS Skillpark Template -->
  <link rel="stylesheet" href="/css/theme.css">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-bg-transparent header-abs-top py-3">
    <div class="header-section">
      <div id="logoAndNav" class="container">
        <nav class="navbar">
          <a class="navbar-brand" href="/" aria-label="Skillpark">
            <img src="/images/logo/biglogo.svg" alt="Logo">
          </a>
          <!-- Button -->
          <div class="hs-unfold ml-auto">
            <a class="js-hs-unfold-invoker btn btn-sm btn-primary dropdown-toggle" href="javascript:;"
              data-hs-unfold-options='{
                "target": "#getUpdatesDropdown",
                "type": "css-animation"
               }'>
              Get Updates
            </a>

            <div id="getUpdatesDropdown" class="hs-unfold-content dropdown-menu dropdown-menu-right"
              style="min-width: 250px !important;">
              <a class="dropdown-item text-wrap" href="#">
                <div class="media">
                  <i class="fas fa-envelope-open-text text-primary font-size-2 mt-2 mr-3"></i>
                  <div class="media-body">
                    <span class="font-weight-bold">Email</span>
                    <small class="d-block text-body">Message delivered right into your inbox.</small>
                  </div>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-wrap" href="#">
                <div class="media">
                  <i class="fab fa-slack text-primary font-size-2 mt-2 mr-3"></i>
                  <div class="media-body">
                    <span class="font-weight-bold">Slack</span>
                    <small class="d-block text-body">Posted to a live #channel of your choice.</small>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- End Button -->
        </nav>
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-lg-flex">
      <div
        class="container d-lg-flex align-items-lg-center vh-lg-100 space-bottom-1 space-top-3 space-bottom-lg-2 space-lg-0">
        <div class="row justify-content-lg-between align-items-lg-center w-100 mt-lg-9">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img class="img-fluid" src="/images/svg/illustrations/maintenance-mode.svg" alt="SVG Illustration">
          </div>

          <div class="col-lg-5">
            <!-- Title -->
            <div class="mb-4">
              <h2>We're just tuning up a few things.</h2>
              <p>We apologize for the inconvenience but Skillpark Inc. is currently undergoing planned maintenance. Stay
                tuned!</p>
            </div>
            <!-- End Title -->

            <!-- Countdown -->
            <div class="js-countdown row mb-5" data-hs-countdown-options='{
                   "endDate": "2020/9/30"
                 }'>
              <div class="col-3">
                <span class="js-cd-days font-size-3 text-primary font-weight-bold mb-0"></span>
                <span class="h5 d-block mb-0">Days</span>
              </div>
              <div class="col-3">
                <span class="js-cd-hours font-size-3 text-primary font-weight-bold mb-0"></span>
                <span class="h5 d-block mb-0">Hours</span>
              </div>
              <div class="col-3">
                <span class="js-cd-minutes font-size-3 text-primary font-weight-bold mb-0"></span>
                <span class="h5 d-block mb-0">Mins</span>
              </div>
              <div class="col-3">
                <span class="js-cd-seconds font-size-3 text-primary font-weight-bold mb-0"></span>
                <span class="h5 d-block mb-0">Secs</span>
              </div>
            </div>
            <!-- End Countdown -->

            <!-- Input -->
            <form class="js-validate js-form-message">
              <label class="sr-only" for="subscribeSrEmail">Your email</label>
              <div class="input-group">
                <input type="text" class="form-control" name="name" id="subscribeSrEmail" placeholder="Your email"
                  aria-label="Your email" aria-describedby="subscribeEmailButton" required
                  data-msg="Please enter a valid email address.">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary" id="subscribeEmailButton">Subscribe</button>
                </div>
              </div>
            </form>
            <!-- End Input -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="position-lg-absolute right-lg-0 bottom-lg-0 left-lg-0">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center space-1">
        <!-- Copyright -->
        <p class="small text-muted mb-0">&copy; Skillpark Inc. 2020.</p>
        <!-- End Copyright -->

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
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- JS Global Compulsory -->
  <script src="/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
  <script src="/vendor/hs-unfold/dist/hs-unfold.min.js"></script>

  <!-- JS Skillpark -->
  <script src="/js/hs.core.js"></script>
  <script src="/js/hs.validation.js"></script>
  <script src="/js/hs.countdown.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of form validation
      $('.js-validate').each(function () {
        var validation = $.HSCore.components.HSValidation.init($(this));
      });

      // initialization of unfold
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

      // initialization of countdowns
      $('.js-countdown').each(function () {
        var countdown = $.HSCore.components.HSCountdown.init($(this));
      });
    });
  </script>

</body>

</html>