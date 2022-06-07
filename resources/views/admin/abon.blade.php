@extends('admin.dashboard')
@section('content')
<h1 class="page-header text-center">Abonnement List</h1>
<div class="row">
   <div class="col-md-12 col-md-offset-1">
      <h2>
         Abonnements Table
         <button type="button" class="btn btn-primary pull-right" style="background-color:green;float:right" data-bs-toggle="modal" data-bs-target="#addsalle"><i class="fa fa-plus"></i>Abonnement</button>
      </h2>
   </div>
</div>
<div class="row">
   <div class="col-md-12 col-md-offset-1">
      <table class="table table-bordered table-responsive table-striped">
         <thead>
            <th>Abonnement Id </th>
            <th>Duree</th>
            <th>Prix</th>
            <th>Salle</th>
            <th>Action</th>
         </thead>
         <tbody>
            @foreach($abonnements as $abonnement)
                <tr>
                    <td>{{$abonnement->id}}</td>
                    <td>{{$abonnement->duree}}</td>
                    <td>{{$abonnement->prix}}</td>
                    <td>{{$abonnement->salle->name}}</td>
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