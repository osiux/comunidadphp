<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class MainRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function(Registrar $router) {
            $router->get('/', 'HomeController@index')->name('home');

            // Authentication Routes...
            $router->get('login', 'Auth\AuthController@showLoginForm')->name('login');
            $router->post('login', 'Auth\AuthController@login');
            $router->get('logout', 'Auth\AuthController@logout')->name('logout');

            // Registration Routes...
            $router->get('register', 'Auth\AuthController@showRegistrationForm')->name('register');
            $router->post('register', 'Auth\AuthController@register');

            // Password Reset Routes...
            $router->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm')->name('password.reset');
            $router->post('password/email', 'Auth\PasswordController@sendResetLinkEmail')->name('password.email');
            $router->post('password/reset', 'Auth\PasswordController@reset');
        });
    }
}
