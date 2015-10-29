@extends('layouts.master')

@section('title', 'Recuperar contraseña')

@section('content')
<p>Escribe el correo con el que te registraste y te enviaremos un enlace para reestablecer tu contraseña.</p>

{!! Form::open(['route' => 'password.email']) !!}
    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <p class="pull-right">
        <button class="btn btn-primary" type="Submit">Enviar</button>
    </p>
{!! Form::close() !!}
@endsection