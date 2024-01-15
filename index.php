<?php

require_once 'vendor/autoload.php';

$psr = App\Controllers\Connected::getInstance();
$psr1 = App\Controllers\Connected::getInstance();

var_dump($psr, $psr1);

