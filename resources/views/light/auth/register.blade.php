@extends('light/base')

@section('title', 'Register')
@section('class', 'register-page')
@section('body_content')

<div class="wrapper">
    <section class="section section-shaped">
        <div class="shape bg-gradient-default">
        </div>
        <div class="section features-6">
            <div class="container text-white">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="info info-horizontal info-hover-primary">
                            <div class="description pl-4">
                                <h5 class="title text-white">For Students</h5>
                                <p>The time is now for it to be okay to be great. People in this world shun people for
                                    being great. For being a bright color. For standing out. But the time is now.</p>
                                <a href="{{ route('register.student') }}" class="btn btn-info">Join as Student</a>
                            </div>
                        </div>
                        <div class="info info-horizontal info-hover-primary mt-5">
                            <div class="description pl-4">
                                <h5 class="title text-white">For Lectures</h5>
                                <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.
                                    That’s my skill. I’m not really specifically talented at anything except for the
                                    ability to learn.</p>
                                <a href="{{ route('register.lecture') }}" class="btn btn-info">Join as Lecture</a>
                            </div>
                        </div>
                        <div class="info info-horizontal info-hover-primary mt-5">
                            <div class="description pl-4">
                                <h5 class="title text-white">For Companies</h5>
                                <p>That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because you
                                    can’t learn anything from a compliment. If everything I did failed - which it
                                    doesn't.</p>
                                <a href="{{ route('register.company') }}" class="btn btn-info">Join as Company</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-10 mx-md-auto">
                        <img class="ml-lg-5" src="{{ asset('light/img/ill/ill.png') }}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
