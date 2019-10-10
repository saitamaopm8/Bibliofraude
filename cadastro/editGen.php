<?php
	require("funcCad.class.php");

	$funcG = new Func();

	if (isset($_GET['ai1'])) {
		
	}else{
		?>
			<script type="text/javascript">
				window.location.href = "all.php";
			</script>
		<?php
	}

	if (isset($_POST['btnGen'])) {
		$funcG -> act2($_GET['ai1'], $_POST['editGen']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIÇÃO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<center>
	<div role="document" style="width: 50%;">
		<form action="" method="POST">
		   	<div class="modal-content">
		   		<div class="modal-header">
		       		<h5 class="modal-title">Editar Genero: </h5>
		   		</div>
		   		<div class="modal-body">
		   			<table border="1" style="border-color: gray; width: 100%;">
		   				<?php
		   					$funcG -> edisGen($_GET['ai1']);
		   				?>
						
					</table>
			   	</div>
		   		<div class="modal-footer">
		       		<a href="all.php" class="text text-danger"><- Voltar</a>
		   		</div>
		   	</div>
		</form>
	</div>
	</center>
</body>
</html>
