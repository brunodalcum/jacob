<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="assets/backend/css/reset.css"/>
    <link rel="stylesheet" href="assets/backend/css/boot.css"/>
    <link rel="stylesheet" href="assets/backend/css/login.css"/>
    <link rel="icon" type="image/png" href="assets/backend/images/favicon.png"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UpAdmin - Site Control</title>
</head>
<body>

<div class="ajax_response"></div>

<div class="dash_login">
    <div class="dash_login_left">
        <article class="dash_login_left_box">
            <header class="dash_login_box_headline">
                <div class="dash_login_box_headline_logo icon-imob icon-notext"></div>
                <h1>Login</h1>
            </header>

            <form name="login" action="<?php echo route('login.do'); ?>" method="post" autocomplete="off">
                <label>
                    <span class="field icon-envelope">E-mail:</span>
                    <input type="email" name="email" placeholder="Informe seu e-mail" value="brunodalcum@gmail.com" required/>
                </label>

                <label>
                    <span class="field icon-unlock-alt">Senha:</span>
                    <input type="password" name="password" placeholder="Informe sua senha" required/>
                </label>

                <button class="gradient gradient-orange radius icon-sign-in">Entrar</button>
            </form>

            <footer>
                <p>Desenvolvido por <a href="https://www.upinside.com.br">www.<b>upinside</b>.com.br</a></p>
                <p>&copy; <?= date("Y"); ?> - Todos os Direitos Reservados</p>
                <p class="dash_login_left_box_support">
                    <a target="_blank"
                       class="icon-whatsapp transition text-green"
                       href="https://api.whatsapp.com/send?phone=DDI+DDD+TELEFONE&text=Olá, preciso de ajuda com o login."
                    >Precisa de Suporte?</a>
                </p>
            </footer>
        </article>
    </div>

    <div class="dash_login_right"></div>

</div>

<script src="assets/backend/js/jquery.min.js"></script>
<script src="assets/backend/js/login.js"></script>

</body>
</html>
