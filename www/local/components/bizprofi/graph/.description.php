<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("BIZPROFI_GRAPH_NAME"),
	"DESCRIPTION" => GetMessage("BIZPROFI_GRAPH_DESCRIPTION"),
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "bizprofi",
		"NAME" => GetMessage("BIZPROFI_MAIN"),
		"CHILD" => array(
			"ID" => "bizprofi_grpah",
			"NAME" => "Metrika Graph",
		)
	),
);

?>