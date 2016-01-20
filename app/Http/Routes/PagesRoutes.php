<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class PagesRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web', 'as' => 'pages.'], function(Registrar $router) {
            $router->get('contacto', 'PagesController@contact')->name('contact');
            $router->post('contacto', 'PagesController@postContact')->name('contact');

            $router->get('recursos', 'PagesController@resources')->name('resources');

            $router->get('quienes', 'PagesController@whoAreWe')->name('whoarewe');

            $router->get('calendario', 'PagesController@calendar')->name('calendar');
        });
    }
}
