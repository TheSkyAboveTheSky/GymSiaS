@extends('adminlte::page')

@section('content')
<h1 class="display-6">Seance Details</h1>


<dl>
  <dt>Seance Id</dt>
  <dd>{{$seance->id}}</dd>

  <dt>Seance jour</dt>
  <dd>{{$seance->weekday}}</dd>

  <dt>Seance Activite</dt>
  <dd>{{$seance->activite}}</dd>

  <dt>Seance Start_time</dt>
  <dd>{{$seance->start_time}}</dd>

  <dt>Seance End_time</dt>
  <dd>{{$seance->end_time}}</dd>

  <dt>Seance Coach Id</dt>
  <dd>{{$seance->coach->id}}</dd>

  <dt>Seance Coach Name</dt>
  <dd>{{$seance->coach->name}}</dd>

  <dt>Seance Salle Id</dt>
  <dd>{{$seance->salle->id}}</dd>

  <dt>Seance Salle Name</dt>
  <dd>{{$seance->salle->name}}</dd>
</dl>


<div class="d-flex">
  <a href="{{route('seances.edit', $seance->id)}}" class="btn btn-primary m-1">Edit</a>

  <form action="{{ route('seances.destroy', $seance->id) }}" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button class="btn btn-danger m-1">Delete Seance</button>
  </form>
</div> 
@endsection