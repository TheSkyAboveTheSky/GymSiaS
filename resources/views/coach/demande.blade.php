@extends('adminlte::page')
@section('content')
    {{ Form::open(['action' => ['DemandeCreneauController@demandec'], 'method' => 'put']) }}

    {{Form::token()}}

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
    <br>
    {{Form::submit('Demande!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection