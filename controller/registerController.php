<?php
if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = CleanInputs($_POST['username']);
    $password = CleanInputs($_POST['password']);

    $errorArray = array();

    foreach ($_POST as $clave => $valor) {
        if (empty($valor)) {
            array_push($errorArray, $clave);
        }
    }

    if (count($errorArray) > 0) {
        foreach ($errorArray as $error) {
            echo "Error with : " . $error . "<br />";
        }
    } else {
        $register->setUsername($username);
        $register->setPassword($password);
        $result = $register->register();
        if ($result) {
            header('location: ./register.php?error=0');
        }
    }
}