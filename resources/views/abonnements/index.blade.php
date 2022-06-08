@extends('adminlte::page')
@section('content')
<h2 class="display-6">abonnements list</h2>
<a href="{{route('abonnements.create')}}" class=" btn btn-primary pull-right" style="background-color:green;float:right"><i class="fa fa-plus"></i>Abonnement</a>
<hr/>
  <div class="row">
    <div class="col-md-12 col-md-offset-1">
      <table class="table table-bordered table-responsive table-striped">
        <thead>
        <tr>
          <th>Abonnement Id</th>
          <th>Abonnement Duree</th>
          <th>Abonnement Prix</th>
          <th>Abonnement Salle</th>
          <th>Actions</th>
        </thead>
        <tbody>
        @foreach($abonnements as $abonnement)
        <tr>
          <td>{{$abonnement->id}}</td>
          <td>{{$abonnement->duree}}</td>
          <td>{{$abonnement->prix}}</td>
          <td>{{$abonnement->salle->name}}</td>
          <td>
             <div class="d-flex">
                <a href="{{route('abonnements.show', $abonnement->id)}}" class="btn btn-info m-1">Details</a>
                <a href="{{route('abonnements.edit', $abonnement->id)}}" class="btn btn-primary m-1">Edit</a>

                <form action="{{ route('abonnements.destroy', $abonnement->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-danger m-1">Delete Abonnement</button>
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
