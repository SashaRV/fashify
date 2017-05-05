<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as $key => $arItem) {

	$arPostId[] = $arItem['ID'];

	// get post author name, last name
	$rsUser = CUser::GetById($arItem["CREATED_BY"]);
	$arUser = $rsUser->Fetch();	
	
	$arResult['ITEMS'][$key]['CREATED_USER_NAME'] = $arUser["NAME"];
	$arResult['ITEMS'][$key]['CREATED_USER_LAST_NAME'] = $arUser["LAST_NAME"];
}

// get current post caterories
$arPostCategories = CIBlockElement::GetElementGroups($arPostId);

while($arCategory = $arPostCategories->GetNext())
{
	$postId = $arCategory["IBLOCK_ELEMENT_ID"];

	foreach ($arResult['ITEMS'] as $key => $arItem) {
		if($arItem["ID"] == $postId) {
			$arResult['ITEMS'][$key]['CATEGORIES'][] = $arCategory;
		}
	}
}