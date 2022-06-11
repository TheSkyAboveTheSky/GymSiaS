@extends('adminlte::page')
@section('content')
<form class="form-inline my-2 my-lg-0"  type="get" action="{{url('/searchsalles')}}">
  <input class="form-control mr-sm-2" type="search" name="querysalle"  placeholder="Search" aria-Label="">
  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
</form>
<h2 class="display-6">Salles list</h2>
<a href="{{route('salles.create')}}" class=" btn btn-primary pull-right" style="background-color:green;float:right"><i class="fa fa-plus"></i>salle</a>
<hr/>
  <div class="row">
    <div class="col-md-44 col-md-offset-1">
      <table class="table table-bordered table-responsive table-striped">
        <thead>
        <tr>
          <th>Salle Id</th>
          <th>Salle Name</th>
          <th>Salle Adresse</th>
          <th>Actions</th>
        </thead>
        <tbody>
        @foreach($salles as $salle)
        <tr>
          <td>{{$salle->id}}</td>
          <td>{{$salle->name}}</td>
          <td>{{$salle->adresse}}</td>
          <td>
             <div class="d-flex">
                <a href="{{route('salles.show', $salle->id)}}" class="btn btn-info m-1">Details</a>
                <a href="{{route('salles.edit', $salle->id)}}" class="btn btn-primary m-1">Edit</a>

                <form action="{{ route('salles.destroy', $salle->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-danger m-1">Delete Salle</button>
                </form>
            </div>
          </td>
        </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>

@endsection
