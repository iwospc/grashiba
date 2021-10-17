
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