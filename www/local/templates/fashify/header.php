<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fashify
 */
?>
<!DOCTYPE html>
<html>
<head>
	<!-- styles -->
	<?$APPLICATION->SetAdditionalCSS("/local/templates/fashify/assets/css/font-awesome.min.css");?>
	<?$APPLICATION->SetAdditionalCSS("/local/templates/fashify/lib/social-likes/social-likes_birman.css");?>
	<?$APPLICATION->SetAdditionalCSS("/local/templates/fashify/assets/css/social-likes-customize.css");?>

	<!-- scripts -->
	<script src="<?=SITE_TEMPLATE_PATH?>/lib/jquery/jquery-2.2.5.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/navigation.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/skip-link-focus-fix.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/lib/social-likes/social-likes.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/main.js"></script>

	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="homepage-home3">
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">

			<div class="site-branding">
					<h1 class="site-title"><a href="" rel="home">FASHIFY</a></h1>
					<p class="site-description">Измени мышление, и ты изменишь свою жизнь. </p>
			</div><!-- .site-branding -->

	 		<div class="social-menu">
				<div id="menu-social" class="social-links">
					<ul id="menu-social" class="menu"><li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="https://www.facebook.com/"><span class="screen-reader-text">facebook</span></a></li>
					<li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="http://twitter.com/"><span class="screen-reader-text">twitter</span></a></li>
					<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="https://plus.google.com/u/0/"><span class="screen-reader-text">google plus</span></a></li>
					<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="https://www.linkedin.com"><span class="screen-reader-text">linkedin</span></a></li>
					<li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61"><a href="http://youtube.com"><span class="screen-reader-text">Youtube</span></a></li>
					<li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62"><a href="https://www.pinterest.com/"><span class="screen-reader-text">Pinterest</span></a></li>
					</ul>
				</div>			
			</div>

		</div>

	</header><!-- #masthead -->

	<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"COMPONENT_TEMPLATE" => "top_menu",
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
	),
	false
);?>

<div id="content" class="site-content">
	<div class="container right-sidebar">
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		



	
