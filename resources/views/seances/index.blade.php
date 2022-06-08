@extends('adminlte::page')
@section('content')
<h2 class="display-6">Seances list</h2>
<a href="{{route('seances.create')}}" class=" btn btn-primary pull-right" style="background-color:green;float:right"><i class="fa fa-plus"></i>Seance</a>
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
          <th>Seance End</th>
          <th>Coach</th>
          <th>Salle</th>
        </thead>
        <tbody>
        @foreach($seances as $seance)
        <tr>
          <td>{{$seance->id}}</td>
          <td>{{$seance->weekday}}</td>
          <td>{{$seance->email}}</td>
          <td>{{$seance->start_time}}</td>
          <td>{{$seance->end_time}}</td>
          <td>{{$seance->coach->name}}</td>
          <td>{{$seance->salle->name}}</td>
          <td>
             <div class="d-flex">
                <a href="{{route('seances.show', $seance->id)}}" class="btn btn-info m-1">Details</a>
                <a href="{{route('seances.edit', $seance->id)}}" class="btn btn-primary m-1">Edit</a>

                <form action="{{ route('seances.destroy', $seance->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-danger m-1">Delete Seance</button>
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
