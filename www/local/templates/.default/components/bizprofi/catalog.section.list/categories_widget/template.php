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

<h4 class="widget-title"><?= $arParams["TITLE_CATEGORY"]; ?></h4>		
<ul>
	<? foreach($arResult["SECTIONS"] as $category):?>
	<li class="cat-item">
		<a href="<?= $category["SECTION_PAGE_URL"] ."/"?>"><?= $category["NAME"] ?></a>
	</li>
	<? endforeach;?>
</ul>