<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?><h1></h1>
<h1>Контактная информация</h1>
<div class="hr">
</div>
<ul>
	<li>E-mail: <a href="mailto:19Victoria84@gmail.com">19Victoria84@gmail.com</a>.</li>
	<li>Skype: Fadeeva_Victoria.</li>
</ul>
<h1><?$APPLICATION->IncludeComponent(
	"bizprofi:map", 
	".default", 
	array(
		"CACHE_TIME" => "60",
		"CACHE_TYPE" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"IBLOCK_ID" => "3",
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.552792647193954;s:10:\"yandex_lon\";d:37.89909605927296;s:12:\"yandex_scale\";i:9;s:10:\"PLACEMARKS\";a:0:{}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	),
	false
);?></h1><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>