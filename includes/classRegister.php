<?php

class Register extends DB
{

    private $username;
    private $password;

    public function register()
    {
        try {
            $connection = $this->connect();
            $sth = $connection->prepare("INSERT INTO usuarios(username, password) VALUES(:username, :pass)");
            $response = $sth->execute(array(":username" => $this->username, ":pass" => $this->password));
            return $response;
        } catch (PDOException $e) {
            die("Error problem with set login: " . $e->getMessage());
        }
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

}