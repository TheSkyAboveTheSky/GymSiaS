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
    <!-- Open the form with the store function route. -->
    {{ Form::open(['action' => ['SeanceController@update', $seance->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
      {{Form::label('weekday', 'Seance jour')}}
      {{Form::number('weekday', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('activite', 'Seance Activite')}}
      {{Form::text('activite', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('start_time', 'Seance start_time')}}
      {{Form::time('start_time', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('end_time', 'Seance end_time')}}
      {{Form::time('end_time', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('coach_id', 'Seance Coach')}}
      {{Form::number('coach_id', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('salle_id', 'Seance Salle')}}
      {{Form::number('salle_id', '', ['class' => 'form-control'])}}
    </div>
    <br>
    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection
