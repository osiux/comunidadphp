@extends('layouts.master')

@section('title', 'Registro')

@section('content')
    {!! Form::open(['route' => 'register', 'role' => 'form']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('nickname', 'Usuario') !!}
            {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('email', 'Correo electrónico') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirmar contraseña') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>
        
        <p class="pull-right">
            <span class="btn text-primary">Todos los campos son obligatorios.</span>
            <button class="btn btn-primary" type="Submit">Enviar</button>
        </p>
    {!! Form::close() !!}
@stop
