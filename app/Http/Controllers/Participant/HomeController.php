<?php

namespace App\Http\Controllers\Participant;

use DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $challenges = DB::Table('challenges')->orderBy('created_at', 'desc')->get();
        return view('participant.welcome', compact('challenges'));
    }

}