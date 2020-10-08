<?php
    /**
     * Função que define as rotas
     *
     * @return void
     */
    function routes(){
        if (isset($_GET['sec'])) {
            // Inclusão de Páginas

            $pages = [
                'Home',
                'Login',
                'Register',
                'Eventos',
            ];

            $secoes = [
                'home',
                'login', 
                'register',
                'create_events',
                'confirm_event',
                'list_events',
                'confirm_participate',
                'my_events',
                'my_participate'
            ];

            $arqs = $_GET['page'];
            $sec = $_GET['sec'];

            if (in_array($arqs, $pages) && in_array($sec, $secoes)) { //existe esta secao
                include("pages/" . $arqs . "/" . $sec . ".php");
            }else{ // nao existe
                include("pages/Login/login.php");
            }
        }else {
            include("pages/Login/login.php");
        }
    }
?>