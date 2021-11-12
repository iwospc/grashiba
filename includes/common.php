
<?php
// common.php connection to tradingpost database
require_once("constants.php");

// connect to server
if (($connection = @mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD)) === false)
	print "could not connect to server";