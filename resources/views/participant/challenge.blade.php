@extends('layouts.participant_master')

@section('content')
    <div id="container">
        <div id="left">
            Challenge code:
            <div>
                    <textarea name="message" readonly rows="29">{{$challenges->content}}</textarea>
            </div>
        </div>

        <div id="right">
            Challenge awnsers
            <div>
                <textarea name="message" rows="29"></textarea>
            </div>
        </div>
    </div>

    <div class="links">


        {!! Form::open(['route' => 'participant_logout', 'id' => 'frm-logout']) !!}
        {!! Form::close() !!}
    </div>
@endsection