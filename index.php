
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