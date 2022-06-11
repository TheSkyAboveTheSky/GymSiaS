@extends('adminlte::page')
@section('content')
<form class="form-inline my-2 my-lg-0"  type="get" action="{{url('/searchclients')}}">
  <input class="form-control mr-sm-2" type="search" name="queryclient" placeholder="Search" aria-Label="">
  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
</form>
<h2 class="display-6">Clients list</h2>
<a href="{{route('clients.create')}}" class=" btn btn-primary ml-10 mb-10" style="background-color:green;float:right"><i class="fa fa-plus"></i>Client</a>
<hr/>
<div class="row">
  <div class="col-md-16 col-md-offset-1">
    <table class="table table-bordered table-responsive table-striped">
        <thead>
          <th>Client Id</th>
          <th>Client Name</th>
          <th>Client Email</th>
          <th>Client Salle</th>
          <th>Actions</th>
        </thead>
        <tbody>
        @foreach($clients as $client)
          <td>{{$client->id}}</td>
          <td>{{$client->name}}</td>
          <td>{{$client->email}}</td>
          <td>{{$client->salle->name}}</td>
          <td>
             <div class="d-flex">
                <a href="{{route('clients.show', $client->id)}}" class="btn btn-info m-1">Details</a>
                <a href="{{route('clients.edit', $client->id)}}" class="btn btn-primary m-1">Edit</a>

                <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-danger m-1">Delete Client</button>
                </form>
            </div>
          </td>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>

</div>
@endsection
