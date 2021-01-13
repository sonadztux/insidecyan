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
    <title>Talent Directory</title>

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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="{{ asset('light/css/custom/brand_slider.css') }}">
    <link rel="icon" href="{{ asset('/light/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/light/vendor/nucleo/css/nucleo.css') }}" type="text/css)}}">
    <link rel="stylesheet" href="{{ asset('/light/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('/light/css/argon.css?v=1.1.0" type="text/css') }}">

</head>

<body class="@yield('class')">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-dark bg-default py-2">
        <div class="container-fluid">
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
                                {{-- <img src="{{ asset('light/img/brand/blue.png') }}">
                                --}}
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
                        <a class="nav-link active" href="{{ route('talent.directory') }}">Talent Directory</a>
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

    {{-- body --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2 class="display-3" style="margin-top: 20px; margin-left: 20px">Talent Directory</h2>
            </div>
            <div class="form-group form-inline mt-4 col-md-auto">
                <select class="form-control" id="gender" name="gender">
                    <option>All Specialization</option>
                    <option>Music</option>
                    <option>Programming</option>
                    <option>Art</option>
                    <option>Other</option>
                </select>
            </div>
            <form class="navbar-search navbar-search-light form-inline col col-sm-3" id="navbar-search-main">
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative input-group-merge">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                </div>
                <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                    aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </form>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row row-cols-4">
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="http://127.0.0.1:8000/light/img/faces/team-4.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Nanda Arfan Hakim</h2>
                        <p><i class="ni ni-circle-08"></i> Developer | 21 Male</p>
                        <p><i class="ni ni-pin-3"></i> Pemalang, Indonesia</p>
                        <a href="{{ route('profile.index') }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="http://127.0.0.1:8000/light/img/faces/team-4.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Nanda Arfan Hakim</h2>
                        <p><i class="ni ni-circle-08"></i> Developer | 21 Male</p>
                        <p><i class="ni ni-pin-3"></i> Pemalang, Indonesia</p>
                        <a href="{{ route('profile.index') }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="http://127.0.0.1:8000/light/img/faces/team-4.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Nanda Arfan Hakim</h2>
                        <p><i class="ni ni-circle-08"></i> Developer | 21 Male</p>
                        <p><i class="ni ni-pin-3"></i> Pemalang, Indonesia</p>
                        <a href="{{ route('profile.index') }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="http://127.0.0.1:8000/light/img/faces/team-4.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Nanda Arfan Hakim</h2>
                        <p><i class="ni ni-circle-08"></i> Developer | 21 Male</p>
                        <p><i class="ni ni-pin-3"></i> Pemalang, Indonesia</p>
                        <a href="{{ route('profile.index') }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="http://127.0.0.1:8000/light/img/faces/team-4.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Nanda Arfan Hakim</h2>
                        <p><i class="ni ni-circle-08"></i> Developer | 21 Male</p>
                        <p><i class="ni ni-pin-3"></i> Pemalang, Indonesia</p>
                        <a href="{{ route('profile.index') }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>


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
            <script src="{{ asset('light/js/argon-design-system.min.js?v=1.2.2') }}" type="text/javascript">
            </script>
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
