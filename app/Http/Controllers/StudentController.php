<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function landing()
    {
        return view('landing');
    }

    public function profile()
    {
        $data = Student::find(Auth::user()->id);
        return view('student/profile', compact('data'));
    }

    public function profile_edit_view()
    {
        $data = Student::find(Auth::user()->id);
        return view('student/profile_edit', compact('data'));
    }

    public function profile_edit(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->email = $request->email;

        $student = Student::find(Auth::user()->id);
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->birthdate = $request->birthdate;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->biography = $request->biography;
        $student->specialization = $request->specialization;

        $user->save();
        $student->save();
        
        return redirect()->route('student_profile')->with('success', 'Information update successfully');
    }
}
