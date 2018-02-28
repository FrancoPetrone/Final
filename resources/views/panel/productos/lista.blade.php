@extends('layout')

@section('content')
	<div class="container">
		<div class="row contenedor-panel">
		  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<p class="titulo"><span class="glyphicon glyphicon-wrench"></span> Panel - Productos</p>
		  </div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="{{ route('panel.productos.nuevo') }}" class="btn btn-success new col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3"><span class="glyphicon glyphicon-plus"></span> Nuevo Producto</a>
			</div>
			@foreach ($productos as $producto)
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="thumbnail">
				  <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
				  <div class="caption">
					<p class="categoria">{{ strtoupper($producto->categoria->nombre) }}</p>
					<p class="sub-titulo">{{ $producto->nombre }}</p>
					<p>{{ $producto->descripcion }}</p>
					<p class="precio-producto">${{ $producto->precio }}</p>
					<p>
					  	<form action="{{ route('panel.productos.delete', $producto->id)  }}" method="POST">
						  <input type="hidden" name="_method" value="DELETE">
						  <input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <a href="{{ route('panel.productos.editar', $producto->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-cog"></span></a>
						  <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
					    </form>
					</p>
				  </div>
				</div>
			  </div>
			@endforeach

			@if(count($productos) == 0)
				<p class='sin-productos col-xs-12 col-sm-12 col-md-12 col-lg-12'>¡No hay productos!</p>
			@endif
		</div>
	</div>
@endsection