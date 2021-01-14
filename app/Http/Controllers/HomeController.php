<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing');
    }

    public function talent_directory()
    {
        $students = Student::all();
        return view('talent_directory', compact('students'));
    }

    public function student_profile($id)
    {
        $data = Student::find($id);
        return view('student/profile', compact('data'));
    }

    public function home()
    {
        return view('home');
    }
}
