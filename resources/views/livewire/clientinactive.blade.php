@extends('admin.dashboard')
@section('content')

<h1 class="page-header text-center">Client List</h1>
<div class="row">
   <div class="col-md-12 col-md-offset-1">
      <h2>
         Client Table
         <button type="button" class="btn btn-primary pull-right" style="background-color:green;float:right" data-bs-toggle="modal" data-bs-target="#addnew"><i class="fa fa-plus"></i>Client</button>
      </h2>
   </div>
</div>
<div class="row">
   <div class="col-md-12 col-md-offset-1">
      <table class="table table-bordered table-responsive table-striped">
         <thead>
            <th>Client Id</th>
            <th>Client Name</th>
            <th>Client Email</th>
            <th>Action</th>
         </thead>
         <tbody>
            @foreach($clients as $client)
            @if ($client->role_id == 0)
              @if ($client->abonnement_expired_at <= $today)
                  <tr>
                     <td>{{$client->id}}</td>
                     <td>{{$client->name}}</td>
                     <td>{{$client->email}}</td>
                     <td>
                        <a href="#" class="btn btn-succes" style="background-color:rgb(73, 238, 73)"><i class="fa fa-edit" ></i>Renew</a>
                        <a href="#"  class="btn btn-danger" style="background-color: red"><i class="fa fa-trash" ></i>Delete</a>
                     </td>
                  </tr>
                @endif
            @endif
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection