<div class="container">
  <div class= "row">
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">     
        <h1>{{ $tareas->first()->user->cargo->name }} - {{$tareas->first()->user->name}} </h1>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">     
        <a href="/logout"><span class="glyphicon glyphicon-off"></span> Cerrar Sesión</a>
    </div>

  </div>
  
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
          @if($tarea->status == 'Aprobada' || $tarea->status == 'Completada')            
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
          @if($tarea->status == 'Aprobada' || $tarea->status == 'Completada')
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
            
          @elseif($tarea->status == 'En Revision')
            <td class="text-center warning">
              {{ $tarea->status }}
            </td>                

          @elseif($tarea->status == 'Modificar')
            <td class="text-center danger">
              <strong>{{ $tarea->status }}</strong>
            </td>                
              
          @elseif($tarea->status == 'Aprobada' || $tarea->status == 'Completada')
            <td class="text-center success">
              {{ $tarea->status }}
            </td>                

          @elseif($tarea->status == 'Rechazada')
            <td class="text-center default">
              <strong>{{ $tarea->status }}</strong>
            </td>                

          @endif                      

          <!-- Intentos -->               
          <td class="text-center">
            <div class="dropdown">

            @if($tarea->status == 'Aprobada' || $tarea->status == 'Completada')
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
            @if($tarea->status == 'Aprobada' || $tarea->status == 'Completada' || $tarea->path_in == NULL)
              <button class="disabled btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"> <span class="glyphicon glyphicon-chevron-down"></span></button>
            @else
              <a href="{{ URL::to( '/download/'.$tarea->path_in) }}"><span class="glyphicon glyphicon-chevron-down"></span> </a>
            @endif  
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
        @include('modals.alerts')
        
        <!-- Observaciones Modal -->
        @include('modals.obs')

        <!-- Enviar Modal -->
        @if($role = $tarea->user->cargo->rol) @endif

        @if($role == "Worker")
          @include('modals.sends_worker')
        @elseif($role == "Manager")  
          @include('modals.sends_manager')
        @elseif($role == "Expert")
          @include('modals.sends_expert')  
        @endif  
          
      @endforeach    
    </tbody>
  </table>

</div>