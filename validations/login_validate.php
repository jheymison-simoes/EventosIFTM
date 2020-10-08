<?php
    if(isset($_GET['erro'])){
        $erro = $_GET['erro'];
        $email = $_GET['email'];
        
        if($erro == "failed") {
            $msg = "<div class='error'>Erro - Email ou Senha digitados incorretamente!</div>";
            echo $msg;
        }
    }
?>