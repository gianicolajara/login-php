<h1>
    Hi <?php echo $session->getUserCurrent() ?>
    <form action="./includes/logout.php" method="POST">
        <input type="submit" value="Cerrar sección">
    </form>
</h1>