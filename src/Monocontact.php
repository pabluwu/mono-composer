<?php
 
namespace mono;

class Monocontact{

    private $api_key;
    private $api_url = 'https://api.monocontact.net/';
    public function saludo($saludo = "Hello World"){
        return $saludo;
    }
}