@extends('layouts.participant_master')

@section('content')
    <div id="container">
        <div class="col-md-6" id="left">
            Challenge code:
                <pre id='codeBlock' class="line-numbers language-{{$challenge->programmingLanguage->name}}" data-line="0">
                    <code id='code' class="language-{{$challenge->programmingLanguage->name}}">{{$challenge->content }}</code>
                </pre>
        </div>
        <div class="col-md-1" id="markDiv">
            <input type="button" id="mark" value="Mark">
        </div>
        <div class="col-md-5" id="right">
            Challenge submissions:
            <form action="{{route('submit_submission', $challenge->id)}}" id="form" method="post">
                {{ csrf_field() }}
                <div id="comments">

                </div>
                <button value="send" id="send" class="btn-primary pull-right" type="submit">Send</button>
            </form>
        </div>
    </div>

    <div class="links">

        {!! Form::open(['route' => 'participant_logout', 'id' => 'frm-logout']) !!}
        {!! Form::close() !!}
    </div>
@endsection