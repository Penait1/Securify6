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
                @foreach($challenges as $challenge)
                    <tr>
                        <td>{{$challenge->name}}</td>
                        <td><a href="{{route('challenges.edit', [$challenge->id])}}"><i class="fa fa-pencil-square-o"></i></a></td>
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
            <a href="{{route('challenges.create')}}" class="btn btn-primary pull-right" role="button">Create challenge</a>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
