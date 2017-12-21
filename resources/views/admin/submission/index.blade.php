@extends('layouts.master')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Submission Index</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-striped full-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Challenge Name</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($submissions as $submission)

                    <tr>
                        <td>{{$submission->participant->email}}</td>
                        <td>{{$submission->challenge->name}}</td>

                        <td class="center">
                            <a href="{{route('submissions.show', [$submission->id])}}"><i class="fa fa-pencil-square-o"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['submissions.destroy', $submission->id], 'class' => 'delete_form', 'id' => 'form-delete-submissions-' . $submission->id]) !!}
                                <a href="#"  data-form="submissions-{{ $submission->id }}" class="data-delete"><i class="fa fa-trash-o"></i></a>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Challenge Name</th>
                    <th>Options</th>
                </tr>
                </tfoot>
            </table>

        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
