<header>
    <nav id="nav" class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand animated infinite pulse"><span class="glyphicon glyphicon-globe"></span> Tecno!</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                        @php
                            $active = [0 => "",1 => "",2 => "",3 => ""];
                            $totalProductos = sizeof(session()->get('Carrito'));

                            $seccion = substr(Request::path(), 0, 9);

                            switch($seccion){
                                case'/':            $active[0]  =   "active"; break;
                                case'productos':    $active[1]  = 	"active"; break;
                                case'cart':         $active[2]  = 	"active"; break;
                                case'favoritos':    $active[3]  = 	"active"; break;
                            }
                        @endphp

                        <li class="{{ $active[0] }}"><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li class="{{ $active[1] }}"><a href="{{ route('productos.all') }}"><span class="glyphicon glyphicon-th-list"></span> Productos</a></li>
                        @if(session()->get('Level') != 0)
                            <li class="{{ $active[3] }}"><a href="{{ route('favoritos.list') }}"><span class="glyphicon glyphicon-star"></span> Favoritos</a></li>
                        @endif
                        </ul>
                          <ul class="nav navbar-nav navbar-right">
                            <li class="{{ $active[2] }}"><a href="{{ route('cart.list') }}"><span class="glyphicon glyphicon-shopping-cart animated infinite swing"></span> <span class="badge">{{ $totalProductos }}</span></a></li>

                    <li class="dropdown">

                        @php
                            $nombre_usuario = "Invitado";
                            $nivel_usuario = session()->get('Level');

                            if(session()->get('Level') != 0){
                                $nombre_usuario = session()->get('User');
                            }
                        @endphp

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> {{ $nombre_usuario }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">

                        @php
                        $dropdownMenu = [
                            0 => [
                                ["Ingresar","glyphicon glyphicon-log-in", url('/login')],
                                ["Crear Cuenta","glyphicon glyphicon-new-window", url('/register')]
                            ],

                            1 => [
                                ["Salir","glyphicon glyphicon-log-out", route('logout')]
                            ],

                            2 => [
                                ["Panel","glyphicon glyphicon-wrench", route('panel.menu')],
                                ["Salir","glyphicon glyphicon-log-out", route('logout')]
                            ]
                        ];
                        @endphp

                        @foreach ($dropdownMenu[$nivel_usuario] as $opc)
                            <li><a href="{{ $opc[2] }}"><span class="{{ $opc[1] }}"></span> {{ $opc[0] }}</a></li>
                        @endforeach

                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-question-sign"></span>  Ayuda</a></li>
                </ul>
                </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>