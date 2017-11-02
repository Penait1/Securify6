<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function grading()
    {
        $challenge = DB::table('challenge')->get();
        $users = User::all();

        return view('admin.grading.panel',compact('challenge', 'users'));
    }

    public function challenge()
    {
        return view('admin.auth.login');
    }
}