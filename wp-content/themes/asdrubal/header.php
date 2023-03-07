<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type='text/css' media='all'>

        <?php /*
            <link rel="stylesheet" href="/css/estilo.css">
            <link href="/css/fonts.css" rel="stylesheet">
            include_once $_SERVER['DOCUMENT_ROOT'].'/assets/functions.php';
     */
    wp_head();
    ?>

    
    </head>
    <body>
        <header>
            <nav class="headerMenu">
                <ul>
                    <li class="contenedorLogo"><a href="/" style="height: 49px;" class="nombreEmpresa">
                        <img src="/imagenes/logo.svg" height="50px" width="80px"  alt="logo negro">
                    </a>
                    <h2>SEOAdvantage</h2>
                    <li><a class="listaheader" href="/">Home</a></li>
                    <li><a class="listaheader" href="/quienes-somos/">Quienes Somos</a></li>
                    <li><a class="listaheader" href="/contacto/">Contacto</a></li>
                </ul>
            </nav>
        </header>