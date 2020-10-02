<div id="container">
    <div class="content_login">
        <div class="logoContent">  
            <h1>
                <img src="assets/img/logoEvent.png" alt="Logo Event+">
            </h1>
        </div>
        <form id="loginContent" method="post" action="services/Login/login.php">
            <input type="email" id="email" placeholder="Email" name="email_login" required>
            <input type="password" id="password" placeholder="Senha" name="senha_login" required>

            <button type="submit" id="submit">
                <img src="assets/icons/SubmitLogin.png" alt="">
                Avançar
            </button>  
        </form> 
        <span>Não tem uma conta? <a href="index.php?page=Register&sec=register" id="cadastrar">Cadastre-se agora!</a></span>
        <a href="index.php" id="cadastrar">Voltar ao Inicio</a>  
    </div>  
</div>