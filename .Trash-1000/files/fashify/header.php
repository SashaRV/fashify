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

	<!-- 		<div class="social-menu">
				<div id="menu-social" class="social-links">
					<ul id="menu-social" class="menu"><li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="https://www.facebook.com/"><span class="screen-reader-text">facebook</span></a></li>
					<li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="http://twitter.com/"><span class="screen-reader-text">twitter</span></a></li>
					<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="https://plus.google.com/u/0/"><span class="screen-reader-text">google plus</span></a></li>
					<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="https://www.linkedin.com"><span class="screen-reader-text">linkedin</span></a></li>
					<li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61"><a href="http://youtube.com"><span class="screen-reader-text">Youtube</span></a></li>
					<li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62"><a href="https://www.pinterest.com/"><span class="screen-reader-text">Pinterest</span></a></li>
					</ul>
				</div>			
			</div> -->

		</div>

	</header><!-- #masthead -->

<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="container">

			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">Menu</button>
			<div class="menu-main-menu-container"><ul id="primary-menu" class="menu nav-menu" aria-expanded="false"><li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8"><a href="https://wpstash.com/fashify/">Home</a></li>
<li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="https://wpstash.com/fashify/about/">About</a></li>
<li id="menu-item-40" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-40"><a href="https://wpstash.com/fashify/category/design/">Design</a></li>
<li id="menu-item-41" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-41"><a href="https://wpstash.com/fashify/category/fashion/">Fashion</a></li>
<li id="menu-item-44" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-44"><a href="https://wpstash.com/fashify/category/photo/">Photos</a></li>
<li id="menu-item-45" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-45"><a href="https://wpstash.com/fashify/category/video/">Videos</a></li>
<li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67"><a href="https://wpstash.com/fashify/contact/">Contact</a></li>
</ul></div>
		</div>
	</nav>

<div id="content" class="site-content">
	<div class="container right-sidebar">
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		



	
