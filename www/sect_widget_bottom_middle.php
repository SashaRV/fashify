<?$APPLICATION->IncludeComponent(
	"bizprofi:catalog.section.list",
	"categories_widget",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "my_news",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SHOW_PARENT_NAME" => "Y",
		"TITLE_CATEGORY" => "Разделы",
		"VIEW_MODE" => "LINE"
	)
);?>