<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $data = Company::find(Company::select('id')->where('name', Auth::user()->name)->first());
        return view('company/profile', compact('data'));
    }

    public function profile_edit_view()
    {
        $data = DB::table('companies')->select('*')->where('name', Auth::user()->name)->first();
        return view('company/profile_edit', compact('data'));
    }
}
