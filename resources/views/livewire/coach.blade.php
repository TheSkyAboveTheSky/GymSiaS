@extends('admin.dashboard')
@section('content')
<h1 class="page-header text-center">Coach List</h1>
<div class="row">
   <div class="col-md-12 col-md-offset-1">
      <h2>
         Coach Table
         <button type="button" class="btn btn-primary pull-right" style="background-color:green;float:right" data-bs-toggle="modal" data-bs-target="#addnew2"><i class="fa fa-plus"></i>Coach</button>
      </h2>
   </div>
</div>
<div class="row">
   <div class="col-md-12 col-md-offset-1">
      <table class="table table-bordered table-responsive table-striped">
         <thead>
            <th>Coach Id</th>
            <th>Coach Name</th>
            <th>Coach Email</th>
            <th>Action</th>
         </thead>
         <tbody>
            @foreach($coachs as $coach)
            @if ($coach->role_id == 1)
                  <tr>
                     <td>{{$coach->id}}</td>
                     <td>{{$coach->name}}</td>
                     <td>{{$coach->email}}</td>
                     <td>
                        <a href="#" class="btn btn-succes" style="background-color:rgb(73, 238, 73)"><i class="fa fa-edit" ></i>Edit</a>
                        <a href="#"  class="btn btn-danger" style="background-color: red"><i class="fa fa-trash" ></i>Delete</a>
                     </td>
                  </tr>
            @endif
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection