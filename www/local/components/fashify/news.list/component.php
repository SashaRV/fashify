<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
 return

$arFilter = array(
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
    "ACTIVE" => "Y"
);

$arOrder = array(
	$arParams["SORT_BY1"] =>  $arParams["SORT_ORDER1"]
);

$res = CIBlockElement::GetList(
	 $arOrder,
	 $arFilter,
	 false,
	 array('nPageSize' => $arParams["NEWS_COUNT"]),
	 array("ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE")
);

while($result = $res->Fetch()) {
	if($result["DETAIL_PICTURE"]) {
		$arFileTmp = CFile::ResizeImageGet(
			$result["DETAIL_PICTURE"],
			array(
				"width" => $arParams["SMALL_WIDTH"],
				"height" => $arParams["SMALL_HEIGHT"]
			),
			BX_RESIZE_IMAGE_EXACT,
			false	
		);

		$arSize = getimagesize($_SERVER["DOCUMENT_ROOT"] . $arFileTmp["src"]);

		$result["PREVIEW_IMG"] = array(
			"SRC" => $arFileTmp["src"],
			"WIDTH" => IntVal($arSize[0]),
			"HEIGHT" => IntVal($arSize[1])
		);
		
		$arItems[] = $result;
	}
	
}

$arResult["ITEMS"] = $arItems;
//print_r($arResult["ITEMS"]);

$this->includeComponentTemplate();

?>