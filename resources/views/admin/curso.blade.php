@extends('layouts.admin_layout')
@section('content')		
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
	<!-- Validar Errores en el servidor-->
	<!-- mensaje de creacion de curso-->
	@if(Session::has('flash_message'))
		<div class="alert alert-success alert-dismissible" role="alert">
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       {{ Session::get('flash_message') }}
		</div>
	@endif
	<!-- mensaje de edicion de curso-->
	@if(Session::has('message'))
	    <div class="alert alert-success alert-dismissible" role="alert">
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       {{ Session::get('message') }}
		</div>
	@endif
	<div>
		<h2> Administrar cursos </h2>
	</div>
	<div class="row">
		<div id = "addUsers" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div>
				<div>
					<h3> Crear cursos</h3>
				</div>
				{!! Form::open(['route'=>'curso.store', 'method'=>'post'])!!}
				<table id="form">
					<tr>
                        <td>
							{!! Form::label('Nombre')!!}
							{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
                        </td>
                    </tr>			                    
                   	<tr>
                        <td>
                        	{!! Form::label('Código')!!}
							{!! Form::text('code',null,['class'=>'form-control', 'placeholder'=>'código'])!!}
                        </td>
                    </tr>		                    
                    <tr>
                        <td>
				            <div class="addField">
							{!! Form::submit('Crear curso', ['class'=>'btn btn-success'])!!}
				            </div>
                        </td>
                    </tr>				                    
	            </table>
				{!! Form::close() !!}
	        </div>
		</div>

		<div id = "showUsers" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div>
			    <h1>curso</h1>
		        <table class="table table-striped table-hover" >
		            <thead>
		                <th>Nombre</th>
		                <th>Código</th>
		                <th>Editar</th>
		                <th>Eliminar</th>
		            </thead>
					@foreach($cursos as $curso)
		            <tbody>
		                <td><a href="/curso/{{$curso->id}}">{{$curso->name}}</td>
		                <td>{{ $curso->code }}</td>

		                <td class="text-left"><button id ="edit" class="btn glyphicon glyphicon-pencil btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalUser{{$curso->id}}" data-id="{{ $curso->id }}" ></button></td>
	                
		                <td class="text-left"><button class="btn glyphicon glyphicon-remove btn-danger btn-sm" type="button" data-toggle="modal" data-target="#modalDeleteUser{{$curso->id}}" ></button></td>
		            </tbody>
					@endforeach 
		        </table>

		        @foreach($cursos as $curso)
				<div id="modalUser{{$curso->id}}" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
					    	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					       		<h4 class="modal-title">Editar curso: {{ $curso-> name }}</h4>
					      	</div>
					      	<div class="modal-body">
					      	{!! Form::model($curso,['route'=> ['curso.update',$curso->id], 'method'=>'PUT'])!!}

					      		{!! Form::label('Nombre')!!}
								{!! Form::text('name',$curso->name,['class'=>'form-control'])!!}

								{!! Form::label('Código')!!}
								{!! Form::text('code',$curso->code,['class'=>'form-control'])!!}
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

				@foreach($cursos as $curso)
				<div id="modalDeleteUser{{$curso->id}}" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
					    	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        	<h4 class="modal-title">Eliminar curso: {{ $curso-> name }}</h4>
					      	</div>
					      	{!! Form::open(['route'=> ['curso.update',$curso->id], 'method'=>'delete'])!!}
					      	<div class="modal-body">
					      	¿Desea eliminar el curso?
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