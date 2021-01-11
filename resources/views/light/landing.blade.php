@extends('light/base')

@section('title', 'Start Flexing Your Awesome Talent')
@section('class', 'landing-page')
@section('body_content')

<div class="wrapper">
    <div class="section section-hero section-shaped">
        <div class="shape shape-style-3 shape-default">
            <span class="span-150"></span>
            <span class="span-50"></span>
            <span class="span-50"></span>
            <span class="span-75"></span>
            <span class="span-100"></span>
            <span class="span-75"></span>
            <span class="span-50"></span>
            <span class="span-100"></span>
            <span class="span-50"></span>
            <span class="span-100"></span>
        </div>
        <div class="page-header">
            <div class="container shape-container d-flex align-items-center py-lg">
                <div class="col px-0">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h1 class="text-white display-1">Are you a talented student?</h1>
                            <h2 class="display-4 font-weight-normal text-white">Go start flexing your awesome talent
                                right now!</h2>
                            <div class="btn-wrapper mt-4">
                                <a href="{{ route('register') }}" class="btn btn-default btn-icon mt-3 mb-sm-0">
                                    <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                                    <span class="btn-inner--text">Start Flexing</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <div class="section features-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="info info-horizontal info-hover-primary">
                        <div class="description pl-4">
                            <h5 class="title">For Students</h5>
                            <p>The time is now for it to be okay to be great. People in this world shun people for
                                being great. For being a bright color. For standing out. But the time is now.</p>
                            <a href="#" class="text-info">Learn more</a>
                        </div>
                    </div>
                    <div class="info info-horizontal info-hover-primary mt-5">
                        <div class="description pl-4">
                            <h5 class="title">For Lectures</h5>
                            <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.
                                That’s my skill. I’m not really specifically talented at anything except for the
                                ability to learn.</p>
                            <a href="#" class="text-info">Learn more</a>
                        </div>
                    </div>
                    <div class="info info-horizontal info-hover-primary mt-5">
                        <div class="description pl-4">
                            <h5 class="title">For Companies</h5>
                            <p>That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because you
                                can’t learn anything from a compliment. If everything I did failed - which it
                                doesn't.</p>
                            <a href="#" class="text-info">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-10 mx-md-auto">
                    <img class="ml-lg-5" src="{{ asset('light/img/ill/ill.png') }}" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="features-1">
        <div class="row bg-secondary">
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">Talent Directory</span>
                        <h3 class="display-3">List of Talented Students</h3>
                        <p class="lead">Awesome people whos ready to collaborate and make awesome work.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/talent-alex.jpg') }}" class="card-img-top"
                                alt="Talent I Gede Pasek Punia Atmaja" height="250px">
                            <div class="card-body">
                                <h6 class="card-title">I Gede Pasek Punia Atmaja</h6>
                                <p class="card-text">
                                    Business Analyst | 20 Male<br>
                                    Bali, Indonesia
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-default">See details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/talent-devi.jpg') }}" class="card-img-top"
                                alt="Talent Devi Novitasari" height="250px">
                            <div class="card-body">
                                <h6 class="card-title">Devi Novitasari</h6>
                                <p class="card-text">
                                    Model | 19 Female<br>
                                    Bandung, Indonesia
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-default">See details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/talent-tama.jpg') }}" class="card-img-top"
                                alt="Talent Robertus Rotama Marbun" height="250px">
                            <div class="card-body">
                                <h6 class="card-title">Robertus Rotama Marbun</h6>
                                <p class="card-text">
                                    Software Engineer | 20 Male<br>
                                    Jakarta, Indonesia
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-default">See details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto text-center">
                        <h3 class="display-3">Want to see more?</h3>
                        <a href="{{ route('talent.directory') }}" class="btn btn-default">Go to Talent Directory</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features-1">
        <div class="brands">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-danger badge-pill mb-3">Companies</span>
                        <h3 class="display-3">Companies Partner</h3>
                        <p class="lead">Awesome company that ready to collaborate and see your awesome talent.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="brands_slider_container">
                            <div class="owl-carousel owl-theme brands_slider">
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_1.jpg"
                                            alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_2.jpg"
                                            alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_4.jpg"
                                            alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_5.jpg"
                                            alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_3.jpg"
                                            alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_6.jpg"
                                            alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_7.jpg"
                                            alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_8.jpg"
                                            alt=""></div>
                                </div>
                            </div> <!-- Brands Slider Navigation -->
                            <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br /><br />
    <footer class="footer">
        <div class="container">
            <div class="row row-grid align-items-center mb-5">
                <div class="col-lg-6">
                    <h3 class="text-info font-weight-light mb-2">Thank you for supporting us!</h3>
                    <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
                </div>
                <div class="col-lg-6 text-lg-center btn-wrapper">
                    <button target="_blank" href="https://twitter.com/creativetim" rel="nofollow"
                        class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip"
                        data-original-title="Follow us">
                        <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
                    </button>
                    <button target="_blank" href="https://www.facebook.com/CreativeTim/" rel="nofollow"
                        class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip"
                        data-original-title="Like us">
                        <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                    </button>
                    <button target="_blank" href="https://dribbble.com/creativetim" rel="nofollow"
                        class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip"
                        data-original-title="Follow us">
                        <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
                    </button>
                    <button target="_blank" href="https://github.com/creativetimofficial" rel="nofollow"
                        class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip"
                        data-original-title="Star on Github">
                        <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                    </button>
                </div>
            </div>
            <hr>
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; 2020 <a href="" target="_blank" class="text-info">Creative Tim</a>.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-footer justify-content-end">
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
