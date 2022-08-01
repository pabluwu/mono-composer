<?php

require_once __DIR__.'/../vendor/autoload.php';

use mono\Hello;

$saludando = new Hello();

echo $saludando->saludo("Hola desde el composer");