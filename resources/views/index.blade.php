@extends("adminlte::page")
{{-- @extends("layouts.master") --}}
<div class="content">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          @foreach ($salles as $salle)
              <h2>{{$salle->salle_name}}</h2>
              <p>{{$salle->user->email}}</p>
{{--                  @foreach ($users as $user)
                    @if($user->id == $salle->user_id)
                        <h2>{{$user->name}}</h2>
                    @endif
                 @endforeach --}}
         @endforeach
        </div>
      </div>
    </div>
</div>

