<!doctype html>
<html lang="en">

<head>
    <title>My Job Feed</title>
    <link rel="icon" type="image/png" href="images/titlelogo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
</head>

<body class="gray" style="background-color: #f2f2f2;">

    <!-- Wrapper -->
    <div id="wrapper">

        <header id="header-container" class="fullwidth">

            <!-- Header -->
            <div id="header">
                <div class="container" style="padding-right:130px;">

                    <!-- Left Side Content -->
                    <div class="left-side">

                        <!-- Logo -->
                        <div id="logo" style="border: none;">
                            <a href=" {{ url('home')}}"><img src="images/logo.png" alt=""></a>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation" style="float: right;">
                            <ul id="responsive" style="font-weight: 600;">
                                <li>
                                    <a href="" class="current">FIND WORK</a>
                                </li>

                                <li>
                                    <a href="">MY JOBS</a>
                                </li>

                                <li>
                                    <a href="">REPORTS</a>
                                </li>

                                <li>
                                    <a href="">HELP <i class="icon-line-awesome-question-circle"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>

                    </div>
                    <div class="right-side">


                        <div class="header-widget hide-on-mobile" style="padding:0 5px;">

                            <!-- Messages -->
                            <div class="header-notifications">


                                <div class="header-notifications-trigger">
                                    <a href="#"><i class="icon-feather-message-square"></i><span>1</span></a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">

                                    <div class="header-notifications-headline">
                                        <h4>Messages</h4>
                                        <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
                                            <i class="icon-feather-check-square"></i>
                                        </button>
                                    </div>

                                    <div class="header-notifications-content">
                                        <div class="header-notifications-scroll" data-simplebar>
                                            <ul>
                                                <!-- Notification -->
                                                <li class="notifications-not-read">
                                                    <a href="">
                                                        <span class="notification-avatar status-online"><img alt="{{Auth::user()->name}}" src="{{ auth()->user()->avatar }}"></span>
                                                        <div class="notification-text">
                                                            <strong>Client</strong>
                                                            <p class="notification-msg-text">Thanks for reaching out.
                                                                I'm quite busy right now on many...</p>
                                                            <span class="color">4 hours ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a href="" class="header-notifications-button ripple-effect button-sliding-icon">View All
                                        Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="header-widget">

                            <!-- Messages -->
                            <div class="header-notifications user-menu">
                                <div class="header-notifications-trigger">
                                    <a href="#">
                                        <div class="user-avatar status-online"><img alt="{{Auth::user()->name}}" src="{{ auth()->user()->avatar }}"></div>
                                    </a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown" style="width: 350px;">

                                    <!-- User Status -->
                                    <div class="user-status">

                                        <!-- User Name / Avatar -->
                                        <a href="">
                                            <div class="user-details">
                                                <div class="user-avatar status-online"><img alt="{{Auth::user()->name}}" src="{{ auth()->user()->avatar }}"></div>
                                                <div class="user-name">
                                                    {{Auth::user()->name}}<span>Freelancer</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- User Status Switcher -->
                                        <div class="status-switch" id="snackbar-user-status">
                                            <label class="user-online current-status">Online</label>
                                            <label class="user-invisible">Invisible</label>
                                            <!-- Status Indicator -->
                                            <span class="status-indicator" aria-hidden="true"></span>
                                        </div>
                                    </div>

                                    <ul class="user-menu-small-nav" style="font-size: 18px;">
                                        <li><a href="{{ url('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                        <li><a href="{{ url('settings')}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i>
                                                Logout</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <span class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </span>

                    </div>

                </div>
            </div>
        </header>

        <!-- Dashboard Container -->
        <div class="dashboard-container">

            <!-- Dashboard Sidebar
	 ================================================== -->
            <div class="dashboard-sidebar">
                <div class="dashboard-sidebar-inner" data-simplebar>
                    <div class="dashboard-nav-container">

                        <!-- Responsive Navigation Trigger -->
                        <a href="#" class="dashboard-responsive-nav-trigger">
                            <span class="hamburger hamburger--collapse">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </span>
                            <span class="trigger-title">Dashboard Navigation</span>
                        </a>

                        <!-- Navigation -->
                        <div class="dashboard-nav">
                            <div class="dashboard-nav-inner">
                                <ul data-submenu-title="Start">
                                    <li class="{{ (request()->is('home*')) ? 'active' : '' }}"><a href="{{ url('home') }}"><i class="icon-material-outline-home"></i> My
                                            Feed</a></li>
                                    <li class="{{ (request()->is('recommended*')) ? 'active' : '' }}"><a href="{{ url('home') }}"><i class="icon-material-outline-question-answer"></i> Recommended <span class="nav-tag">6</span></a></li>
                                </ul>

                                <ul data-submenu-title="Organize and Manage">
                                    <li class="{{ (request()->is('task*')) ? 'active' : '' }}"><a href=" #"><i class="icon-material-outline-assignment"></i> Tasks</a>
                                        <ul>
                                            <li><a href="">My Tasks <span class="nav-tag">2</span></a></li>
                                            <li><a href="{{ url('post-project') }}">Post Proposal</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul data-submenu-title="Account">

                                    <li><a href="{{ url('dashboard') }}"><i class="icon-material-outline-dashboard"></i>
                                            Dashboard</a></li>
                                    <li><a href="{{ url('settings') }}"><i class="icon-material-outline-settings"></i>
                                            Settings</a></li>

                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i>
                                            Logout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </div>
                        <!-- Navigation / End -->

                    </div>
                </div>
            </div>

            <div class="dashboard-content-container" data-simplebar>
                <div class="dashboard-content-inner">

                    @yield('content')

                </div>
            </div>

        </div>
    </div>


    <script>
        document.title = '{{ Auth::user()->name }} | Task';
    </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/mmenu.min.js"></script>
    <script src="js/tippy.all.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/snackbar.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
        // Snackbar for user status switcher
        $('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: "Dismiss",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });
    </script>

</body>

</html>