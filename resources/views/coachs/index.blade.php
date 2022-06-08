@extends('adminlte::page')
@section('content')
<h2 class="display-6">coachs list</h2>
<a href="{{route('coachs.create')}}" class=" btn btn-primary pull-right" style="background-color:green;float:right"><i class="fa fa-plus"></i>Coach</a>
<hr/>
  <div class="row">
    <div class="col-md-12 col-md-offset-1">
      <table class="table table-bordered table-responsive table-striped">
        <thead>
        <tr>
          <th>Coach Id</th>
          <th>Coach name</th>
          <th>Coach Email</th>
          <th>Coach Salle</th>
          <th>Actions</th>
        </thead>
        <tbody>
        @foreach($coachs as $coach)
        <tr>
          <td>{{$coach->id}}</td>
          <td>{{$coach->name}}</td>
          <td>{{$coach->email}}</td>
          <td>{{$coach->salle->name}}</td>
          <td>
             <div class="d-flex">
                <a href="{{route('coachs.show', $coach->id)}}" class="btn btn-info m-1">Details</a>
                <a href="{{route('coachs.edit', $coach->id)}}" class="btn btn-primary m-1">Edit</a>

                <form action="{{ route('coachs.destroy', $coach->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-danger m-1">Delete Coach</button>
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
