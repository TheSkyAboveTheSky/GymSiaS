@extends('adminlte::page')

@section('content')
<h1 class="display-6">Edit Coach</h1>

<hr/>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="http://127.0.0.1:8000/admin/coachs/{{$coach->id}}" accept-charset="UTF-8"><input name="_method" type="hidden" value="PUT">
  @csrf

  <div class="form-group">
    <label for="name">Coach Name</label>
    <input class="form-control" name="name" type="text" value="{{old('name',$coach->name)}}" id="name">
  </div>

  <div class="form-group">
    <label for="email">Coach Email</label>
    <input class="form-control" name="email" type="email" value="{{old('email',$coach->email)}}" id="email">
  </div>

  <div class="form-group">
    <label for="salle_id">Coach Salle</label>
    <select class="form-control select2" name="salle_id" type="number" value="" id="salle_id">
      @foreach ($salles as $id => $salle)
      <option value="{{$id}}" {{$coach->salle ? $coach->salle->id : old('salle_id') == $id ? 'selected' : ''}}>{{$salle}}</option>
  @endforeach
  </div>

  <div class="form-group" class="hidden">
    <label for="role_id">Coach Role</label>
    <input class="form-control hidden" name="role_id" type="hidden" value="1" id="role_id">
  </div>

  <input class="btn btn-primary" type="submit" value="Update!">
  </form>

@endsection
