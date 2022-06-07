@extends('admin.dashboard')
@section('content')
<h1 class="page-header text-center">Salle List</h1>
<div class="row">
   <div class="col-md-12 col-md-offset-1">
      <h2>
         Salles Table
         <button type="button" class="btn btn-primary pull-right" style="background-color:green;float:right" data-bs-toggle="modal" data-bs-target="#addsalle"><i class="fa fa-plus"></i>Seance</button>
      </h2>
   </div>
</div>
<div class="row">
   <div class="col-md-12 col-md-offset-1">
      <table class="table table-bordered table-responsive table-striped">
         <thead>
            <th>Seance Id</th>
            <th>Jour du Seance</th>
            <th>Seance Start</th>
            <th>Seance End</th>
            <th>Activite</th>
            <th>coach</th>
            <th>Salle</th>
            <th>Action</th>
         </thead>
         <tbody>
            @foreach($seances as $seance)
                  <tr>
                      <td>{{$seance->id}}</td>
                      <td>{{$seance->weekday}}</td>
                      <td>{{$seance->start_time}}</td>
                      <td>{{$seance->end_time}}</td>
                      <td>{{$seance->activite}}</td>
                      <td>{{$seance->coach->name}}</td>
                      <td>{{$seance->salle->name}}</td>
                     <td>
                        <a href="#" class="btn btn-succes" style="background-color:rgb(73, 238, 73)"><i class="fa fa-edit" ></i>Edit</a>
                        <a href="#"  class="btn btn-danger" style="background-color: red"><i class="fa fa-trash" ></i>Delete</a>
                     </td>

                  </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection