@extends('layouts.participant_master')

@section('content')
    <p>Logged in as {{Auth::guard('participant')->user()->email}}</p>

    <div id="TopDiv">
        <div id="ChallengeContainer" class="container">
            <!-- Portfolio Item Heading -->
            <h2 class="my-4">Spot The Bug Challenge
                <small></small>
            </h2>
            @if(!empty($newestChallenge))
                <!-- First challenge always the latest one-->
                <div class="row">
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-fluid" src="http://placehold.it/750x500" alt="">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <h3 class="my-3">Description</h3>
                        <p>{{$newestChallenge->description}}</p>
                        <h3 class="my-3">challenge Details</h3>
                        <li>Created at: {{$newestChallenge->created_at}}</li>
                    </div>
                </div>
                <!-- /.row -->
            @else
                <div class="alert alert-info">
                    No challenges found
                </div>
            @endif

            <!-- Related challenges row-->
            @if(count($challenges) >= 1)
                <h3 class="my-4">Related Challenges</h3>
                <!-- create for loop to create related challenges -->
                <div class="row">
                    @foreach ($challenges as $challenge)
                        <div class="col-md-3 col-sm-6 mb-4" id="RCImg">
                            <a href="#">
                                <img class="img-fluid" src="http://placehold.it/250x150" alt="">
                            </a>
                            <div class="row">
                                <div class="col-md-12 col-sm-8 mb-4" id="RCDate">
                                    <a href="#">
                                        <p>
                                            Challenge: {{\Carbon\Carbon::parse($challenge->created_at)->format('Y-m-d')}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        @endif
        <!-- /.row -->

        </div>
    </div>

    <div class="links">


        {!! Form::open(['route' => 'participant_logout', 'id' => 'frm-logout']) !!}
        {!! Form::close() !!}
    </div>
@endsection