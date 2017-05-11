<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


if(!CModule::IncludeModule("iblock")){
	return;
}


if(!CModule::IncludeModule("bizprofi.graph")) {
	return;	
}

use  Bitrix\Main\Entity;
use  Bizprofi\Graph\CMetricTable;

$arResult["MYRES"] = "Componetn works";

if ($this->StartResultCache()) {

	$arHostNames = array();

	$result = CMetricTable::getList(array(
		'limit' => 30000,
	));

	while ($row = $result->fetch())
	{
	   $host = $row["HOST"];

	   if(!array_key_exists($host, $arHostNames)) {
	    	$arHostNames[$host] = array();
	   }
	   $snap = array(
	   		"x" => $row["TIMESTAMP"],
	   		"y" => $row["VALUE"]
	   );
	   $arHostNames[$host][] = $snap;
	}

	$arHostNamesAgrigateMinute = array();

	foreach ($arHostNames as $host => $snaps) {
		// agregate tick to minute
		$sum = 0;
		$i = 1;
		foreach ($snaps as $key => $snap) {
			$sum += $snap["y"];
			if($i === 60) {
				$avarage = $sum / 60;
				$arHostNamesAgrigateMinute[$host]["SNAPS"][] = array(
				   		"x" => $snap["x"]->format(DateTime::ISO8601),
				   		"y" => $avarage
				);
				$sum = 0;
				$i = 1;
			}
			++$i;
		}
		// get load: min, max, avg
		$row = CMetricTable::getList(array(
			'select' => array('MAX', 'MIN', 'AVG'),
			'filter' => array('=HOST' => $host),
			'runtime' => array(
				new Entity\ExpressionField('MAX', 'MAX(VALUE)'),
				new Entity\ExpressionField('MIN', 'MIN(VALUE)'),
				new Entity\ExpressionField('AVG', 'AVG(VALUE)'),
			)
		));

		$load = $row->fetch();
		$arHostNamesAgrigateMinute[$host]["MAX"] = round($load["MAX"], 2);
		$arHostNamesAgrigateMinute[$host]["MIN"] = round($load["MIN"], 2);
		$arHostNamesAgrigateMinute[$host]["AVG"] = round($load["AVG"], 2);
	}

	$arResult["METRICA"] = $arHostNamesAgrigateMinute;

	$this->IncludeComponentTemplate();
}

?>