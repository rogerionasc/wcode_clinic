<?php
require __DIR__ . '/../wcode_clinic/fullstackphp/fsphp.php';
require_once 'vendor/autoload.php';

fullStackPHPClassName("DEBBUG");

/*
 *
 */
fullStackPHPClassSession("Herança e Polimorfismo", __LINE__);

$model = new \App\models\User();

$user = $model->load("1");

var_dump($user, "{$user->data->last_name}");







