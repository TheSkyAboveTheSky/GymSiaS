<!--------------------- Modal for Clients ------------->
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
<!--------------------- Modal for Salles ----------------->
<!--------------------- Modal for Abonnements------------->