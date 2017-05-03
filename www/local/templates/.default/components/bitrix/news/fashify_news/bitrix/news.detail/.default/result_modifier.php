<?php

// get current post caterories
$arPostCategories = CIBlockElement::GetElementGroups($arResult["ID"]);

while($arCategory = $arPostCategories->GetNext())
{
	$arResult["CATEGORIES"][] = $arCategory;
}