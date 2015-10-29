@extends('layouts.master')

@section('title', 'Contacto')

@section('content')
    {!! Form::model(Auth::user(), ['route' => 'pages.contact']) !!}
        <div class="form-group">
            {!! Form::label('name', '* Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', '* Correo electrónico') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('website', 'Sitio web') !!}
            {!! Form::text('website', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('message', '* Mensaje') !!}
            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
        </div>

        <p class="pull-right">
            <span class="btn text-primary">Los campos marcados con * son obligatorios.</span>
            <button class="btn btn-primary" type="Submit">Enviar</button>
        </p>
    {!! Form::close() !!}
@stop