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
        <a href="<?=$arElement["DETAIL_PAGE_URL"] ?>" 
           title="<?=$arElement["PREVIEW_PICTURE"]["TITLE"] ?>">
        	<img src="<?=$arElement["PREVIEW_PICTURE"]["RESIZED"]["SMALL"]["src"] ?>" 
        		 alt="<?=$arElement["PREVIEW_PICTURE"]["ALT"] ?>" 
        		 width="<?=$arElement["PREVIEW_PICTURE"]["RESIZED"]["SMALL"]["width"]?>" 
        		 height="<?=$arElement["PREVIEW_PICTURE"]["RESIZED"]["SMALL"]["height"]?>">
        </a>
        <div class="p-info">
	        <h2 class="entry-title">
	        	<a href="<?=$arElement["DETAIL_PAGE_URL"] ?>" 
	        	   title="<?=$arElement["PREVIEW_PICTURE"]["TITLE"] ?>"
	        	rel="bookmark"><?=$arElement["PREVIEW_TEXT"] ?></a>
	        </h2>
	        <? if($arElement["ACTIVE_FROM"]): ?>
		        <?
		        	$originalDate = $arElement["ACTIVE_FROM"];
					$activeFrom = date("M d, Y", strtotime($originalDate));
		        ?>
		        <span class="entry-date"><?=$activeFrom ?></span>
	        <? endif;?>
	    </div>
    </li>
<? endforeach; ?>
</ul>
