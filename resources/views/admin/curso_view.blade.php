@extends('layouts.admin_layout')
@section('content')		
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
	<!-- Validar Errores en el servidor-->
	<!-- mensaje de creacion de leccion de curso-->
	@if(Session::has('flash_message'))
		<div class="alert alert-success alert-dismissible" role="alert">
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       {{ Session::get('flash_message') }}
		</div>
	@endif
	<!-- mensaje de edicion de leccion-->
	@if(Session::has('message'))
	    <div class="alert alert-success alert-dismissible" role="alert">
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       {{ Session::get('message') }}
		</div>
	@endif
	<div>
		<h2>{{$curso->name}} </h2>
	</div>

	<div class="row">
		<div id = "addUsers" class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			<h2 class="text-center">Agregar Lecciones</h2>
			{!! Form::open(['route'=>'leccion.store', 'method'=>'post'])!!}
			<table id="form">
				{!! Form::hidden('curso_id',$curso->id,['class'=>'form-control'])!!}
				<tr>
					<td>
						{!! Form::label('Nombre')!!}
						{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('Código')!!}
						{!! Form::text('code',null,['class'=>'form-control', 'placeholder'=>'Código'])!!}
					</td>
				</tr>
				<tr>
                    <td>
                    	{!! Form::label('Estado')!!}
                    	{!! Form::select('status',
							array(
							'Activa' => 'Activa', 
							'Completada' => 'Completada'), null, ['class'=>'form-control','placeholder'=>'seleccione']
                    	)!!}
                    </td>
                </tr>
                <tr>
                    <td>
                    	{!! Form::label('Audio:')!!}
                    	{!! Form::checkbox('audio', 'TRUE') !!}
                    </td>
                </tr>
				<tr>
			        <td>
			            <div class="addField">
							{!! Form::submit('Añadir leccion', ['class'=>'btn btn-success'])!!}
			            </div>
                    </td>
				</tr>
			</table>
			{!! Form::close() !!}
		</div>

		<div id = "addUsers" class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
			<table class="table table-striped table-hover" >
				<thead>
			        <th>Tarea</th>
			        <th>Código</th>
			        <th>Status</th>
			        <th>Eliminar</th>
			    </thead>
				@foreach($curso->lecciones as $leccion)
			    <tbody>
			        <td>{{$leccion->name}}</td>
			        <td>{{$leccion->code}}</td>
			        <td>{{$leccion->status}}</td>
			        <td class="text-left"><button class="btn glyphicon glyphicon-remove btn-danger btn-sm" type="button" data-toggle="modal" data-target="#modalDeleteUser{{$leccion->id}}" ></button></td>
			    </tbody>
			    @endforeach
			</table>

			@foreach($curso->lecciones as $leccion)
			<div id="modalDeleteUser{{$leccion->id}}" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
				    	<div class="modal-header">
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        	<h4 class="modal-title">Eliminar Leccion: {{ $leccion-> name }}</h4>
				      	</div>
				      	{!! Form::open(['route'=> ['leccion.destroy',$leccion->id], 'method'=>'delete'])!!}
				      	<div class="modal-body">
				      	¿Desea eliminar la Leccion?
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


			        
@stop