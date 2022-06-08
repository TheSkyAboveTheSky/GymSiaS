@extends('adminlte::page')

@section('content')
<h1 class="display-6">Abonnement Details</h1>


<dl>
  <dt>abonnement Id</dt>
  <dd>{{$abonnement->id}}</dd>

  <dt>Duree</dt>
  <dd>{{$abonnement->duree}}</dd>

  <dt>Prix</dt>
  <dd>{{$abonnement->prix}} Dh</dd>

  <dt>Salle Id</dt>
  <dd>{{$abonnement->salle_id}}</dd>

  <dt>Salle Name</dt>
  <dd>{{$abonnement->salle->name}}</dd>
</dl>


<div class="d-flex">
  <a href="{{route('abonnements.edit', $abonnement->id)}}" class="btn btn-primary m-1">Edit</a>

  <form action="{{ route('abonnements.destroy', $abonnement->id) }}" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button class="btn btn-danger m-1">Delete Abonnement</button>
  </form>
</div> 
@endsection