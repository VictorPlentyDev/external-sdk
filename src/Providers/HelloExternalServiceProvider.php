<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 31/07/2018
 * Time: 14:55
 */

namespace HelloExternal\Providers;


use Plenty\Plugin\ServiceProvider;

class HelloExternalServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->getApplication()->register(HelloExternalRouteServiceProvider::class);
    }
}