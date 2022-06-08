@extends('adminlte::page')

@section('content')
<h1 class="display-6">Edit Salle</h1>

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
    {{ Form::open(['action' => ['SalleController@update', $salle->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
      {{Form::label('name', 'Salle Name')}}
      {{Form::text('name', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('adresse', 'Salle Adresse')}}
      {{Form::text('adresse', '', ['class' => 'form-control'])}}
    </div>
    <br>
    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection
