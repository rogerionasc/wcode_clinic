<?php
require __DIR__ . '/../wcode_clinic/fullstackphp/fsphp.php';
require_once 'vendor/autoload.php';

fullStackPHPClassName("DEBBUG");

/*
 *
 */
fullStackPHPClassSession("Herança e Polimorfismo", __LINE__);

$model = new App\models\User();

$user = $model->bootstrap(
    "Rogério",
    "Nascimento",
    "rogerionascimentosantos@gmail.",
    "123456789"
);

$user->id = 11;
$user->created_at = date("Y/m/d H:i");

if (!$model->find($user->email)) {
    echo "<p class='trigger warning'>Cadastro</p>";
    $user->save();
} else {
    echo "<p class='trigger warning'>Read</p>";


}

var_dump($user, "{$user->data->last_name}");








