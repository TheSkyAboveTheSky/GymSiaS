@extends('adminlte::page')
@section('content')
<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 20px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

</style>
@foreach($abonnements as $abonnement)
    <div class="card">

    <div class="image">
        <img src="{{url('/images/logo.png')}}">
    </div>
    <div class="title">
    <label>Salle</label>
        <h1>
            {{$abonnement->salle->name}}
        </h1>
    </div>
    <div class="des">
        <label>Durée</label>
        <p>{{$abonnement->duree}}</p>
        <label>Prix</label>
    <button>{{$abonnement->prix}}</button>
    </div>
    </div>
@endforeach
@endsection