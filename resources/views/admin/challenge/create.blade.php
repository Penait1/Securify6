@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p>Challenge Create</p>

            <div class="form-group {{ $errors->has('meta_description') ? 'has-error' : ''}}">

            </div>


            {{Form::model($challenge, ['route'=>['challenges.store']])}}


            @include('admin.challenge.partials._form')


            {{Form::submit('Maak Challenge')}}
            {{Form::close()}}


        </div>
    </div>




@endsection
