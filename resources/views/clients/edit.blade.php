@extends('adminlte::page')

@section('content')
<h1 class="display-6">Edit Client</h1>

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
<form method="POST" action="http://127.0.0.1:8000/admin/clients/1" accept-charset="UTF-8"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="ftuwFLP9YjZbOHNR5eIWl38JQjtvQt6RXI2HqKwi">

  <input name="_token" type="hidden" value="ftuwFLP9YjZbOHNR5eIWl38JQjtvQt6RXI2HqKwi">
  <div class="form-group">
    <label for="name">Client Name</label>
    <input class="form-control" name="name" type="text" value="{{old('name',$client->name)}}" id="name">
  </div>

  <div class="form-group">
    <label for="duree_abonement_in_months">Client duree_abonement_in_months</label>
    <input class="form-control" name="duree_abonement_in_months" type="number" value="{{old('duree_abonement_in_months',$client->duree_abonement_in_months)}}" id="duree_abonement_in_months">
  </div>

  <div class="form-group">
    <label for="email">Client Email</label>
    <input class="form-control" name="email" type="email" value="{{old('email',$client->email)}}" id="email">
  </div>

  <div class="form-group">
    <label for="salle_id">Client Salle</label>
    <select class="form-control select2" name="salle_id" type="number" value="" id="salle_id">
      @foreach ($salles as $id => $salle)
      <option value="{{$id}}" {{$client->salle ? $client->salle->id:old('salle_id') == $id ? 'selected' : ''}}>{{$salle}}</option>
       @endforeach
    </select>
  </div>
  
  <div class="form-group">
    <label for="role_id"></label>
    <input class="form-control hidden" name="role_id" type="hidden" value="0" id="role_id">
  </div>
  <input class="btn btn-primary" type="submit" value="Create!">
  </form>
      </div>
  </div>
@endsection
