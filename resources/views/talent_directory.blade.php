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
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('argon/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('argon/img/favicon.png') }}">
    <title>Talent Directory</title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ asset('argon/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('argon/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('argon/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('argon/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('argon/css/argon-design-system.css?v=1.2.2') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="{{ asset('css/custom/brand_slider.css') }}">
    <link rel="icon" href="{{ asset('/argon/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/argon/vendor/nucleo/css/nucleo.css') }}" type="text/css)}}">
    <link rel="stylesheet" href="{{ asset('/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('/argon/css/argon.css?v=1.1.0" type="text/css') }}">

</head>

<body class="@yield('class')">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-dark bg-default py-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('argon/img/brand/insidecyan-white.png') }}">
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
                                {{-- <img src="{{ asset('argon/img/brand/blue.png') }}">
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
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="btn btn-info" href="{{ route('login') }}">
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
            <form class="navbar-search navbar-search-argon form-inline col col-sm-3" id="navbar-search-main">
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
                        <img class="card-img" src="img/talent-alex.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>I Gede Pasek Punia Atmaja</h2>
                        <p><i class="ni ni-circle-08"></i> Developer | 21 Male</p>
                        <p><i class="ni ni-pin-3"></i> Pemalang, Indonesia</p>
                        <a href="{{ route('student_profile_id', 1) }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="img/talent-devi.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Devi Novitasari</h2>
                        <p><i class="ni ni-circle-08"></i> Model | 19 Female</p>
                        <p><i class="ni ni-pin-3"></i> Bandung, Indonesia</p>
                        <a href="{{ route('student_profile_id', 2) }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="img/talent-tama.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Robertus Rotama Marbun</h2>
                        <p><i class="ni ni-circle-08"></i> Software Engineer | 20 Male</p>
                        <p><i class="ni ni-pin-3"></i> Subang, Indonesia</p>
                        <a href="{{ route('student_profile_id', 3) }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="img/talent-anggie.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Ananda Anggie Nur Aini</h2>
                        <p><i class="ni ni-circle-08"></i> Makeup Artist | 21 Female</p>
                        <p><i class="ni ni-pin-3"></i> Surabaya, Indonesia</p>
                        <a href="{{ route('student_profile_id', 4) }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="img/talent-rico.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Rico Kasdim</h2>
                        <p><i class="ni ni-circle-08"></i> Product Designer | 21 Male</p>
                        <p><i class="ni ni-pin-3"></i> Jakarta, Indonesia</p>
                        <a href="{{ route('student_profile_id', 5) }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="img/talent-nanda.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Nanda Arfan Hakim</h2>
                        <p><i class="ni ni-circle-08"></i> Photograper | 21 Male</p>
                        <p><i class="ni ni-pin-3"></i> Bandung, Indonesia</p>
                        <a href="{{ route('student_profile_id', 6) }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="img/talent-elora.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>Elora Azalea</h2>
                        <p><i class="ni ni-circle-08"></i> Model | 21 Female</p>
                        <p><i class="ni ni-pin-3"></i> Bandung, Indonesia</p>
                        <a href="{{ route('student_profile_id', 7) }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>
                        <div class="col-md-3">
                <div class="card" style="width: 22rem;">
                    <div class="card-header">
                        <img class="card-img" src="img/talent-john.jpg"
                            style="width:300px; height: 300px" alt="Card image cap">
                    </div>
                    <div class="card-body text-default">
                        <h2>John Doe</h2>
                        <p><i class="ni ni-circle-08"></i> Guitarist | 23 Male</p>
                        <p><i class="ni ni-pin-3"></i> Bandung, Indonesia</p>
                        <a href="{{ route('student_profile_id', 8) }}" class="btn btn-primary btn-sm">See detail</a>
                    </div>
                </div>
            </div>


            @yield('body_content')

            <!--   Core JS Files   -->
            <script src="{{ asset('argon/js/core/jquery.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('argon/js/core/popper.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('argon/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('argon/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
            <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
            <script src="{{ asset('argon/js/plugins/bootstrap-switch.js') }}"></script>
            <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
            <script src="{{ asset('argon/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('argon/js/plugins/moment.min.js') }}"></script>
            <script src="{{ asset('argon/js/plugins/datetimepicker.js') }}" type="text/javascript"></script>
            <script src="{{ asset('argon/js/plugins/bootstrap-datepicker.min.js') }}"></script>
            <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
            <!--  Google Maps Plugin    -->
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
            <script src="{{ asset('argon/js/argon-design-system.min.js?v=1.2.2') }}" type="text/javascript">
            </script>
            <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
            <script src="{{ asset('js/custom/brand_slider.js') }}"></script>
            <script>
                window.TrackJS &&
                    TrackJS.install({
                        token: "ee6fab19c5a04ac1a32a645abde4613a",
                        application: "argon-design-system-pro"
                    });

            </script>
</body>

</html>
