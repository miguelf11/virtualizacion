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

		    @if($tareaType = $tarea->t_prod->type) @endif
        @if($tareaNum = $tarea->t_prod->id) @endif

        <!-- Revisar presentación estática final -->
        @if($tareaNum == 7)

          <form method="post" action="/flow/{{ $tarea->id }}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group">
              <label>Status</label>
              <div class="radio">
                <label><input type="radio" name="accept">Aprobada</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="reject">Rechazada</label>
              </div>
            </div>

            <div class="form-group">
              <label>Observaciones</label>
              <div class="form-group">
                <textarea name="obs" class="form-control" rows="5"></textarea>
              </div>
            </div>

            <hr>
            <div class="form-group">                   
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>                  
          </form>             

        <!-- Revisar versión final -->
        @elseif($tareaNum == 13)

          <form method="post" action="/flow/{{ $tarea->id }}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group">
              <label>Status</label>
              <div class="radio">
                <label><input type="radio" name="accept">Aprobada</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="reject">Rechazada</label>
              </div>
            </div> 

            <div class="form-group">
              <label>Tipo de Falla</label>
              <div class="radio">
                <label><input type="radio" name="animacion">Animación</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="html5">HTML5</label>
              </div>              
            </div>  

            <div class="form-group">                
              <label>Observaciones</label>
              <div class="form-group">
                <textarea name="obs" class="form-control" rows="5"></textarea>
              </div>
            </div>

            <hr>
            <div class="form-group">                   
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>                                                    
        </form>             

      @endif

      </div>     
    </div>
  </div>
</div>   