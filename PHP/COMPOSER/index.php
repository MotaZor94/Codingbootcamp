<?php

require_once '/Users/markocolic/Desktop/Web Development/CBP/practice/PHP/COMPOSER/vendor/autoload.php';

if (class_exists('GuzzleHttp\Client')) {
    echo 'Guzzle HTTP client is ready to be used';
} else {
    echo 'Guzzle HTTP client is not loaded';
}

$client = new GuzzleHttp\Client();
 
$res = $client->request('GET', 'https://www.imdb.com/', [
    'verify' => false
]);
 
echo $res->getBody();