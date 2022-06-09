@extends('adminlte::page')
@section('content')
<h1 class="display-6">Create New Coach</h1>

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
    <form method="POST" action="http://127.0.0.1:8000/admin/coachs" accept-charset="UTF-8"><input name="_token" type="hidden" value="ftuwFLP9YjZbOHNR5eIWl38JQjtvQt6RXI2HqKwi">

      <input name="_token" type="hidden" value="ftuwFLP9YjZbOHNR5eIWl38JQjtvQt6RXI2HqKwi">
  
      

      <div class="form-group">
        <label for="name">Coach Name</label>
        <input class="form-control" name="name" type="text" value="" id="name">
      </div>

      <div class="form-group">
        <label for="email">Coach Email</label>
        <input class="form-control" name="email" type="email" value="" id="email">
      </div>

      <div class="form-group">
        <label for="salle_id">Coach Salle</label>
        <select class="form-control select2" name="salle_id" type="number" value="" id="salle_id">
          @foreach ($salles as $id => $salle)
                <option value="{{$id}}" {{old('salle_id') == $id ? 'selected' : ''}}>{{$salle}}</option>
          @endforeach 
        </select>
      </div>

      <div class="form-group">
        <label for="role_id">Coach Role</label>
        <input class="form-control" name="role_id"  value="1" id="role_id" type="hidden">
      </div>

      <input class="btn btn-primary" type="submit" value="Create!">
      </form>
          </div>
      </div>
@endsection