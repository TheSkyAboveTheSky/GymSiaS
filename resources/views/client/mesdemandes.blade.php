@extends('adminlte::page')
@section('content')
<h2 class="display-6">Demandes   list</h2>
<hr/>
  <div class="row">
    <div class="col-md-12 col-md-offset-1">
      <table class="table table-bordered table-responsive table-striped">
        <thead>
        <tr>
          <th>Seance Id</th>
          <th>Seance Jour</th>
          <th>Seance Start</th>
          <th>Seance End</th>
          <th>Coach</th>
          <th>Salle</th>
          <th>Etat</th>
        </thead>
        <tbody>
          @foreach($demandes as $demande)
          @if ($demande->user_id == Auth::user()->id)
          <tr>
            <td>{{$demande->seance->id}}</td>
            <td>{{$demande->seance->weekday}}</td>
            <td>{{$demande->seance->start_time}}</td>
            <td>{{$demande->seance->end_time}}</td>
            <td>{{$demande->seance->coach->name}}</td>
            <td>{{$demande->seance->salle->name}}</td>
            <td>
              @if ($demande->Etatdemande == 0)
              <p style="color: crimson">Refusée</p>
              @elseif($demande->Etatdemande == 2)
              <p style="color:green">Acceptée</p>
              @endif
            <td>
          </tr>
          @endif
          @endforeach

      </tbody>

      </table>
    </div>
  </div>

@endsection