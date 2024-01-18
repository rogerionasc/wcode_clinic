<?php

/*
 * CONST DATA BASE
 */

define("CONF_DB_HOST","localhost");
define("CONF_DB_NAME","fullstackphp");
define("CONF_DB_ROOT","root");
define("CONF_DB_PWD","");
define("CONF_DB_OPTION",[
    \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
    \PDO::ATTR_CASE => \PDO::CASE_NATURAL
]);
