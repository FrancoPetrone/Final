@extends('layout')

@section('content')

	<div class="container">
		<div class="row contenedor-carrito">
		  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<p class="titulo"><span class="glyphicon glyphicon-shopping-cart"></span> Mis Productos</p>
		  </div>

			@php $precio_total = 0; @endphp
			@foreach ($productos as $producto)
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="thumbnail">
				  <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
				  <div class="caption">
					<p class="sub-titulo">{{ $producto->nombre }}</p>
					<p>{{ $producto->descripcion }}</p>
					<p class="precio-producto">${{ $producto->precio }}</p>
					<p><a href="{{ route('productos.delcart', ['id' => $producto->id]) }}" class="btn btn-danger" role="button">Eliminar <span class="glyphicon glyphicon-trash"></span></a></p>
				  </div>
				</div>
			  </div>
			@php $precio_total += $producto->precio; @endphp
			@endforeach

			@if(count($productos) == 0)
				echo "<p class='sin-productos col-xs-12 col-sm-12 col-md-12 col-lg-12'>¡No hay productos! <a href='{{ route('productos.all') }}'>Ver Productos</a></p>";
			@endif

		  <!-- FORMULARIO DEMOSTRATIVO -->

		  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<p class="titulo">Comprar</p>
			<form class="confirmar-compra col-xs-12 col-sm-12 col-md-12 col-lg-12">

			  <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<label for="tel">Teléfono Móvil <span class="glyphicon glyphicon-phone"></span></label>
				<input type="text" class="form-control" id="telefono" pattern="[0-9]{10}" placeholder="Ejemplo: 1122223333" required/>
			  </div>
			  <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<label for="pwd">Tarjeta de Crédito <span class="glyphicon glyphicon-credit-card"></span></label>
				<input type="text" class="form-control" id="tarjeta" pattern="[0-9]{16}" placeholder="Ejemplo: 1111222233334444" required/>
			  </div>
				<p class="col-xs-12 col-sm-12 col-md-12 col-lg-12">{{ $precio_total == 0 ? '---' : '$ '.$precio_total }}</p>
			  <button type="submit" class="btn btn-primary col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">Comprar</button>
			</form>
		  </div>

		</div>
	</div>
@endsection