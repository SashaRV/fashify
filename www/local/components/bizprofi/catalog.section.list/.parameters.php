<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arCurrentValues */
/** @global CUserTypeManager $USER_FIELD_MANAGER */
global $USER_FIELD_MANAGER;

if(!\Bitrix\Main\Loader::includeModule("iblock"))
	return;

$arIBlockType = CIBlockParameters::GetIBlockTypes();

$arIBlock = array();
$rsIBlock = CIBlock::GetList(Array("sort" => "asc"), Array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y"));
while($arr=$rsIBlock->Fetch())
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];

$arProperty_UF = array();
$arUserFields = $USER_FIELD_MANAGER->GetUserFields("IBLOCK_".$arCurrentValues["IBLOCK_ID"]."_SECTION", 0, LANGUAGE_ID);
foreach($arUserFields as $FIELD_NAME=>$arUserField)
{
	$arUserField['LIST_COLUMN_LABEL'] = (string)$arUserField['LIST_COLUMN_LABEL'];
	$arProperty_UF[$FIELD_NAME] = $arUserField['LIST_COLUMN_LABEL'] ? '['.$FIELD_NAME.']'.$arUserField['LIST_COLUMN_LABEL'] : $FIELD_NAME;
}

$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("CP_BCSL_IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockType,
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("CP_BCSL_IBLOCK_ID"),
			"TYPE" => "LIST",
			"ADDITIONAL_VALUES" => "Y",
			"VALUES" => $arIBlock,
			"REFRESH" => "Y",
		),
		"SECTION_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("CP_BCSL_SECTION_ID"),
			"TYPE" => "STRING",
			"DEFAULT" => '={$_REQUEST["SECTION_ID"]}',
		),
		"CACHE_TIME"  =>  Array("DEFAULT"=>36000000),
		"CACHE_GROUPS" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("CP_BCSL_CACHE_GROUPS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"TITLE_CATEGORY" => array(
			"PARENT" => "",
			"NAME" => GetMessage("TITLE_CATEGORY"),
			"TYPE" => "STRING",
			"DEFAULT" => "Category",
		),
	),
);
?>