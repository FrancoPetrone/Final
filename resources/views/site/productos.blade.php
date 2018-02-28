@extends('layout')

@section('content')

    <div class="container">
        <div class="row contenedor-categorias">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="titulo">CATEGORIAS</p>
            </div>
            <div id="item-categoria-1" class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <p class="sub-titulo">PC</p>
                <a href="{{ route('productos.categoria', 'pc') }}" class="thumbnail">
                    <img src="imgs/Categorias/Pc.png" alt="PC">
                </a>
            </div>
            <div id="item-categoria-2" class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <p class="sub-titulo">NOTEBOOKS</p>
                <a href="{{ route('productos.categoria', 'notebooks') }}" class="thumbnail">
                    <img src="imgs/Categorias/Notebooks.png" alt="Notebooks">
                </a>
            </div>
            <div id="item-categoria-3" class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <p class="sub-titulo">PERIFERICOS</p>
                <a href="{{ route('productos.categoria', 'perifericos') }}" class="thumbnail">
                    <img src="imgs/Categorias/Perifericos.png" alt="Perifericos">
                </a>
            </div>
            <div id="item-categoria-4" class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <p class="sub-titulo">COMPONENTES</p>
                <a href="{{ route('productos.categoria', 'componentes') }}" class="thumbnail">
                    <img src="imgs/Categorias/Componentes.png" alt="Componentes">
                </a>
            </div>
        </div>
    </div>

    <div class="container animated bounceInDown">
        <div class="row contenedor-productos">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="titulo">{{ strtoupper($categoria) }}</p>
            </div>

            @if(count($productos) > 0)
                @foreach ($productos as $producto)
					  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					    <div class="thumbnail">
					      <img src="{{ $producto->imagen }}" alt="{{  $producto->nombre }}">
					      <div class="caption">
					        <p class="sub-titulo">{{  $producto->nombre }}</p>
					        <p>{{  $producto->descripcion }}</p>
					        <p class="precio-producto">${{  $producto->precio }}</p>

                            @if(session()->get('Level') == 0)
                                <a href="{{ url('/register') }}" class="btn btn-success"><span class="glyphicon glyphicon-star"></span></a>
                                  <a href="{{ route('productos.addcart', ['id' => $producto->id]) }}" class="btn btn-primary">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></a>
                            @else
                                @php $btn = ['route' => 'favoritos.addfav', 'btn' => 'success']; @endphp
                                @foreach ($favoritos as $favorito)
                                   @if($producto->id == $favorito->producto_id)
                                        @php $btn = ['route' => 'favoritos.delfav', 'btn' => 'warning']; @endphp
                                   @endif
                                @endforeach
                                <form class="form-group" action="{{ route($btn['route']) }}" method="POST">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                  <button type="submit" class="btn btn-{{ $btn['btn'] }}"><span class="glyphicon glyphicon-star"></span></button>
                                  <a href="{{ route('productos.addcart', ['id' => $producto->id]) }}" class="btn btn-primary">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></a>
                                </form>
                            @endif

					    </div>
					   </div>
					</div>
                @endforeach
            @else
                <p class="sin-productos col-xs-12 col-sm-12 col-md-12 col-lg-12">No hay productos disponibles</p>
            @endif
        </div>
    </div>
@endsection