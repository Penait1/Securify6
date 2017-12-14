@extends('layouts.master')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Challenge Index</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-striped full-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($submission as $submission)
                    <tr>
                        <td>{{$submission->name}}</td>
                        <td class="center">
                            <a href="{{route('challenges.edit', [$submission->id])}}"><i class="fa fa-pencil-square-o"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['challenges.destroy', $submission->id], 'class' => 'delete_form', 'id' => 'form-delete-challenges-' . $submission->id]) !!}
                                <a href="#"  data-form="challenges-{{ $submission->id }}" class="data-delete"><i class="fa fa-trash-o"></i></a>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
                </tfoot>
            </table>
            <a href="{{route('submissions.create')}}" class="btn btn-primary pull-right" role="button">Create challenge</a>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
