<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {{Form::label('name', 'Challenge Name :')}}
    <br>
    {{Form::text('name')}}
    {!! $errors->first('name', '<span class="help-block">:message</span>')!!}
</div>

<div class="form-group {{ $errors->has('language_id') ? 'has-error' : ''}}">
    {{Form::label('language_id', 'Programming Language :')}}
    <br>
    {{Form::select('language_id', $programming_languages)}}
    {!! $errors->first('language_id', '<span class="help-block">:message</span>')!!}

</div>


<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {{Form::label('content', 'Content :')}}
    <br>
    {{Form::textarea('content', null, ['size' => '100x10']) }}
    {!! $errors->first('content', '<span class="help-block">:message</span>')!!}

</div>



<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {{Form::label('description', 'Challenge Description :')}}
    <br>
    {{Form::text('description')}}
    {!! $errors->first('description', '<span class="help-block">:message</span>')!!}

</div>

<div class="form-group {{ $errors->has('starting_at') ? 'has-error' : ''}}">
    {{Form::label('starting_at', 'Starting Date :')}}
    {{Form::text('starting_at',null, ['class' => 'form_datetime'])}}
    {!! $errors->first('starting_at', '<span class="help-block">:message</span>')!!}
</div>

<div class="form-group {{ $errors->has('ending_at') ? 'has-error' : ''}}">
    {{Form::label('ending_at', 'Ending Date :')}}
    {{Form::text('ending_at',null, ['class' => 'form_datetime'])}}
    {!! $errors->first('ending_at', '<span class="help-block">:message</span>')!!}
</div>