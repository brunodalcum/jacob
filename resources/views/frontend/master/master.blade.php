<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Venda de Roupas Masculina e Feminina">
    <meta name="keywords" content="botas masculinas, roupas femininas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo env('NAME_STORE') ?></title>

    {!! $head  !!}

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/style.css" type="text/css">

    <link rel="shortcut icon" href="assets/frontend/img/logoicone1.ico" type="image/x-icon">
    <link rel="icon" href="assets/frontend/img/logoicone2.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>


<!-- Page Preloder
<div id="preloder">
    <div class="loader"></div>
</div> -->

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="/index"><img src="assets/frontend/img/logo.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>

            <li><a href="/carrinho"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>R$160,00</span></div>

        <div class="header__top__right__auth ml-4">
            <a href="/login"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <div class="humberger__menu__widget">


    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./index.php">Início</a></li>
            <li><a href="/categorias">Categorias</a></li>
            <li><a href="#">Produtos</a>
                <ul class="header__menu__dropdown">
                    <li><a href="/produtos-listas">Lista de Produtos</a></li>
                    <li><a href="/carrinho">Shoping Cart</a></li>
                    <li><a href="./checkout.html">Check Out</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/carrinho">Carrinho</a></li>
            <li><a href="/contato">Contatos</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>

        <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
        <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo env('APP_WHATSAPP_LINK') ?>" title="<?php echo env('APP_WHATSAPP') ?>"><i class="fa fa-whatsapp"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> <?php echo env('APP_EMAIL') ?></li>
            <li><?php echo env('TEXT_FEATURED') ?></li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i><?php echo env('APP_EMAIL') ?> </li>
                            <li><?php echo env('TEXT_FEATURED') ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a target="_blank" title="Ir para página do Facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo env('APP_WHATSAPP_LINK') ?>" title="<?php echo env('APP_WHATSAPP') ?>"><i class="fa fa-whatsapp text-success"></i></a>
                        </div>

                        <div class="header__top__right__auth">
                            <a href="/login"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.php"><img src="assets/frontend/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="./index.php">Início</a></li>
                        <li><a href="categorias.php">Categorias</a></li>
                        <li><a href="#">Produtos</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="/produtos">Produtos</a></li>

                                <li><a href="/produtos-listas">Lista de Produtos</a></li>
                                <li><a href="promocoes.php">Promoções</a></li>
                                <li><a href="combos.php">Combos</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.php">Blog</a></li>

                        <li><a href="contatos.php">Contatos</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="/carrinho"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>R$150,00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->




<!-- Hero Section Begin -->
<section class="hero">
   @yield('content')



</section>
<!-- Latest Product Section End -->




<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="assets/frontend/img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li><?php echo env('ADDRESS_STORE') ?></li>
                        <li>Telefone: <?php echo env('APP_PHONE') ?></li>
                        <li>Email: <?php echo env('APP_EMAIL') ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Principais Links</h6>
                    <ul>
                        <li><a href="/contato">Contatos</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/carrinho">Carrinho</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/lista-produtos">Lista de Produtos</a></li>
                        <li><a href="/categorias">Categorias</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Ainda não possui Cadastro?</h6>
                    <p>Insira seu email para se cadastrar em nosso site!!</p>
                    <form action="#">
                        <input type="email" placeholder="Insira seu Email" required>
                        <button type="submit" class="site-btn">Cadastre-se</button>
                    </form>
                    <div class="footer__widget__social">
                        <a target="_blank" title="Ir para página do Facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo env('APP_WHATSAPP_LINK') ?>" title="<?php echo env('APP_WHATSAPP') ?>"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os Produtos são Demonstrativos | Loja Virtual Demo <i class="fa fa-heart" aria-hidden="true"></i> by <a class="text-info" href="https://www.hugocursos.com.br" target="_blank">Portal Hugo Cursos</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="footer__copyright__payment"><img src="assets/frontend/img/pagamentos.jpeg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="assets/frontend/js/jquery-3.3.1.min.js"></script>
<script src="assets/frontend/js/bootstrap.min.js"></script>
<script src="assets/frontend/js/jquery.nice-select.min.js"></script>
<script src="assets/frontend/js/jquery-ui.min.js"></script>
<script src="assets/frontend/js/jquery.slicknav.js"></script>
<script src="assets/frontend/js/mixitup.min.js"></script>
<script src="assets/frontend/js/owl.carousel.min.js"></script>
<script src="assets/frontend/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="assets/frontend/js/mascara.js"></script>




</body>

</html>
