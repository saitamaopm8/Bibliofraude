<?php
	require("funcCad.class.php");

	$funcG = new Func();

	if (isset($_GET['ai'])) {
		
	}else{
		?>
			<script type="text/javascript">
				window.location.href = "all.php";
			</script>
		<?php
	}

	if (isset($_POST['btnTit'])) {
		$col = "titulo";
		$funcG -> act($col, $_POST['editTit'], $_GET['ai']);
	}

	if (isset($_POST['btnGen'])) {
		$col = "genero";
		$funcG -> act($col, $_POST['editGen1'], $_GET['ai']);
	}

	if (isset($_POST['btnGen2'])) {
		$col = "genero2";
		$funcG -> act($col, $_POST['editGen2'], $_GET['ai']);
	}

	if (isset($_POST['btnAut1'])) {
		$col = "autor";
		$funcG -> act($col, $_POST['editAut1'], $_GET['ai']);
	}

	if (isset($_POST['btnAut2'])) {
		$col = "autor2";
		$funcG -> act($col, $_POST['editAut2'], $_GET['ai']);
	}

	if (isset($_POST['btnAut3'])) {
		$col = "autor3";
		$funcG -> act($col, $_POST['editAut3'], $_GET['ai']);
	}

	if (isset($_POST['btnQt'])) {
		$col = "qt";
		$funcG -> act($col, $_POST['editQt'], $_GET['ai']);
	}

	if (isset($_POST['btnCap'])) {
		$col = "link_img";
		$funcG -> act($col, $_POST['editCap'], $_GET['ai']);
	}
	
		if (isset($_POST['btnVar'])) {
			if (isset($_POST['editVar'])) {
				$col = "capasVar";
				$funcG -> act($col, $_POST['editVar'], $_GET['ai']);
			}else{
				$col = "capasVar";
				$funcG -> act($col, $_POST['hidVar'], $_GET['ai']);
			}
		}
	
		

	if (isset($_POST['btnEdi'])) {
		$col = "editora";
		$funcG -> act($col, $_POST['editEdi'], $_GET['ai']);
	}

	if (isset($_POST['btnEdic'])) {
		$col = "edicao";
		$funcG -> act($col, $_POST['editEdic'], $_GET['ai']);
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
		       		<h5 class="modal-title">Editar Obra: </h5>
		   		</div>
		   		<div class="modal-body">
		   			<table border="1" style="border-color: gray; width: 100%;">
		   				<?php
		   					$funcG -> edis($_GET['ai']);
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