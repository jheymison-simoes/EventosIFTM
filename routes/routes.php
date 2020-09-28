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
                'users',
            ];

            $secoes = [
                'home',
                'login',
                'create_events', 
                'list_events',
                'login_organizer',
                'register_organizer',  
            ];

            

            $arqs = $_GET['pages'];
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