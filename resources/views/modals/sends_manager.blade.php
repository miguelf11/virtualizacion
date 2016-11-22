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

		    @if($tareaType == "Asignacion") 

 			    <!-- Asignar Tecnico de Audio -->
          @if($tareaNum == 1)
              
            <form method="post" action="/flow/{{ $tarea->id }}">
              <input type="hidden" name="_token" value="{{csrf_token()}}">

              <div class="form-group">
                <label>Seleccionar Técnico de Audio</label>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Técnicos de Audio
                    <span class="caret"></span>                    
                  </button>
                  <ul class="dropdown-menu">

                    <!-- Seleccionar Técnicos de Audio -->
                    @if($tecnicosAudio = DB::table('users')->where('cargo_id', '=', 6)->get()) @endif
                    @foreach($tecnicosAudio as $tecnico)
                      <li><a href="#">{{ $tecnico->name }}</a></li>
                    @endforeach  

                  </ul>
                </div>
              </div>

              <hr>
              <div class="form-group">                   
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form> 

          <!-- Asignar Diseñador Gráfico -->                                   
          @elseif($tareaNum == 4)
              
            <form method="post" action="/flow/{{ $tarea->id }}">
              <input type="hidden" name="_token" value="{{csrf_token()}}">

              <div class="form-group">
                <label>Seleccionar Diseñador Gráfico</label>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Diseñadores Gráficos
                    <span class="caret"></span>                    
                  </button>
                  <ul class="dropdown-menu">

                    <!-- Seleccionar Diseñadores Gráficos -->
                    @if($disenadores = DB::table('users')->where('cargo_id', '=', 8)->get()) @endif
                    @foreach($disenadores as $disenador)
                      <li><a href="#">{{ $disenador->name }}</a></li>
                    @endforeach  
                    
                  </ul>
                </div>
              </div>

              <hr>
              <div class="form-group">                   
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>                
            </form> 

          <!-- Asignar Sincronizador -->                                   
          @elseif($tareaNum == 8)
              
              <form method="post" action="/flow/{{ $tarea->id }}">
              <input type="hidden" name="_token" value="{{csrf_token()}}">

              <div class="form-group">
                <label>Seleccionar Sincronizador</label>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Sincronizadores
                    <span class="caret"></span>                    
                  </button>
                  <ul class="dropdown-menu">

                    <!-- Seleccionar Sincronizadores -->
                    @if($sincronizadores = DB::table('users')->where('cargo_id', '=', 7)->get()) @endif
                    @foreach($sincronizadores as $sincronizador)
                      <li><a href="#">{{ $sincronizador->name }}</a></li>
                    @endforeach  
                    
                  </ul>
                </div>
              </div>

              <hr>
              <div class="form-group">                   
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>                                                  
            </form> 

          @endif  

		    @elseif($tareaType == "Revision")

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
                <textarea class="form-control" rows="5"></textarea>
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