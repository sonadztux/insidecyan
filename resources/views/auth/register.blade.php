@extends('layouts.base')

@section('title', 'Register an Account')
@section('class', 'register-page')
@section('body_content')
<div class="wrapper">
    <section class="section section-shaped">
        <div class="shape shape-style-1 bg-gradient-default">
        </div>
        <div class="container pt-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-white">
                            <div class="row justify-content-center">
                                <img src="{{ asset('argon/img/brand/insidecyan-main.png') }}" width="150px"
                                    height="50px">
                            </div>
                        </div>
                        <div class="card-body px-lg-4 py-lg-4">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }} <a href="{{ route('login') }}" class="text-default">here</a>
                            </div>
                            @else
                            <div class="text-center text-muted mb-4">
                                <small>Join InsideCyan witihin create an account.</small>
                            </div>
                            @endif

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <select class="form-control" id="role" name="role">
                                            <option disabled selected>Join as (Role)</option>
                                            <option value="student">Student</option>
                                            <option value="lecture">Lecture</option>
                                            <option value="company">Company</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Full Name" type="text" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email" type="email" name="email" value="{{ old('email') }}"
                                                required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group focused">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password" type="password" name="password" required
                                                autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group focused">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Confirmation Password" type="password"
                                                name="password_confirmation" required autocomplete="new-password">

                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-12">
                                            <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" id="customCheckRegister"
                                                    type="checkbox">
                                                <label class="custom-control-label" for="customCheckRegister"><span>I
                                                        agree with the <a href="#">Privacy Policy</a></span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="submit" class="btn btn-primary mt-4">Create
                                            account</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
