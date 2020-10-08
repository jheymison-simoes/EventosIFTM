<?php

    session_start();

    include("./data_base/connection.php");

    $id_usuario = $_SESSION['user']['id'];
        // Pega o nome do usuário
    $usuario = $_SESSION['user']['nome'];

    $sql = "SELECT * FROM cadastrar_eventos WHERE vagas > 0";
    $sel = $conecta_bd -> query($sql);
    
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Poppins&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../Assets/styles/global.css">
    
    <link rel="stylesheet" href="assets/styles/list_events.css">
    <link rel="stylesheet" href="assets/styles/create_events.css">
    <title>Lista de Eventos</title>
</head>
<body>
    <header>
        <div id="header">
            <div class="contentHender">
                <div class="primeiraFaixa">
                    <a href="index.php?page=Home&sec=home"><img src="assets/icons/Voltar.png" alt=""></a>
                    <div class="usuario">
                        <img id="imgConta" src="assets/icons/Conta.png" alt="">
                        <strong><?php echo $usuario ?></strong>
                    </div>
                </div>
                <img id="logoEvent" src="assets/img/LogoBranco.png" alt="Logo Event+">    
            </div>
        </div>
    </header>
    
    <main>
        <?php while($eventos = $sel->fetch_assoc()): ?>
            <?php
                $date = $eventos['data'];
                $data = implode('/', array_reverse(explode('-', $date)));
            ?>

            <article class="EventItem">
                <header>
                    <img src="<?php echo $eventos['avatar'] ?>" alt="Imagem do Evento">
                    <div class="contentNameLocal">
            
                        <strong id="NameEvent">
                            <?php echo $eventos['nome'] ?>
                        </strong>
                        <span>Vagas Restantes: 
                            <strong class="spanStrongs">
                                <?php echo $eventos['vagas'] ?>
                            </strong>
                        </span>
                        <span>Local do evento: 
                            <strong class="spanStrongs">
                                <?php echo $eventos['local'] ?>
                            </strong>
                        </span>
                        <span>Data: 
                            <strong class="spanStrongs">
                                <?php echo $data ?>
                            </strong>
                        </span>
                        <span>Horário: 
                            <strong class="spanStrongs">
                            <?php echo $eventos['hora'] ?>
                            </strong>
                        </span>
                    </div>
                    
                </header>

                <p><?php echo $eventos['descricao'] ?></p>

                <footer>
                    <p>
                        Preço:<strong> <?php echo $eventos['custo'] ?></strong>
                    </p>
                    <a href="index.php?page=Eventos&sec=confirm_participate&id_event=<?php echo $eventos['id'];?>">
                        Participar
                    </a>
                </footer>
            </article>
        <?php endwhile; ?>
    </main>
</body>