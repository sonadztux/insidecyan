<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Edit Profile</title>
    <!-- Favicon -->

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

<body>

    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
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
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center ml-md-auto">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ni ni-bell-55"></i>
                            </a>
                            <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <div class="media align-items-center">
                                            <span class="avatar avatar-sm rounded-circle">
                                                <img alt="Image placeholder"
                                                    src="{{ asset('/light/img/theme/team-4.jpg') }}">
                                            </span>
                                            <div class="media-body ml-2 d-none d-lg-block">
                                                <span class="mb-0 text-sm  font-weight-bold">Nanda Arfan</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome!</h6>
                                        </div>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ni ni-single-02"></i>
                                            <span>My profile</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ni ni-settings-gear-65"></i>
                                            <span>Settings</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ni ni-calendar-grid-58"></i>
                                            <span>Activity</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ni ni-support-16"></i>
                                            <span>Support</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ni ni-user-run"></i>
                                            <span class="text-danger">Logout</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center"
            style="min-height: 500px; background-image: url(https://wallpapercave.com/wp/wp7864479.png); background-size: cover; background-position: center top;') }}">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-1"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h1 class="display-2 text-white">Hello Nanda</h1>
                        <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made
                            with your work and manage your projects or assigned tasks</p>
                        <a href="#!" class="btn btn-neutral">Edit profile</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-4 order-xl-2">
                    <div class="card card-profile">
                        <img src="{{ asset('light/img/pages/mohamed.jpg') }}" style="width: auto; height: 300px"
                            class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="http://127.0.0.1:8000/light/img/faces/team-4.jpg"
                                            class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center">
                                        <div>
                                            <span class="heading">22</span>
                                            <span class="description">Connection</span>
                                        </div>
                                        {{-- <div>
                                            <span class="heading">10</span>
                                            <span class="description">Photos</span>
                                        </div>
                                        <div>
                                            <span class="heading">89</span>
                                            <span class="description">Comments</span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5 class="h3">
                                    Nanda Arfan Hakim<span class="font-weight-light">, 27</span>
                                </h5>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>Pemalang, Indonesia
                                </div>
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>Information System | Back End Developer
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>Telkom University
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress track -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <!-- Title -->
                            <h5 class="h3 mb-0">Skills and Hobby</h5>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- List group -->
                            <ul class="list-group list-group-flush list my--3">
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <a href="#" class="avatar rounded-circle">
                                                <img alt="Image placeholder"
                                                    src="{{ asset('/light/img/theme/java.png') }}">
                                            </a>
                                        </div>
                                        <div class="col">
                                             <h5>Java Programming</h5>
                                            <div class="progress progress-xs mb-0">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="90"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <a href="#" class="avatar rounded-circle">
                                                <img alt="Image placeholder"
                                                    src="{{ asset('/light/img/theme/adobe.png') }}">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h5>Adobe Premiere Pro</h5>
                                            <div class="progress progress-xs mb-0">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="80"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                        </div>
                    </div>

                    <!-- CV -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <!-- Title -->
                            <h5 class="h3 mb-0">Curriculum Vitae</h5>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <h5>Give us your best cv!</h5>
                            <form>
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                                  <label class="custom-file-label" for="customFileLang">Select file</label>
                              </div>
                          </form>
                        </div>
                    </div>
                    <!-- Portfolio -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <!-- Title -->
                            <h5 class="h3 mb-0">Portfolio</h5>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <h5>Gallery</h5>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                            src="https://resi.ze-robot.com/dl/ul/ultraviolet-4k-wallpaper-3840%C3%972160.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="https://steamuserimages-a.akamaihd.net/ugc/940586530515504757/CDDE77CB810474E1C07B945E40AE4713141AFD76/"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="https://img.freepik.com/free-photo/cool-geometric-triangular-figure-neon-laser-light-great-backgrounds-wallpapers_181624-9331.jpg?size=626&ext=jpg"
                                            alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-4 text-left mt-2">
                                    <a href="#!" class="btn btn-sm btn-default">Add more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- content kiri --}}
                <div class="col-xl-8 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Edit profile </h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#!" class="btn btn-sm btn-primary">Save Changes</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="username">Username</label>
                                                <input type="text" id="username" class="form-control"
                                                    name="username" placeholder="Username" value="lucky.jesse">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="email">Email
                                                    address</label>
                                                <input type="email" id="email" class="form-control"
                                                    name="email" placeholder="jesse@example.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="firstName">First
                                                    name</label>
                                                <input type="text" id="firstName" class="form-control"
                                                    placeholder="First name" value="Nanda" name="firstName">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="lastName">Last
                                                    name</label>
                                                <input type="text" id="lastName" class="form-control"
                                                    placeholder="Last name" value="Arfan Hakim" name="lastName">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender" name="gender">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="birthdate"
                                                    class="form-control-label">Birthdate</label>
                                                <input class="form-control" type="date"
                                                    name="birthdate" value="2000-11-23" id="birthdate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="address">Address</label>
                                                <input id="address" class="form-control"
                                                    placeholder="Home Address"
                                                    value="Alamat Rumah Nanda"
                                                    type="text" name="address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="city">City</label>
                                                <input type="text" id="city" class="form-control"
                                                    placeholder="City" value="Pemalang" name="city">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="country">Country</label>
                                                <input type="text" id="country" class="form-control"
                                                    placeholder="Country" value="Indonesia" name="country">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="postalCode">Postal
                                                    code</label>
                                                <input type="number" id="postalCode" class="form-control"
                                                    placeholder="Postal code" name="postalCode">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="phoneNumber">Phone Number</label>
                                                <input type="number" id="phoneNumber" class="form-control"
                                                    placeholder="Phone Number" value="08123456789" name="phoneNumber">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="instgram">Instagram Profile</label>
                                                <input type="url" id="instgram" class="form-control"
                                                    placeholder="url" value="www.instagram.com/abc" name="instagram">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="linkedin">Linkedin Profile</label>
                                                <input type="url" id="linkedin" class="form-control"
                                                    placeholder="url" value="www.linkedin.com/abc" name="linkedin">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Description -->
                                <h6 class="heading-small text-muted mb-4">About me</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">About Me</label>
                                        <textarea rows="4" class="form-control"
                                            placeholder="A few words about you ..." name="biography">A beautiful premium dashboard for Bootstrap 4.</textarea>
                                    </div>
                                </div>
                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Specialization</label>
                                        <input type="text"class="form-control"
                                            name="specialization" placeholder="Write down your specialization" name="specialization" value="Back End Developer"></input>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                {{-- Education --}}
                                <h6 class="heading-small text-muted mb-4">Education</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label"
                                                    for="input-education">Institution</label>
                                                <input type="text" id="input-instname" class="form-control"
                                                    placeholder="Institution Name" name="institution"
                                                    value="Telkom University">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-insyear">Entry Year</label>
                                                <input type="text" id="input-instname" class="form-control"
                                                    placeholder="Fill your first year" name="entryYear" value="2018">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-insyear">Major</label>
                                                <input type="text" id="input-major" class="form-control"
                                                    placeholder="Fill your major" name="major"
                                                    value="Information System">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-left">
                                            <a href="#!" class="btn btn-sm btn-default">Add more</a>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                {{-- Experience --}}
                                <h6 class="heading-small text-muted mb-4">Experience</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-education">Title</label>
                                                <input type="text" id="titleExp" class="form-control"
                                                    placeholder="Experience title" name="titleExp" value="President">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-insyear">Company</label>
                                                <input type="text" id="companyExp" class="form-control"
                                                    name="companyExp" placeholder="Company" value="EDE Laboratory">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="startExp" class="form-control-label">Year Start</label>
                                                <input class="form-control" type="date"
                                                    value="2018-11-23" id="startExp" name="startExp">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="endExp" class="form-control-label">Year End</label>
                                                <input class="form-control" type="date" value="2018-11-23" id="endExp"
                                                    name="endExp">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Description</label>
                                                <textarea rows="4" class="form-control"
                                                    placeholder="What's your Contribution"
                                                    name="descExp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur animi recusandae minima. Eaque architecto officia ab natus unde nobis, fuga repudiandae iste, tempore asperiores autem dolores veritatis non facere.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-left">
                                            <a href="#!" class="btn btn-sm btn-default">Add more</a>
                                        </div>
                                    </div>
                                    <hr class="my-4" />
                                </div>
                                {{-- Achivement --}}
                                <h6 class="heading-small text-muted mb-4">Achivement</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-education">Name</label>
                                                <input type="text" id="achivement" class="form-control"
                                                    placeholder="Achivement name" name="nameAch"
                                                    value="SAP Certification">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="titleAch">Title</label>
                                                <input type="text" id="titleAch" class="form-control" name="titleAch"
                                                    placeholder="Company" value="SAP 01 Fundamental">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="startAch" class="form-control-label">Issue Date</label>
                                                <input class="form-control" type="date"
                                                    value="2018-11-23" id="startAch" name="startAch">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="endAch" class="form-control-label">Expiration Date</label>
                                                <input class="form-control" type="date" value="2018-11-23" id="endAch"
                                                    name="endAch">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Description</label>
                                                <textarea rows="4" class="form-control"
                                                    placeholder="What's your Contribution"
                                                    name="descExp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur animi recusandae minima. Eaque architecto officia ab natus unde nobis, fuga repudiandae iste, tempore asperiores autem dolores veritatis non facere.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-left">
                                            <a href="#!" class="btn btn-sm btn-default">Add more</a>
                                        </div>
                                    </div>
                                    <hr class="my-4" />
                                </div>
                                {{-- Organization --}}
                                <h6 class="heading-small text-muted mb-4">Organization</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-education">Name</label>
                                                <input type="text" id="nameOrg" class="form-control"
                                                    placeholder="ORganization name" name="nameOrg"
                                                    value="Daspro Laboratory">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="titleAch">Role</label>
                                                <input type="text" id="titleOrg" class="form-control" name="titleOrg"
                                                    placeholder="Company" value="Practicum Assistant">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="startOrg" class="form-control-label">Start Date</label>
                                                <input class="form-control" type="date"
                                                    value="2018-11-23" id="startOrg" name="startOrg">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="endOrg" class="form-control-label">End Date</label>
                                                <input class="form-control" type="date" value="2018-11-23" id="endOrg"
                                                    name="endOrg">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Description</label>
                                                <textarea rows="4" class="form-control"
                                                    placeholder="What's your Contribution"
                                                    name="descExp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur animi recusandae minima. Eaque architecto officia ab natus unde nobis, fuga repudiandae iste, tempore asperiores autem dolores veritatis non facere.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 text-left">
                                            <a href="#!" class="btn btn-sm btn-default">Add more</a>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('/light/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/light/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/light/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('/light/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('/light/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('/light/js/argon.js?v=1.1.0') }}""></script>
  <!-- Demo JS - remove this in your project -->
  <script src=" {{ asset('/light/js/demo.min.js') }}"></script>
</body>

</html>
