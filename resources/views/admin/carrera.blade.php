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
		<h2> Administrar Carreras </h2>
	</div>
	<div class="row">
		<div id = "addUsers" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div>
				<div>
					<h3> Crear Carreras</h3>
				</div>
				{!! Form::open(['route'=>'carrera.store', 'method'=>'post'])!!}
				<table id="form">
					<tr>
                        <td>
							{!! Form::label('Nombre')!!}
							{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
                        </td>
                    </tr>			                    
                   	<tr>
                        <td>
                        	{!! Form::label('Tipo')!!}
                        	{!! Form::select('type',
								array(
								'Tecnologico' => 'Tecnologico', 
								'Pregrado' => 'Pregrado',
								'Postgrado' => 'Postgrado',
								'Diplomado' => 'Diplomado',
								'Extension' => 'Extension',
								'Otro' => 'Otro'), null, ['class'=>'form-control','placeholder'=>'seleccione']
	                    	)!!}
                        </td>
                    </tr>			                    
                    <tr>
                        <td>
				            <div class="addField">
							{!! Form::submit('Crear Carrera', ['class'=>'btn btn-success'])!!}
				            </div>
                        </td>
                    </tr>				                    
	            </table>
				{!! Form::close() !!}
	        </div>
		</div>

		<div id = "showUsers" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div>
			    <h1>Carrera</h1>
		        <table class="table table-striped table-hover" >
		            <thead>
		                <th>Nombre</th>
		                <th>Tipo</th>
		                <th>Editar</th>
		                <th>Eliminar</th>
		            </thead>
					@foreach($carreras as $carrera)
		            <tbody>
		                <td><a href="/carrera/{{$carrera->id}}"> {{ $carrera->name }}</td>
		                <td>{{ $carrera->type }}</td>

		                <td class="text-left"><button id ="edit" class="btn glyphicon glyphicon-pencil btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalUser{{$carrera->id}}" data-id="{{ $carrera->id }}" ></button></td>
	                
		                <td class="text-left"><button class="btn glyphicon glyphicon-remove btn-danger btn-sm" type="button" data-toggle="modal" data-target="#modalDeleteUser{{$carrera->id}}" ></button></td>
		            </tbody>
					@endforeach 
		        </table>
		        {!! $carreras->render() !!}

		        @foreach($carreras as $carrera)
				<div id="modalUser{{$carrera->id}}" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
					    	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					       		<h4 class="modal-title">Editar Carrera: {{ $carrera-> name }}</h4>
					      	</div>
					      	<div class="modal-body">
					      	{!! Form::model($carrera,['route'=> ['carrera.update',$carrera->id], 'method'=>'PUT'])!!}

					      		{!! Form::label('Nombre')!!}
								{!! Form::text('name',$carrera->name,['class'=>'form-control'])!!}

								{!! Form::label('Tipo')!!}
								{!! Form::text('type',$carrera->type,['class'=>'form-control'])!!}

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					        {!! Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
					        
					      </div>
					     {!! Form::close() !!}
					    </div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->	
				@endforeach	

				@foreach($carreras as $carrera)
				<div id="modalDeleteUser{{$carrera->id}}" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
					    	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        	<h4 class="modal-title">Eliminar Carrera: {{ $carrera-> name }}</h4>
					      	</div>
					      	{!! Form::open(['route'=> ['carrera.update',$carrera->id], 'method'=>'delete'])!!}
					      	<div class="modal-body">
					      	¿Desea eliminar la Carrera?
					     	</div>
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
</div>						        
@stop