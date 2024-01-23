<?php

namespace App\models;

class User extends Model
{
    /** @var array $safe no apdate ou create  */
    protected static $safe = ["id", "created_at", "update_at"];

    /** @var string $entity */
    protected static $entity = "users";

    /** metódo responsável por cadastrar o usuario */
    public function bootstrap(string $first_name, string $last_name, string $email, string $document = null): ?User
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->document = $document;
        return $this;

    }

    /** metódo responsável por buscar usuário por id */
    public function load(int $id, string $columns = "*"): ?User
    {
        $load = $this->read("SELECT {$columns} FROM ".self::$entity." WHERE  id = :id", "id={$id}");
        if ($this->fail() || !$load->rowCount()){
            $this->message = "Usuário não encontrado";
            var_dump($this->message);
            return null;
        }

        return $load->fetchObject(__CLASS__);



    }

    /** metódo responsável por buscar usuário por email */
    public function find($email, string $columns = "*")
    {
        $find = $this->read("SELECT {$columns} FROM ".self::$entity." WHERE  email = :email", "email={$email}");
        if ($this->fail() || !$find->rowCount()){
            $this->message = "Usuário não encontrado com email informado";
            return null;
        }
        return $find->fetchObject(__CLASS__);

    }

    /** metódo responsável por buscar todos usuários */
    public function all(int $limit = 30, int $offset = 0, string $columns = "*")
    {
        $all = $this->read("SELECT {$columns} FROM ".self::$entity." LIMIT :limit OFFSET :offset", "limit={$limit}&offset={$offset}");
        if ($this->fail() || !$all->rowCount()){
            $this->message = "Sua consulta não retornou usuários";
            return null;
        }
        return $all->fetchAll(\PDO::FETCH_CLASS, __CLASS__);

    }

    /** metódo responsável por savar o usuário */
    public function save()
    {
        $this->filter($this->safe());

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