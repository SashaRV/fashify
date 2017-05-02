<?php
foreach($arResult["ITEMS"] as $key => $arItem) {
// 	echo "<pre>";
// print_r(CIBlockElement::GetElementGroups($arItem['ID'])->fetch());
// echo "</pre>";

	// get post author name, last name
	$rsUser = CUser::GetById($arItem["CREATED_BY"]);
	$arUser = $rsUser->Fetch();	
	
	$arResult['ITEMS'][$key]['CREATED_USER_NAME'] = $arUser["NAME"];
	$arResult['ITEMS'][$key]['CREATED_USER_LAST_NAME'] = $arUser["LAST_NAME"];

	// get current post caterories

	// $arFilter = array();
	// $arFilter =  array("IBLOCK_ID" => $arItem["IBLOCK_ID"]);
	// $arFilter =  array("IBLOCK_ID" => 3);

	// $db_list = CIBlockSection::GetList(Array(), $arFilter);


	// while($ar_result = $db_list->GetNext())
	// {
	// 	echo "<pre>";
	// 		//print_r($ar_result);
	// 	echo "</pre>";
	//}
}


//https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getelementgroups.php