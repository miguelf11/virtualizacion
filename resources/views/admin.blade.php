@extends('layouts.admin_layout')
@section('content')		
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<!-- Validar Errores en el servidor-->
				<!-- mensaje de creacion de usuario-->
				@if(Session::has('flash_message'))
				    <div class="alert alert-success alert-dismissible" role="alert">
				    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					       {{ Session::get('flash_message') }}
					</div>

				@endif
				<!-- mensaje de edicion de usuario-->
				@if(Session::has('message'))
				    <div class="alert alert-success alert-dismissible" role="alert">
				    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					       {{ Session::get('message') }}
					</div>
				@endif
				<div>
					<h2> Administrar Usuarios </h2>
				</div>
				<div class="row">
					<div id = "addUsers" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div>
							<div>
								<h3> Crear Usuario</h3>
							</div>
						{!! Form::open(['route'=>'admin.store', 'method'=>'post'])!!}
							<table id="form">
									<tr>
				                        <td>
											{!! Form::label('Nombre')!!}
											{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
				                        </td>
				                    </tr>
				                    <tr>
				                        <td>
											{!! Form::label('Apellido')!!}
											{!! Form::text('lastname',null,['class'=>'form-control', 'placeholder'=>'Apellido'])!!}
				                        </td>
				                    </tr>			                    
				                   	<tr>
				                        <td>
				                        	{!! Form::label('Correo Electrónico')!!}
											{!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'correo@dominio.com'])!!}
				                        </td>
				                    </tr>
				                    <tr>
				                        <td>
				                        	{!! Form::label('Contraseña')!!}
											{!! Form::password('password',['class'=>'form-control', 'placeholder'=>'*******'])!!}				
				                        </td>
				                    </tr>
				                    <tr>
				                        <td>
				                        	{!! Form::label('Rol')!!}
				                        	{!! Form::select('role',
												array(
												'Especialista' => 'Especialista', 
												'Sincronizador' => 'Sincronizador'), null, ['class'=>'form-control','placeholder'=>'seleccione']
				                        	)!!}
				                        </td>
				                    </tr>				                    
				                    <tr>
				                        <td>
								            <div class="addField">
											{!! Form::submit('Crear Usuario', ['class'=>'btn btn-success'])!!}
								            </div>
				                        </td>
				                    </tr>				                    
				            </table>
						{!! Form::close() !!}
				        </div>
						
					</div>
					<div id = "showUsers" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						 <div>
						    <h1>Usuarios</h1>
					        <table class="table table-striped table-hover" >
					            <thead>
					                <th>Nombre</th>
					                <th>Apellido</th>
					                <th>Correo Electrónico</th>
					                <th>Rol</th>
					                <th>Editar</th>
					                <th>Eliminar</th>
					            </thead>
								@foreach($users as $user)
					            <tbody>
					                <td>{{ $user->name }}</td>
					                <td>{{ $user->lastname }}</td>
					                <td>{{ $user->email }}</td>
					                <td>{{ $user->role }}</td>

					                <td class="text-right"><button id ="edit" class="btn glyphicon glyphicon-pencil btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalUser{{$user->id}}" data-id="{{ $user->id }}" ></button></td>
				                
					                <td class="text-right"><button class="btn glyphicon glyphicon-remove btn-danger btn-sm" type="button" data-toggle="modal" data-target="#modalDeleteUser{{$user->id}}" ></button></td>
					            </tbody>
								@endforeach 
					        </table>
					    </div>
					</div>

						        
@stop