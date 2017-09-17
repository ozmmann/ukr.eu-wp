<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ukreu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
<header class="header">
    <div class="top-line">
        <div class="container-fluid">
            <div class="row">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                    <div class="h-contact clearfix">
                        <div class="icon-wrap"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        </div>
                        <span class="number"> 0 800 214 513</span>
                        <div class="lang-container">
                            <select name="lang" class="lang">
                                <option value="uk">uk</option>
                                <option value="ru">ru</option>
                                <option value="en">en</option>
                            </select>
                            <div class="selec mod1">
                                <div >uk</div>
                                <div class="hide">ru</div>
                                <div class="hide">en</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                    <div class="logo">
                        <img src="<?php echo bloginfo('template_url')?>/img/logo.png" alt="Logo">
                    </div>
                    <nav class="h-nav">
                        <a href="" class="touch-menu"><i class="fa fa-list" aria-hidden="true"></i></a>
                        <ul class=" h-menu">
                            <li><a href="#">Керування доменом</a></li>
                            <li><a href="#">Хостинг</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Документи</a></li>
                            <li><a href="#">Контакти</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-3 hidden-xs">
                    <div class="logo">
                        <img src="<?php echo bloginfo('template_url')?>/img/logo.png" alt="Logo">
                    </div>
                </div>
                <div class="col-md-6 col-sm-5 hidden-xs">

                    <nav class="h-nav">
                        <?php wp_nav_menu(array('Theme_location'=>'Primary','menu_class'=>'clearfix', 'container'=>'false'));?>
<!--                        <ul class="clearfix">-->
<!--                            <li><a href="#">Керування доменом</a></li>-->
<!--                            <li><a href="#">Хостинг</a></li>-->
<!--                            <li><a href="#">FAQ</a></li>-->
<!--                            <li><a href="#">Документи</a></li>-->
<!--                            <li><a href="#">Контакти</a></li>-->
<!--                        </ul>-->
                   </nav>
                </div>
                <div class="col-md-3 col-sm-4 hidden-xs">
                    <div class="h-contact clearfix">
                        <div class="icon-wrap"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        </div>
                        <span class="number"> 0 800 214 513</span>
                        <div class="lang-container">
                            <select name="lang" class="lang">
                                <option value="uk">uk</option>
                                <option value="ru">ru</option>
                                <option value="en">en</option>
                            </select>
                            <div class="selec deployed mod2">
                                <div >uk</div>
                                <div class="hide">ru</div>
                                <div class="hide">en</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="domen-name-selection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="domen-name">
                        <form action="">
                            <input type="text"  placeholder="Оберіть своє краще доменне ім’я">
                            <span class="ukr-copy">ukr.eu</span>
                            <button>перевірити</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="status-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="status-panel-default sp-active">
                        Доменне  ім'я  у  зонi  <span>ukr.eu</span>  всього  від  3  євро  на  рік*.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php wp_head()?>
</header>
