<?php
    session_start();
    $usuario = $_SESSION['user']['nome'];
    $id_user = $_SESSION['user']['id'];
    $id_event = $_GET['id_event'];
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/confirm_event.css">
    <link rel="stylesheet" href="assets/styles/create_events.css">
    
    <title>Event+</title>
</head>
<body>
    <header>
        <div id="header">
            <div class="contentHender">
                <div class="primeiraFaixa">
                    <a href="index.php?page=Eventos&sec=list_events"><img src="assets/icons/Voltar.png" alt=""></a>
                    <div class="usuario"><img id="imgConta" src="assets/icons/Conta.png" alt="">
                        <strong><?php echo $usuario ?></strong>
                    </div>
                </div>
                <img id="logoEvent" src="assets/img/LogoBranco.png" alt="Logo Event+">    
            </div>
        </div>
    </header>

    <main>
        <div class="contentForm">
            <form method="post" action="services/Eventos/confirm_participate.php">
                <input hidden name="id_evento" value="<?php echo $id_event; ?>">
                <input hidden name="id_user" value="<?php echo $id_user; ?>">
                <h1 class="confirm">Confirma a Participação no Evento?</h1>
                <footer id="footer_confirm">

                    <button id="submit" type="submit">Sim</button>
                    
                    <a href="index.php?page=Eventos&sec=list_events">
                        <button id="submit">Não</button>
                    </a>
                </footer>
            </form>
        </div>
    </main>

</body>