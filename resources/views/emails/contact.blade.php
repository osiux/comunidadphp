@extends('layouts.email')

@section('title', 'Contacto')

@section('content')
    <div>
        <p><strong>Nombre:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Sitio web:</strong> {{ isset($website) && !empty($website) ? $website : 'N/A' }}</p>
        <p>
            <strong>Mensaje:</strong>
            <br>
            {!! nl2br($message) !!}
        </p>
    </div>
@stop