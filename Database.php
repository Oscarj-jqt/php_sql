<?php

class Database {
    private static ?Database $instance = null;
    private \PDO $connection;

    private function __construct() {
        $dsn = 'mysql:host=localhost;dbname=ma_base;charset=utf8';
        $user = 'root';
        $password = '';
        $this->connection = new \PDO($dsn, $user, $password);
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(): Database {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): \PDO {
        return $this->connection;
    }
}