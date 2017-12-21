@extends('layouts.participant_master')

@section('content')
    <div id="container">
        <input type="button" onclick="copySelectionToTextView()" value="Mark">
        <div id="left">
            Challenge code:
            <div>
                <pre id='codeBlock' class="line-numbers" data-line="1"><code id='code' class="language-HTML">
                        <mark> oh hi mark!</mark> {{$challenges->content }}
                </code></pre>
                <pre><code class="language-css">
@media <mark>screen</mark> {
	div {
		<mark>text</mark>-decoration: <mark><mark>under</mark>line</mark>;
		back<mark>ground: url</mark>('foo.png');
	}
}</code></pre>
            </div>
        </div>

        <div id="right">
            Challenge answers
            <form action="/submissions" method="post">
                {{ csrf_field() }}
                <div id="comments">

                </div>
                <button value="send" type="submit"/>
            </form>
        </div>
    </div>

    <div class="links">


        {!! Form::open(['route' => 'participant_logout', 'id' => 'frm-logout']) !!}
        {!! Form::close() !!}
    </div>
@endsection