<!DOCTYPE html>
<html>
<head>
 	<title>QR CODE</title>
 	<meta charset="utf-8">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="margin: 0; padding: 0;">
	
  	<?php
	require('funcCad.class.php');

	$funcG = new Func();

	$funcG -> qrs();

 	?>

</body>
</html>

