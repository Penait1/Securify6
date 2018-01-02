<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {{Form::label('name', 'Challenge Name :', ['class' => 'col-sm-2 control-label'])}}
    <div class="col-sm-10">
        {{Form::text('name', $challenge->name, ['class' => 'form-control'])}}
    </div>
    {!! $errors->first('name', '<span class="help-block col-sm-10 col-sm-offset-2">:message</span>')!!}
</div>

<div class="form-group {{ $errors->has('language_id') ? 'has-error' : ''}}">
    {{Form::label('language_id', 'Programming Language :', ['class' => 'col-sm-2 control-label'])}}
    <div class="col-sm-10">
        {{Form::select('language_id', $programming_languages, $challenge->language_id,['class' => 'form-control'])}}
    </div>
    {!! $errors->first('language_id', '<span class="help-block col-sm-10 col-sm-offset-2">:message</span>')!!}
</div>


<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {{Form::label('content', 'Content :', ['class' => 'col-sm-2 control-label'])}}
    <div class="col-sm-10">
        {{Form::textarea('content', $challenge->content, ['size' => '100x10', 'class' => 'form-control']) }}
    </div>
    {!! $errors->first('content', '<span class="help-block col-sm-10 col-sm-offset-2">:message</span>')!!}

</div>


<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {{Form::label('description', 'Challenge Description :', ['class' => 'col-sm-2 control-label'])}}
    <div class="col-sm-10">
        {{Form::textarea('description', $challenge->description, ['class' => 'form-control'])}}
    </div>
    {!! $errors->first('description', '<span class="help-block col-sm-10 col-sm-offset-2">:message</span>')!!}

</div>

<div class="form-group {{ $errors->has('starting_at') ? 'has-error' : ''}}">
    {{Form::label('starting_at', 'Starting Date :', ['class' => 'col-sm-2 control-label'])}}
    <div class="col-sm-10">
        {{Form::text('starting_at',$challenge->starting_at, ['class' => 'form-control form_datetime'])}}
    </div>
    {!! $errors->first('starting_at', '<span class="help-block col-sm-10 col-sm-offset-2">:message</span>')!!}
</div>

<div class="form-group {{ $errors->has('ending_at') ? 'has-error' : ''}}">
    {{Form::label('ending_at', 'Ending Date :', ['class' => 'col-sm-2 control-label'])}}
    <div class="col-sm-10">
        {{Form::text('ending_at',$challenge->ending_at, ['class' => 'form-control form_datetime'])}}
    </div>
    {!! $errors->first('ending_at', '<span class="help-block col-sm-10 col-sm-offset-2">:message</span>')!!}
</div>