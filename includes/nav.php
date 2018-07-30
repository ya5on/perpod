<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $lang['title']?></title>
    <meta name=“robots” content=“noindex,nofollow”>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" media="only screen and (max-device-width: 768px)" href="css/mobile.css"/>
    <link rel="stylesheet" href="libs/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="libs/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="libs/slick/slick-theme.css"/>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

</head>

<body>
    <!-- Navigation -->
    <nav>
        <a href="#menu" id="toggle"><span></span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="?page=home"><?php echo $lang['home']?></a></li>
                                <li><a href="?page=about"><?php echo $lang['about']?></a></li>
                                <li><a href="?page=carrier"><?php echo $lang['carrier']?></a></li>
                                <li class="menu-item"><a href="#">Діяльність</a>
                                
                                    <li><a href="?page=roslynnytstvo">Рослинництво</a></li>
                                    <li><a href="?page=tvarinnictvo">Тваринництво</a></li>
                                    <li><a href="?page=bdzholyarstvo">Бджолярство</a></li>
                                    <li><a href="?page=transportniposlugy">Транспортнi послуги</a></li>
                                    <li><a href="?page=metaloplastykovikonstrukcii">Металопластиковi конструкцii</a></li>
                                    <li><a href="?page=mzuri">MZURI</a></li>
                                
                            </li>
                                <li><a href="?page=contacts"><?php echo $lang['contacts']?></a></li>
                                <li><a href="?lang=ukr" id="ua">UA</a></li>
                                <li><a href="?lang=rus" id="ru">RU</a></li>
                            </ul>
                        </div>
        <div class="container">
            <div class="row">
                <div class="nav-content">
                        <div class="logo">
                            <a href="?page=home">
                                <img src="img/main-page/logo.png" alt="perlpod">
                            </a>
                        </div>
                    <div class="main-menu">
                        <ul class="menu">
                            <li><a href="?page=home"><?php echo $lang['home']?></a></li>
                            <li><a href="?page=about"><?php echo $lang['about']?></a></li>
                            <li><a href="?page=carrier"><?php echo $lang['carrier']?></a></li>
                            <li class="menu-item"><a href="#"><?php echo $lang['diyalnist']?></a>
                                <ul class="sub-menu">
                                    <li><a href="?page=roslynnytstvo"><?php echo $lang['roslynnytstvo']?></a></li>
                                    <li><a href="?page=tvarinnictvo"><?php echo $lang['tvarinnictvo']?></a></li>
                                    <li><a href="?page=bdzholyarstvo"><?php echo $lang['bdzholyarstvo']?></a></li>
                                    <li><a href="?page=transportniposlugy"><?php echo $lang['transportniposlugy']?></a></li>
                                    <li><a href="?page=metaloplastykovikonstrukcii"><?php echo $lang['metaloplastykovikonstrukcii']?></a></li>
                                    <li><a href="?page=mzuri"><?php echo $lang['mzuri']?></a></li>
                                </ul>
                            </li>
                            <li><a href="?page=contacts"><?php echo $lang['contacts']?></a></li>
                        </ul>
                        
                        <ul class="language">
                            <li><a href="?lang=ukr" id="ua">UA</a></li>
                            <li class="dropdown-content"><a href="?lang=rus" id="ru">RU</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- //Navigation -->