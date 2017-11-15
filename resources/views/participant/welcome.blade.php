@extends('layouts.participant_master')

@section('content')
       <div class="container" style="background:white; width: 100%">
           <!-- Portfolio Item Heading -->
           <h2 class="my-4">Spot The Bug Challenge
               <small></small>
           </h2>

       <!-- Portfolio Item Row Create for loop for creating each challenge-->
    <div class="row">

        <div class="col-md-8" style="">
            <img class="img-fluid" src="http://placehold.it/750x500" alt="" style="box-shadow: 10px 10px 5px grey;width: 100%; height: auto;">
        </div>

        <div class="col-md-4">
            <h3 class="my-3">challenge Description</h3>
            <p>{{$challenges[0]->code}}</p>
            <h3 class="my-3">challenge Details</h3>
            <ul>
                <li>Created at: {{$challenges[0]->created_at}}</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Related Challenges</h3>
           <!-- create for loop to create related challenges -->

    <div class="row">
       @for ($i = 1; $i < count($challenges) && $i < 5; $i++)
        <div class="col-md-3 col-sm-6 mb-4" style=" padding-bottom: 15px;">
            <a href="#">
                <img class="img-fluid" src="http://placehold.it/250x150" alt="" style="box-shadow: 5px 5px 2px grey;width: 100%; height: auto;">
            </a>
            <div class="row">
                    <div class="col-md-9 col-sm-6 mb-4" style="padding-top: 5px;">
                        <a href="#">
                            <p>Challenge: {{$challenges[$i]->created_at}}</p>
                        </a>
                    </div>
            </div>
        </div>
       @endfor
    </div>

    <!-- /.row -->

    </div>


    <div class="links">


        {!! Form::open(['route' => 'participant_logout', 'id' => 'frm-logout']) !!}
        {!! Form::close() !!}
    </div>
@endsection