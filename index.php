<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Projeto 01</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu Website">
</head>
<body>

    <?php
        // essa parte é para fazer o scrool na single page.
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'sobre':
                echo '<target="sobre" />';
                break;
            case 'servicos':
                echo '<target="servicos" />';
                break;
        }

    ?>


    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div><!--center-->
        </div><!--center-->
        
    </header>

    <?php
        
        if (file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if ($url != 'sobre' && $url != 'servicos') {
                // enviamos a uma pagina de erro
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }
    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados!</p>
        </div><!--center-->
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <?php 
        if ($url == 'contato') {
    ?>
    <script defer src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4&callback=Function.prototype'></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php 
        }
    ?>
</body>
</html>