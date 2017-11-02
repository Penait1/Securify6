@extends('layouts.participant_master')

@section('content')
    <div class="title m-b-md">
        Spot The Bug Challenge
    </div>
    <p>Logged in as {{Auth::guard('participant')->user()->email}}</p>

    <div class="links">


        {!! Form::open(['route' => 'participant_logout', 'id' => 'frm-logout']) !!}
        {!! Form::close() !!}
    </div>
@endsection