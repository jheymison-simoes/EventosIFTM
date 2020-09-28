<?php

    include("../data_base/connection.php"); // Importando banco de dados

    $name_user = mysqli_escape_string($conecta_bd, $_POST['name_user']);
    $email_user = mysqli_escape_string($conecta_bd, $_POST['email_user']);
    $user_user = mysqli_escape_string($conecta_bd, $_POST['user_user']);
    $tel_user = mysqli_escape_string($conecta_bd, $_POST['tel_user']);

    // Inserindo dados
    $sql = "INSERT INTO usuarios (nome, email, usuario, telefone) 
            VALUES ('$name_user', '$email_user', '$user_user', '$tel_user')";

    $sql_verify = "SELECT email FROM usuarios WHERE email = '$email_user'";
    $sel = $conecta_bd->query($sql_verify);
    $email = $sel->fetch_assoc();
    
    foreach($email as $email){
        $email_verify = $email;
        echo $email_verify;
	}

    

    // if(mysqli_query($conecta_bd, $sql)){
    //         header("Location: index.php?sec=create_events");
    //         echo "SUCCESS";
    //     } else {
    //         echo "FAILED";
    // }

?>