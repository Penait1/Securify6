
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Submission</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('submissions.index') }}"> Back</a>
            </div>
        </div>
    </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Submission ID:</strong>
                {{ $submission->id}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Challenge:</strong>
                {{ $submission->challenge->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Participant:</strong>
                {{ $submission->participant->email}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RegelNR:</strong>
                {{ $submission->line_number}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comment:</strong>
                {{ $submission->comment}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Created at:</strong>
                {{ $submission->created_at}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Updated at:</strong>
                {{ $submission->updated_at}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Challenge Content:</strong>
                {{ $submission->challenge->content}}
            </div>
        </div>

