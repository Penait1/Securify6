@extends('layouts.participant_master')

@section('content')
    <div id="container">
        <input type="button" onclick="surroundSelection()" value="Mark">
        <div id="left">
            Challenge code:
            <div>
                <pre class="line-numbers" data-line="5-7"><code class="language-HTML" >
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
            Challenge awnsers
            <div>
                <textarea name="message" rows="29">surroundSelection()</textarea>
            </div>
        </div>
    </div>

    <div class="links">


        {!! Form::open(['route' => 'participant_logout', 'id' => 'frm-logout']) !!}
        {!! Form::close() !!}
    </div>
@endsection