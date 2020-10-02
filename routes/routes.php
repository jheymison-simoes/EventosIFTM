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
                'Login',
                'Register',
                'Eventos',
            ];

            $secoes = [
                'home',
                'login', 
                'register',
                'create_events'
            ];

            $arqs = $_GET['page'];
            $sec = $_GET['sec'];

            if (in_array($arqs, $pages) && in_array($sec, $secoes)) { //existe esta secao
                include("pages/" . $arqs . "/" . $sec . ".php");
            }else{ // nao existe
                include("pages/home.php");
            }
        }else {
            include("pages/home.php");
        }
    }
?>