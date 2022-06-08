@extends('adminlte::page')
@section('content')
<h1 class="display-6">Create New Salle</h1>

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
    {{ Form::open(['action' => 'SalleController@store']) }}

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
    {{Form::submit('Create!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection