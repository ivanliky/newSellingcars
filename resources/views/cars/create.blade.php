@extends('layouts.app')


{!!  Form::open([ 'method' => 'post', 'action' => 'CarController@store' ]) !!}


<div class="form-group">

       {!! Form::label('title' , 'Title:') !!}

       {!! Form::text('title' , null , ['class' => 'form-control']) !!}

</div>

<div class="form-group">

{!! Form::submit('Create Post' , ['class' => 'btn btn-primary']) !!}

</div>


{!! Form::close() !!}
