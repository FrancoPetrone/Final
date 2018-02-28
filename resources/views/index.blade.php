@extends('layout')

@section('content')
    <div id="galeriaHome" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#galeriaHome" data-slide-to="0" class="active"></li>
            <li data-target="#galeriaHome" data-slide-to="1"></li>
            <li data-target="#galeriaHome" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="carousel-img center-block" src="imgs/Galeria/galeria-1.jpg" alt="Imagen">
            </div>

            <div class="item">
                <img class="carousel-img center-block" src="imgs/Galeria/galeria-2.jpg" alt="Imagen">
            </div>

            <div class="item">
                <img class="carousel-img center-block" src="imgs/Galeria/galeria-3.jpg" alt="Imagen">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#galeriaHome" role="button" data-slide="prev">
            <span aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#galeriaHome" role="button" data-slide="next">
            <span aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

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

    <div class="container">
        <div class="row contenedor-ofertas">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="titulo">OFERTAS</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <a class="thumbnail">
                    <img class="oferta-principal" src="imgs/Ofertas/oferta1.jpg" alt="Intel">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <a class="thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="imgs/Ofertas/oferta2.jpg" alt="Assassin´s Creed IV">
                </a>
                <a class="thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="imgs/Ofertas/oferta3.jpg" alt="Ronin">
                </a>
            </div>
        </div>
    </div>
@endsection