<!DOCTYPE html>
<html lang="es">
<head>
  <title>Prototipo Interfaz Worker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  <h3>Panel de Tareas</h3>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Cod</th>
        <th class="text-center">Tarea</th>
        <th class="text-center">Alertas</th> <!-- Alertas -->
        <th class="text-center">Observaciones</th> <!-- Observaciones -->
        <th class="text-center">Estado</th>
        <th class="text-center">Intentos</th>
        <th class="text-center">Entrada</th>
        <th class="text-center">Enviar</th>
      </tr>
    </thead>
    <tbody>
        <tr>  
          <!-- Cod -->
          <td class="text-center">U7L8</td>

          <!-- Tarea -->
          <td class="text-center">{{ $tarea->t_prod->name }}</td>

          <!-- Alertas -->
          <td class="text-center">    
            <?php $status = $tarea->status ?>
            @if($status == 'activa')
              <?php $class = 'btn-primary' ?>
            @elseif($status == 'en-revision')
              <?php $class = 'btn-warning' ?>
            @elseif($status == 'en-revision')
              <?php $class = 'btn-warning' ?>
            @endif       
            <button type="button" class="btn {{ $class }}">
              <strong>1</strong>&emsp;<span class="glyphicon glyphicon-bell"></span>
            </button>
          </td>

          <!-- Observaciones -->
          <td class="text-center">
            <button type="button" class="disabled btn btn-default">
              <span class="glyphicon glyphicon-eye-open"></span>
            </button>
          </td>

          <!-- Estado -->     
          <td class="text-center info">
            <?php $status = $tarea->status ?>
            @if($status == 'Activa')
              <?php $class = 'btn-primary' ?>
            @elseif($status == 'En Revision')
              <?php $class = 'btn-warning' ?>
            @elseif($status == 'Modificar')
              <?php $class = 'btn-danger' ?>
            @elseif($status == 'En Correccion')
              <?php $class = 'btn-warning' ?>
            @elseif($status == 'Por Aprobar')
              <?php $class = 'btn-warning' ?>
            @elseif($status == 'En Espera')
              <?php $class = 'btn-warning' ?>
            @elseif($status == 'Aprobada')
              <?php $class = 'btn-success' ?>              
            @endif            
            <strong>{{ $tarea->status }}</strong>
          </td>

          <!-- Intentos -->               
          <td class="text-center">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                <span class="badge">1</span>&emsp;<span class="glyphicon glyphicon-chevron-down"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">#1 &emsp; 15/07/2016</a></li>
              </ul>
            </div>
          </td>

          <!-- Entrada -->
          <td class="text-center">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                <span class="glyphicon glyphicon-chevron-down"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Guiones Audio</a></li>
                <li><a href="#">Guiones PPT</a></li>
              </ul>
            </div>
          </td>

          <!-- Enviar -->          
          <td class="text-center">
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-send"></span>
          </button>
          </td>
        </tr>
      @endforeach    
    </tbody>
  </table>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
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
</div>

</body>
</html>