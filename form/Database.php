<?php

class Database
{
    private $host = 'localhost';
    private $dbname = 'tranning_amela';
    private $username = 'root';
    private $password = "";

    protected function getConnect()
    {
        $pdo = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $conn = new PDO($pdo, $this->username, $this->password);

        return $conn;
    }
}
