<?php

include_once './includes/classLogin.php';
include_once './includes/classSession.php';

$login = new Login();
$session = new SessionUser();

include_once './helpers/cleanInputs.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <main>
        <?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];

    if ($error == 1) {
        echo 'Usuario o contraseña incorrecta';
    }
}

include_once './controller/loginController.php';

?>
    </main>
    <script src="../js/scripts.js" type="module"></script>
</body>

</html>