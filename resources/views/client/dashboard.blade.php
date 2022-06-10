@extends('adminlte::page')

@section('content')
<h1 class="display-6">Profile Details</h1>


<dl>
  <dt>client Id</dt>
  <dd>{{Auth::user()->id}}</dd>

  <dt>Name</dt>
  <dd>{{Auth::user()->name}}</dd>

  <dt>Email</dt>
  <dd>{{Auth::user()->email}}</dd>

  <dt>Duree D'abonnement</dt>
  <dd>{{Auth::user()->duree_abonement_in_months}} Months</dd>
  
  <dt>Date Debut D'Abonnement</dt>
  <dd>{{Auth::user()->date_debut_abonnement}}</dd>
  
  <dt>Date Fin D'Abonnement</dt>
  <dd>{{Auth::user()->abonnement_expired_at}}</dd>

  <dt>Status</dt>
  <dd>
    @if (Auth::user()->abonnement_expired_at <= $today)
    <p style="color:red">Expired</p>
    @else
    <p style="color:green">Active</p>
    @endif
  </dd>

  <dt>Salle Id</dt>
  <dd>{{Auth::user()->salle_id}}</dd>

  <dt>Salle Name</dt>
  <dd>{{Auth::user()->salle->name}}</dd>
</dl>

@endsection