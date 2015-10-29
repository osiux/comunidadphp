<?php
if (!function_exists('active_route')) {
    function active_route($route, $full = false, $classname = 'active')
    {
        if (Route::currentRouteNamed($route) || Route::is($route)) {
            if ( $full ) {
                return ' class="' . $classname . '"';
            }

            return ' ' . $classname;
        }

        return '';
    }
}