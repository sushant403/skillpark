@extends('layouts.security')

@section('content')
<!-- Hero Section -->
<div class="d-lg-flex">
    <div class="container d-lg-flex align-items-lg-center vh-lg-100 space-bottom-1 space-top-3 space-bottom-lg-3 space-lg-4">
      <div class="row justify-content-lg-between align-items-lg-center w-100 mt-lg-9">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img class="img-fluid" src="/images/svg/components/relaxing-man.svg" alt="SVG Illustration">
        </div>
  
        <div class="col-lg-5">
          <!-- Title -->
          <div class="mb-4">
            <h1>We're coming soon.</h1>
            <p>Our website is under construction. We'll be here soon with our new awesome site, subscribe to be notified.</p>
          </div>
          <!-- End Title -->
  
          <!-- Countdown -->
          <div class="js-countdown row mb-5"
               data-hs-countdown-options='{
                 "endDate": "2020/11/30"
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
              <input type="text" class="form-control" name="name" id="subscribeSrEmail" placeholder="Your email" aria-label="Your email" aria-describedby="subscribeEmailButton" required
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

  <!-- JS Implementing Plugins -->
<script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>

<!-- JS Front -->
<script src="/js/hs.validation.js"></script>
<script src="/js/hs.countdown.js"></script>

< <script>
    $(document).on('ready', function () {
      // initialization of header
      var header = new HSHeader($('#header')).init();

      // initialization of form validation
      $('.js-validate').each(function () {
        var validation = $.HSCore.components.HSValidation.init($(this));
      });

      // initialization of countdowns
      $('.js-countdown').each(function () {
        var countdown = $.HSCore.components.HSCountdown.init($(this));
      });

      // initialization scroll to in overflowed container
      var scrollToInOverflowedContainerNav = new HSScrollToInOverflowedContainer($('.hs-sidebar-sticky'), {
        targetEl: "#snippetsSidebarNav .hs-sidebar-item.active"
      }).init();
    });

    $(window).on('load', function () {
      // initialization of autocomplet
      $.HSCore.components.HSLocalSearchAutocomplete.init('.js-hs-docs-search');
    });
  </script>

@endsection