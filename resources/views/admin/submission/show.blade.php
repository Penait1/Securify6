@extends('layouts.master')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit Submision</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
                @include('admin.submission.partials._form')


        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
