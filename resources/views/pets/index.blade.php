@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Pets</h1>
  <br>

<table class="table table-hover">

  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Pet Type</th>
    <th>Breed</th>
    <th>Age</th>
    <th>Description</th>

  </tr>
  <tr>

  @foreach ($pets as $pet)
    <tr>
      <td>{{ $pet->id}}</td>
      <td>{{ $pet->name}}</td>
      <td>{{ $pet->pet_type}}</td>
      <td>{{ $pet->breed}}</td>
      <td>{{ $pet->age}}</td>
      <td>{{ $pet->description}}</td>

      <td>
        <div class="btn-group" role="group" aria-label="...">
          {{-- {{ link_to_route('pets.edit', 'Edit', array($pets->id), array('class' => 'btn btn-primary')) }} --}}

        {!! Form::open(['route' => ['pets.destroy', $pet->id], 'method' => 'DELETE']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
        {!! Form::close() !!}
          </div>
        </td>
        <td>
          {!! Form::open(['route' => ['pets.edit', $pet->id], 'method' => 'EDIT']) !!}
          {!! Form::submit('Edit', ['class' => 'btn btn btn-primary btn-block']) !!}
          {!! Form::close() !!}
        </td>


    </tr>
  @endforeach




</table>
</div>

@endsection
