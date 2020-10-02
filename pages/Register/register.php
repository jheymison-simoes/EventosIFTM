<div id="container">
    <div class="content_register">
        <div class="logoContent">  
            <h1>
                <img src="assets/img/logoEvent.png" alt="Logo Event+">
            </h1>
        </div>
        <form method="post" action="services/Register/register.php" id="loginContent">
            <input type="text" id="name" placeholder="Nome Completo" name="name_register" required>
            <input type="email" id="email" placeholder="Email" name="email_register" required>
            <input type="number" id="telefone" placeholder="Telefone" name="tel_register" required>
            <input type="password" id="password" placeholder="Senha" name="password_register" required>

            <button type="submit" id="submit">
                <img src="assets/icons/SubmitRegister.png" alt="">
                Avançar
            </button>
        </form> 
        <a href="index.php?page=Login&sec=login" id="cadastrar">Voltar ao login</a>
    </div>  
</div>