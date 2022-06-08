@extends('adminlte::page')

@section('content')
<h1 class="display-6">Client Details</h1>


<dl>
  <dt>client Id</dt>
  <dd>{{$client->id}}</dd>

  <dt>Name</dt>
  <dd>{{$client->name}}</dd>

  <dt>Email</dt>
  <dd>{{$client->email}}</dd>

  <dt>Duree D'abonnement</dt>
  <dd>{{$client->duree_abonement_in_months}} Months</dd>
  
  <dt>Date Debut D'Abonnement</dt>
  <dd>{{$client->date_debut_abonnement}}</dd>
  
  <dt>Date Fin D'Abonnement</dt>
  <dd>{{$client->abonnement_expired_at}}</dd>

  <dt>Status</dt>
  <dd>
    @if ($client->abonnement_expired_at <= $today)
    <p style="color:red">Expired</p>
    @else
    <p style="color:green">Active</p>
    @endif
  </dd>

  <dt>Salle Id</dt>
  <dd>{{$client->salle_id}}</dd>

  <dt>Salle Name</dt>
  <dd>{{$client->salle->name}}</dd>
</dl>


<div class="d-flex">
  <a href="{{route('clients.edit', $client->id)}}" class="btn btn-primary m-1">Edit</a>

  <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button class="btn btn-danger m-1">Delete User</button>
  </form>
</div> 
@endsection