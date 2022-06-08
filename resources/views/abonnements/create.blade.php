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
    <!-- Open the form with the store function route. -->
    {{ Form::open(['action' => 'AbonnementController@store']) }}

    <!-- Include the CRSF token -->
    {{Form::token()}}

    
    <!-- build our form inputs -->
    <div class="form-group">
      {{Form::label('duree', 'Abonnement Duree')}}
      {{Form::text('duree', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('prix', 'Abonnement Prix')}}
      {{Form::number('prix', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('salle_id', 'Abonnement Salle')}}
      {{Form::number('salle_id', '', ['class' => 'form-control'])}}
    </div>
    {{Form::submit('Create!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection