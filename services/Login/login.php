<?php

    include("../../data_base/connection.php");

    $email = mysqli_escape_string($conecta_bd, $_POST['email_login']);
    $senha = mysqli_escape_string($conecta_bd, sha1($_POST['senha_login']));
    
    $sql = "SELECT * FROM cadastrar_usuarios 
            WHERE email = '$email' 
            AND senha = '$senha'";
    $sel = $conecta_bd->query($sql);

    if($sel->num_rows){

        $name = $sel->fetch_assoc();

        $_SESSION['logado'] = true;
        $_SESSION['user'] = $name;
        header("Location: index.php?page=Eventos&sec=create_event");

    } else {
        header("Location: ");
    }

?>