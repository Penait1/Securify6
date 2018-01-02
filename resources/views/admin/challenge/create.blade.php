@extends('layouts.master')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Create challenge</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            {{Form::model($challenge, ['route'=>['challenges.store'], 'class' => 'form-horizontal'])}}
                @include('admin.challenge.partials._form')
                {{Form::submit('Create', ['class' => 'btn btn-primary pull-right'])}}
            {{Form::close()}}

        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
