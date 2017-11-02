<?php

namespace App\Http\Controllers\Participant;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        return view('participant.welcome');
    }

}