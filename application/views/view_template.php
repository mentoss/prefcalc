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
    <link rel="stylesheet" href="../../layout/css/src/typography.css" type="text/css" media="screen, projection">        
    <link rel="stylesheet" href="../../layout/css/plugins/buttons/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="../../layout/css/src/print.css" type="text/css" media="print">
    
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="../../layout/css/font-awesome/less/font-awesome.less" type="text/css" media="print">
    
    <!-- Custom CSS -->
    <link rel="stylesheet/less" href="../../layout/css/custom.less" media="screen, projection">    
    
    <? echo '<link rel="stylesheet" type="text/css" href="../../layout/css/cache-css/'.$css_file_name.'">'; ?>        
    
    <!--[if lt IE 8]><link rel="stylesheet" href="../../layout/css/ie.css" type="text/css" media="screen, projection"><![endif]-->
    
    <style>
          <? //echo $css; ?>        
    </style>

  </head>
  
  <body>
  
  <!-- HEADER -->
	<header id="header">
		<div class="container">
		    <div class="topmenu">
                <!-- #logo -->
                <h1>				
                    <a id="logo" href="#" title="Преферанс калькулятор ставок">
                        <img src="../../layout/img/cards.png" alt="Преферанс калькулятор ставок">
                        <span>
                            <b>Преферанс</b>
                            <br>- калькулятор
                        </span>
                    </a>
                </h1>	
                <!-- main menu -->
                <nav id="menu" class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="menu">                        
                        <li class="menu-item active">
                            <a href="#">На четверых</a>							
                        </li>
                        <li class="menu-item">
                            <a href="#">На троих</a>							
                        </li>
                        <li class="menu-item">
                            <a href="#">Таблица расчётов</a>							
                        </li>
                        <li class="menu-item">
                            <a href="#">Кодекс</a>							
                        </li>
                        <li class="menu-item">
                            <a href="#">wtf</a>
                        </li>						
                    </ul>
                </nav>
			</div>		
		</div>
	</header>
	
  <!-- BANNER -->
	<div class="fullwidthbanner-container">
		<div class="slotholder index-slot">
		    <div class="sayings">
		        <div class="sayings_first">На девятерной вистуют попы и студенты:</div>
		        <div class="sayings_last">первые от жадности, вторые от бедности.</div>
		    </div>
			<img src="../../layout/img/BG_head/BG-4.jpg" alt="slider_11" class="default_img-banner" >
		</div>
	</div>
	
  <!-- CONTENT -->
    <div class="container index-container">
        <div class="block">
            <div class="column span-8 col_bg">
                <div class="photo">
                    <a href="/">
                        <img class="scale-with-grid" src="../../layout/img/content/enshtn.png" alt="Save plenty of time">
                    </a>
                </div>
                <div class="desc">
                    <h2>ТАБЛИЦЫ СТОИМОСТИ КОНТРАКТОВ</h2>
                    <p>Таблицы стоимости заказов (контрактов) игpока в преферанс.</p>
                    <a class="" href="/">Далее <i class="fa fa-angle-double-right"></i></a>
                </div>            
            </div>

            <div class="column span-8 col_bg">
               <div class="photo">
                    <a href="/">
                        <img class="scale-with-grid" src="../../layout/img/content/calc.png" alt="Save plenty of time">
                    </a>
                </div>
                <div class="desc">
                    <h2>КАЛЬКУЛЯТОР ПУЛИ</h2>
                    <p>Калькулятор расчета пули в преферансе (по «вистам»).</p>
                    <a class="button" href="/">На четверых</a>
                    <a class="left button" href="/">На троих</a>
                </div>            
            </div>

            <div class="column span-8 last col_bg">
               <div class="photo">
                    <a href="/">
                        <img class="scale-with-grid" src="../../layout/img/content/kodex.png" alt="Save plenty of time">
                    </a>
                </div>
                <div class="desc">
                    <h2>КОДЕКС</h2>
                    <p>Кодекс предназначен для определения правильной процедуры игры в преферанс. </p>
                    <a class="" href="/">Далее <i class="fa fa-angle-double-right"></i></a>
                </div>             
            </div>
        </div>
        <div class="content-container container-bg">
        <p><b>Префера́нс</b> (фр. préférence — предпочтение, преимущество) — карточная игра со взятками. Получила распространение в России в середине XIX века. Предшественником преферанса считается вист. Играется втроём, вчетвером (в этом случае каждый игрок по очереди пропускает раздачу, что называется «сидит на прикупе») или вдвоём (преферанс вдвоём называют «гуса́рик»). Возможно играть составом и больше четырёх человек, но тогда игра теряет динамичность, и интерес к ней снижается, так как каждый игрок вынужден пропускать две и более раздач подряд. Часто вместо выражения «сыграть в преферанс» используется выражение «расписа́ть пу́льку».
        <p>Преферанс является коммерческой игрой, то есть такой игрой на деньги, в которой результат в большей степени определяется умением игрока, нежели везением, в отличие от азартных игр. В преферансе деньги не являются элементом стратегии, что делает их необязательной частью игры.</p>
        </div>
    </div>  
        
    <footer id="footer">        
        <div class="container">
            <div class="content-container">
               <img src="../../layout/img/beard.png" class="right parent" alt="">
                <p >
                    Все материалы взяты из открытых источников.
                </p>			
            </div>
        </div>	
    </footer>

    <!-- JavaScript
    ================================================== -->
    <script src="../../layout/js/jquery-1.11.1.min.js"></script>
    <script src="../../layout/js/modernizr.custom.66416.js"></script>
            
  </body>
</html>