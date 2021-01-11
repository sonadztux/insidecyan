<!--
=========================================================
* Argon Design System - v1.2.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('light/img/favicon.png') }}">
    <title>@yield('title') - InsideCyan</title> 
        
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ asset('light/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('light/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('light/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('light/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('light/css/argon-design-system.css?v=1.2.2') }}" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="{{ asset('light/css/custom/brand_slider.css') }}">

</head>

<body class="@yield('class')">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('img/insidecyan-white.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="{{ route('index') }}">
                                {{-- <img src="{{ asset('light/img/brand/blue.png') }}"> --}}
                                InsideCyan
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('talent.directory') }}">Talent Directory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('job.index') }}">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('event.index') }}">Event</a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="btn btn-info" href="{{ route('login.index') }}">
                            <span class="nav-link-inner--text">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-neutral" href="{{ route('register') }}">
                            <span class="nav-link-inner--text">Sign Up</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

@yield('body_content')

<!--   Core JS Files   -->
<script src="{{ asset('light/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('light/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('light/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('light/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('light/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('light/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('light/js/plugins/moment.min.js') }}"></script>
<script src="{{ asset('light/js/plugins/datetimepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('light/js/plugins/bootstrap-datepicker.min.js') }}"></script>
<!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="{{ asset('light/js/argon-design-system.min.js?v=1.2.2') }}" type="text/javascript"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="{{ asset('light/js/custom/brands_slider.js') }}"></script>
<script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-design-system-pro"
        });

</script>
</body>

</html>
