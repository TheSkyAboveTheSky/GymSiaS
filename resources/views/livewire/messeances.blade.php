@extends('adminlte::page')
@section('content')
@include('livewire.modal')
<h2 class="display-6">Seances list</h2>
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
          <th>Salle</th>
          <th>Demande De Changement</th>
        </thead>
        <tbody>
        @foreach($seances as $seance)
        <tr>
          <td>{{$seance->id}}</td>
          <td>{{$seance->weekday}}</td>
          <td>{{$seance->start_time}}</td>
          <td>{{$seance->end_time}}</td>
          <td>{{$seance->salle->name}}</td>
          <td>
            <div class="d-flex">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new">Demande De Changement</a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>

      </table>
    </div>
  </div>

@endsection
