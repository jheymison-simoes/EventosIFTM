<?php

    session_start();

    // Se caso ja existir uma sessão ela será destruida
    if(isset($_SESSION)){
        session_destroy();
    }


?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <!-- My Styles -->
    <link rel="stylesheet" href="assets/styles/login.css">
    <title>Event+</title>
</head>
<body>
<div id="container">
        <div class="content">
            <div class="logoContent">  
                <h1>
                    <img src="assets/img/logoEvent.png" alt="Logo Event+">
                </h1>
            </div>
            <?php if( isset($_GET['erro']) ){include("validations/login_validate.php");} ?>
            <form id="loginContent" method="post" action="services/Login/login.php">
                <input type="email" id="email" placeholder="Email" name="email_login" required
                    value="<?php if(isset($_GET['email'])){
                        echo $_GET['email'];
                    } else {
                        
                    } ?>"
                >
                <input type="password" id="password" placeholder="Senha" name="senha_login" required>
                <button type="submit" id="submit">
                    <img src="assets/icons/SubmitLogin.png" alt="Avançar">
                    Avançar
                </button>  
            </form> 
            <span>Não tem uma conta? 
                <a href="index.php?page=Register&sec=register" id="cadastrar">
                    Cadastre-se agora!
                </a>
            </span>    
        </div>  
        <div id="Background"></div>
    </div>
</body>