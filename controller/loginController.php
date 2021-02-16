<?php

if (isset($_SESSION['user'])) {
    include_once './views/home.php';
} else if (isset($_POST['username']) && isset($_POST['password'])) {
    $arrayErrores = array();

    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            array_push($arrayErrores, $key);
        }
    }

    if (count($arrayErrores) > 0) {
        foreach ($arrayErrores as $error) {
            echo "Error with : " . $error;
        }
    } else {
        $username = CleanInputs($_POST['username']);
        $password = CleanInputs($_POST['password']);

        $login->setUsername($username);
        $login->setPassword($password);

        $response = $login->login();

        if ($response) {
            $session->setUserCurrent($login->getUsername());
            header('location: ./index.php');
        } else {
            header('location: ./index.php?error=1');
        }
    }

} else {
    include_once './views/login.php';
}