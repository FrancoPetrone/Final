@extends('layout')

@section('content')
	<div class="container">
		<div class="row contenedor-panel-2">
		  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<p class="titulo"><span class="glyphicon glyphicon-wrench"></span> Panel - Usuarios</p>
		  </div>
			@foreach ($usuarios as $usuario)
			  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div class="thumbnail">
						<img src="imgs/Panel/{{ $usuario->nivel_id == 1 ? 'icon_user' : 'icon_admin' }}.png" alt="Image">
						<div class="caption">
							<p class="nick">{{ $usuario->nick }}</p>
							<p class="info">{{ $usuario->nombre }}</p>
							<p class="info">{{ $usuario->apellido }}</p>
							<p class="info">{{ $usuario->email }}</p>
							<p>
								@if($usuario->nivel_id == 1)
                                <form action="{{ route('panel.usuarios.delete', $usuario->id)  }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                    @endif
									<a href="{{ route('panel.usuarios.editar', $usuario->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-cog"></span></a>
								</form>
							</p>
						</div>
					</div>
				</div>
			@endforeach
			@if(count($usuarios) == 0)
				<p class='error col-xs-12 col-sm-12 col-md-12 col-lg-12'>ERROR - ¡No hay Usuarios!</p>
			@endif
		</div>
	</div>
@endsection