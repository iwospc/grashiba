
<script>
	// come back and investigate google.visualization.arrayToDataTable()
	google.load("visualization", "1", {packages:["table"]});
	google.setOnLoadCallback(drawTable);

	function drawTable() {
	    var data = new google.visualization.DataTable();
	    data.addColumn('string', 'Item');