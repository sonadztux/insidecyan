@extends('layouts.base')

@section('title', 'Profile')
@section('class', 'profile-page')
@section('body_content')
    <div class="wrapper">
        <section class="section-profile-cover section-shaped my-0">
            <!-- Circles background -->
            <img class="bg-image" src="{{ asset('argon/img/pages/mohamed.jpg') }}" style="width: 100%;">
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section bg-secondary">
            <div class="container">
                <div class="card card-profile shadow mt--300">
                    <div class="px-4">
                        <div class="row justify-content-left">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <img src="{{ asset('img') . '/' . $data['name'] . '.jpg' }}">
                                </div>
                            </div>
                            <div class="col order-lg-3 text-lg-left alight-self-lg-left mt-3">
                                <div class="card-profile-text">
                                    <h3>{{ $data['name'] }}<span class="font-weight-light">, 21</span></h3>
                                    <div class="h6 font-weight-300">{{ $data['address'] }}, Indonesia</div>
                                    <div class="h6 font-weight-300">Information System | {{ $data['specialization'] }}</div>
                                </div>
                            </div>
                            <div class="order-lg-3 text-lg-right align-self-lg-left mt-2">
                                <div class="card-profile-actions py-10 mt-lg-0">
                                    {{-- <a href="#" class="btn btn-sm btn-info mr-4">Reccomendation</a> --}}
                                    <a href="{{ route('student_edit_profile_view') }}" class="btn btn-sm btn-default float-right" >Edit Profile</a>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 order-lg-1">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">Connection</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Photos</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Comments</span>
                                    </div>
                                </div> --}}
                            </div>
                            {{--
                        </div>
                        <div class="text-center mt-5">
                            <h3>Jessica Jones<span class="font-weight-light">, 27</span></h3>
                            <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Bucharest, Romania</div>
                            <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Solution Manager -
                                Creative Tim Officer</div>
                            <div><i class="ni education_hat mr-2"></i>University of Computer Science</div>
                        </div> --}}
                        <div class="mt-5 py-5 border-top text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <p> {{ $data['biography'] }} </p>
                                </div>
                            </div>
                        </div>

                        {{-- accordion --}}
                        <div class="accordion-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ml-auto">
                                        <div class="accordion my-3" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link w-100 text-primary text-left"
                                                            type="button" data-toggle="collapse" data-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            <i class="ni ni-book-bookmark"></i>Education
                                                            <i class="ni ni-bold-down float-right"></i>

                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body opacity-8">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                        src="https://pbs.twimg.com/profile_images/1262792807137153024/WKcQEgIZ_400x400.jpg"
                                                                        style="width: 100px; height:100px" alt="...">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="media-heading"><strong>Telkom University</strong>
                                                                </h5>
                                                                <h6>Bachelor of Information System</h6>
                                                                <p>2018-2022</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link w-100 text-primary text-left collapsed"
                                                            type="button" data-toggle="collapse" data-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            <i class="ni ni-app"></i>Experience
                                                            <i class="ni ni-bold-down float-right"></i>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body opacity-8">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                        src="https://avatars3.githubusercontent.com/u/70066339?s=200&v=4"
                                                                        style="width: 100px; height:100px" alt="...">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="media-heading"><strong>EDE Laboratory</strong>
                                                                </h5>
                                                                <p>1 year</p>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Totam debitis doloremque in explicabo, tempora magni
                                                                    commodi enim autem culpa expedita ratione harum
                                                                    voluptas, officia, possimus aperiam facilis laboriosam
                                                                    similique nobis?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link w-100 text-primary text-left collapsed"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            <i class="ni ni-trophy"></i>Achivement
                                                            <i class="ni ni-bold-down float-right"></i>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body opacity-8">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                        src="https://seeklogo.net/wp-content/uploads/2016/11/sap-logo-preview.png"
                                                                        style="width: 100px; height:100px" alt="...">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="media-heading"><strong>SAP Certification</strong>
                                                                    <h6>SAP 01 Fundamental</h6>
                                                                    <p>2018</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link w-100 text-primary text-left"
                                                            type="button" data-toggle="collapse" data-target="#collapseFour"
                                                            aria-controls="collapseFour">
                                                            <i class="ni ni-camera-compact"></i>Portfolio
                                                            <i class="ni ni-bold-down float-right"></i>
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body opacity-8">
                                                        <h5>Gallery</h5>
                                                        <div id="carouselExampleIndicators" class="carousel slide"
                                                            data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#carouselExampleIndicators"
                                                                    data-slide-to="0" class="active"></li>
                                                                <li data-target="#carouselExampleIndicators"
                                                                    data-slide-to="1"></li>
                                                                <li data-target="#carouselExampleIndicators"
                                                                    data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img class="d-block w-100"
                                                                        src="https://resi.ze-robot.com/dl/ul/ultraviolet-4k-wallpaper-3840%C3%972160.jpg"
                                                                        alt="First slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100"
                                                                        src="https://images.pexels.com/photos/1097456/pexels-photo-1097456.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500https://steamuserimages-a.akamaihd.net/ugc/940586530515504757/CDDE77CB810474E1C07B945E40AE4713141AFD76/"
                                                                        alt="Second slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100"
                                                                        src="https://img.freepik.com/free-photo/cool-geometric-triangular-figure-neon-laser-light-great-backgrounds-wallpapers_181624-9331.jpg?size=626&ext=jpg"
                                                                        alt="Third slide">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev"
                                                                href="#carouselExampleIndicators" role="button"
                                                                data-slide="prev">
                                                                <span class="carousel-control-prev-icon"
                                                                    aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next"
                                                                href="#carouselExampleIndicators" role="button"
                                                                data-slide="next">
                                                                <span class="carousel-control-next-icon"
                                                                    aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFifth">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link w-100 text-primary text-left"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseFifth" aria-controls="collapseFifth">
                                                            <i class="ni ni-building"></i>Organization
                                                            <i class="ni ni-bold-down float-right"></i>

                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseFifth" class="collapse" aria-labelledby="headingFifth"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body opacity-8">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object"
                                                                        src="https://media-exp1.licdn.com/dms/image/C560BAQEQRPFAx-31Wg/company-logo_200_200/0/1519881957143?e=2159024400&v=beta&t=T6Uh__J2yeefupctpEZKputGPizUFVz6k0JDDtYA5wU"
                                                                        style="width: 100; height:100px" alt="...">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="media-heading"><strong>DASPRO Laboratory</strong>
                                                                </h5>
                                                                <h6>Practicum Coordinator</h6>
                                                                <p>2019</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingSixth">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link w-100 text-primary text-left"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseSixth" aria-controls="collapseSixth">
                                                            <i class="ni ni-diamond"></i>Specialization
                                                            <i class="ni ni-bold-down float-right"></i>
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseSixth" class="collapse" aria-labelledby="headingSixth"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body opacity-8">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                        terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                        single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                        nesciunt you probably haven't heard of them accusamus labore
                                                        sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingSeven">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link w-100 text-primary text-left"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseSeven" aria-controls="collapseSeven">
                                                            <i class="ni ni-palette"></i>Skills and Hobby
                                                            <i class="ni ni-bold-down float-right"></i>

                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body opacity-8">
                                                        <div class="progress-wrapper">
                                                            <div class="progress-info">
                                                                <div class="progress-label">
                                                                    <h6><strong>Java Programming</strong></h6>
                                                                </div>
                                                                <div class="progress-percentage">
                                                                    <span>90%</span>
                                                                </div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 90%;"></div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="progress-wrapper">
                                                            <div class="progress-info">
                                                                <div class="progress-label">
                                                                    <h6><strong>Adobe Premiere Pro</strong></h6>
                                                                </div>
                                                                <div class="progress-percentage">
                                                                    <span>80%</span>
                                                                </div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 80%;"></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        {{-- footer
        <footer class="footer">
            <div class="container">
                <div class="row row-grid align-items-center mb-5">
                    <div class="col-lg-6">
                        <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
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
                            &copy; 2020 <a href="" target="_blank">Creative Tim</a>.
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
    </div> --}}
@endsection
