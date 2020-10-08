<?php

    include("../../data_base/connection.php");

    $id_evento = $_POST['id_evento'];
    $id_user = $_POST['id_user'];

    $sql_select = "SELECT vagas FROM cadastrar_eventos WHERE id = '$id_evento'";
    $sel_select = $conecta_bd->query($sql_select); // Roda SQL
    $qnt_vagas = $sel_select->fetch_assoc();
    
	foreach($qnt_vagas as $qnt_vagas){
		$vagas = $qnt_vagas;
    }

    $vagas = $vagas - 1;

    $sql_insert = "UPDATE cadastrar_eventos SET vagas = '$vagas' WHERE cadastrar_eventos.id = '$id_evento'";
    $sql_participate = "INSERT INTO eventos_usuarios (id_cadastrar_eventos, id_cadastrar_usuarios)
                        VALUES ('$id_evento', '$id_user')";
    
    if (mysqli_query($conecta_bd, $sql_insert)) {
        mysqli_query($conecta_bd, $sql_participate);
	    header("Location: ../../index.php?page=Eventos&sec=list_events");
	} else {
	    
	}

?>