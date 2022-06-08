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
    <!-- Open the form with the store function route. -->
    {{ Form::open(['action' => ['CoachController@update', $coach->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
      {{Form::label('name', 'Coach Name')}}
      {{Form::text('name', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('salle_id', 'Coach Salle')}}
      {{Form::number('salle_id', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'Coach Email')}}
      {{Form::email('email', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group" class="hidden">
      {{Form::label('role_id', 'Coach Role')}}
      {{Form::number('role_id', '', ['class' => 'form-control'])}}
    </div>
    <br>
    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection
