@extends('adminlte::page')

@section('content')
<h1 class="display-6">Coach Details</h1>


<dl>
  <dt>Coach Id</dt>
  <dd>{{$coach->id}}</dd>

  <dt>Name</dt>
  <dd>{{$coach->name}}</dd>

  <dt>Email</dt>
  <dd>{{$coach->email}}</dd>

  <dt>Salle Id</dt>
  <dd>{{$coach->salle_id}}</dd>

  <dt>Salle Name</dt>
  <dd>{{$coach->salle->name}}</dd>
</dl>


<div class="d-flex">
  <a href="{{route('coachs.edit', $coach->id)}}" class="btn btn-primary m-1">Edit</a>

  <form action="{{ route('coachs.destroy', $coach->id) }}" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button class="btn btn-danger m-1">Delete Coach</button>
  </form>
</div> 
@endsection