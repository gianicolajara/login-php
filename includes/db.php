<?php

class DB
{

    private $host;
    private $nameDB;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = "localhost";
        $this->nameDB = "login";
        $this->user = "root";
        $this->password = "";
        $this->charset = "utf8";
    }

    public function connect()
    {

        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->nameDB . ";charset=" . $this->charset;
            $options = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION];
            $connection = new PDO($dsn, $this->user, $this->password, $options);
            return $connection;
        } catch (PDOException $e) {
            die("Error in connect DB: " . $e->getMessage());
        }

    }

}