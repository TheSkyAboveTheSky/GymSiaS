@extends('adminlte::page')
@section('content')
<h2 class="display-6">Demandes list</h2>
    <div class="col-md-44 col-md-offset-1">
      <table class="table table-bordered table-responsive table-striped">
        <thead>
        <tr>
          <th>Demandes Id</th>
          <th>Coach</th>
          <th>Seance</th>
          <th>Old Jour</th>
          <th>Old Seances Start Time</th>
          <th>Old Seances End Time</th>
          <th>new Jour</th>
          <th>New Seances Start Time</th>
          <th>New Seances End Time</th>
          <th>Actions</th>
        </thead>
        <tbody>
        @foreach($demandes as $demande)
        <tr>
          <td>{{$demande->id}}</td>
          <td>{{$demande->user->name}}</td>
          <td>{{$demande->seance->id}}</td>
          <td>{{$demande->seance->weekday}}</td>
          <td>{{$demande->seance->start_time}}</td>
          <td>{{$demande->seance->end_time}}</td>
          <td>{{$demande->weekday}}</td>
          <td>{{$demande->start_time}}</td>
          <td>{{$demande->end_date}}</td>
          <td>
             <div class="d-flex">
               <a href="{{url('admin/accepter/creneau',$demande->id)}}" class="btn btn-succes" style="background-color: green;color:aliceblue;margin-right:4px;"><strong>Accepte</strong></a>
               <a href="{{url('admin/refuter/creneau',$demande->id)}}" class="btn btn-danger" style="background-color: crimson;color:aliceblue"><strong>Refuser</strong></a>

            </div>
          </td>
        </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
@endsection