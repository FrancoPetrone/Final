@extends('layout')

@section('content')
	<div class="container">
		<div class="row contenedor-panel">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p class="titulo">Editar Usuario</p>
				@foreach($errors->all() as $error)
					<p class="alert alert-danger">{{ $error }}</p>
				@endforeach
			</div>

			<form class="forms" action="{{ route('panel.usuarios.edit', $usuario->id) }}" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token()  }}">
				<input type="hidden" name="_method" value="PUT">

				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-user"></span> Nick</label>
					<input type="text" name="nick" class="form-control" id="nick" value="{{ $usuario->nick }}" placeholder="Nick" pattern=".{5,25}" required/>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-pawn"></span> Nivel</label>
					<select class="form-control" name="nivel" id="nivel" required>
					  @foreach($niveles as $nivel)
							<option value="{{ $nivel->id }}" {{ $nivel->id == $usuario->nivel_id ? 'selected' : '' }}>{{ $nivel->nombre }}</option>
					  @endforeach
					</select>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-triangle-right"></span> Nombre</label>
					<input type="text" name="nombre" class="form-control" id="nombre" value="{{ $usuario->nombre }}" placeholder="Nombre" pattern=".{3,50}" required/>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-triangle-right"></span> Apellido</label>
					<input type="text" name="apellido" class="form-control" id="apellido" value="{{ $usuario->apellido }}" placeholder="Apellido" pattern=".{3,25}" required/>
				</div>

				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-envelope"></span> Email</label>
					<input type="text" name="email" class="form-control" id="email" value="{{ $usuario->email }}" placeholder="Email" pattern=".{5,150}" required/>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-lock"></span> Contraseña (Opcional)</label>
					<input type="text" name="password" class="form-control" id="password" placeholder="Ingresar nueva contraseña" pattern=".{5,25}">
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
					<button type="submit" class="btn btn-primary new col-xs-12 col-sm-12 col-md-12 col-lg-12"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
					<a href="{{ route('panel.usuarios.lista') }}" class="btn btn-danger new col-xs-12 col-sm-12 col-md-12 col-lg-12"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
				</div>
			</form>
		</div>
	</div>
@endsection