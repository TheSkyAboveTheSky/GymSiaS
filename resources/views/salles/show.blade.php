@extends('adminlte::page')

@section('content')
<h1 class="display-6">Salle Details</h1>


<dl>
  <dt>Salle Id</dt>
  <dd>{{$salle->id}}</dd>

  <dt>Salle Name</dt>
  <dd>{{$salle->name}}</dd>

  <dt>Salle Adresse</dt>
  <dd>{{$salle->adresse}} </dd>

</dl>


<div class="d-flex">
  <a href="{{route('salles.edit', $salle->id)}}" class="btn btn-primary m-1">Edit</a>

  <form action="{{ route('salles.destroy', $salle->id) }}" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button class="btn btn-danger m-1">Delete Salle</button>
  </form>
</div> 
@endsection