@extends('layouts.admin_layout')
@section('content')		
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
	<!-- Validar Errores en el servidor-->
	<!-- mensaje de creacion de cargo-->
	@if(Session::has('flash_message'))
		<div class="alert alert-success alert-dismissible" role="alert">
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       {{ Session::get('flash_message') }}
		</div>
	@endif
	<!-- mensaje de edicion de cargo-->
	@if(Session::has('message'))
	    <div class="alert alert-success alert-dismissible" role="alert">
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       {{ Session::get('message') }}
		</div>
	@endif
	<div>
		<h2> Administrar Cargos </h2>
	</div>
	<div class="row">
		<div id = "addUsers" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div>
				<div>
					<h3> Crear cargos</h3>
				</div>
				{!! Form::open(['route'=>'cargo.store', 'method'=>'post'])!!}
				<table id="form">
					<tr>
                        <td>
							{!! Form::label('Nombre')!!}
							{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
                        </td>
                    </tr>			                    
                   	<tr>
                        <td>
                        	{!! Form::label('Descripción')!!}
							{!! Form::text('descr',null,['class'=>'form-control',
							'placeholder'=>'Descripción'])!!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                        	{!! Form::label('Rol')!!}
							{!! Form::select('rol',
								array(
								'Worker' => 'Técnico',
								'Manager' => 'Manager',
								'Director' => 'Director'), null, ['class'=>'form-control']
                        	)!!}		
                        </td>
                    </tr>			                    
                    <tr>
                        <td>
				            <div class="addField">
							{!! Form::submit('Crear cargo', ['class'=>'btn btn-success'])!!}
				            </div>
                        </td>
                    </tr>				                    
	            </table>
				{!! Form::close() !!}
	        </div>
		</div>

		<div id = "showUsers" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div>
			    <h1>cargo</h1>
		        <table class="table table-striped table-hover" >
		            <thead>
		                <th>Nombre</th>
		                <th>Rol</th>
		                <th>Editar</th>
		                <th>Eliminar</th>
		            </thead>
					@foreach($cargos as $cargo)
		            <tbody>
		                <td>{{ $cargo->name }}</td>
		                <td>{{ $cargo->rol}}</td>

		                <td class="text-left"><button id ="edit" class="btn glyphicon glyphicon-pencil btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalUser{{$cargo->id}}" data-id="{{ $cargo->id }}" ></button></td>
	                
		                <td class="text-left"><button class="btn glyphicon glyphicon-remove btn-danger btn-sm" type="button" data-toggle="modal" data-target="#modalDeleteUser{{$cargo->id}}" ></button></td>
		            </tbody>
					@endforeach 
		        </table>
		        {!! $cargos->render() !!}

		        @foreach($cargos as $cargo)
				<div id="modalUser{{$cargo->id}}" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
					    	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					       		<h4 class="modal-title">Editar cargo: {{ $cargo-> name }}</h4>
					      	</div>
					      	<div class="modal-body">
					      	{!! Form::model($cargo,['route'=> ['cargo.update',$cargo->id], 'method'=>'PUT'])!!}

					      		{!! Form::label('Nombre')!!}
								{!! Form::text('name',$cargo->name,['class'=>'form-control'])!!}

								{!! Form::label('Tipo')!!}
								{!! Form::text('type',$cargo->rol,['class'=>'form-control'])!!}

								{!! Form::label('Duración')!!}
								{!! Form::text('duration',$cargo->duration,['class'=>'form-control'])!!}

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

				@foreach($cargos as $cargo)
				<div id="modalDeleteUser{{$cargo->id}}" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
					    	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        	<h4 class="modal-title">Eliminar cargo: {{ $cargo-> name }}</h4>
					      	</div>
					      	{!! Form::open(['route'=> ['cargo.update',$cargo->id], 'method'=>'delete'])!!}
					      	<div class="modal-body">
					      	¿Desea eliminar la cargo?
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