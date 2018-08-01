<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 31/07/2018
 * Time: 14:57
 */

namespace ExternalSDK\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;


class ExternalSDKRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('external','ExternalSDK\Controllers\ContentController@sayHello');
    }
}