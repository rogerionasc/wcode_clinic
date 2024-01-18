<?php
require __DIR__ . '/../wcode_clinic/fullstackphp/fsphp.php';
require_once 'vendor/autoload.php';

fullStackPHPClassName("CLASS_TITLE");

/*
 *
 */
fullStackPHPClassSession("Herança e Polimorfismo", __LINE__);

$model = new \App\models\User();

$user = $model->load("1");



