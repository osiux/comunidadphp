<?php
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Inicio', route('home'));
});

Breadcrumbs::register('pages.whoarewe', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Quienes Somos', route('pages.whoarewe'));
});

Breadcrumbs::register('pages.contact', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contacto', route('pages.contact'));
});

Breadcrumbs::register('pages.resources', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Recursos', route('pages.resources'));
});

Breadcrumbs::register('pages.calendar', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Calendario', route('pages.calendar'));
});

Breadcrumbs::register('register', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Registro', route('register'));
});

Breadcrumbs::register('login', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Login', route('login'));
});

Breadcrumbs::register('password.email', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Recuperar contraseña', route('password.email'));
});