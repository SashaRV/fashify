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
	<link rel="style/css" href="<?=SITE_TEMPLATE_PATH?>/assets/css/font-awesome.min.css"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/navigation.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/skip-link-focus-fix.js"></script>
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">

			<div class="site-branding">
					<h1 class="site-title"><a href="" rel="home">FASHIFY</a></h1>
					<p class="site-description">description</p>
			</div><!-- .site-branding -->

			<div class="social-menu">
			</div>

		</div>

	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="container">

			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">Menu</button>

		</div>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content">