<?php

namespace App\Http\Controllers\Participant;

use App\Challenge;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $challenges = Challenge::orderByDesc('created_at')->get();
        $newestChallenge = ($challenges->count() >= 1) ?$challenges->shift() : null;

        return view('participant.welcome', compact('challenges', 'newestChallenge'));
    }

}