<div id= {{ $obsModalId }} class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Observaciones</h4>
      </div>
      <div class="modal-body">
        @foreach($tarea->observaciones as $obs)          
          <p>{{ $obs->title }}</p>
          <p>{{ $obs->data }}</p>
        @endforeach  
      </div>     
    </div>
  </div>
</div> 