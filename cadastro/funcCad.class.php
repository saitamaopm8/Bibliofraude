<?php
	require("Conexao.class.php");
	session_start();

	class Func{

		public function cadAut($nomAut, $nac){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "INSERT INTO autor(nomAut, nacionalidade)VALUES(:nomAut, :nac)";
				$lul = $conn -> prepare($sql);
				$lul -> bindValue(":nomAut", $nomAut);
				$lul -> bindValue(":nac", $nac);

				$lul -> execute();

			} catch (Exception $e) {
				?>
					<script>
						alert("Error:\nPossiveis Erros: \n\nAutor ja cadastrado\nBanco de dados não iniciado");
					</script>
				<?php
			}

			?>
				<script>
					window.location.href = "index.php"; 
				</script>
			<?php
		}

		public function cadGen($nomGen){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "INSERT INTO generos(nomGen)VALUES(:nomGen)";
				$lul = $conn -> prepare($sql);
				$lul -> bindValue(":nomGen", $nomGen);

				$lul -> execute();

			} catch (Exception $e) {
				?>
					<script>
						alert("Error:\nPossiveis Erros: \n\nGenero já cadastrado\nBanco de dados não iniciado");
					</script>
				<?php
			}

			?>
				<script>
					window.location.href = "index.php"; 
				</script>
			<?php
		}

		public function cadEdi($nomGen){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "INSERT INTO editoras(nomEdi)VALUES(:nomGen)";
				$lul = $conn -> prepare($sql);
				$lul -> bindValue(":nomGen", $nomGen);

				$lul -> execute();

			} catch (Exception $e) {
				?>
					<script>
						alert("Error:\nPossiveis Erros: \n\nGenero já cadastrado\nBanco de dados não iniciado");
					</script>
				<?php
			}

			?>
				<script>
					window.location.href = "index.php"; 
				</script>
			<?php
		}

		public function cadObr($titulo, $genero1, $genero2, $autor1, $autor2, $autor3, $qt, $link_img, $capasVar, $editora, $edicao){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "INSERT INTO obras(titulo, genero, genero2, autor, autor2, autor3, qt, link_img, capasVar, editora, edicao)VALUES(:titulo, :genero1, :genero2, :autor1, :autor2, :autor3, :qt, :link_img, :capasVar, :editora, :edicao)";
				$lul = $conn -> prepare($sql);
				$lul -> bindValue(":titulo", $titulo);
				$lul -> bindValue(":genero1", $genero1);
				$lul -> bindValue(":genero2", $genero2);
				$lul -> bindValue(":autor1", $autor1);
				$lul -> bindValue(":autor2", $autor2);
				$lul -> bindValue(":autor3", $autor3);
				$lul -> bindValue(":qt", $qt);
				$lul -> bindValue(":link_img", $link_img);
				$lul -> bindValue(":capasVar", $capasVar);
				$lul -> bindValue(":editora", $editora);
				$lul -> bindValue(":edicao", $edicao);

				$lul -> execute();

			} catch (Exception $e) {
				?>
					<script>
						alert("Error:<?php echo $e -> getMessage(); ?>");
					</script>
				<?php
			}

			?>
				<script>
					window.location.href = "index.php"; 
				</script>
			<?php
		}

		public function delObr($id_obra){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "DELETE FROM obras WHERE id_obra = :id_obra";
				$lul = $conn -> prepare($sql);
				$lul -> bindValue(":id_obra", $id_obra);

				$lul -> execute();
			} catch (Exception $e) {
				
			}

			?>
				<script>
					window.location.href = "all.php"; 
				</script>
			<?php
		}

		public function gens(){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "SELECT * FROM generos ORDER BY nomGen;";
				$lul = $conn -> prepare($sql);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
						<option value="<?php echo $key['id_genero']; ?>"><?php echo $key['nomGen']; ?></option>
					<?php
				}

			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function auts(){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "SELECT * FROM autor ORDER BY nomAut;";
				$lul = $conn -> prepare($sql);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
						<option value="<?php echo $key['id_autor']; ?>"><?php echo $key['nomAut']; ?></option>
					<?php
				}

			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function edits(){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "SELECT * FROM editoras ORDER BY nomEdi;";
				$lul = $conn -> prepare($sql);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
						<option value="<?php echo $key['id_editora']; ?>"><?php echo $key['nomEdi']; ?></option>
					<?php
				}

			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function allObr(){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "SELECT t.id_obra, t.titulo,t.capasVar, t.qt, editoras.nomEdi,t.status, t.editora, g1.nomGen AS gen1, g2.nomGen AS gen2, a1.nomAut AS aut1, a2.nomAut AS aut2, a3.nomAut AS aut3 FROM obras t
					INNER JOIN generos g1 ON t.genero = g1.id_genero 
					INNER JOIN generos g2 ON t.genero2 = g2.id_genero 
					INNER JOIN autor a1 ON t.autor = a1.id_autor
					INNER JOIN autor a2 ON t.autor2 = a2.id_autor
					INNER JOIN autor a3 ON t.autor3 = a3.id_autor
					INNER JOIN editoras ON t.editora = id_editora ORDER BY titulo ASC";

				$lul = $conn -> prepare($sql);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
					<tr>
						<td><?php echo $key['id_obra']; ?></td>
						<td><?php echo $key['titulo']; ?></td>
						<td><?php echo $key['gen1']; ?></td>
						<td><?php echo $key['status']; ?></td>
						<td><?php echo $key['aut1']; ?></td>

						<?php
							if ($key['capasVar'] == 0) {
						?>
								<td><?php echo "NÃO"; ?></td>
						<?php
							}else{
						?>
								<td><?php echo "SIM"; ?></td>
						<?php
							}
						?>

						<td><?php echo $key['nomEdi']; ?></td>
						<form action="edit.php" method="GET">
							<td><button href="edit.php"	value="<?php echo $key['id_obra']; ?>" name="ai" style="width: 100%;" class="">ANALISAR</button></td>
						</form>

						<form action="" method="POST">
							<td><button value="<?php echo $key['id_obra']; ?>" name="ai" style="width: 100%;" class="">EXCLUIR</button></td>
						</form>

					</tr>
					<?php
				}	
			}catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function allGen(){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "SELECT * FROM generos ORDER BY nomGen";
				$lul = $conn -> prepare($sql);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
					<tr>
						<td><?php echo $key['id_genero']; ?></td>
						<td><?php echo $key['nomGen']; ?></td>
						<form action="editGen.php" method="GET">
							<td><button value="<?php echo $key['id_genero']; ?>" name="ai1" style="width: 100%;" class="">EDITAR</button></td>
						</form>
					</tr>
					<?php
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function allAut(){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "SELECT * FROM autor ORDER BY nomAut";
				$lul = $conn -> prepare($sql);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
					<tr>
						<td><?php echo $key['id_autor']; ?></td>
						<td><?php echo $key['nomAut']; ?></td>
						<form action="editAut.php" method="GET">
							<td><button value="<?php echo $key['id_autor']; ?>" name="ai2" style="width: 100%;" class="">EDITAR</button></td>
						</form>
					</tr>
					<?php
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function allEdi(){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "SELECT * FROM editoras ORDER BY nomEdi";
				$lul = $conn -> prepare($sql);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
					<tr>
						<td><?php echo $key['id_editora']; ?></td>
						<td><?php echo $key['nomEdi']; ?></td>
						<form action="editEdi.php" method="GET">
							<td><button value="<?php echo $key['id_editora']; ?>" name="ai3" style="width: 100%;" class="">EDITAR</button></td>
						</form>
					</tr>
					<?php
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function edis($id_obra){
			$con = new Conexao();
			$conn = $con-> getConection();

			try {
				$sql = "SELECT t.id_obra, t.titulo, t.edicao, t.qt, t.status,editoras.nomEdi, t.link_img,t.capasVar ,g1.nomGen AS gen1, g2.nomGen AS gen2, a1.nomAut AS aut1, a2.nomAut AS aut2, a3.nomAut AS aut3 FROM obras t
					INNER JOIN generos g1 ON t.genero = g1.id_genero 
					INNER JOIN generos g2 ON t.genero2 = g2.id_genero 
					INNER JOIN autor a1 ON t.autor = a1.id_autor
					INNER JOIN autor a2 ON t.autor2 = a2.id_autor
					INNER JOIN autor a3 ON t.autor3 = a3.id_autor
					INNER JOIN editoras ON t.editora = id_editora WHERE id_obra = :id_obra";

				$lul = $conn -> prepare($sql);

				$lul -> bindValue(":id_obra", $id_obra);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
					<form action="" method="POST">
						<tr>
		   					<td style="width: 20%;">
					       		<label>
									Titulo: 
								</label>
							</td>
							<td>
								<label><?php echo $key['titulo']; ?></label>
							</td>
							<td>
								<input type="text" name="editTit" placeholder="Ex: O Pequeno Principe" style="width: 100%;">
							</td>
							<td style="width: 15%;">
								<input type="submit" name="btnTit" style="width: 100%;">
							</td>
						</tr>
						<tr>
		   					<td>
					       		<label>
									Gênero 1: 
								</label>
							</td>
							<td>
								<label><?php echo $key['gen1']; ?></label>
							</td>
							<td>
								<select name="editGen1" style="width: 100%;">
									<?php
										$func = new Func();
										$func -> gens();
									?>
								</select>
							</td>
							<td>
								<input type="submit" name="btnGen1" style="width: 100%;">
							</td>
						</tr>
						<tr>
		   					<td>
					       		<label>
									Gênero 2: 
								</label>
							</td>
							<td>
								<label><?php echo $key['gen2']; ?></label>
							</td>
							<td>
								<select name="editGen2" style="width: 100%;">
									<?php
										$func = new Func();
										$func -> gens();
									?>
								</select>
							</td>
							<td>
								<input type="submit" name="btnGen2" style="width: 100%;">
							</td>
						</tr>
						<tr>
		   					<td>
					       		<label>
									Autor1: 
								</label>
							</td>
							<td>
								<label><?php echo $key['aut1']; ?></label>
							</td>
							<td>
								<select name="editAut1" style="width: 100%;">
									<?php
										$func -> auts();
									?>
								</select>
							</td>
							<td>
								<input type="submit" name="btnAut1" style="width: 100%;">
							</td>
						</tr>
						<tr>
		   					<td>
					       		<label>
									Autor2: 
								</label>
							</td>
							<td>
								<label><?php echo $key['aut2']; ?></label>
							</td>
							<td>
								<select name="editAut2" style="width: 100%;">
									<?php
										$func -> auts();
									?>
								</select>
							</td>
							<td>
								<input type="submit" name="btnAut2" style="width: 100%;">
							</td>
						</tr>
						<tr>
		   					<td>
					       		<label>
									Autor3: 
								</label>
							</td>
							<td>
								<label><?php echo $key['aut3']; ?></label>
							</td>
							<td>
								<select name="editAut3" style="width: 100%;">
									<?php
										$func -> auts();
									?>
								</select>
							</td>
							<td>
								<input type="submit" name="btnAut3" style="width: 100%;">
							</td>
						</tr>
						<tr>
		   					<td>
					       		<label>
									Editora: 
								</label>
							</td>
							<td>
								<label><?php echo $key['nomEdi']; ?></label>
							</td>
							<td>
								<select name="editEdi" style="width: 100%;">
									<?php
										$func -> edits();
									?>
								</select>
							</td>
							<td>
								<input type="submit" name="btnEdi" style="width: 100%;">
							</td>
						</tr>
						<tr>
		   					<td>
					       		<label>
									Quantidade: 
								</label>
							</td>
							<td>
								<label><?php echo $key['qt']; ?></label>
							</td>
							<td>
								<input type="number" name="editQt" style="width: 100%;">
							</td>
							<td>
								<input type="submit" name="btnQt" style="width: 100%;">
							</td>
						</tr>
						<tr>
		   					<td>
					       		<label>
									Capa: 
								</label>
							</td>
							<td>
								<label><?php echo $key['link_img']; ?></label>
							</td>
							<td>
								<input type="text" name="editCap" placeholder="" style="width: 100%;">
							</td>
							<td>
								<input type="submit" name="btnCap" style="width: 100%;">
							</td>
						</tr>
						<tr>
		   					<td>
					       		<label>
									Capas Variadas? 
								</label>
							</td>
							<td>
								<?php
									if ($key['capasVar'] == 0) {
								?>
										<label><?php echo "NÃO"; ?></label>
								<?php
									}else{
								?>
										<label><?php echo "SIM"; ?></label>
								<?php
									}
								?>
							</td>
							<td>
								<?php
									if ($key['capasVar'] == 0) {
								?>
										<input type="checkbox" name="editVar" value="1">
										<input type="hidden" name="hidVar" value="0">
								<?php
									}else{
								?>
										<input type="checkbox" name="editVar" value="1" checked>
										<input type="hidden" name="hidVar" value="0">
								<?php
									}
								?>
							</td>
							<td>
								<input type="submit" name="btnVar" style="width: 100%;">
							</td>
						</tr>
						<tr>
		   					<td>
					       		<label>
									Edição: 
								</label>
							</td>
							<td>
								<label><?php echo $key['edicao']; ?>° Edição</label>
							</td>
							<td>
								<input type="number" name="editEdic" style="width: 100%;">
							</td>
							<td>
								<input type="submit" name="btnEdic" style="width: 100%;">
							</td>
						</tr>
					</form>
					<?php

				}
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		}

		public function act($col, $val, $id_obra){
			$con = new Conexao();
			$conn = $con-> getConection();

			try {
				$sql = "UPDATE obras SET $col = :val WHERE id_obra = :id_obra";
				$lul = $conn -> prepare($sql);
				$lul -> bindValue(":val", $val);
				$lul -> bindValue(":id_obra", $id_obra);

				$lul -> execute();
			} catch (Exception $e) {
				echo $e -> getMessage();
			}

			?>
				<script type="text/javascript">
					window.location.href = "edit.php?ai=<?php echo $id_obra; ?>";
				</script>
			<?php
		}	

		public function edisGen($id_genero){
			$con = new Conexao();
			$conn = $con-> getConection();

			try {
				$sql = "SELECT * FROM generos WHERE id_genero = :id_genero";

				$lul = $conn -> prepare($sql);

				$lul -> bindValue(":id_genero", $id_genero);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
					<form action="" method="POST">
						<tr>
		   					<td style="width: 20%;">
					       		<label>
									Nome: 
								</label>
							</td>
							<td>
								<label><?php echo $key['nomGen']; ?></label>
							</td>
							<td>
								<input type="text" name="editGen" placeholder="Ex: Terror" style="width: 100%;">
							</td>
							<td style="width: 15%;">
								<input type="submit" name="btnGen" style="width: 100%;">
							</td>
						</tr>
					
					</form>
					<?php

				}
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		}

		public function act2($id_obra, $val){
			$con = new Conexao();
			$conn = $con-> getConection();

			try {
				$sql = "UPDATE generos SET nomGen = :val WHERE id_genero = :id_obra";
				$lul = $conn -> prepare($sql);
				$lul -> bindValue(":val", $val);
				$lul -> bindValue(":id_obra", $id_obra);

				$lul -> execute();


			} catch (Exception $e) {
				echo $e -> getMessage();
			}

			?>
				<script type="text/javascript">
					window.location.href = "editGen.php?ai1=<?php echo $id_obra; ?>";
				</script>
			<?php
		}

		public function edisAut($id_autor){
			$con = new Conexao();
			$conn = $con-> getConection();

			try {
				$sql = "SELECT * FROM autor WHERE id_autor = :id_genero";

				$lul = $conn -> prepare($sql);

				$lul -> bindValue(":id_genero", $id_autor);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
					<form action="" method="POST">
						<tr>
		   					<td style="width: 20%;">
					       		<label>
									Nome: 
								</label>
							</td>
							<td>
								<label><?php echo $key['nomAut']; ?></label>
							</td>
							<td>
								<input type="text" name="editNom" placeholder="Ex: Milton Santos" style="width: 100%;">
							</td>
							<td style="width: 15%;">
								<input type="submit" name="btnNom" style="width: 100%;">
							</td>
						</tr>

						<tr>
		   					<td style="width: 20%;">
					       		<label>
									Nacionalidade: 
								</label>
							</td>
							<td>
								<label><?php echo $key['nacionalidade']; ?></label>
							</td>
							<td>
								<select name="editNac" class="form-control-sm mt-3" style="width: 100%;">
									<option value=""></option>
									<option value="Não Identificado">Não Identificado</option>
									<option value="África do Sul">África do Sul</option>
									<option value="Albânia">Albânia</option>
									<option value="Alemanha">Alemanha</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antigua">Antigua</option>
									<option value="Arábia Saudita">Arábia Saudita</option>
									<option value="Argentina">Argentina</option>
									<option value="Armênia">Armênia</option>
									<option value="Aruba">Aruba</option>
									<option value="Austrália">Austrália</option>
									<option value="Áustria">Áustria</option>
									<option value="Azerbaijão">Azerbaijão</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrein">Bahrein</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Bélgica">Bélgica</option>
									<option value="Benin">Benin</option>
									<option value="Bermudas">Bermudas</option>
									<option value="Botsuana">Botsuana</option>
									<option value="Brasil">Brasil</option>
									<option value="Brunei">Brunei</option>
									<option value="Bulgária">Bulgária</option>
									<option value="Burkina Fasso">Burkina Fasso</option>
									<option value="botão">botão</option>
									<option value="Cabo Verde">Cabo Verde</option>
									<option value="Camarões">Camarões</option>
									<option value="Camboja">Camboja</option>
									<option value="Canadá">Canadá</option>
									<option value="Cazaquistão">Cazaquistão</option>
									<option value="Chade">Chade</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Cidade do Vaticano">Cidade do Vaticano</option>
									<option value="Colômbia">Colômbia</option>
									<option value="Congo">Congo</option>
									<option value="Coréia do Sul">Coréia do Sul</option>
									<option value="Costa do Marfim">Costa do Marfim</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Croácia">Croácia</option>
									<option value="Cuba">Cuba</option>
									<option value="Dinamarca">Dinamarca</option>
									<option value="Djibuti">Djibuti</option>
									<option value="Dominica">Dominica</option>
									<option value="EUA">EUA</option>
									<option value="Egito">Egito</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Emirados Árabes">Emirados Árabes</option>
									<option value="Equador">Equador</option>
									<option value="Eritréia">Eritréia</option>
									<option value="Escócia">Escócia</option>
									<option value="Eslováquia">Eslováquia</option>
									<option value="Eslovênia">Eslovênia</option>
									<option value="Espanha">Espanha</option>
									<option value="Estônia">Estônia</option>
									<option value="Etiópia">Etiópia</option>
									<option value="Fiji">Fiji</option>
									<option value="Filipinas">Filipinas</option>
									<option value="Finlândia">Finlândia</option>
									<option value="França">França</option>
									<option value="Gabão">Gabão</option>
									<option value="Gâmbia">Gâmbia</option>
									<option value="Gana">Gana</option>
									<option value="Geórgia">Geórgia</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Granada">Granada</option>
									<option value="Grécia">Grécia</option>
									<option value="Guadalupe">Guadalupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guiana">Guiana</option>
									<option value="Guiana Francesa">Guiana Francesa</option>
									<option value="Guiné-bissau">Guiné-bissau</option>
									<option value="Haiti">Haiti</option>
									<option value="Holanda">Holanda</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungria">Hungria</option>
									<option value="Iêmen">Iêmen</option>
									<option value="Ilhas Cayman">Ilhas Cayman</option>
									<option value="Ilhas Cook">Ilhas Cook</option>
									<option value="Ilhas Curaçao">Ilhas Curaçao</option>
									<option value="Ilhas Marshall">Ilhas Marshall</option>
									<option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
									<option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
									<option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
									<option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
									<option value="Índia">Índia</option>
									<option value="Indonésia">Indonésia</option>
									<option value="Inglaterra">Inglaterra</option>
									<option value="Irlanda">Irlanda</option>
									<option value="Islândia">Islândia</option>
									<option value="Israel">Israel</option>
									<option value="Itália">Itália</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japão">Japão</option>
									<option value="Jordânia">Jordânia</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Latvia">Latvia</option>
									<option value="Líbano">Líbano</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lituânia">Lituânia</option>
									<option value="Luxemburgo">Luxemburgo</option>
									<option value="Macau">Macau</option>
									<option value="Macedônia">Macedônia</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malásia">Malásia</option>
									<option value="Malaui">Malaui</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marrocos">Marrocos</option>
									<option value="Martinica">Martinica</option>
									<option value="Mauritânia">Mauritânia</option>
									<option value="Mauritius">Mauritius</option>
									<option value="México">México</option>
									<option value="Moldova">Moldova</option>
									<option value="Mônaco">Mônaco</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Nepal">Nepal</option>
									<option value="Nicarágua">Nicarágua</option>
									<option value="Niger">Niger</option>
									<option value="Nigéria">Nigéria</option>
									<option value="Noruega">Noruega</option>
									<option value="Nova Caledônia">Nova Caledônia</option>
									<option value="Nova Zelândia">Nova Zelândia</option>
									<option value="Omã">Omã</option>
									<option value="Palau">Palau</option>
									<option value="Panamá">Panamá</option>
									<option value="Papua-nova Guiné">Papua-nova Guiné</option>
									<option value="Paquistão">Paquistão</option>
									<option value="Peru">Peru</option>
									<option value="Polinésia Francesa">Polinésia Francesa</option>
									<option value="Polônia">Polônia</option>
									<option value="Porto Rico">Porto Rico</option>
									<option value="Portugal">Portugal</option>
									<option value="Qatar">Qatar</option>
									<option value="Quênia">Quênia</option>
									<option value="Reino Unido">Reino Unido</option>
									<option value="Rep. Dominicana">Rep. Dominicana</option>
									<option value="Rep. Tcheca">Rep. Tcheca</option>
									<option value="Reunion">Reunion</option>
									<option value="Romênia">Romênia</option>
									<option value="Ruanda">Ruanda</option>
									<option value="Rússia">Rússia</option>
									<option value="Saipan">Saipan</option>
									<option value="Samoa Americana">Samoa Americana</option>
									<option value="Senegal">Senegal</option>
									<option value="Serra Leone">Serra Leone</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Singapura">Singapura</option>
									<option value="Síria">Síria</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
									<option value="St. Lúcia">St. Lúcia</option>
									<option value="St. Vincent">St. Vincent</option>
									<option value="Sudão">Sudão</option>
									<option value="Suécia">Suécia</option>
									<option value="Suiça">Suiça</option>
									<option value="Suriname">Suriname</option>
									<option value="Tailândia">Tailândia</option>
									<option value="Taiwan">Taiwan</option>
									<option value="Tanzânia">Tanzânia</option>
									<option value="Togo">Togo</option>
									<option value="Trinidad & Tobago">Trinidad & Tobago</option>
									<option value="Tunísia">Tunísia</option>
									<option value="Turquia">Turquia</option>
									<option value="Ucrânia">Ucrânia</option>
									<option value="Uganda">Uganda</option>
									<option value="Uruguai">Uruguai</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Vietnã">Vietnã</option>
									<option value="Zaire">Zaire</option>
									<option value="Zâmbia">Zâmbia</option>
									<option value="Zimbábue">Zimbábue</option>
								</select>
							</td>
							<td style="width: 15%;">
								<input type="submit" name="btnNac" style="width: 100%;">
							</td>
						</tr>
					
					</form>
					<?php

				}
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		}

		public function act3($col, $val, $id_obra){
			$con = new Conexao();
			$conn = $con-> getConection();

			try {
				$sql = "UPDATE autor SET $col = :val WHERE id_autor = :id_obra";
				$lul = $conn -> prepare($sql);
				$lul -> bindValue(":val", $val);
				$lul -> bindValue(":id_obra", $id_obra);

				$lul -> execute();


			} catch (Exception $e) {
				echo $e -> getMessage();
			}

			?>
				<script type="text/javascript">
					window.location.href = "editAut.php?ai2=<?php echo $id_obra; ?>";
				</script>
			<?php
		}

		public function edisEdi($id_autor){
			$con = new Conexao();
			$conn = $con-> getConection();

			try {
				$sql = "SELECT * FROM editoras WHERE id_editora = :id_genero";

				$lul = $conn -> prepare($sql);

				$lul -> bindValue(":id_genero", $id_autor);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key) {
					?>
					<form action="" method="POST">
						<tr>
		   					<td style="width: 20%;">
					       		<label>
									Nome: 
								</label>
							</td>
							<td>
								<label><?php echo $key['nomEdi']; ?></label>
							</td>
							<td>
								<input type="text" name="editNom" placeholder="Ex: Saraiva" style="width: 100%;">
							</td>
							<td style="width: 15%;">
								<input type="submit" name="btnNom" style="width: 100%;">
							</td>
						</tr>
					
					</form>
					<?php

				}
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		}

		public function act4($col, $val, $id_obra){
			$con = new Conexao();
			$conn = $con-> getConection();

			try {
				$sql = "UPDATE editoras SET $col = :val WHERE id_editora = :id_obra";
				$lul = $conn -> prepare($sql);
				$lul -> bindValue(":val", $val);
				$lul -> bindValue(":id_obra", $id_obra);

				$lul -> execute();


			} catch (Exception $e) {
				echo $e -> getMessage();
			}

			?>
				<script type="text/javascript">
					window.location.href = "editEdi.php?ai3=<?php echo $id_obra; ?>";
				</script>
			<?php
		}

		public function qrs(){
			$con = new Conexao();
			$conn = $con-> getConection();

			try {	
				$sql = "SELECT t.id_obra, t.edicao,t.titulo,t.qt, editoras.nomEdi, g1.nomGen AS gen1, g2.nomGen AS gen2, a1.nomAut AS aut1, a2.nomAut AS aut2, a3.nomAut AS aut3 FROM obras t
					INNER JOIN generos g1 ON t.genero = g1.id_genero 
					INNER JOIN generos g2 ON t.genero2 = g2.id_genero 
					INNER JOIN autor a1 ON t.autor = a1.id_autor
					INNER JOIN autor a2 ON t.autor2 = a2.id_autor
					INNER JOIN autor a3 ON t.autor3 = a3.id_autor
					INNER JOIN editoras ON t.editora = id_editora ORDER BY titulo";

				$lul = $conn -> prepare($sql);

				$lul -> execute();

				$ar = $lul -> fetchAll();
					
				?>
				<div class="album py-3">
				<div class="mx-auto" style="width: 95%;">
				<div class="row"> 
				<?php
				foreach ($ar as $key) {
					for ($i=0; $i < $key['qt']; $i++) { 
						
					?>
						<div style="width: 33%;" class="col-md-4">
								<div class="card" style="font-size: 9px; margin-bottom: 36.8px;">
									<div class="row" style="height:150px;">
										<div style="width: 30%;" class="col-sm-5">
											<?php
											$aux = 'qr_img0.50j/php/qr_img.php?';
											$aux .= 'd=20.20.1.210/biblioteca/emprestimo.php?livro='.$key['id_obra'];

								 			echo "<center><img src='".$aux."' class='card-img mt-3' style='height: 75px; width: 75px;'><br>";
											echo "-------[ ID: ".$key['id_obra']." ]-------</center>";
											?>
											<br>
										</div>
										<div style="width: 70%;" class="col-sm-7">
											<?php	
											echo "
											<br>Nome: ".$key['titulo'];	
											echo "
											<br>Genero: ".$key['gen1'];	
											echo "
											<br>Genero 2: ".$key['gen2'];
											echo "
											<br>Autor 1: ".$key['aut1'];	
											echo "
											<br>Autor 2: ".$key['aut2'];	
											echo "
											<br> Autor 3: ".$key['aut3'];	
											echo "
											<br> Editora: ".$key['nomEdi'];
											echo "
											<br>".$key['edicao']."° Edição<br><br>";
											?>
										</div>

									</div>
							</div>
						</div>
						
					<?php
					}
				}
				?>
				</div>
				</div>
				</div>
				<?php

			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		}	

	}

?>