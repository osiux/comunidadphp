@extends('layouts.master')

@section('title', 'Quienes Somos')

@section('content')
    <p>
        <figure class="text-center">
            <img src="{{ asset('images/quienes-somos.jpg') }}" alt="Quienes Somos">
            <figcaption>Reunión del 12 de Febrero de 2011 en <a href="http://www.telmexhub.mx/" target="_blank">Telmexhub</a></figcaption>
        </figure>
    </p>

    <p>Somos una comunidad de <strong>Programadores de PHP</strong>, que tienen como objetivo el tener un espacio para generar nuevos proyectos de software usando la plataforma de <strong>PHP</strong>.</p>
    <p>Los programadores de PHP que están dentro de esta comunidad serán, apoyados para que sus ideas sean las mejores en todo el mercado.</p>
    <p>Nos enfocamos de preferencia a impulsar aplicaciones desarrolladas como idioma nativo el <strong>español</strong>.</p>
    <p>Formamos partes del grupo de <a href="http://www.americaphp.org"><strong>www.americaphp.org</strong></a> con represtanción de <strong>Claudio Morales</strong>.</p>
@stop