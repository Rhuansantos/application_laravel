@extends('layouts.app')

@section('content')


  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


  <h2>Edit Post</h2>
  {!! Form::model($pet, array('route' => array('pets.update', $pet->id), 'method' => 'put')) !!}




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
      {!! Form::label('Breed') !!}
      {{ Form::select('breed', $dogOptions, null, array('class' => 'form-control')) }}
  </div>
  <div class="form-group" style="display: none">
      {!! Form::label('Breed') !!}
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
@endsection
