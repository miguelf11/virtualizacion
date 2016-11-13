<div class="container">
  <h1>{{ $tareas->first()->user->cargo->name }}</h1>
  <h3>Panel de Tareas</h3>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Cod</th>
        <th class="text-center">Tarea</th>
        <th class="text-center">Alertas</th>
        <th class="text-center">Observaciones</th>
        <th class="text-center">Estado</th>
        <th class="text-center">Intentos</th>
        <th class="text-center">Entrada</th>
        <th class="text-center">Enviar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tareas as $tarea)
        <tr>  
          <!-- Cod -->
          <td class="text-center">{{ $tarea->id }}</td>

          <!-- Tarea -->
          <td class="text-center">{{ $tarea->t_prod->name }}</td>                      

          <!-- Alertas -->
          <td class="text-center">         
          @if($alertasModalId = "#alertasModal_" . $tarea->id) @endif                 
          @if($tarea->status == 'Aprobada')            
            <button type="button" class="disabled btn btn-default" data-toggle="modal" data-target= {{ $alertasModalId }}>
          @else              
            <button type="button" class="btn btn-default" data-toggle="modal" data-target={{ $alertasModalId }}>
          @endif    
          @if($alertasModalId = "alertasModal_" . $tarea->id) @endif       
              <span class="glyphicon glyphicon-bell"></span>
            </button>
          </td>

          <!-- Observaciones -->
          <td class="text-center">
          @if($obsModalId = "#obsModal_" . $tarea->id) @endif                 
          @if($tarea->status == 'Aprobada')
            <button type="button" class="disabled btn btn-default" data-toggle="modal" data-target= {{ $obsModalId }}>
          @else              
            <button type="button" class="btn btn-default" data-toggle="modal" data-target= {{ $obsModalId }}>
          @endif  
          @if($obsModalId = "obsModal_" . $tarea->id) @endif                 
              <span class="glyphicon glyphicon-eye-open"></span>
            </button> 
          </td>

          <!-- Estado -->                 
          @if($tarea->status == 'Activa')
            <td class="text-center info">
              <strong>{{ $tarea->status }}</strong>
            </td>
            
          @elseif($tarea->status == 'En Revision' || $tarea->status == 'Por Aprobar' || $tarea->status == 'En Espera')
            <td class="text-center warning">
              {{ $tarea->status }}
            </td>                

          @elseif($tarea->status == 'Modificar' || $tarea->status == 'En Correccion')
            <td class="text-center danger">
              <strong>{{ $tarea->status }}</strong>
            </td>                
              
          @elseif($tarea->status == 'Aprobada')
            <td class="text-center success">
              {{ $tarea->status }}
            </td>                
          @endif                      

          <!-- Intentos -->               
          <td class="text-center">
            <div class="dropdown">

            @if($tarea->status == 'Aprobada')
              <button class="disabled btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            @else              
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            @endif  

                <span class="badge">{{ $tarea->intentos()->count() }}</span>
              </button>

                <table class="table table-condensed dropdown-menu">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tarea->intentos as $intento)
                    <tr>
                      <td>{{ $intento->num }}</td>
                      <td>{{ $intento->created_at }}</td>

                      @if($intento->status == 'Finalizado')
                        <td>{{ $intento->updated_at }}</td>
                      @elseif($intento->status == 'Activo')
                        <td></td>
                      @endif

                    </tr>
                    @endforeach                
                </tbody>
                </table>

            </div>
          </td>

          <!-- Entrada -->
          <td class="text-center">
            <div class="dropdown">
            @if($tarea->status == 'Aprobada')
              <button class="disabled btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            @else  
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            @endif  
                <span class="glyphicon glyphicon-chevron-down"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#"></a></li>                
              </ul>
            </div>
          </td>

          <!-- Enviar -->          
          <td class="text-center">
          @if($enviarModalId = "#enviarModal_" . $tarea->id) @endif
          @if($tarea->status == 'Activa' || $tarea->status == 'Modificar')
          <button class="btn btn-primary" data-toggle="modal" data-target= {{ $enviarModalId }}>
          @else
          <button class="disabled btn btn-primary" data-toggle="modal" data-target= {{ $enviarModalId }}>
          @endif  
          @if($enviarModalId = "enviarModal_" . $tarea->id) @endif
            <span class="glyphicon glyphicon-send"></span>
          </button>
          </td>
        </tr>

        <!-- Modals -->

        <!-- Alertas Modal -->
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
        
        <!-- Observaciones Modal -->
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

        <!-- Enviar Modal -->
        <div id= {{ $enviarModalId }} class="modal fade" role="dialog">
          <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Enviar Tarea</h4>
            </div>
            <div class="modal-body">
              <h5>Subir Archivo</h5>
                <form action="">
                  <input type="file" name="out" accept="">
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
            </div>
          </div>
        </div>
      </div>        

      @endforeach    
    </tbody>
  </table>

</div>