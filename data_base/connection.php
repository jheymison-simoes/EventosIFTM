<?php

// Definir fuso Horário
date_default_timezone_set("America/Sao_Paulo");

// $conecta_bd = new mysqli("127.0.0.1", "root" ,"" , "eventosiftm");

$conecta_bd = new mysqli("192.168.1.2", "remotealuno" ,"iftm@123" , "eventosiftm");

if ($conecta_bd-> connect_error ) {
	die('Erro na conexao :' . $conecta_bd-> connect_error);
}

?>
