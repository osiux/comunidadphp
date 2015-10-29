<div class="row">
    <header class="col-lg-12 col-sm-12">
        <div class="col-lg-1 col-sm-2">
            <a href="{{ route('home') }}" class="pull-left"><img src="{{ asset('images/logo.png') }}" alt="Comunidad de PHP"></a>
        </div>
        <div class="col-lg-11 col-sm-10">
            <div id="social-links" class="pull-right">
                @foreach (Config::get('social') as $name => $link)
                    <a href="{{ $link }}">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-{{ $name }} fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </header>
</div>

<div class="row">
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Inicio</a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-right" role="navigation">
                    <li><a href="http://blog.comunidaddephp.org/">Blog</a></li>
                    <li{!! active_route('pages.whoarewe', true) !!}><a href="{{ route('pages.whoarewe') }}">Quienes Somos</a></li>
                    <li><a href="#">Foro</a></li>
                    @if ( Auth::check() )
                        <li><a href="#">Mi Perfil</a></li>
                    @endif
                    <li{!! active_route('pages.contact', true) !!}><a href="{{ route('pages.contact') }}">Contacto</a></li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </div>
</div>