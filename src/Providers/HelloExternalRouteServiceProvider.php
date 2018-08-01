<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 31/07/2018
 * Time: 14:57
 */

namespace HelloExternal\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;


class HelloExternalRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('external','HelloExternal\Controllers\ContentController@sayHello');
    }
}