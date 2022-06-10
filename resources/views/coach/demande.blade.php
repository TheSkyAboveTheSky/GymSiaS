@extends('adminlte::page')
@section('content')
<form method="POST" action="http://127.0.0.1:8000/save" accept-charset="UTF-8">
  @csrf
  <div class="form-group">
    <label for="user_id"></label>
    <input class="form-control" name="user_id" type="hidden" value="{{Auth::user()->id}}" id="user_id">
  </div>
  <div class="form-group">
    <label for="seance_id">Seance Id</label>
    <input class="form-control" name="seance_id" type="number" value="" id="seance_id">
  </div>
  <div class="form-group">
    <label for="weekday">Seance Weekday</label>
    <input class="form-control" name="weekday" type="number" value="" id="weekday">
  </div>
  <div class="form-group">
    <label for="start_time">Start Time</label>
    <input class="form-control" name="start_time" type="time" value="" id="start_time">
  </div>
  <div class="form-group">
    <label for="end_date">End Time</label>
    <input class="form-control" name="end_date" type="time" value="" id="end_date">
  </div>
  <br>
  <input class="btn btn-primary" type="submit" value="Demande!">
  </form>
@endsection