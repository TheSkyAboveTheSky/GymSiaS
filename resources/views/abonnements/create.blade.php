@extends('adminlte::page')
@section('content')
<h1 class="display-6">Create New Abonnement</h1>

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
 <form method="POST" action="http://127.0.0.1:8000/admin/abonnements" accept-charset="UTF-8"><input name="_token" type="hidden" value="ftuwFLP9YjZbOHNR5eIWl38JQjtvQt6RXI2HqKwi">


  <input name="_token" type="hidden" value="ftuwFLP9YjZbOHNR5eIWl38JQjtvQt6RXI2HqKwi">

  
  <div class="form-group">
    <label for="duree">Abonnement Duree</label>
    <input class="form-control" name="duree" type="text" value="" id="duree">
  </div>


  <div class="form-group">
    <label for="prix">Abonnement Prix</label>
    <input class="form-control" name="prix" type="number" step ="1000" value="" id="prix">
  </div>


  <div class="form-group">
    <label for="salle_id">Abonnement Salle</label>
    <select class="form-control select2" name="salle_id" type="number"  id="salle_id">
      @foreach ($salles as $id => $salle)
          <option value="{{$id}}" {{old('salle_id') == $id ? 'selected' : ''}}>{{$salle}}</option>
      @endforeach
    </select>
  </div>

  <input class="btn btn-primary" type="submit" value="Create!">
  </form>


@endsection