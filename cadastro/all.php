<?php
	require("funcCad.class.php");

	$funcG = new Func();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script type="text/javascript" class="init">
    	$(document).ready(function() {
		    $('#example').DataTable();
		});
    </script>
</head>
<body>
		<table id="example" class="table table-striped table-sm table-bordered">
			<legend>Obras</legend>
	        <thead>
	            <tr>
	                <th>ID</th>
	                <th>TITULO</th>
	                <th>GENERO</th>
	                <th>QTD</th>
	                <th>AUTOR1</th>
	                <th>V.CAPAS</th>
	                <th>EDITORA</th>
	                <th></th>
	                <th></th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php
	            	$funcG -> allObr();
	            ?>
	        </tbody>

	    </table>
</body>
</html>