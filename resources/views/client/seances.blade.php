@extends('adminlte::page')
@section('content')
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
          <th>Coach</th>
          <th>Salle</th>
          <th>Demande d'Acces</th>
        </thead>
        <tbody>
        @foreach($seances as $seance)
        <tr>
          <td>{{$seance->id}}</td>
          <td>{{$seance->weekday}}</td>
          <td>{{$seance->start_time}}</td>
          <td>{{$seance->end_time}}</td>
          <td>{{$seance->coach->name}}</td>
          <td>{{$seance->salle->name}}</td>
          <td>
            <div class="d-flex">
              <a href="{{url('client/demandesacces',$seance->id)}}" class="btn btn-info m-1">Demande D'Acess</a>
            </div>
          </td>
        </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>

@endsection
