@extends('layouts.participant_master')

@section('content')
    <div id="container">



        <div class="col-md-6" id="left">
            Challenge code:
                <pre id='codeBlock' class="line-numbers" data-line="1"><code id='code' class="language-HTML">
                        {{$challenges->content }}</code></pre>
        </div>
        <div class="col-md-1" id="markDiv">
            <input type="button" id="mark" onclick="copySelectionToTextView()" value="Mark">
        </div>
        <div class="col-md-5" id="right">
            Challenge submissions:
            <form action="/submissions" id="form" method="post">
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