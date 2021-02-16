<?php
include_once "../includes/db.php";
include_once "../includes/classRegister.php";
$register = new Register();
include_once "../helpers/cleanInputs.php";
include_once "../controller/registerController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Register</h1>
        <?php
if (isset($_GET['error'])) {
    $errorURL = $_GET['error'];
    if ($errorURL == 0) {
        echo 'Registrado correctamente';
    }
}
?>
        <form action="./register.php" method="POST">
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" placeholder="insert username..." />
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" class="password"
                    placeholder="insert password..." />
                <input type="button" value="👁" class="button-password" />
            </div>
            <input type="submit" value="Registrarme" />
        </form>
    </main>
    <script src="../js/scripts.js" type="module"></script>
</body>

</html>