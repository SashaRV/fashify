<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<h4 class="widget-title"><?= $arParams["NAME_BLOCK"]?></h4>
<ul class="widget-posts"> 
<?php foreach($arResult["ITEMS"] as $arElement):?>
	<li class="has-thumb">
        <a href="<?=$arElement["DETAIL_PAGE_URL"] ?>" title="Samsung vs. Apple: Samsung Is Winning Every Way But One">
        	<img src="https://wpstash.com/fashify/wp-content/uploads/sites/5/2016/07/pexels-photo-smartphone-macbook-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" width="150" height="150">
        </a>
        <div class="p-info">
	        <h2 class="entry-title">
	        	<a title="Samsung vs. Apple: Samsung Is Winning Every Way But One" href="<?=$arElement["DETAIL_PAGE_URL"] ?>" rel="bookmark"><?=$arElement["PREVIEW_TEXT"] ?></a>
	        </h2>
	        <span class="entry-date"><?=$arElement["ACTIVE_FROM"] ?></span>
	    </div>
    </li>
<? endforeach; ?>
</ul>
