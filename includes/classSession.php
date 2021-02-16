<?php

class SessionUser
{
    public function __construct()
    {
        session_start();
    }

    public function setUserCurrent($user)
    {
        $_SESSION['user'] = $user;
    }

    public function getUserCurrent()
    {
        return $_SESSION['user'];
    }

    public function closeSession()
    {
        session_unset();
        session_destroy();
    }

}