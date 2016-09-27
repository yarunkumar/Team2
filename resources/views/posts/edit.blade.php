@extends('app')
@section('content')
    <h1>Update Team</h1>
    {!! Form::model($post,['method' => 'PATCH','route'=>['posts.update',$post->id]]) !!}
    <div class="form-group">
        {!! Form::label('Team Name', 'Team Name:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Captain Name', 'Captain Name:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
