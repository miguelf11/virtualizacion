<div id= {{ $enviarModalId }} class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enviar Tarea</h4>
        <h6>{{ $tarea->t_prod->name }}</h6>
      </div>
      <div class="modal-body">

        <form method="post" action="/flow/{{ $tarea->id }}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
              
          <div class="form-group">
            <label>Subir Archivo</label>
            <input type="file" name="out" accept="">
          </div>               
            
          <hr>
          <div class="form-group">                   
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form> 
        
      </div>     
    </div>
  </div>
</div>          