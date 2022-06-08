{{-- <!--------------------- Modal for Edit Clients ------------->
<div class="modal fade" id="#editclient" tableindex="-1" aria-labelledby="addnewModalLabel" area-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="addnewModalLabel">Edit Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" area-label="Close"></button>
      </div>
      <div class="modal-body">
        {!!Form::open(['url' => 'save/wow'])!!}
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