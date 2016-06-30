@extends('layouts.app')
{{--
'name'
'description',
'age',
'pet_type',
'size' --}}
@section('content')

<div class="container">


<div class="col-lg-12">
  <h2>Create</h2>
  {!! Form::open(array('route' => 'pets.store')) !!}
    <div class="form-group">
      {!! Form::label('name') !!}
      {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
      {!! Form::label('age') !!}
      {!! Form::text('age', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
      {!! Form::label('pet_type') !!}
      {!! Form::select('pet_type', $petType, null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('breed') !!}
        {{ Form::select('breed', $dogOptions, null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group" style="display: none">
        {!! Form::label('breed') !!}
        {{ Form::select('breed', $catOptions, null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
      {!! Form::label('size') !!}
      {!! Form::text('size', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
      {!! Form::label('description') !!}
      {!! Form::textarea('description', null, array('class' => 'form-control', 'size' => '50x3')) !!}
    </div>



    {!! Form::token() !!}
    {!! Form::submit(null, array('class' => 'btn btn-default')) !!}
  {!! Form::close() !!}

    </div>
    </div>
@endsection
