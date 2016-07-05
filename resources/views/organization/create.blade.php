@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Create a organization</h1>
  </div>


  <div class="container">


  <div class="col-lg-12">
    {!! Form::open(array('route' => 'organization.store')) !!}

      <div class="form-group">
        {!! Form::label('organization') !!}
        {!! Form::text('organization', null, array('class' => 'form-control')) !!}
      </div>

      <div class="form-group">
        {!! Form::label('state') !!}
        {!! Form::text('state', null, array('class' => 'form-control')) !!}
      </div>

      <div class="form-group">
        {!! Form::label('active') !!}
        {!! Form::text('active', null, array('class' => 'form-control')) !!}
      </div>

      <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, array('class' => 'form-control')) !!}
      </div>




      {!! Form::token() !!}
      {!! Form::submit(null, array('class' => 'btn btn-default')) !!}
    {!! Form::close() !!}

      </div>
      </div>





@endsection
