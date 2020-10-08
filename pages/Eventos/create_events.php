<?php
    session_start();

    if( $_SESSION['logado'] == true ):
        $id_usuario = $_SESSION['user']['id'];
        // Pega o nome do usuário
        $usuario = $_SESSION['user']['nome'];
    
        $array = [
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro'
        ];

        $cont = count($array);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/styles/create_events.css">
    <title>Event+</title>
</head>
<body>
    <header>
        <div id="header">
            <div class="contentHender">
                <div class="primeiraFaixa">
                    <a href="index.php?page=Home&sec=home"><img src="assets/icons/Voltar.png" alt=""></a>
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
            <form id="content" method="post" action="services/Eventos/create_events.php">
                <fieldset id="DadosEvent">  
                    <input hidden name="id_user" type="text" value="<?php echo $id_usuario ?>">

                    <legend id="legendEvent">Dados do evento</legend>
                    <label for="NomeDoEvento">Nome do Evento</label>
                    <input name="NomeEvento" type="text" required>
                
                    <label for="AvatarEvento">Avatar do Evento (link)</label>
                    <input name="AvatarEvento" type="text" placeholder="http://" required>

                    <label for="Whatsapp">Whatsapp</label>
                    <input name="Whatsapp" type="number" placeholder="Número" required>
                
                    <label for="Descricao">Descrição</label>
                    <textarea name="Descricao" required></textarea>

                    <label for="local">Local do evento</label>
                    <input name="local" type="text" placeholder="Endereço, rua, numero e cidade" required>

                    <label for="qtdVagas">Quantidade de vagas</label>
                    <input name="qtdVagas" type="number" required>

                    <label for="Custo">Custo Ingresso (Se for gratuito deixe em branco)</label>
                    <input name="Custo" type="number" placeholder="R$ 0,00" step="any" required>
                </fieldset>
                
                <fieldset id="DatadoEvento">
                    <legend>Data do evento</legend>
                    <div class="grupoDataEvento">
                        <div id="selecDay"> 
                            <label for="dia">Dia</label>
                            <select name="dia" required>
                                <?php for($i = 1; $i <= 31; $i++): ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div id="selectMes" required>
                            <label for="mes">Mês</label>
                            <select name="mes">
                                <?php for($i = 0; $i < $cont; $i++): ?>
                                    <option value="<?php echo $i+1 ?>"><?php echo $array[$i] ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div id="selectAno" required>
                            <label for="ano">Ano</label>
                            <select name="ano">
                                <?php for($i = 2020; $i < 2050; $i++): ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div id="inputHorario" required>
                            <label for="horario">Horário</label>
                            <input name="horario" type="time">
                        </div>
                    </div>     
                </fieldset>
                <footer>
                    <p>Importante!<br> preencha todos os campos</p>
                    <button id="submit" type="submit">Criar Evento</button>
                </footer>
            </form>
        </div>
    </main>
</body>
<?php else: ?>
    <?php 
        header("Location: index.php"); 
        session_destroy();
    ?>
<?php endif; ?>