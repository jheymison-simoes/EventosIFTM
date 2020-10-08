<?php
    session_start();
    // Se caso ja existir uma sessão ela será destruida
    if( $_SESSION['logado'] == true ):
        $id_usuario = $_SESSION['user']['id'];
        // Pega o nome do usuário
        $usuario = $_SESSION['user']['nome'];

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <!-- My Styles -->
    <link rel="stylesheet" href="assets/styles/home.css">
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
                <a href="index.php?page=Eventos&sec=create_events">
                    <button id="Criar">Crie seus eventos</button>
                </a>
                <a href="index.php?page=Eventos&sec=list_events">
                    <button id="Participar">Participe de eventos</button>
                </a>
                <a href="index.php?page=Eventos&sec=my_events">
                    <button id="Criar">Meus Eventos</button>
                </a>
                <a href="index.php?page=Eventos&sec=my_participate">
                    <button id="Participar">Minhas Partipações</button>
                </a>
            </div>
        <div id="Background"></div>
    </div>
</body>
<?php else: ?>
    <?php 
        header("Location: index.php"); 
        session_destroy();
    ?>
<?php endif; ?>