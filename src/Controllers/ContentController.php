<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 01/08/2018
 * Time: 11:56
 */

namespace ExternalSDK\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Plugin\Http\Request;


class ContentController
{
    /**
     * @param Twig $twig
     * @param LibraryCallContract $libCall
     * @param Request $request
     * @return string
     */
    public function sayHello(
        Twig $twig,
        LibraryCallContract $libCall,
        Request $request
    )
    {

        $packagistResult =
            $libCall->call(
                'ExternalSDK::guzzle_connector',
                ['packagist_query' => $request->get('search')]
            );
        return $twig->render('ExternalSDK::content.hello', $packagistResult);
    }
}