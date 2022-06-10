<!-- Modal -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form wire:submit.prevent="Demande">
          @csrf
          <div class="form-group">
            <label>Coach_id</label>
            <input class="form-control" wire:model="coach_id" type="hidden" value="{{Auth::user()->id}}" step="1">
          </div>
          <div class="form-group">
            <label>Seance jour</label>
            <input class="form-control" wire:model="weekday"type="number" value="" step="1">
          </div>
          <div class="form-group">
            <label>Seance start_time</label>
            <input class="form-control" wire:model="start_time" type="time" value="">
          </div>
          <div class="form-group">
            <label>Seance end_time</label>
            <input class="form-control" wire:model="end_date" type="time" value="">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>