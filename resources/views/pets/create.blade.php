@extends('layouts.app')
{{--
'name'
'description',
'age',
'pet_type',
'size' --}}
@section('content')
  <h2>Create a pet</h2>
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
      {!! Form::text('pet_type', null, array('class' => 'form-control')) !!}
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
@endsection
