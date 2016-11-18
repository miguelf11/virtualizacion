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

        @if($role = $tarea->user->cargo->rol) @endif
        @if($tareaType = $tarea->t_prod->id) @endif

        <!-- W O R K E R -->  
        @if($role == "Worker") 

          <!-- Generar cortes de audio -->  
          @if($tareaType == 2)            
            <form action="">
              <label>Subir cortes de audio</label>
              <input type="file" name="out" accept="">
            </form> 

          <!-- Realizar presentación estática -->  
          @elseif($tareaType == 5)                       
            <form action="">
              <label>Subir PPT estático</label>
              <input type="file" name="out" accept="">
            </form>           

          <!-- Realizar animaciones de láminas -->  
          @elseif($tareaType == 9)                       
            <form action="">
              <label>Subir PPT animado</label>
              <input type="file" name="out" accept="">
            </form>                       

          <!-- Generar HTML5 -->  
          @elseif($tareaType == 11)                       
            <form action="">
              <label>Subir HTML5</label>
              <input type="file" name="out" accept="">
            </form>            

          @endif  

        <!-- M A N A G E R -->  
        @elseif($role == "Manager")

          <!-- tareaType: Asignar -->
          @if($tareaType == 1 || $tareaType == 4 || $tareaType == 8) 

            <!-- Asignar Tecnico de Audio -->
            @if($tareaType == 1)
              
              <form action="">
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
              </form> 

            <!-- Asignar Diseñador Gráfico -->                                   
            @elseif($tareaType == 4)
              
              <form action="">
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
              </form> 

            <!-- Asignar Sincronizador -->                                   
            @elseif($tareaType == 8)
              
              <form action="">
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
              </form> 

            @endif  

          <!-- tareaType: Revisar -->
          @elseif($tareaType == 3 || $tareaType == 6 || $tareaType == 10 || $tareaType == 12)
                        
            <form action="">
              <label>Status</label>
              <div class="radio">
                <label><input type="radio" name="optradio">Aprobada</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="optradio">Rechazada</label>
              </div>
              <label>Observaciones</label>
              <div class="form-group">
                <textarea class="form-control" rows="5"></textarea>
              </div>
            </form>             

          @endif  

        <!-- E X P E R T -->  
        @elseif($role == "Expert")

          <!-- Revisar presentación estática final -->
          @if($tareaType == 7)

            <form action="">
              <label>Status</label>
              <div class="radio">
                <label><input type="radio" name="optradio">Aprobada</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="optradio">Rechazada</label>
              </div>
              <label>Observaciones</label>
              <div class="form-group">
                <textarea class="form-control" rows="5"></textarea>
              </div>
            </form>             

          <!-- Revisar versión final -->
          @elseif($tareaType == 13)

            <form action="">
              <label>Status</label>
              <div class="radio">
                <label><input type="radio" name="optradio">Aprobada</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="optradio">Rechazada</label>
              </div>
              <label>Tipo de Falla</label>
              <div class="radio">
                <label><input type="radio" name="optradio">Animación</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="optradio">HTML5</label>
              </div>              
              <label>Observaciones</label>
              <div class="form-group">
                <textarea class="form-control" rows="5"></textarea>
              </div>
            </form>             

          @endif
          
        @endif

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
      </div>
    </div>
  </div>
</div>   