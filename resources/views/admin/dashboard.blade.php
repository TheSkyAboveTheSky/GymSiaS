@extends("adminlte::page")
@section('content')
<h3>Admin Dashboard</h3>
<hr>
<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>+{{$clients}}</h3>
<p>Numnber Of Clients</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="/admin/clients" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>+{{$coachs}}</h3>
<p>Number Of Coachs</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="/admin/coachs" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>+{{$salles}}</h3>
<p>Number Of Salles</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a href="/admin/salles" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<div class="col-lg-3 col-6">

  <div class="small-box bg-danger">
  <div class="inner">
  <h3>+{{$seances}}</h3>
  <p>Number Of Seances</p>
  </div>
  <div class="icon">
  <i class="ion ion-stats-bars"></i>
  </div>
  <a href="/admin/seances" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>

<div class="col-lg-3 col-6">

  <div class="small-box bg-info">
  <div class="inner">
  <h3>+{{$abonnements}}</h3>
  <p>Number Of Abonnement</p>
  </div>
  <div class="icon">
  <i class="ion ion-stats-bars"></i>
  </div>
  <a href="/admin/abonnements" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>

  <div class="col-lg-3 col-6">

    <div class="small-box bg-success">
    <div class="inner">
    <h3>+{{$month}}</h3>
    <p>Clients Joined this Month</p>
    </div>
    <div class="icon">
    <i class="ion ion-stats-bars"></i>
    </div>
    <a href="/admin/abonnements" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

      <div class="small-box bg-warning">
      <div class="inner">
      <h3>+{{$year}}</h3>
      <p>Clients Joined this Year</p>
      </div>
      <div class="icon">
      <i class="ion ion-stats-bars"></i>
      </div>
      <a href="/admin/abonnements" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      </div> 

      <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
        <div class="inner">
        <h3>+{{$active}}</h3>
        <p>Clients Active</p>
        </div>
        <div class="icon">
        <i class="ion ion-stats-bars"></i>
        </div>
        <a href="/admin/clients" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div> 


        <div class="col-lg-3 col-6">

          <div class="small-box bg-info">
          <div class="inner">
          <h3>+{{$inactive}}</h3>
          <p>Clients InActive</p>
          </div>
          <div class="icon">
          <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/admin/clients" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          </div> 

@endsection