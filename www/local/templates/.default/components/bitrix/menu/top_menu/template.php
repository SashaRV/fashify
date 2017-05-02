<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="container">
		<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">Menu</button>
		<div class="menu-main-menu-container">
			<ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="current-menu-item"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

			</ul>
		</div>
	</div>
</nav>
<?endif?>