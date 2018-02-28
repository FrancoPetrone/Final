@extends('layout')

@section('content')
    <div class="container">
        <div class="row contenedor-registro animated bounceIn">
          <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
            <p class="titulo">NUEVA CUENTA</p>
              <p class="msg-error">{{ $errors->first('error') }}</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="text" class="titulo-campo">Nick</label>
                    <input id="nick" type="text" class="form-control" value="{{ old('nick') }}" name="nick" placeholder="Nick ~ Entre 5 y 25 caracteres." required/>
                </div>
                <div class="form-group">
                    <label for="text" class="titulo-campo">Nombre</label>
                    <input id="nombre" type="text" class="form-control" value="{{ old('nombre') }}" name="nombre" placeholder="Nombre ~ Entre 3 y 50 caracteres." required/>
                </div>
                <div class="form-group">
                    <label for="text" class="titulo-campo">Apellido</label>
                    <input id="apellido" type="text" class="form-control" value="{{ old('apellido') }}" name="apellido" placeholder="Apellido ~ Entre 2 y 25 caracteres." required/>
                </div>
                <div class="form-group">
                    <label for="email" class="titulo-campo">Email</label>
                    <input id="email" type="text" class="form-control" value="{{ old('email') }}" name="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Dirección de Email." required/>
                </div>
                <div class="form-group">
                    <label for="pwd" class="titulo-campo">Contraseña</label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña ~ Entre 4 y 25 caracteres." required/>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="titulo-campo">Confirmar Contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Vuelva a escribir la Contraseña." required>
                </div>
                <div class="form-group checkbox-campo">
                    <input type="checkbox" name="terminos" required> Acepto los términos y condiciones.
                </div>
                <button type="submit" class="btn btn-success col-xs-12 col-sm-12 col-md-12 col-lg-12">Crear</button>
            </form>
          </div>
        </div>
    </div>
@endsection