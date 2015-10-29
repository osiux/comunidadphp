<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Inicio') :: Comunidad de PHP</title>

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    @include('partials.header')

    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-push-4 col-lg-9 col-lg-push-3">
            {!! Breadcrumbs::renderIfExists() !!}

            @include('partials.messages')

            @yield('content')
        </div>

        @include('partials.sidebar')
    </div>

    <hr>
    <footer>
        <p>Aprender es como remar contra corriente, si no se hace se retrocede - &copy; Algunos derechos reservados - Código disponible en <a href="https://github.com/osiux/comunidadphp"><i class="fa fa-github-alt"></i> Github</a>. ¡Ayúdanos a mejorarlo!</p>
    </footer>
</div>

<script src="{{ elixir('js/all.js') }}"></script>
</body>
</html>
