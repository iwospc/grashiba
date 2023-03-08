
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Playing with Google Table Viz</title>
<!-- from developers.google.com/chart/interactive/docs/gallery/table -->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
		google.load("visualization", "1", {packages:["table"]});
		google.setOnLoadCallback(drawTable);
		
		function drawTable(){
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Item');
			data.addColumn('string', 'Buy');
			data.addColumn('string', 'Sell');