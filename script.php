
<script>
	// come back and investigate google.visualization.arrayToDataTable()
	google.load("visualization", "1", {packages:["table"]});
	google.setOnLoadCallback(drawTable);

	function drawTable() {
	    var data = new google.visualization.DataTable();
	    data.addColumn('string', 'Item');
	    data.addRows(<?php echo $stack ?>);
	    data.setColumnProperty(0, {allowHtml: true});

	    var table = new google.visualization.Table(document.getElementById('table_div'));

	    table.draw(data, {allowHtml: true});
	}
</script>