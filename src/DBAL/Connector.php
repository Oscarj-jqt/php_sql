<?php

namespace Oj\Classicmodels\Dbal;


class Connector
{
    const DSN = "mysql:dbname=classmodels;host=127.0.0.1:8889";

    public \PDO $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO(self::DSN, 'root', 'root');
    }
}



?>