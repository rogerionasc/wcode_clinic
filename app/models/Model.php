<?php

namespace App\models;

use PDO;
use PDOException;
use PDOStatement;
use stdClass;

abstract class Model
{

    /** @var object|null * */
    protected $data;

    /** @var ?PDOException * */
    protected $fail;

    /** @var string\null * */
    protected $message;

    public function __set($name, $value)
    {
        if (empty($this->data)) {
            $this->data = new stdClass();
        }
        $this->data->$name = $value;
    }

    public function __get(string $name)
    {
        return ($this->data->$name) ?? null;
    }

    /**
     * @return object|null
     */
    public function data(): ?object
    {
        return $this->data;
    }

    /**
     * @return PDOException|null
     */
    public function fail(): ?PDOException
    {
        return $this->fail;
    }

    /**
     * @return string|null
     */
    public function message(): ?string
    {
        return $this->message;
    }

    /**
     * @return void
     */
    protected function create()
    {
    }

    /**
     * @param string $select
     * @param string|null $params
     * @return PDOStatement|null
     */
    protected function read(string $select, string $params = null): ?PDOStatement
    {
        try {
            $stmt = Connected::getInstance()->prepare($select);
            if ($params) {
                parse_str($params, $params);

                foreach ($params as $key => $value) {
                    $type = (is_numeric($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
                    $stmt->bindValue(":{$key}", $value, $type);
                }
            }
            $stmt->execute();
            return $stmt;
        } catch (PDOException $exception) {
            $this->fail = $exception;
            return null;
        }
    }

    /**
     * @return void
     */
    protected function update()
    {
    }

    /**
     * @return void
     */
    protected function delete()
    {
    }

    /**
     * @return array|null
     */
    protected function safe(): ?array
    {
    }

    /**
     * @return void
     */
    private function filter()
    {
    }

}