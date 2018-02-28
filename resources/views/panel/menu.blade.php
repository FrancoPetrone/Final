@extends('layout')

@section('content')
	<div class="container">
		<div class="row contenedor-panel">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p class="titulo"><span class="glyphicon glyphicon-wrench"></span> Panel</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="{{ route('panel.productos.lista') }}" class="btn btn-success new col-xs-12 col-sm-12 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
					<div class="">
						<img src="imgs/Panel/productos.png" alt="Lista de Productos">
					</div>
					<b>Productos</b></a>
				<a href="{{ route('panel.usuarios.lista') }}" class="btn btn-success new col-xs-12 col-sm-12 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
					<div class="">
						<img src="imgs/Panel/usuarios.png" alt="Lista de Usuarios">
					</div>
					<b>Usuarios</b></a>
			</div>
		</div>
	</div>
@endsection