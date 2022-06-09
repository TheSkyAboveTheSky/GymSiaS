@extends('adminlte::page')

@section('content')
<h1 class="display-6">Edit Seance</h1>

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

    <form method="POST" action="http://127.0.0.1:8000/admin/seances/1" accept-charset="UTF-8"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="ftuwFLP9YjZbOHNR5eIWl38JQjtvQt6RXI2HqKwi">

      <input name="_token" type="hidden" value="ftuwFLP9YjZbOHNR5eIWl38JQjtvQt6RXI2HqKwi">
      <div class="form-group">
        <label for="weekday">Seance jour</label>
        <input class="form-control" name="weekday" type="number" value="{{old('weekday',$seance->weekday)}}" step="1" id="weekday">
      </div>
      <div class="form-group">
        <label for="activite">Seance Activite</label>
        <input class="form-control" name="activite" type="text" value="{{old('activite',$seance->activite)}}" id="activite">
      </div>
      <div class="form-group">
        <label for="start_time">Seance start_time</label>
        <input class="form-control" name="start_time" type="time" value="{{old('start_time',$seance->start_time)}}" id="start_time">
      </div>
      <div class="form-group">
        <label for="end_time">Seance end_time</label>
        <input class="form-control" name="end_time" type="time" value="{{old('end_time',$seance->end_time)}}" id="end_time">
      </div>
      <div class="form-group">
        <label for="coach_id">Seance Coach</label>
        <select class="form-control select2" name="coach_id" type="number" value="" id="coach_id">
          @foreach($coachs as $id => $coach)
          <option value="{{$id}}" {{$seance->coach ? $seance->coach->id : old('coach_id') == $id ? 'selected' : ''}}>{{$coach}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="salle_id">Seance Salle</label>
        <select class="form-control select2" name="salle_id" type="number" value="" id="salle_id">
          @foreach($salles as $id => $salle)
          <option value="{{$id}}" {{$seance->salle ? $seance->salle->id : old('salle_id') == $id ? 'selected' : ''}}>{{$salle}}</option>
          @endforeach
        </select>
      </div>
      <input class="btn btn-primary" type="submit" value="Update!">
      </form>
@endsection
