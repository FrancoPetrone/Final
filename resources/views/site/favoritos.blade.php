@extends('layout')

@section('content')
	<div class="container">
		<div class="row contenedor-favoritos">
		  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<p class="titulo"><span class="glyphicon glyphicon-star animated infinite tada"></span> Favoritos <span class="glyphicon glyphicon-star animated infinite tada"></span></p>
		  </div>

		  @foreach ($favoritos as $favorito)
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="thumbnail">
				  <img src="{{ $favorito->producto->imagen }}" alt="{{ $favorito->producto->nombre }}">
				  <div class="caption">
					<p class="sub-titulo">{{ $favorito->producto->nombre }}</p>
					<p>{{ $favorito->producto->descripcion }}</p>
					<p class="precio-producto">${{ $favorito->producto->precio }}</p>
					<p>
					  @php $btn = ['route' => 'productos.addcart', 'btn' => 'primary', 'text' => 'Agregar', 'icon' => 'shopping-cart'] @endphp
					  @foreach (session()->get('Carrito') as $item)
						  @if($favorito->producto->id == $item)
							  @php $btn = ['route' => 'productos.delcart', 'btn' => 'danger', 'text' => 'Eliminar', 'icon' => 'trash'] @endphp
						  @endif
					  @endforeach
					  <form class="form-group" action="{{ route('favoritos.delfav') }}" method="POST">
						  <input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <input type="hidden" name="producto_id" value="{{ $favorito->producto_id }}">
						  <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-star"></span></button>
						  <a href="{{ route($btn['route'], $favorito->producto->id) }}" class="btn btn-{{ $btn['btn'] }}">{{ $btn['text'] }} <span class="glyphicon glyphicon-{{ $btn['icon'] }}"></span></a>
					  </form>
					</p>
				  </div>
				</div>
			</div>
		  @endforeach

		  @if(count($favoritos) == 0)
			<p class='sin-productos col-xs-12 col-sm-12 col-md-12 col-lg-12'>¡No hay favoritos! <a href='{{ route('productos.all') }}'>Ver Productos</a></p>
		  @endif
		</div>
	</div>
@endsection