@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
        <p>Challenge Index</p>

            @foreach($challenges as $challenge)
                <p> Challenge: <a href="{{route('challenges.edit', [$challenge->id])}}">{{$challenge->name}}</a> </p>
            @endforeach


         <a href="{{route('challenges.create')}}">Maak een nieuwe challenge</a>
        </div>
    </div>
@endsection
