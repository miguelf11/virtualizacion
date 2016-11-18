<div id= {{ $alertasModalId }} class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alertas</h4>
      </div>
      <div class="modal-body">
        @foreach($tarea->alertas as $alerta)                            
          <p>{{ $alerta->title }}</p>
          <p>{{ $alerta->data }}</p>
        @endforeach  
      </div>     
    </div>
  </div>
</div>