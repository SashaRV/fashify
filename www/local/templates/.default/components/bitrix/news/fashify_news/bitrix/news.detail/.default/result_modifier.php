<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


// get post author name, last name
$rsUser = CUser::GetById($arResult["CREATED_BY"]);
$arUser = $rsUser->fetch();	

$arResult['CREATED_USER_NAME'] = $arUser["NAME"];
$arResult['CREATED_USER_LAST_NAME'] = $arUser["LAST_NAME"];

// get current post caterories
$arPostCategories = CIBlockElement::GetElementGroups($arResult["ID"]);

while($arCategory = $arPostCategories->GetNext())
{
	$arResult["CATEGORIES"][] = $arCategory;
}