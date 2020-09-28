
<?php

/**
 * Função que mostra o front do formulário de cadastro de Eventos
 *
 * @return void
 */
function form_create_events(){ 
    // data atual
    $data = date('Y-m-d');
?>
<form method="post" action="services/create_events.php">
    <h1>Criar Evento</h1>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="name_event">Nome do Evento:</label>
                <input type="text" class="form-control" id="name_event" name="name_event" required>
            </div>

            <div class="form-group">
                <label for="description_event">Descrição do Evento:</label>
                <input type="text" class="form-control" id="description_event" name="description_event" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="date_event">Data:</label>
                <input type="date" class="form-control" id="date_event" name="date_event" value="<?php echo $data ?>" required>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="qnt_event">Quantidade de Vagas:</label>
                <input type="number" class="form-control" id="qnt_event" name="qnt_event" required>
            </div>
        </div>
    </div>

    <h1>Organizador</h1>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="name_user">Nome:</label>
                <input type="text" class="form-control" id="name_user" name="name_user" required>
            </div>

            <div class="form-group">
                <label for="email_user">E-mail:</label>
                <input type="email" class="form-control" id="email_user" name="email_user" placeholder="exemple@exemple.com" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="user_user">Usuário:</label>
                <input type="text" class="form-control" id="user_user" name="user_user" required>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="tel_user">Telefone:</label>
                <input type="tel" class="form-control" id="tel_user" name="tel_user" pattern="([0-9]){2}[0-9]{1}[0-9]{4}[0-9]{4}" placeholder="99 9 9999-9999" required>
            </div>
        </div>
    </div>

    <button class="btn btn-success" type="submit">Salvar</button>
    <a href="index.php?sec=home" class="btn btn-success">Cancelar</a>
</form>
<?php } 

form_create_events();

?>

