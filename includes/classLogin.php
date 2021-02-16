<?php

include_once 'db.php';

class Login extends DB
{
    private $username;
    private $password;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function login()
    {
        try {
            $sth = $this->connect()->prepare("SELECT username, password FROM usuarios WHERE username = :username");
            $sth->execute(array(":username" => $this->username));
            return (password_verify($this->password, $sth->fetch(PDO::FETCH_OBJ)->password)) ? true : false;

        } catch (PDOException $e) {
            echo "Error with login : " . $e;
        }
    }

}