<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 31/07/2018
 * Time: 14:55
 */

namespace ExternalSDK\Providers;


use Plenty\Plugin\ServiceProvider;

class ExternalSDKServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->getApplication()->register(ExternalSDKRouteServiceProvider::class);
    }
}