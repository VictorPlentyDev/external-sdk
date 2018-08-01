<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 01/08/2018
 * Time: 11:55
 */

$client = new \GuzzleHttp\Client();
$res = $client->request(
    'GET',
    'https://packagist.org/search.json',
    [
        'query' => ['q' => SdkRestApi::getParam('packagist_query')]
    ]
);

/** @return array */
return json_decode($res->getBody(), true);