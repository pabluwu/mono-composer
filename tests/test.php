<?php

require_once __DIR__.'/../vendor/autoload.php';

use mono\Monocontact;

$apiurl = 'https://api.monocontact.net/v1.1/';
$m = new Monocontact('t-MduXc11yE5IHD4a5cVt8x4aaG', 's-XxCyXLQFaT58DTSfyZrCCGwg3wIY8USJcnf59NQ7fBjcQmWBRUnNXeWejRkZFRmQH', $apiurl);

try {
    print_r($m->contact->listing());
    // $m->contact->listing();
}catch (Exception $e){
    echo 'Excepción', $e->getMessage(), '\n';
}




// $saludando = new Monocontact($apikey='asd', $secret='hash256', $apiurl='https://api.monocontact.net/');

// echo $saludando->saludo('api.monocontact.net');