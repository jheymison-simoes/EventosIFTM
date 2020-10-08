<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <!-- My Styles -->
    <link rel="stylesheet" href="assets/styles/register.css">
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
        <div id="Background"></div>
    </div>
</body>
