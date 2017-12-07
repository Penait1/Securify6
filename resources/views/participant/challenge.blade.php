@extends('layouts.participant_master')

@section('content')
    <div id="container">
        <div id="left">
            Challenge code:
            <div>
                <pre class="line-numbers" data-start="1"> <code class="language-css "  >{{$challenges->content}}</code></pre>

            </div>
        </div>

        <div id="right">
            Challenge answers
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