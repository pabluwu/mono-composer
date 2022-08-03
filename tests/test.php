<?php

require_once __DIR__.'/../vendor/autoload.php';

use mono\Monocontact;

$apiurl = 'https://api.monocontact.net';
$m = new Monocontact('t-token-key', 's-secret-key', $apiurl);

print_r($m);



// $saludando = new Monocontact($apikey='asd', $secret='hash256', $apiurl='https://api.monocontact.net/');

// echo $saludando->saludo('api.monocontact.net');