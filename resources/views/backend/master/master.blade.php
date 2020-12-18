<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

    <link rel="stylesheet" href="assets/backend/css/reset.css"/>
    <link rel="stylesheet" href="assets/backend/js/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/backend/js/datatables/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/backend/js/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/backend/css/boot.css"/>
    <link rel="stylesheet" href="assets/backend/css/style.css"/>
    <link rel="icon" type="image/png" href="assets/backend/images/favicon.png"/>

    <title>UpAdmin - Site Control</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>

<div class="ajax_response"></div>

<div class="dash">
    <aside class="dash_sidebar">
        <article class="dash_sidebar_user">
            <img class="dash_sidebar_user_thumb" src="assets/backend/images/avatar.jpg" alt="" title=""/>

            <h1 class="dash_sidebar_user_name">
                <a href="">Gustavo Web</a>
            </h1>
        </article>

        <ul class="dash_sidebar_nav">
            <li class="dash_sidebar_nav_item active {{ isActive('home') }}">
                <a class="icon-tachometer" href="<?php echo route('home'); ?>>">Dashboard</a>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-users" href="dashboard.php?app=users/index">Clientes</a>
                <ul class="dash_sidebar_nav_submenu">
                    <li class=""><a href="dashboard.php?app=users/index">Ver Todos</a></li>
                    <li class=""><a href="dashboard.php?app=companies/index">Empresas</a></li>
                    <li class=""><a href="dashboard.php?app=users/team">Time</a></li>
                    <li class=""><a href="dashboard.php?app=users/create">Criar Novo</a></li>
                </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-home" href="dashboard.php?app=properties/index">Imóveis</a>
                <ul class="dash_sidebar_nav_submenu">
                    <li class=""><a href="dashboard.php?app=properties/index">Ver Todos</a></li>
                    <li class=""><a href="dashboard.php?app=properties/create">Criar Novo</a></li>
                </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-file-text" href="dashboard.php?app=contracts/index">Contratos</a>
                <ul class="dash_sidebar_nav_submenu">
                    <li class=""><a href="dashboard.php?app=contracts/index">Ver Todos</a></li>
                    <li class=""><a href="dashboard.php?app=contracts/create">Criar Novo</a></li>
                </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-reply" href="">Ver Site</a></li>
            <li class="dash_sidebar_nav_item"><a class="icon-sign-out on_mobile" href="/logout" target="_blank">Sair</a></li>
        </ul>

    </aside>

    <section class="dash_content">

        <div class="dash_userbar">
            <div class="dash_userbar_box">
                <div class="dash_userbar_box_content">
                    <span class="icon-align-justify icon-notext mobile_menu transition btn btn-green"></span>
                    <h1 class="transition">
                        <i class="icon-imob text-orange"></i><a href="">Up<b>Admin</b></a>
                    </h1>
                    <div class="dash_userbar_box_bar no_mobile">
                        <a class="text-red icon-sign-out" href="/logout">Sair</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="dash_content_box">
           @yield('content')
        </div>
    </section>
</div>


<script src="assets/backend/js/jquery.min.js"></script>
<script src="assets/backend/js/tinymce/tinymce.min.js"></script>
<script src="assets/backend/js/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/backend/js/datatables/js/dataTables.responsive.min.js"></script>
<script src="assets/backend/js/select2/js/select2.min.js"></script>
<script src="assets/backend/js/select2/js/i18n/pt-BR.js"></script>
<script src="assets/backend/js/jquery.form.js"></script>
<script src="assets/backend/js/jquery.mask.js"></script>
<script src="assets/backend/js/scripts.js"></script>

</body>
</html>
