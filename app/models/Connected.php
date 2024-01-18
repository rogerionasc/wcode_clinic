<?php

namespace App\models;

class Connected
{

    private static $instance;

    /**
     * @param \PDO
     */
    public static function getInstance(): \PDO
    {
        try {
            if (empty(self::$instance)){
                self::$instance = new \PDO(
                    "mysql:host=".CONF_DB_HOST."; dbname=".CONF_DB_NAME,
                    CONF_DB_ROOT,
                    CONF_DB_PWD,
                    CONF_DB_OPTION

                );
            }

        }catch (\PDOException $exception){
            echo "Erro ao conectar";

        }
        return self::$instance;

    }
    private function __construct()
    {
    }
    private function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

}
