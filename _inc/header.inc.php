
<?php require_once('./_app/config.inc.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teste Front End</title>

    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo URL_BASE ?>/css/plugins.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>/css/index.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-slider.css" />
    <link rel="stylesheet" href="<?php echo URL_BASE ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>/lib/nivo-slider/nivo-slider.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>/css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo URL_BASE ?>/lib/nivo-slider/jquery.nivo.slider.js"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>
</head>

<body>
<header>
    <div class="menu-telefones">
        <label for="">(11)1234-1234</label>
        <label for="">(11)1234-1234</label>
    </div>
    <div class="menu-completo">
        <a class="navbar-brand" href="<?php echo URL_BASE ?>"><img src="<?php echo URL_BASE ?>/images/logo-ideal.png"></a>
        <ul class="menu">
            <li><a href="<?php echo URL_BASE ?>">HOME</a></li>
            <li>
                <a href="<?php echo URL_BASE ?>">EMPRESA</a>
            </li>
            <li><a href="<?php echo URL_BASE ?>">CLIENTES</a></li>
            <li><a href="<?php echo URL_BASE ?>">CONTATO</a></li>
        </ul>
    </div>
</header>
</body>

