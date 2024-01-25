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

$email = $model->find("robson1@email.com.br");

$all = $model->all(10);

var_dump("{$user->first_name}");

var_dump($user, $email, $all);








