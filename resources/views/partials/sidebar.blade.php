<div id="sidebar" class="col-xs-12 col-md-4 col-md-pull-8 col-lg-3 col-lg-pull-9">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Usuarios</h3>
        </div>
        <div class="panel-body">
            @if ( Auth::check() )
                <p><strong>Usuario:</strong> {{ Auth::user()->name }}</p>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Tu perfil</a></li>
                    <li>
                        {!! Form::open(['route' => 'logout']) !!}
                        <button type="submit" class="btn btn-link">Cerrar sesión</button>
                        {!! Form::close() !!}
                    </li>
                </ul>
            @else
                {!! Form::open(['route' => 'login', 'role' => 'form',
                                    'class' => 'form']) !!}
                <div class="form-group">
                    {!! Form::text('username', null, ['class' => 'form-control',
                                  'placeholder' => 'Usuario o correo']) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password', ['class' => 'form-control',
                                    'placeholder' => 'Contraseña']) !!}
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="submit" class="pull-left btn btn-primary">Entrar</button>
                        </div>
                        <div class="col-lg-6">
                            <label class="checkbox-inline">
                                {!! Form::checkbox('remember', 1) !!} Recordarme
                            </label>
                            <a class="pull-right btn btn-link btn-sm" href="{{ route('password.email') }}">Recuperar contraseña</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

                <a href="{{ route('register') }}" class="btn btn-default btn-block">Registro</a>
            @endif
        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Secciones</h3>
        </div>
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Debugeando</a></li>
                <li><a href="#">Integrantes</a></li>
                <li{!! active_route('pages.calendar', true) !!}><a href="{{ route('pages.calendar') }}">Calendario</a></li>
                <li><a href="#">Noticias</a></li>
                <li{!! active_route('pages.resources', true) !!}><a href="{{ route('pages.resources') }}">Recursos</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Empleos</a></li>
                <li><a href="#">Encuestas</a></li>
            </ul>
        </div>
    </div>

    <div class="panel panel-info hidden-xs">
        <div class="panel-heading">
            <h3 class="panel-title">Comunidades amigas</h3>
        </div>
        <div class="panel-body">
            <p class="text-center">
                <a href="http://noticiasdeldf.com/" target="_blank"><img src="{{ asset('images/sidebar/logoPHP200.png') }}" alt="Noticias del DF"></a>
                <a href="http://el3erespacio.mx/" target="_blank"><img src="{{ asset('images/sidebar/3ER_ESPACIO_200_X_100_PX.png') }}" alt="3er Espacio">}</a>
            </p>
        </div>
    </div>
</div>

