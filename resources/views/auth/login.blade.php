@extends('layouts.master')

@section('title', 'Login')

@section('content')
    {!! Form::open(['route' => 'login', 'role' => 'form']) !!}
    <div class="form-group">
        {!! Form::label('username', 'Usuario o correo') !!}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    <button class="btn btn-primary pull-right" type="Submit">Enviar</button>
    {!! Form::close() !!}
@stop
