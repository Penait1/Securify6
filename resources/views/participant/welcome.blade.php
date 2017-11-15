@extends('layouts.participant_master')

@section('content')
    <div style="padding-top: 25px">
       <div class="container" style="background:white; width: 100%; box-shadow: 10px 10px 5px grey; border-radius: 5px;">
           <!-- Portfolio Item Heading -->
           <h2 class="my-4">Spot The Bug Challenge
               <small></small>
           </h2>

       <!-- Portfolio Item Row Create for loop for creating each challenge-->
    <div class="row">

        <div class="col-md-7" style="">
            <img class="img-fluid" src="http://placehold.it/750x500" alt="" style="max-width: 100%; height: auto;">
        </div>

        <div class="col-md-4">
            <h3 class="my-3">challenge Description</h3>
            <p>challenge description</p>
            <h3 class="my-3">challenge Details</h3>
            <ul>
                <li>Created at: 2017-12-15</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Related Challenges</h3>
           <!-- create for loop to create related challenges -->

    <div class="row">
       @for ($i = 1; $i < 5; $i++)
            <div class="col-md-3 col-sm-6 mb-4" style=" padding-bottom: 15px;">
                <a href="#">
                    <img class="img-fluid" src="http://placehold.it/250x150" alt="" style="max-width: 100%; height: auto;">
                </a>
                <div class="row">
                        <div class="col-md-9 col-sm-6 mb-4" style="padding-top: 5px;">
                            <a href="#">
                                <p>Challenge: 2017-11-06</p>
                            </a>
                        </div>
                </div>
            </div>
       @endfor
    </div>

    <!-- /.row -->

    </div>
    </div>

    <div class="links">


        {!! Form::open(['route' => 'participant_logout', 'id' => 'frm-logout']) !!}
        {!! Form::close() !!}
    </div>
@endsection