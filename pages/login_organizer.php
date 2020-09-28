
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
<form method="post" action="services/login_organizer.php">
    <h1>Organizador - Login ou <a href="index.php?sec=register_organizer" class="btn btn-success">Cadastre-se!</a></h1>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="email_user">E-mail:</label>
                <input type="email" class="form-control" id="email_user" name="email_user" placeholder="exemple@exemple.com" required>
            </div>
        </div>
    </div>

    <button class="btn btn-success" type="submit">Avançar</button>
    <a href="index.php?sec=home" class="btn btn-success">Cancelar</a>
</form>
<?php } 

form_create_events();

?>

