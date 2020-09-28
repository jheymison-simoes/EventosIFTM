<?php

    include("../data_base/connection.php"); // Importando banco de dados

    // $name_event = mysqli_escape_string($conecta_bd, $_POST['empresa']);
    $name_event = mysqli_escape_string($conecta_bd, $_POST['name_event']);
    $description_event = mysqli_escape_string($conecta_bd, $_POST['description_event']);
    $date_event = mysqli_escape_string($conecta_bd, $_POST['date_event']);
    $qnt_vagas = mysqli_escape_string($conecta_bd, $_POST['qnt_event']);
    $name_user = mysqli_escape_string($conecta_bd, $_POST['name_user']);
    $email_user = mysqli_escape_string($conecta_bd, $_POST['email_user']);
    $user_user = mysqli_escape_string($conecta_bd, $_POST['user_user']);
    $tel_user = mysqli_escape_string($conecta_bd, $_POST['tel_user']);

    

?>