<?php

    include("../../data_base/connection.php");


    $name = mysqli_escape_string($conecta_bd, $_POST['name_register']);
    $email = mysqli_escape_string($conecta_bd, $_POST['email_register']);
    $tel = mysqli_escape_string($conecta_bd, $_POST['tel_register']);
    $senha = mysqli_escape_string($conecta_bd, sha1($_POST['password_register']));

    $sql = "INSERT INTO cadastrar_usuarios (nome, email, telefone, senha)
            VALUES ('$name', '$email', '$tel', '$senha')";

    if(mysqli_query($conecta_bd, $sql)){
        header("Location: index.php?page=Eventos&sec=create_event");
    } else {
        header("Location: ");
    }


?>