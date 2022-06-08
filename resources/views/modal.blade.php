{{-- <!--------------------- Modal for Create Clients ------------->
<div class="modal fade" id="addclient" tableindex="-1" aria-labelledby="addnewModalLabel" area-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addnewModalLabel">Add New Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" area-label="Close"></button>
      </div>
      <div class="modal-body">
        {!!Form::open(['url' => 'save/client'])!!}
          <div class="mb-3">
            {!!Form::label('name','Name')!!}
            {!!Form::text('name','',['class' =>'form-control','placeholder'=>'Input name','required'])!!}
          </div>
          <div class="mb-3">
            {!!Form::label('email','Email')!!}
            {!!Form::email('email','',['class' =>'form-control','placeholder'=>'Input email','required'])!!}
          </div>
          <div class="mb-3">
            {!!Form::label('salle','Salle')!!}
            {!!Form::number('salle','',['class' =>'form-control','placeholder'=>'Input Salle','required'])!!}
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:grey"><i class="fa fa-times">Cancel</i></button>
        <button type="sumit" class="btn btn-primary"><i class="fa fa-save"></i>Save</button>
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
<!--------------------- Modal for Coachs ------------->
<div class="modal fade" id="addcoach" tableindex="-1" aria-labelledby="addnewModalLabel" area-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addnewModalLabel">Add New Coach</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" area-label="Close"></button>
      </div>
      <div class="modal-body">
        {!!Form::open(['url' => 'save/coach'])!!}
          <div class="mb-3">
            {!!Form::label('name','Name')!!}
            {!!Form::text('name','',['class' =>'form-control','placeholder'=>'Input name','required'])!!}
          </div>
          <div class="mb-3">
            {!!Form::label('email','Email')!!}
            {!!Form::email('email','',['class' =>'form-control','placeholder'=>'Input email','required'])!!}
          </div>
          <div class="mb-3">
            {!!Form::label('salle','Salle')!!}
            {!!Form::number('salle','',['class' =>'form-control','placeholder'=>'Input Salle','required'])!!}
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:grey"><i class="fa fa-times">Cancel</i></button>
        <button type="sumit" class="btn btn-primary"><i class="fa fa-save"></i>Save</button>
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
<!--------------------- Modal for Seances ---------------->
<div class="modal fade" id="addseance" tableindex="-1" aria-labelledby="addnewModalLabel" area-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addnewModalLabel">Add New Seance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" area-label="Close"></button>
      </div>
      <div class="modal-body">
        {!!Form::open(['url' => 'save/seance'])!!}
          <div class="mb-3">
            {!!Form::label('name','Name')!!}
            {!!Form::text('name','',['class' =>'form-control','placeholder'=>'Input name','required'])!!}
          </div>
          <div class="mb-3">
            {!!Form::label('email','Email')!!}
            {!!Form::email('email','',['class' =>'form-control','placeholder'=>'Input email','required'])!!}
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:grey"><i class="fa fa-times">Cancel</i></button>
        <button type="sumit" class="btn btn-primary"><i class="fa fa-save"></i>Save</button>
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
<!--------------------- Modal for Salles ----------------->
<div class="modal fade" id="addsalle" tableindex="-1" aria-labelledby="addnewModalLabel" area-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addnewModalLabel">Add New Salle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" area-label="Close"></button>
      </div>
      <div class="modal-body">
        {!!Form::open(['url' => 'save/salle'])!!}
          <div class="mb-3">
            {!!Form::label('name','Name')!!}
            {!!Form::text('name','',['class' =>'form-control','placeholder'=>'Input name','required'])!!}
          </div>
          <div class="mb-3">
            {!!Form::label('adresse','Adresse')!!}
            {!!Form::text('adresse','',['class' =>'form-control','placeholder'=>'Input adresse','required'])!!}
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:grey"><i class="fa fa-times">Cancel</i></button>
        <button type="sumit" class="btn btn-primary"><i class="fa fa-save"></i>Save</button>
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
<!--------------------- Modal for Abonnements------------->
<div class="modal fade" id="addabonnement" tableindex="-1" aria-labelledby="addnewModalLabel" area-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addnewModalLabel">Add New Abonnement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" area-label="Close"></button>
      </div>
      <div class="modal-body">
        {!!Form::open(['url' => 'save/abonnement'])!!}
          <div class="mb-3">
            {!!Form::label('duree','Duree')!!}
            {!!Form::text('duree','',['class' =>'form-control','placeholder'=>'Input duree','required'])!!}
          </div>
          <div class="mb-3">
            {!!Form::label('prix','Prix')!!}
            {!!Form::text('prix','',['class' =>'form-control','placeholder'=>'Input prix','required'])!!}
          </div>
          <div class="mb-3">
            {!!Form::label('salle','Salle')!!}
            {!!Form::number('salle','',['class' =>'form-control','placeholder'=>'Input salle','required'])!!}
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:grey"><i class="fa fa-times">Cancel</i></button>
        <button type="sumit" class="btn btn-primary"><i class="fa fa-save"></i>Save</button>
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
<!--------------------- Modal for Edit Clients ------------->
<div class="modal fade" id="#editclient" tableindex="-1" aria-labelledby="addnewModalLabel" area-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="addnewModalLabel">Edit Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" area-label="Close"></button>
      </div>
      <div class="modal-body">
        {!!Form::open(['url' => 'edit/client'])!!}
          <div class="mb-3">
            {!!Form::label('name','Name')!!}
            {!!Form::text('name','',['class' =>'form-control','placeholder'=>'Input name','required'])!!}
          </div>
          <div class="mb-3">
            {!!Form::label('email','Email')!!}
            {!!Form::email('email','',['class' =>'form-control','placeholder'=>'Input email','required'])!!}
          </div>
          <div class="mb-3">
            {!!Form::label('salle','Salle')!!}
            {!!Form::number('salle','',['class' =>'form-control','placeholder'=>'Input Salle','required'])!!}
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:grey"><i class="fa fa-times">Cancel</i></button>
        <button type="sumit" class="btn btn-primary"><i class="fa fa-save"></i>Save</button>
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div> --}}