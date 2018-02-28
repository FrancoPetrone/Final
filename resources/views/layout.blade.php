<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Tecno!</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <base href="{{ asset('tecno/2018') }}">

        @if(session()->get('User') == null)
            {{ session(['User' => 'Invitado']) }}
            {{ session(['Carrito' => []]) }}
            {{ session(['Error' => null]) }}
            {{ session(['Level' => 0]) }}
        @endif

        @include('partials.css')
        @include('partials.fonts')

    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
        @include('partials.js')
    </body>
</html>