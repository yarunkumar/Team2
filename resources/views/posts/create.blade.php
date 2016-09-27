@extends('app')
@section('content')
    <h1>Create Team</h1>
    {!! Form::open(['url' => 'posts']) !!}
    <div class="form-group">
        {!! Form::label('Title', 'Team Name:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Description', 'Captain Name:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
