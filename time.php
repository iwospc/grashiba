
<?php
//	date_default_timezone_set('UTC');
	print "<pre>";

	print "\$now = getdate()\n";
	$now = getdate();
	print_r($now);
	
	print "<strong>$time = time()</strong><br><br>";
	print "<blockquote>" . $time = time() . "</blockquote><br><br>";

	print "<strong>date('Y/m/d')</strong><br><br>";
	print "<blockquote>" . $today = date("Y/m/d") . "</blockquote><br><br>";

	print "<strong>date('M jS')</strong><br><br>";
	print "<blockquote>" . date("M jS") . "</blockquote><br><br>";

	print "<strong>date('M jS', $time)</strong><br><br>";
	print "<blockquote>" . date("M jS", strtotime($time)) . "</blockquote><br><br>";
	print "<strong>12h date('Ymdh')</strong><br><br>";
	print "<blockquote>" . date("Ymdh") . "</blockquote><br><br>";
