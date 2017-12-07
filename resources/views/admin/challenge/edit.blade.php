@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p>Challenge Edit</p>
            {{Form::model($challenge, ['route'=>['challenges.update']])}}

            {{Form::label('name', 'Challenge Name :')}}
            <br>
            {{Form::text('name')}}

            <br>
            <br>

            {{Form::label('language_id', 'Programming Language :')}}
            <br>
            {{Form::select('language_id', $programming_languages)}}

            <br>
            <br>

            {{Form::label('content', 'Content :')}}
            <br>
            {{Form::textarea('content', null, ['size' => '100x10']) }}

            <br>
            <br>

            {{Form::label('description', 'Challenge Description :')}}
            <br>
            {{Form::text('description')}}


            <br>
            <br>
            {{Form::label('starting_at', 'Starting Date :')}}
            {{Form::date('starting_at', \Carbon\Carbon::now()) }}

            <br>
            <br>
            {{Form::label('ending_at', 'Ending Date :')}}
            {{Form::date('ending_at', \Carbon\Carbon::now()) }}



            <br>
            <br>
            {{Form::submit('Save Challenge')}}
            {{Form::close()}}

        </div>
    </div>
@endsection
