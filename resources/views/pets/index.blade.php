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

        {!! Form::open(['route' => ['pets.destroy', $pet->id], 'method' => 'DELETE']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
        {!! Form::close() !!}
        </div>
      </td>



        <td>
          {{ link_to_route('pets.edit', 'Edit', array($pet->id), array('class' => 'btn btn-primary')) }}
        </td>


    </tr>
  @endforeach




</table>


{!! $pets->links() !!}



</div>

@endsection
