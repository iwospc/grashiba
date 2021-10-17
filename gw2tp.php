
<?php
require_once("includes/common.php");
// fopen
	$fp = fopen("http://api.gw2tp.com/1/bulk/items.csv", "r");
// fgetcsv
//	print "<pre>";
	$time = time();
//	$count = 0;
	while(! feof($fp)){
		$item = (fgetcsv($fp));
		$sql = "INSERT INTO prices (id, time, buy, sell, supply, demand) VALUES ('$item[0]', '$time', '$item[2]', '$item[3]', '$item[4]', '$item[5]')";
//		print_r($item);
//		$sql = "INSERT INTO items (id, name) VALUES ('$item[0]', '$item[1]')";