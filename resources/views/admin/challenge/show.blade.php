<div class="row" style="padding: 20px">

    @foreach($submissions as $submission)
        <div class="col-md-5 submissionCol">
        <a class="" target="_blank" href="{{route('user_submissions', [$submission->challenge_id, $submission->participant_id])}}">
        <i  class="fa fa-user-circle-o fa-3x" aria-hidden="true" style="margin-bottom: 5px;"></i>

        <p class="textWrap">{{$submission->participant->email}}</p>

        </a></div>
    @endforeach
</div>





