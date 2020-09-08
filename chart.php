<script src="https://www.google.com/jsapi"></script>
<script>
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawChart);
/*

	Try fixing the date formatting on the JS side here

	Then tackle the price formatting

*/
	function drawChart() {
//		var data = google.visualization.arrayToDataTable(<?php echo $stack ?>);
		var data = new google.visualization.DataTable();
		data.addColumn('date', 'Date');
		