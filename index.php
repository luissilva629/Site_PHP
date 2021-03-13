<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <title>Projeto 01</title>
</head>
<body>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch($url){
            case 'sobre':
                echo '<target target="sobre" />';
                break;

            case 'servicos':
                echo '<target target="servicos" />';
                break;
        }

    ?>

    <header>
        <div class="center">
            <div class="logo left"><a href="#">Logomarca</a></div> <!-- logo -->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav> <!-- /desktop -->
            <nav class="mobile right">
                <div class="botao-menu-mobile"><i class="fas fa-bars"></i></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav> <!-- /mobile -->
            <div class="clear"></div>
        </div> <!-- /center -->
    </header>

    <?php

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        } else {
            if($url != 'sobre' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
            } else {
                include('pages/home.php'); 
            }
        }
    
    ?>


    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"' ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    
    <?php
        if($url == 'home' || $url == ''){
    ?>
        <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?>

    <?php
        if($url == 'contato'){
    ?>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAamUv6PMTZhhgzGizd9-QZp5lUKDsaKhM"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>
</body>
</html>