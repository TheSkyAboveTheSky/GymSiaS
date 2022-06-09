@extends('adminlte::page')
@section('content')
<h2 class="display-6">Demandes list</h2>
    <div class="col-md-44 col-md-offset-1">
      <table class="table table-bordered table-responsive table-striped">
        <thead>
        <tr>
          <th>Demandes Id</th>
          <th>Client</th>
          <th>Seances</th>
          <th>Actions</th>
        </thead>
        <tbody>
        @foreach($demandes as $demande)
        <tr>
          <td>{{$demande->id}}</td>
          <td>{{$demande->user->name}}</td>
          <td>{{$demande->seance->id}}</td>
          <td>
             <div class="d-flex">
               <a href="{{url('admin/accepter/seance',$demande->id)}}" class="btn btn-succes" style="background-color: green;color:aliceblue;margin-right:4px;"><strong>Accepte</strong></a>
               <a href="{{url('admin/refuser/seance',$demande->id)}}" class="btn btn-danger" style="background-color: crimson;color:aliceblue"><strong>Refuser</strong></a>

            </div>
          </td>
        </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
@endsection