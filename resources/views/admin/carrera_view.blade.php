@extends('layouts.admin_layout')
@section('content')		
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
	<!-- Validar Errores en el servidor-->
	<!-- mensaje de creacion de carrera-->
	@if(Session::has('flash_message'))
		<div class="alert alert-success alert-dismissible" role="alert">
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       {{ Session::get('flash_message') }}
		</div>
	@endif
	<!-- mensaje de edicion de carrera-->
	@if(Session::has('message'))
	    <div class="alert alert-success alert-dismissible" role="alert">
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       {{ Session::get('message') }}
		</div>
	@endif
	<div>
		<h2>{{$carrera->name}} </h2>
	</div>


	<div class="row">
		<div id = "addUsers" class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			<h2 class="text-center">Agregar Curso</h2>
			{!! Form::open(['route'=>'addCurso', 'method'=>'post'])!!}
			<table id="form">
				{!! Form::hidden('carrera_id',$carrera->id,['class'=>'form-control'])!!}
				<tr>
					<td>
						<div class="ui-widget">
							{!! Form::text('curso_name',null,['class'=>'form-control', 'placeholder'=>'Nombre','id'=>'tags'])!!}
						</div>
					</td>
				</tr>
				<tr>
			        <td>
			            <div class="addField">
							{!! Form::submit('Añadir curso', ['class'=>'btn btn-success'])!!}
			            </div>
                    </td>
				</tr>
			</table>
			{!! Form::close() !!}
		</div>

		<div id = "addUsers" class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
			<table class="table table-striped table-hover" >
				<thead>
			        <th>Curso</th>
			        <th>Código</th>
			        <th>Eliminar</th>
			    </thead>
				@foreach($carrera->cursos as $curso)
			    <tbody>
			        <td><a href="/curso/{{$curso->id}}">{{$curso->name}}</a></td>
			        <td>{{$curso->code}}</td>
			        <td class="text-left"><button class="btn glyphicon glyphicon-remove btn-danger btn-sm" type="button" data-toggle="modal" data-target="#modalDeleteUser{{$curso->id}}" ></button></td>
			    </tbody>
			    @endforeach
			</table>

			@foreach($carrera->cursos as $curso)
			<div id="modalDeleteUser{{$curso->id}}" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
				    	<div class="modal-header">
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        	<h4 class="modal-title">Eliminar {{ $curso-> name }} de {{$carrera->name }}</h4>
				      	</div>
				      	{!! Form::open(['action'=> 'CursoController@rmCurso', 'method'=>'post'])!!}
				      	<div class="modal-body">
				      	¿Desea eliminar el curso?
				     	</div>
				      	<div class="modal-footer">
				        	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        	{!! Form::hidden('carrera_id',$carrera->id,['class'=>'form-control'])!!}
				        	{!! Form::hidden('curso_id',$curso->id,['class'=>'form-control'])!!}
				        	{!! Form::submit('Eliminar', ['class'=>'btn btn btn-danger'])!!} 
				        	{!! Form::close() !!}
				      	</div>
				    </div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->	
			@endforeach	
		</div>
	</div>
</div>
<script>
  $(document).ready(function(){
    $(function() {
      var availableTags = '{!! URL::route('getMat') !!}'
      $( "#tags" ).autocomplete({
        source: availableTags
      });
    });
  });
</script>					        
@stop