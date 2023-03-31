<?php

class Database
{

    public ?PDO $connection = null;

    public function getConnection(): PDO
    {
        $host = 'localhost';
        $port = 3306;
        $database = 'smartphone';
        $username = 'root';
        $password = '';

        if ($this->connection == null) {
            $this->connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        }

        return $this->connection;
    }
}
