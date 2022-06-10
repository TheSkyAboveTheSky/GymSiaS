@extends('adminlte::page')

@section('content')
<h1 class="display-6">Coach Details</h1>


<dl>
  <dt>Coach Id</dt>
  <dd>{{Auth::user()->id}}</dd>

  <dt>Name</dt>
  <dd>{{Auth::user()->name}}</dd>

  <dt>Email</dt>
  <dd>{{Auth::user()->email}}</dd>

  <dt>Salle Id</dt>
  <dd>{{Auth::user()->salle_id}}</dd>

  <dt>Salle Name</dt>
  <dd>{{Auth::user()->salle->name}}</dd>
</dl>

@endsection