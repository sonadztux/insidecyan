<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    return view('welcome');
})->name('index');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/student/profile/{id}', [HomeController::class, 'student_profile'])->name('student_profile_id');
Route::get('/talent-directory', [HomeController::class, 'talent_directory'])->name('talent.directory');

Auth::routes();
Route::get('/student', [StudentController::class, 'profile'])->middleware('role:student')->name('student_profile');
Route::get('/student/edit', [StudentController::class, 'profile_edit_view'])->middleware('role:student')->name('student_edit_profile_view');
Route::post('/student/edit', [StudentController::class, 'profile_edit'])->middleware('role:student')->name('student_edit_profile');


Route::get('/lecture', [LectureController::class, 'profile'])->middleware('role:lecture')->name('lecture_profile');
Route::get('/lecture/edit', [LectureController::class, 'profile_edit_view'])->middleware('role:lecture')->name('lecture_edit_profile_view');
Route::post('/lecture/edit', [LectureController::class, 'profile_edit'])->middleware('role:lecture')->name('lecture_edit_profile');

Route::get('/company', [CompanyController::class, 'profile'])->middleware('role:company')->name('company_profile');
Route::get('/company/edit', [CompanyController::class, 'profile_edit_view'])->middleware('role:company')->name('company_edit_profile_view');
Route::post('/company/edit', [CompanyController::class, 'profile_edit'])->middleware('role:company')->name('company_edit_profile');


Route::get('/home', [HomeController::class, 'home'])->name('home');


