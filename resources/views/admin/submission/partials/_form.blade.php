<div class="form-group">
    <h5>Participant: <i>{{$participant->email}}</i>
    </h5>
    <div class="col-sm-10">
    </div>
</div>

<pre id='preCode' class="line-numbers language-css" data-line="{{implode(',', $lineNumbers)}}"><code id='codeText' class="language-css" >
body {
    background-color: lightblue;
}

h1 {
    color: white;
    text-align: center;
}

p {
    font-family: verdana;
    font-size: 20px;
}
</code></pre>

    <div class="row" style="padding: 20px">

        @foreach($userSubmissions as $submission)
            <div class="col-md-3 submissionCol">
                <a class="" target="_blank" href="{{route('user_submissions', [$submission->challenge_id, $submission->participant_id])}}">
                    <i  class="fa fa-code fa-3x" aria-hidden="true" style="margin-bottom: 5px;"></i>

                    <p class="textWrap">Line Number: {{$submission->line_number}}</p>

                </a></div>
        @endforeach
    </div>



