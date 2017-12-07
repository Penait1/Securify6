@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p>Challenge Edit</p>

            {{Form::model($challenge, ['route'=>['challenges.update',$challenge->id],'method' => 'PUT'])}}

            @include('admin.challenge.partials._form')

            {{Form::submit('Save Challenge')}}
            {{Form::close()}}

        </div>
    </div>
@endsection
