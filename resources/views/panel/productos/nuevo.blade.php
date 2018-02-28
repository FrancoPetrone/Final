@extends('layout')

@section('content')
	<div class="container">
		<div class="row contenedor-panel">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p class="titulo">Nuevo Producto</p>
				@foreach($errors->all() as $error)
					<p class="alert alert-danger">{{ $error }}</p>
				@endforeach
			</div>
			<form class="forms" action="{{ route('panel.productos.create') }}" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token()  }}">
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-triangle-right"></span> Nombre</label>
					<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del Producto" pattern=".{5,20}" required/>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-info-sign"></span> Descripción</label>
					<input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Descripción del Producto" pattern=".{5,20}" required/>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-th-list"></span> Categoría</label>
					<select class="form-control" name="categoria_id" id="categoria_id" required>
					  <option value="">-</option>
					  @foreach($categorias as $categoria)
						<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
					  @endforeach
					</select>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-usd"></span> Precio</label>
					<input type="text" name="precio" class="form-control" id="precio" placeholder="Precio del Producto" pattern=".{1,6}" required/>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-equalizer"></span> Stock</label>
					<input type="text" name="stock" class="form-control" id="stock" placeholder="Stock Disponible" pattern=".{1,5}" required/>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label><span class="glyphicon glyphicon-picture"></span> Imágen</label>
					<input class="btn btn-default image-preview-input form-control" type="file" accept="image/*" name="imagen" required/>
				</div>

				<div class="form-group col-xs-12 col-sm-12 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
					<button type="submit" class="btn btn-primary new col-xs-12 col-sm-12 col-md-12 col-lg-12"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
					<a href="{{ route('panel.productos.lista') }}" class="btn btn-danger new col-xs-12 col-sm-12 col-md-12 col-lg-12"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
				</div>
			</form>
		</div>
	</div>
@endsection