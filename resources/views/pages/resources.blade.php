@extends('layouts.master')

@section('title', 'Recursos')

@section('content')
    <h4>Baners para colocar en tu blog</h4>
    <p>Puedes descargar la imagen y subirla en tu portal web para tenerlo directo.</p>
    <p>Con este baner de abajo puedes colocar si deseas apoyar a la comunidad y a su difusión de actividades:</p>
    <p><img src="{{ asset('images/resources/banner-apoyo.png') }}" alt="Yo apoyo a la comunidad de PHP"></p>
    <p>
        Puedes también solo coloca este codigo en tu pagina
        <pre><code>
            {{ e('<a href="http://www.comunidaddephp.org/" title="Yo apoyo a la comunidad de PHP">
                <img src="' .  asset('images/resources/banner-apoyo.png') . '" alt="">
            </a>') }}
        </code></pre>
    </p>
    <hr />
    <p>Con este baner de abajo puedes colocar si deseas formar parte de esta gran comunidad de php:</p>
    <p><img src="{{ asset('images/resources/banner-parte.png') }}" alt="Soy parte de la comunidad de PHP"></p>
    <p>
        Puedes también solo coloca este codigo en tu pagina
        <pre><code>
            {{ e('<a href="http://comunidaddephp.org/" title="Soy parte de la comunidad de PHP">
                <img src="' .  asset('images/resources/banner-parte.png') . '" alt="Soy parte de la comunidad de PHP">
            </a>') }}
        </code></pre>
    </p>
@stop