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
		data.addColumn('number', 'Buy Price');
		data.addColumn('number', 'Sale Price');
		data.addRows(<?php echo $stack ?>);

		var options = {
			title: 'Trading Post Prices for <?php echo $itemName ?>'
		};

		var chart = new google.visualization.LineChart(document.getElementById('table_div'));

		chart.draw(data, options);
	}
</script>
