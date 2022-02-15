
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>The Bazaar</title>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
	<link href="style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	<script src="https://www.google.com/jsapi"></script>
	<script src="script.js"></script>
</head>
<body>
	<header>
		<div id="title">The Bazaar: Past Prices from the Trading Post
		</div>
		<div id="search">
			<form action="index.php" method="get">
			<div class="widget">
				<input type="text" id="searchbox" name="searchbox" placeholder="Search items e.g. Country Coat"/>
				<input type="submit" value="submit"/>
			</div>
			</form>
		</div>
	</header>
	<div id="results">
		<div id="table_div">
		</div>
	<?php
	require_once("includes/common.php");
	if(isset($_GET["id"])){
		$itemId = $_GET["id"];
		$sql = "SELECT items.id, items.name, time, buy, sell
			FROM items
			LEFT JOIN prices
			ON items.id = prices.id
			WHERE prices.id = '$itemId'
			ORDER BY time";
		$result = mysql_query($sql);
		$stack = array();
		$row = mysql_fetch_array($result);
		while($row = mysql_fetch_array($result)){
			$itemName = $row[1];
			$array = array("new Date(" . $row[2] . " * 1000)", $row[3], $row[4]);
			array_push($stack, $array);
		}
		$stack = json_encode($stack);
		$stack = str_replace('"', '', $stack);
//		$stack = str_replace('Time', '"Time"', $stack);
//		$stack = str_replace('Buy Price', '"Buy Price"', $stack);
//		$stack = str_replace('Sell Price', '"Sell Price"', $stack);
//		print_r($stack);
		include "chart.php";
	}
	elseif(isset($_GET["searchbox"])){
		$itemQuery = $_GET["searchbox"];
		$sql = "SELECT id, name
			FROM items 
			WHERE items.name LIKE '%$itemQuery%'";
		$result = mysql_query($sql);
		$stack = array();
		while($row = mysql_fetch_array($result)){
			$array = array(
			"<a href='index.php?id=" . $row[0] . "'>" . $row[1] . "</a>"