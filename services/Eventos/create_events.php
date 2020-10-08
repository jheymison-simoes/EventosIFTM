<?php

    include("../../data_base/connection.php");

    $id_user = $_POST['id_user'];
    $nome = mysqli_escape_string($conecta_bd, $_POST['NomeEvento']);
    $avatar = mysqli_escape_string($conecta_bd, $_POST['AvatarEvento']);
    $whatsapp = mysqli_escape_string($conecta_bd, $_POST['Whatsapp']);
    $descricao = mysqli_escape_string($conecta_bd, $_POST['Descricao']);
    $local = mysqli_escape_string($conecta_bd, $_POST['local']);
    $qnt_vagas = mysqli_escape_string($conecta_bd, $_POST['qtdVagas']);
    $custo = mysqli_escape_string($conecta_bd, $_POST['Custo']);
    $dia = mysqli_escape_string($conecta_bd, $_POST['dia']);
    $mes = mysqli_escape_string($conecta_bd, $_POST['mes']);
    $ano = mysqli_escape_string($conecta_bd, $_POST['ano']);
    $hora = mysqli_escape_string($conecta_bd, $_POST['horario']);
    $data = "$ano-$mes-$dia";

    $sql = "INSERT INTO cadastrar_eventos (nome, avatar, whatsapp, descricao, local, vagas, custo, data, hora, id_cadastrar_usuarios)
            VALUES('$nome', '$avatar', '$whatsapp', '$descricao', '$local', '$qnt_vagas', '$custo', '$data', '$hora', '$id_user')";

    if(mysqli_query($conecta_bd, $sql)){
        header("Location: ../../index.php?page=Eventos&sec=confirm_event");
    } else {
        
    }
    

?>