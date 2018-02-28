@extends('layout')

@section('content')

	<div class="container">
		<div class="row contenedor-login animated bounceIn">
		  <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
			<p class="titulo">INGRESAR</p>
				<p class="msg-error">{{ $errors->first('error') }}</p>
		  </div>
		  <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
			<form role="form" action="{{ url('/login') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="text" class="titulo-campo">Nick</label>
					<input id="nick" type="text" class="form-control" name="nick" placeholder="Nick" value="{{ old('nick') }}" required/>
				</div>
				<div class="form-group">
					<label for="pwd" class="titulo-campo">Contraseña</label>
					<input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required/>
				</div>
				<div class="form-group">
					<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
					<label for="text" class="titulo-campo">Recordarme</label>
				</div>
				<button type="submit" class="btn btn-primary col-xs-12 col-sm-12 col-md-12 col-lg-12">Ingresar</button>
			</form>
		  </div>
		</div>
	</div>

@endsection