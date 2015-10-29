<?php
// Home
Route::get('/', HomeController::class . '@index')->name('home');

// Authentication
Route::get('login', Auth\AuthController::class . '@getLogin')->name('login');
Route::post('login', Auth\AuthController::class . '@postLogin');
Route::get('logout', Auth\AuthController::class . '@getLogout')->name('logout');
Route::get('register', Auth\AuthController::class . '@getRegister')->name('register');
Route::post('register', Auth\AuthController::class . '@postRegister');

// Password reset link request routes...
Route::get('password/email', Auth\PasswordController::class . '@getEmail')->name('password.email');
Route::post('password/email', Auth\PasswordController::class . '@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', Auth\PasswordController::class . '@getReset')->name('password.token');
Route::post('password/reset', Auth\PasswordController::class . '@postReset')->name('password.reset');

// Pages
Route::group(['as' => 'pages.'], function() {
    Route::get('contacto', PagesController::class . '@contact')->name('contact');
    Route::post('contacto', PagesController::class . '@postContact')->name('contact');

    Route::get('recursos', PagesController::class . '@resources')->name('resources');

    Route::get('quienes', PagesController::class . '@whoAreWe')->name('whoarewe');

    Route::get('calendario', PagesController::class . '@calendar')->name('calendar');
});