@extends('layouts.app')

@section('content')
<h1>Pet Tables</h1>
<br>


<table class="table table-hover">

  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
  </tr>
  <tr>

  @foreach ($pets as $pet)
    <tr>
      <td>{{ $pet->id}}</td>
      <td>{{ $pet->name}}</td>
      <td>{{ $pet->description}}</td>
      <td>{{ $pet->price}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="...">
          <button type="button" class="btn btn-default">Edit</button>
          {{-- <button type="button" class="btn btn-default">Delete</button> --}}

          {!! Form::open(['route' => ['pets.destroy', $pet->id], 'method' => 'DELETE']) !!}

          {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

          {!! Form::close() !!}


           {{-- <form class="" action="pets.destroy" method="DELETE">
            <input class="btn btn-danger btn-block" type="button" name="name" value="Delete">
          </form>

        --}}
        </div>
      </td>
    </tr>
  @endforeach




</table>


@endsection
