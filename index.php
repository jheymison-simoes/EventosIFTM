<?php

    // Inciciando Session
    // session_start();

    // // Se caso ja existir uma sessão ela será destruida
    // if(isset($_SESSION)){
    //     session_destroy();
    // }
    // Imports
    include("routes/routes.php");

?>
<!doctype html>
<html lang="pt">
    <!-- Menu -->
    <?php
        // menu();
        routes();
    ?>
</html>