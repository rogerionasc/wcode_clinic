<?php

namespace App\models;

class User extends Model
{
    /** @var array $safe no apdate ou create  */
    protected static $safe = ["id", "created_at", "update_at"];

    /** @var string $entity */
    protected static $entity = "users";

    /** metódo responsável por cadastrar o usuario */
    public function bootstrap()
    {

    }

    /** metódo responsável por buscar usuário por id */
    public function load(int $id, string $columns = "*")
    {
        $load = $this->read("SELECT {$columns} FROM ".self::$entity." WHERE  id = :id", "id={$id}");
        var_dump($load->fetchObject());



    }

    /** metódo responsável por buscar usuário por email */
    public function find($email)
    {

    }

    /** metódo responsável por buscar todos usuários */
    public function all($limit = 30, $offset = 0)
    {

    }

    /** metódo responsável por savar o usuário */
    public function save()
    {

    }

    /** metódo responsável por deletar o usuário */
    public function destroy()
    {

    }


    /** metódo responsável por dizer quais os campos obrigatórios no banco de dados */
    public function required()
    {
        
    }

}