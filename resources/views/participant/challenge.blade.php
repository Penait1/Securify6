@extends('layouts.participant_master')

@section('content')
    <div id="container" style="width:100%; height: 100%">
        <div id="left" style="float:left; width:48%; margin-left: 10px; border: 15px solid green;">
            Challenge code:
            <div>
                    <textarea name="message" readonly rows="29" style="width: 100%">{{$challenges->content}}</textarea>
            </div>
        </div>

        <div id="right" style="float:right; width:48%; margin-right: 10px; border: 15px solid green;">
            Challenge awnsers
            <div>
                <textarea name="message" rows="29" style="width: 100%;"></textarea>
            </div>
        </div>
    </div>

    <div class="links">


        {!! Form::open(['route' => 'participant_logout', 'id' => 'frm-logout']) !!}
        {!! Form::close() !!}
    </div>
@endsection