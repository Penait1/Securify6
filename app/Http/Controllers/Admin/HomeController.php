<?php

namespace App\Http\Controllers\Admin;

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
        $users = DB::table('users')->get();

        return view('admin.grading.panel', ['challenge' => $challenge], ['user' => $users]);
    }
}