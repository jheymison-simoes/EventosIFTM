<?php
    session_start();

    include("../../data_base/connection.php");

    $email = mysqli_escape_string($conecta_bd, $_POST['email_login']);
    $senha = mysqli_escape_string($conecta_bd, sha1($_POST['senha_login']));
    
    $sql = "SELECT * FROM cadastrar_usuarios 
            WHERE email = '$email' 
            AND senha = '$senha'";
    $sel = $conecta_bd->query($sql);

    if($sel->num_rows){

        $usuario = $sel->fetch_assoc();

        $_SESSION['logado'] = true;
        $_SESSION['user'] = $usuario;

        header("Location: ../../index.php?page=Home&sec=home");

    } else {
        header("Location: ../../index.php?page=Login&sec=login&erro=failed&email=$email");
    }

?>