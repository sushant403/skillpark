    <!-- Page loading styles-->
    <style>
        .cs-page-loading {
          position: fixed;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          width: 100%;
          height: 100%;
          -webkit-transition: all .4s .2s ease-in-out;
          transition: all .4s .2s ease-in-out;
          background-color: #fff;
          opacity: 0;
          visibility: hidden;
          z-index: 9999;
        }
        .cs-page-loading.active {
          opacity: 1;
          visibility: visible;
        }
        .cs-page-loading-inner {
          position: absolute;
          top: 50%;
          left: 0;
          width: 100%;
          text-align: center;
          -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
          -webkit-transition: opacity .2s ease-in-out;
          transition: opacity .2s ease-in-out;
          opacity: 0;
        }
        .cs-page-loading.active > .cs-page-loading-inner {
          opacity: 1;
        }
        .cs-page-loading-inner > span {
          display: block;
          font-family: 'Inter', sans-serif;
          font-size: 1rem;
          font-weight: normal;
          color: #737491;
        }
        .cs-page-spinner {
          display: inline-block;
          width: 2.75rem;
          height: 2.75rem;
          margin-bottom: .75rem;
          vertical-align: text-bottom;
          border: .15em solid #1dc8cc;
          border-right-color: transparent;
          border-radius: 50%;
          -webkit-animation: spinner .75s linear infinite;
          animation: spinner .75s linear infinite;
        }
        @-webkit-keyframes spinner {
          100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
        @keyframes spinner {
          100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
        
      </style>
      <!-- Page loading scripts-->
      <script>
        (function () {
          window.onload = function () {
            var preloader = document.querySelector('.cs-page-loading');
            preloader.classList.remove('active');
            setTimeout(function () {
              preloader.remove();
            }, 2000);
          };
        })();
        
      </script>

         <!-- Page loading spinner-->
    <div class="cs-page-loading active">
        <div class="cs-page-loading-inner">
          <div class="cs-page-spinner"></div><span>Loading...</span>
        </div>
      </div>