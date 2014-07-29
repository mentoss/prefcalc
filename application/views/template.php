<?php

//LESS.php
require_once '/var/www/blueprint/application/assets/less.php/Less.php';

$options = array(
    'compress' => true,
    'sourceMap' => true,    
    'cache_dir'=>'/var/www/blueprint/layout/css/cache-css',
    );

$files = array();

$files = array("/var/www/blueprint/layout/css/custom.less" => "/blueprint/layout/css/", 
               "/var/www/blueprint/layout/css/font-awesome/less/font-awesome.less" => "/var/www/blueprint/layout/css/font-awesome/less/");

$css_file_name = Less_Cache::Get( $files, $options );

?>


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
    
    <title>Калькулятор</title>

    <!-- Framework CSS -->
    <link rel="stylesheet" href="../../layout/css/src/reset.css" type="text/css" media="screen, projection">    
    <link rel="stylesheet" href="../../layout/css/liquid.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="../../layout/css/bootstrap/bootstrap.min.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="../../layout/css/src/print.css" type="text/css" media="print">
    
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="../../layout/css/font-awesome/less/font-awesome.less" type="text/css" media="print">
    
    <!-- Custom CSS -->
    <link rel="stylesheet/less" href="../../layout/css/custom.less" media="screen, projection">    
    
    <? echo '<link rel="stylesheet" type="text/css" href="../../layout/css/cache-css/'.$css_file_name.'">'; ?>        
    
    <!--[if lt IE 8]><link rel="stylesheet" href="../../layout/css/ie.css" type="text/css" media="screen, projection"><![endif]-->

  </head>
  
  <body>
  
  <!-- MENU -->
    <header id="header">
        <div class="container">
            <!-- #logo -->
            <h1>				
                <a id="logo" href="/" title="Преферанс калькулятор ставок">
                    <img src="../../layout/img/cards.png" alt="Преферанс калькулятор ставок">
                    <span>
                        <b>Преферанс</b>
                        <br>- калькулятор
                    </span>
                </a>
            </h1>
            <div class="topmenu">               	
                <!-- main menu -->
                <nav id="menu" class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="menu">
                        <li class="menu-item">
                            <a href="four-player">На четверых</a>
                        </li>
                        <li class="menu-item">
                            <a href="three-player">На троих</a>
                        </li>
                        <li class="menu-item">
                            <a href="contracts">Таблица расчётов</a>							
                        </li>
                        <li class="menu-item">
                            <a href="codex">Кодекс</a>							
                        </li>
                        <li class="menu-item">
                            <a href="wtf">wtf</a>
                        </li>						
                    </ul>
                </nav>
            </div>		
        </div>
    </header>
    
    <!-- BANNER -->
	<?php include 'application/views/header/'.$header_view; ?>
	
  <!-- CONTENT -->
    <div class="container index-container">
        <?php include 'application/views/'.$content_view; ?>
    </div>  
        
    <footer id="footer">
        <a href="#">
            <img class="pull-right" src="../../layout/img/via.png" alt=""/>
        </a>
        <div class="container">
            <div class="content-container">
                <p>Все материалы взяты из открытых источников, идея из головы, реализация из свободного времени.</p>
            </div>
        </div>	
    </footer>

    <!-- JavaScript
    ================================================== -->
    <script src="../../layout/js/jquery-1.11.1.min.js"></script>
    <script src="../../layout/js/modernizr.custom.66416.js"></script>
    <script src="../../layout/js/bootstrap.min.js"></script>
    <script src="../../layout/js/custom.js"></script>

  </body>
</html>