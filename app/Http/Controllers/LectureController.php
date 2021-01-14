<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LectureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $data = Lecture::select('*')->where('user_id', Auth::user()->id)->first();
        return view('lecture/profile', compact('data'));
    }

    public function profile_edit_view()
    {
        $data = Lecture::select('*')->where('user_id', Auth::user()->id)->first();
        return view('lecture/profile_edit', compact('data'));
    }

    public function profile_edit(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->email = $request->email;

        $lecture = Lecture::where('user_id', '=', Auth::user()->id)->first();
        $lecture->nidn = $request->nidn;
        $lecture->name = $request->name;
        $lecture->expertises = $request->expertises;

        $user->save();
        $lecture->save();

        return redirect()->route('lecture_profile')->with('success', 'Information update successfully');
    }
}
