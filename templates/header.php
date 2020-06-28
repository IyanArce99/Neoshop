<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Neoshop</title>
    <base href="<?= BASE; ?>" />
    <link rel="icon" href="./resources/favicon.png" type="image/png" />
    <meta name="bc" content="#FFCC65">

    <!-- RESPONSIVE METADATA -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- STYLES -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://code.jquery.com/" crossorigin>
    <link rel="preconnect" href="https://kit.fontawesome.com/" crossorigin>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="./css/style.css" />
</head>
<body>

    <header class="header">
        <div class="header__logo">
            <a href="./">
                <img src="./resources/logo.png" alt="Neoshop" title="Neoshop" />
            </a>
        </div><!-- .header__logo -->
        <div class="header__shop shop">
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-shopping-cart"></i></i></span>
            <span class="shop__text">Carrito</span>
        </a><!-- .shop__button -->
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-user"></i></span>
            <span class="shop__text">Mi perfil</span>
        </a><!-- .shop__button -->
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-box-open"></i></i></span>
            <span class="shop__text">Mis pedidos</span>
        </a><!-- .shop__button -->
    </div><!-- .header__shop -->
    </header>
