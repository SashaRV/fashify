<?php

// prolog
$_SERVER["DOCUMENT_ROOT"] = "/home/bitrix/www";
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

// namespaces
use Bitrix\Main\Loader;
use Bizprofi\Graph\MetricTable;
use Bitrix\Main\Type\DateTime;

$start = microtime(true);
$importFile = './output.csv';

if (!Loader::includeModule('bizprofi.graph')) {
	throw new \Exception("Error Processing Request", 1);
}

if (false === ($fd = fopen($importFile, 'rb'))) {
	fwrite(STDOUT, 'error, can not open the file '.$importFile);
	die();
}

fwrite(STDOUT, 'File opened'.PHP_EOL);


if(MetricTable::deleteAll()->result !== true) {
	fwrite(STDOUT,  "db error, can not execute delete all rows".PHP_EOL);
	die();
}

fwrite(STDOUT,  "delted all previous rows from table".PHP_EOL);

while ($row = fgetcsv($fd)) {
	$str = "added ".$row[1]." ".$row[2]." ".$row[0];

	$add = MetricTable::add([
		'HOST' => (string) $row[1],
		'VALUE' => (float) $row[2],
		'TIMESTAMP' => DateTime::createFromTimestamp($row[0]),
	]);

	if (!$add->isSuccess()) {
		fwrite(STDOUT, implode(', ', $add->getErrorMessages()).PHP_EOL);
	}else {
		fwrite(STDOUT, $str.PHP_EOL);
	}
}

$end = (microtime(true) - $start);
fwrite(STDOUT, 'Data imported. Executed time: '.$end.' seconds.'.PHP_EOL);

fclose($fd);