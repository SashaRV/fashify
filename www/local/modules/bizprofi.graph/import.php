<?php

// prolog
$_SERVER["DOCUMENT_ROOT"] = "/home/bitrix/www";
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

// namespaces
use Bitrix\Main\Loader;
use Bizprofi\Graph\CMetricTable;
use Bitrix\Main\Type\DateTime;

$start = microtime(true);
$importFile = './output-small.csv';

if (!Loader::includeModule('bizprofi.graph')) {
	throw new \Exception("Error Processing Request", 1);
}

if(CMetricTable::deleteAll()->result !== true) {
	fwrite(STDOUT,  "db error, can not execute delete all rows".PHP_EOL);
	throw new \Exception("db error, can not execute delete all rows", 1);
}

fwrite(STDOUT,  "delted all previous rows from table".PHP_EOL);

$file = new SplFileObject($importFile);
$file->seek(1);

while ($file->valid()) {
  	$row = $file->fgetcsv();
  	$result = "added ".$row[1]." ".$row[2]." ".$row[0];

	$add = CMetricTable::add([
		'HOST' => (string) $row[1],
		'VALUE' => (float) $row[2],
		'TIMESTAMP' => DateTime::createFromTimestamp($row[0]),
	]);

	if (!$add->isSuccess()) {
		fwrite(STDOUT, implode(', ', $add->getErrorMessages()).PHP_EOL);
	}else {
		fwrite(STDOUT, $result.PHP_EOL);
	}
} 


$end = (microtime(true) - $start);
fwrite(STDOUT, 'Data imported. Executed time: '.$end.' seconds.'.PHP_EOL);

fclose($fd);