@extends('layouts.master')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Show Submision</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <h5>Participant: <i>{{$participant->email}}</i>
                </h5>
                <div class="col-sm-10">
                </div>
            </div>
            <pre id='preCode' class="line-numbers language-{{$challenge->programmingLanguage->name}}" data-line="{{$lineNumbers}}">
                <code id='codeText' class="language-{{$challenge->programmingLanguage->name}}" >
                    {{$challenge->content}}
                </code>
            </pre>

            <div class="row" style="padding: 20px">

                @foreach($userSubmissions as $submission)
                    <div class="col-md-3 submissionCol">
                        <a href="#preCode.{{$submission->formattedLineNumbers}}">
                            <i  class="fa fa-code fa-3x" aria-hidden="true" style="margin-bottom: 5px;"></i>
                            <p class="textWrap text-bold">Line Number(s): {{$submission->formattedLineNumbers}}</p>
                        </a>
                        @if(!empty($submission->comment))
                        <hr>
                        <a href="#" class="openCommentModal" data-text="{{$submission->comment}}">
                            <p>{{str_limit($submission->comment, $limit = 150, $end = '...')}}</p>
                        </a>
                        @endif
                    </div>
                @endforeach
            </div>

        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->


    <!-- Modal -->
    <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="commentModalTitle">Comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
