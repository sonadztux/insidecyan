<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('light/landing');
})->name('index');

Route::get('/profile', function () {
    return view('light/profile');
})->name('profile.index');

Route::get('/talents', function () {
    return view('light/talent/directory');
})->name('talent.directory');

Route::get('/jobs', function () {
    return view('light/job/index');
})->name('job.index');

Route::get('/job/detail/{id}', function () {
    return view('light/job/detail');
})->name('job.detail');

Route::get('/events', function () {
    return view('light/event/index');
})->name('event.index');

Route::get('/event/detail/{id}', function () {
    return view('light/event/detail');
})->name('event.detail');

Route::get('/login', function () {
    return view('light/auth/login');
})->name('login.index');

Route::get('/join', function () {
    return view('light/auth/register');
})->name('register');

Route::get('/join/student', function () {
    return view('light/auth/student');
})->name('register.student');

Route::get('/join/lecture', function () {
    return view('light/auth/lecture');
})->name('register.lecture');

Route::get('/join/company', function () {
    return view('light/auth/company');
})->name('register.company');