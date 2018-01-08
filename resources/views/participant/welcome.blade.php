@extends('layouts.participant_master')

@section('content')
    <?php $participant = Auth::guard('participant')->user(); ?>
    <p>Logged in as {{$participant->email}}</p>

    <div id="TopDiv">
        <div id="ChallengeContainer" class="container">
            <!-- Portfolio Item Heading -->
            <h2 class="my-4">Spot The Bug Challenge
                <small></small>
            </h2>

            @if(!empty($newestChallenge))
                <?php
                    $locked = \Carbon\Carbon::parse($newestChallenge->end_date) > \Carbon\Carbon::now() || count($newestChallenge->getLineNumbersByParticipant($participant->id)) > 0;
                    $linkClass = ($locked) ? 'disabled' : '';
                ?>
                <!-- First challenge always the latest one-->
                <div class="row">
                    <div class="col-md-7">
                        <a class="{{$linkClass}}" href="/challenge/{{$newestChallenge->id}}">
                            <img class="img-fluid" src="http://placehold.it/750x500" alt="">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <h3 class="my-3">Description</h3>
                        <p>{{$newestChallenge->description}}</p>
                        <h3 class="my-3">challenge Details</h3>
                        <p>Created at: {{$newestChallenge->created_at}}</p>

                        @if($locked)
                            <i class="fa fa-lock text-danger" aria-hidden="true"></i> The end date has been passed or you already entered this challenge
                        @endif
                    </div>
                </div>
                <!-- /.row -->
            @else
                <div class="alert alert-info">
                    No challenges found
                </div>
            @endif

            <!-- Related challenges row-->
            @if(!empty($challenges))
                <h3 class="my-4">Related Challenges</h3>
                <!-- create for loop to create related challenges -->
                <div class="row">
                    @foreach ($challenges as $challenge)
                        <?php
                        $locked = \Carbon\Carbon::parse($challenge->end_date) > \Carbon\Carbon::now() || count($challenge->getLineNumbersByParticipant($participant->id)) > 0;
                        $linkClass = ($locked) ? 'disabled' : '';
                        ?>
                        <div class="col-md-3 col-sm-6 mb-4" id="RCImg">
                            <a class="{{$linkClass}}" href="\challenge\{{$challenge->id}}">
                                <img class="img-fluid" src="http://placehold.it/250x150" alt="">
                            </a>
                            <div class="row">
                                <div class="col-md-12 col-sm-8 mb-4" id="RCDate">
                                    <a class="{{$linkClass}}" href="\challenge\{{$challenge->id}}">
                                        <p>
                                            Challenge: {{\Carbon\Carbon::parse($challenge->created_at)->format('Y-m-d')}}</p>
                                    </a>

                                    @if($locked)
                                        <i class="fa fa-lock text-danger" aria-hidden="true"></i> The end date has been passed or you already entered this challenge
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        @endif
        <!-- /.row -->

        </div>
    </div>
@endsection