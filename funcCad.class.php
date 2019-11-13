<?php
	require("Conexao.class.php");

	class Func{

		public function log(){
			if (isset($_COOKIE['ALogado'])) {
				?>
					<script type="text/javascript">
						window.location.href = "1ALU/AlunoLogado.php";
					</script>
				<?php
			}elseif(isset($_COOKIE['PLogado'])){
				?>
					<script type="text/javascript">
						window.location.href = "1PROF/ProfLogado.php";
					</script>
				<?php
			}else{

			}
		
		}

		public function val($id){
			$con = new Conexao();
			$conn = $con -> getConection();

				try {
					$sql = "SELECT * FROM usuarios WHERE matricula = :matricula";
					$lul = $conn -> prepare($sql);

					$lul -> bindValue(":matricula", $id);

					$lul -> execute();

					$ar = $lul -> fetchAll();

					$num = $lul -> rowCount();

					if ($num == 1) {
						foreach ($ar as $key => $value) {
							if ($value['telefone1'] == null && $value['tipo'] != 1) {
								?>
									<form action="" method="POST">
										<div class="field">
											<label>Matrícula: </label><br>
											<input type="text" class="form-control" style="cursor: not-allowed;" name="mat" disabled value="<?php echo $value['matricula']; ?>">
											<br>
											<label class="mt-1">Nome: </label><br>
											<input type="text" class="form-control" style="cursor: not-allowed;" name="nom" disabled value="<?php echo $value['nome']; ?>">
											<br>
											<label class="mt-1">Digite aqui a sua senha: </label><br>
											<input type="text" class="form-control" name="sen" minlength="8" maxlength="16">
											<br>
											<label class="mt-1">Telefone Principal: </label><br>
											<input type="text" class="form-control" name="tel1" required onkeypress="maskP(this)" maxlength="15"><br>

											<label class="mt-1">Telefone Secundário (Opcional): </label><br>
											<input type="text" class="form-control" name="tel2" onkeypress="maskP(this)" maxlength="15"><br>

											<label class="mt-1">Email: </label><br>
											<input type="email" class="form-control" name="ema" required><br>

											<label class="mt-1">Whatsapp: </label><br>
											<input type="text"  class="form-control" name="wha" onkeypress="maskP(this)" maxlength="15" required><br>

											<button class="btn btn-primary shadow mt-3 mb-3 ml-1 rounded" onclick="lul()">VOLTAR</button>
											<input type="submit" name="btn_cad" value="CADASTRAR" class="btn btn-primary shadow mt-3 mb-3 ml-1 rounded"><br>
										</div>

									</form>

								<?php
							}else if ($value['telefone1'] == null && $value['tipo'] == 1) {
								echo "
									<script>
										alert('Você é um professor');
										window.location.href = 'index.php';
									</script>
								";
							}else{
								echo "
									<script>
										alert('Este aluno já foi cadastrado.');
										window.location.href = 'index.php';
									</script>
								";
							}

						}
					}else{
						echo "
							<script>
								alert('Este aluno não existe.');
								window.location.href = 'index.php';
							</script>
						";
					}


			} catch (Exception $e) {
				echo $e -> getMessage();
			}

		}

		public function cadAlu($mat, $sen,$tel1, $tel2, $email, $whats){
			$con = new Conexao();
			$conn = $con -> getConection();

			try {
				$sql = "UPDATE usuarios SET senha = :sen, telefone1 = :tel1, telefone2 = :tel2, email = :email, whats = :whats WHERE matricula = :matId";

				$lul = $conn -> prepare($sql);

				$lul -> bindValue(":sen", $sen);
				$lul -> bindValue(":tel1", $tel1);
				$lul -> bindValue(":tel2", $tel2);
				$lul -> bindValue(":email", $email);
				$lul -> bindValue(":whats", $whats);
				$lul -> bindValue(":matId", $mat);

				$lul -> execute();

				echo "
					<script>
						alert('Dados registrados com sucesso.');
						window.location.href = 'index.php';
					</script>
				";

			} catch (Exception $e) {
				?>
					<script>
						alert('Possíveis erros: \n\nEmail duplicado\nFalha na conexão com o banco de dados');
					</script>
				<?php
			}

		}

		public function login($mat, $sen){
			$con = new Conexao();
			$conn = $con -> getConection();

			try {

				$sql = "SELECT * FROM usuarios WHERE matricula = :mat AND senha = :sen";
				$lul = $conn -> prepare($sql);

				$lul -> bindValue(":mat", $mat);
				$lul -> bindValue(":sen", $sen);

				$lul -> execute();

				$num = $lul -> rowCount();

				$ar = $lul -> fetchAll();

				
				if (isset($num) && $num == 1) {
					
					foreach ($ar as $key => $value) {
						if ($value['tipo'] > 1) {
							setcookie('ALogado', "kk");
							setcookie('NLogado', $value['nome']);
							setcookie('MLogado', $value['matricula']);
							setcookie('STLogado', $value['stt']);
							setcookie('PSLogado', $value['senha']);
							setcookie('T1Logado', $value['telefone1']);
							setcookie('T2Logado', $value['telefone2']);
							setcookie('EMLogado', $value['email']);
							?>
								<script type="text/javascript">
									window.location.href = 'AlunoLogado.php';
								</script>
							<?php
						}else {
							setcookie('PLogado', "kk");
							?>
								<script type="text/javascript">
									window.location.href = 'ProfLogado.php';
								</script>
							<?php
						}
					}

				}else{
					?>
						<script type="text/javascript">
							alert('Usuário ou senha incorreto.');
							window.location.href = 'index.php';
						</script>
					<?php
				}

			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		
		}

		public function dados($mat){
			$con = new Conexao();
			$conn = $con->getConection();

				try{
					$sql="SELECT * FROM usuarios WHERE matricula = :matricula";
					$login=$conn->prepare($sql);
					$login->bindValue(':matricula',$mat);
					$login->execute();
					$ar = $login -> fetchAll();

					foreach ($ar as $key) {
						?>
						<div class="container-fluid ml-5 mt-5">
    						<div class="row">
					
								<div class="d-inline-flex justify-content-start ftco-animate mr-5">
									<form action="" method="POST">
					       

										<div class="text-inner pl-md-10" style="width: 100%;">
				              				<h4 class="heading"><?php echo $key['nome']; ?></h4>
					              			<p>Senha: <?php echo $key['senha']; ?><br>Editar por: <input type="text" name="senUpt" class="form-control"><input type="submit" name="btnSenUpt" value="EDITAR" class="btn btn-primary shadow mt-2  mb-1 rounded"></p>

					              			<p>Telefone 1: <?php echo $key['telefone1']; ?><br>Editar por: <input type="text" name="Tel1Upt" class="form-control" onkeypress="maskP(this)" maxlength="15"><input type="submit" name="btnTel1Upt" value="EDITAR" class="btn btn-primary shadow  mt-2 mb-1 rounded"></p>

					              			<p>Telefone 2: <?php echo $key['telefone2']; ?><br>Editar por: <input type="text" name="Tel2Upt" class="form-control" onkeypress="maskP(this)" maxlength="15"><input type="submit" name="btnTel2Upt" value="EDITAR" class="btn btn-primary shadow  mt-2 mb-1 rounded"></p>

					              			
				            			</div>
				            			
									</form>
					    		</div>

					    		<div class="d-inline-flex justify-content-end ftco-animate">
									<form action="" method="POST">
					       

										<div class="text-inner pl-md-10" style="width: 100%;">
											<h4 class="heading"> </h4>

				              				<p>Email: <?php echo $key['email']; ?><br>Editar por: <input type="email" name="emaUpt" class="form-control"><input type="submit" name="btnEmaUpt" value="EDITAR" class="btn btn-primary shadow  mb-1 mt-2 rounded"></p>

					              			<p>Whatsapp: <?php echo $key['whats']; ?><br>Editar por: <input type="text" name="whaUpt" class="form-control" onkeypress="maskP(this)" maxlength="15"><input type="submit" name="btnWhaUpt" value="EDITAR" class="btn btn-primary shadow  mt-2 mb-1 rounded"></p>

					              			<p>Status: 
												<?php
													if ($key['stt'] == 1) {
														echo "BONZINHO";
													}elseif($key['stt'] == 2){
														echo "PENDENTE";
													}elseif($key['stt'] == 3){
														echo "PEDIDO EXPIRADO";
													}
												?>
											</p>

					              			
				            			</div>
				            			
									</form>
					    		</div>
					    		
    						</div>
    					</div> 		
						<?php
					}

				}catch(PDOException $e){
					echo $e->getMessage();
				}
		
		}

		public function edit($tip ,$val, $mat){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "UPDATE `usuarios` SET $tip = :value WHERE matricula = :mat";

				$lul = $conn -> prepare($sql);

				$lul -> bindValue(":value", $val);
				$lul -> bindValue(":mat", intval($mat));

				$lul -> execute();

			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		
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
											$aux .= 'd=http://20.20.1.210/biblioteca/empdev.php?qr='.$key['id_obra'];

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

		public function livro($id){
			$con = new Conexao();
			$conn = $con -> getConection();

			try {
				$sql = "SELECT t.id_obra, t.edicao,t.link_img,t.genero, t.genero2,t.titulo,t.capasVar, t.qt, editoras.nomEdi,t.status, t.editora, g1.nomGen AS gen1, g2.nomGen AS gen2, a1.nomAut AS aut1, a2.nomAut AS aut2, a3.nomAut AS aut3 FROM obras t
                                    INNER JOIN generos g1 ON t.genero = g1.id_genero 
                                    INNER JOIN generos g2 ON t.genero2 = g2.id_genero 
                                    INNER JOIN autor a1 ON t.autor = a1.id_autor
                                    INNER JOIN autor a2 ON t.autor2 = a2.id_autor
                                    INNER JOIN autor a3 ON t.autor3 = a3.id_autor
                                    INNER JOIN editoras ON t.editora = id_editora WHERE id_obra = :id";
				$lul = $conn -> prepare($sql);

				$lul -> bindValue(':id', $id);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key => $value) {
					?>
					<div class="one-half img" style="background-image: url('<?php echo $value['link_img']; ?>');"></div>
						<div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
							<div class="text-inner pl-md-5">
								<h3 class="heading"><?php echo $value['titulo']; ?></h3>
								<p>
									Gênero: <?php echo $value['gen1']; ?>
									<br>
									<?php if($value['gen2'] != ""){ ?>Gênero 2: <?php echo $value['gen2']; }?>
									            		
								</p>

								<p>
									Autor: <?php echo $value['aut1']; ?>
									            	
									<?php if($value['aut2'] != ""){ ?><br>Autor 2: <?php echo $value['aut2']; }?>
									            	
									<?php if($value['aut3'] != ""){ ?><br>Autor 3: <?php echo $value['aut3']; }?>
								</p>

								<p>
									No estoque: <?php echo $value['qt']; ?>
								</p>

								<p>
									Editora: <?php echo $value['nomEdi']; ?>
								</p>

								<p>
									<?php echo $value['edicao'];?>
									° Edição
								</p>

								<a href="index.php"><button class="mt-3 mb-5 btn btn-primary py-3 px-5">Voltar</button></a>

							</div>
						</div>
									<?php
				}

			} catch (Exception $e) {
				echo $e -> getMessage();
			}
				
		}

		public function et1(){
			?>
			<div class="one-half half-text d-flex justify-content-start align-items-center ftco-animate">
				<div class="text-inner pl-md-5">
		            <form action="" method="POST">
			            <input type="submit" name="emp" value='Empréstimo' class="mt-5 mb-3 btn btn-primary py-3 px-5">
			            <br>
			            <input type="submit" name="dev" value='Devolução' class="mt-3 mb-3 btn btn-primary py-3 px-5">
		            </form>
		            	<a href="index.php"><button class="mt-3 mb-5 btn btn-primary py-3 px-5">Home</button></a>
		        </div>
			</div>
			<?php
		
		}

		public function et2($op){
			if ($op == 'emp') {
				?>
					<div class="one-half half-text d-flex justify-content-start align-items-center ftco-animate mt-5">
						<div class="text-inner pl-md-5">
				            <h3 class="heading">Matrícula: </h3>
				            <form action="" method="POST">
					            <input type="number" name="mat" class="form-control">
					            <input type="submit" name="vot" value='Voltar' class="mt-3 mb-5 btn btn-primary py-3 px-5">
					            <input type="submit" name="btnmatemp" value='Validar' class="mt-3 mb-5 btn btn-primary py-3 px-5">
				            </form>
				        </div>
					</div>
				<?php
			}elseif ($op == 'dev') {
				?>
					<div class="one-half half-text d-flex justify-content-start align-items-center ftco-animate mt-5">
						<div class="text-inner pl-md-5">
				            <h3 class="heading">Matrícula: </h3>
				            <form action="" method="POST">
					            <input type="number" name="mat" class="form-control">
					            <input type="submit" name="vot" value='Voltar' class="mt-3 mb-5 btn btn-primary py-3 px-5">
					            <input type="submit" name="btnmatdev" value='Validar' class="mt-3 mb-5 btn btn-primary py-3 px-5">
				            </form>
				        </div>
					</div>
				<?php
			}
				
		}

		public function et3($op, $mat, $id){
			
			$con = new Conexao();
			$conn = $con -> getConection();

			try {
				
				$sql = "SELECT * FROM usuarios WHERE matricula = :mat AND telefone1 <> :a";

				$lul = $conn -> prepare($sql);
				$lul -> bindValue(':mat', $mat);
				$lul -> bindValue(':a', "");

				$lul -> execute();

				$ar = $lul -> fetchAll();



				$sql1 = "SELECT * FROM obras WHERE id_obra = :id";

				$lul1 = $conn -> prepare($sql1);
				$lul1 -> bindValue(':id', $id);

				$lul1 -> execute();

				$ar1 = $lul1 -> fetchAll();

				
				$num = $lul -> rowCount();

				$num1 = $lul1 -> rowCount();


				$sql2 = "SELECT * FROM emprestimos INNER JOIN usuarios ON idUsu = matricula INNER JOIN obras ON id_livro = id_obra WHERE idUsu = :id";

				$lul2 = $conn -> prepare($sql2);
				$lul2 -> bindValue(':id', $mat);

				$lul2 -> execute();

				$ar2 = $lul2 -> fetchAll();

				
				$num = $lul -> rowCount();

				$num1 = $lul1 -> rowCount();

				$num2 = $lul2 -> rowCount();


				if ($num == 1) {
					if ($op == 'emp') {
						foreach ($ar as $key => $value) {
							foreach ($ar1 as $key1 => $value1) {
								if ($value['stt'] == 1) {
									?>
										<div class="one-half img" style="background-image: url('<?php echo $value1['link_img']; ?>');"></div>
										<div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
											<div class="text-inner pl-md-5">
												<h3 class="heading">Empréstimo do livro <span><?php echo $value1['titulo']; ?></span>.</h3>
									            <h3 class="heading">Para o aluno <span><?php echo $value['nome']; ?></span>.</h3>
									            <form action="" method="POST">
										           	<input type="number" class="form-control" name='adm' placeholder="Admin">
										           	<input type="text" class="form-control mt-3" name='senhad' placeholder="Senha">
										           	<input type="submit" name="vot2" value="Voltar" class="mt-3 mb-3 btn btn-primary py-3 px-5">
										           	<input type="submit" name="btnconemp" value="Confirmar Empréstimo" class="mt-3 mb-3 btn btn-primary py-3 px-5">
									            </form>
									        </div>
										</div>
									<?php
								}else{
									setcookie('mat');
									?>	
										<script type="text/javascript">
											alert('Este aluno já possui um empréstimo pendente.');
											window.location.href = 'empdev.php?qr=<?php echo $_GET['qr']; ?>';
										</script>
									<?php
									
								}
							}
						}
					}else{
						if ($num2 == 1) {
							foreach ($ar2 as $key => $value) {
								setcookie('qt', $value['qt']);
								?>
									<div class="one-half img" style="background-image: url('<?php echo $value['link_img']; ?>');"></div>
									<div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
										<div class="text-inner pl-md-5">
											<h3 class="heading">Devolução do livro <span><?php echo $value['titulo']; ?></span>.</h3>
									        <h3 class="heading">Pego pelo aluno <span><?php echo $value['nome']; ?></span>.</h3>
									        <form action="" method="POST">
										        <input type="number" class="form-control" name='adm' placeholder="Admin">
										        <input type="text" class="form-control mt-3" name='senhad' placeholder="Senha">
										        <input type="submit" name="vot2" value="Voltar" class="mt-3 mb-3 btn btn-primary py-3 px-5">
										        <br>
										        <input type="submit" name="btncondev" value="Confirmar Devolução" class="mt-3 mb-5 btn btn-primary py-3 px-5">
									        </form>
									    </div>
									</div>
								<?php
							}
						}else{
							setcookie('mat');
							?>	
								<script type="text/javascript">
									alert('Este aluno não tem nenhum empréstimo pendente.');
									window.location.href = 'empdev.php?qr=<?php echo $_GET['qr']; ?>';
								</script>
							<?php
						}
					}
						
				}else{
					setcookie('mat');
					?>
					<div class="one-half img" style="background-image: url('<?php echo $value1['link_img']; ?>');"></div>
					<div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
						<div class="text-inner pl-md-5">
				            <h3 class="heading">Este aluno não existe, ou não foi cadastrado.</h3>
				            <form action="" method="POST">
					            <input type="submit" name="" value='Tentar Novamente' class="mt-3 mb-3 btn btn-primary py-3 px-5">
				            </form>
				            	<a href="index.php#con-section"><button class="mt-3 mb-3 btn btn-primary py-3 px-5">Cadastro</button></a>
				        </div>
					</div>
					<?php
				}

			} catch (Exception $e) {
				echo $e -> getMessage();
			}
	
		}

		public function et4($id){
			$con = new Conexao();
			$conn = $con -> getConection();

			try {
				
				$sql = "SELECT * FROM emprestimos INNER JOIN usuarios ON idUsu = matricula INNER JOIN obras ON id_livro = id_obra WHERE idUsu = :id";

				$lul = $conn -> prepare($sql);
				$lul -> bindValue(":id", $id);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $key => $value) {
					?>
					<div class="one-half half-text d-flex justify-content-start align-items-center ftco-animate">
						<div class="text-inner pl-md-5">
				            <h3 class="heading">Empréstimo realizado com sucesso</h3>
				            <p>Para o aluno <span><?php echo $value['nome']; ?></span></p>
				            <p>Do livro <span><?php echo $value['titulo']; ?></span></p>
				            <p>Boa leitura!</p>
				        </div>
					</div>
					<?php
				}

				setcookie('mat');
				setcookie('fim');
				setcookie('op');

				header('Refresh: 5;url=index.php');

			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		
		}

		public function emp($id, $alu){
			$con = new Conexao();
			$conn = $con->getConection();

			try{

				$sql = "SELECT * FROM obras WHERE id_obra = :id_obra";
				$hi = $conn -> prepare($sql);
				$hi -> bindValue(":id_obra", $id);
				$hi -> execute();

				$ar = $hi -> fetchAll();
				
				foreach ($ar as $key) {
					if ($key['qt'] > 0) {

						$sql1 = "SELECT * FROM emprestimos INNER JOIN usuarios ON idUsu = matricula WHERE idUsu = :idAluno";
						$hi1 = $conn -> prepare($sql1);

						$hi1 -> bindValue(":idAluno", $alu);
						$hi1 -> execute();

						$ar1 = $hi1 -> fetchAll();

						foreach ($ar1 as $key1) {
							$sql2 = "DELETE FROM emprestimos WHERE id_emp = :id_emp";

							$hi2 = $conn -> prepare($sql2);
							$hi2 -> bindValue(":id_emp", $key1['id_emp']);

							$hi2 -> execute();

							$alu = $key1['matricula'];
						}

						$sql3 = "INSERT INTO emprestimos(ven_dia, id_livro, idUsu, STATUS)VALUES(:ven_dia, :id_livro, :idAluno, :STATUS)";

						$hi3 = $conn -> prepare($sql3);
						$hi3 -> bindValue(":ven_dia", date("z")+7);
						$hi3 -> bindValue(":id_livro", $id);
						$hi3 -> bindValue(":idAluno", $alu);
						$hi3 -> bindValue(":STATUS", 1);

						$hi3 -> execute();

						$sql4 = "UPDATE usuarios SET stt = :divida WHERE matricula = :matricula";

						$hi4 = $conn -> prepare($sql4);
						$hi4 -> bindValue(":divida", 2);
						$hi4 -> bindValue(":matricula", $alu);

						$hi4 -> execute();

						$sql5 = "UPDATE obras SET qt = :qt WHERE id_obra = :id_obra";

						$hi5 = $conn -> prepare($sql5);
						$hi5 -> bindValue(":qt", $key['qt']-1);
						$hi5 -> bindValue(":id_obra", $id);

						$hi5 -> execute();

						setcookie('fim', 'eefh');
						?>
							<script>
								window.location.href = "empdev.php?qr=<?php echo $alu; ?>";
							</script>			
						<?php

					}elseif ($key['qt'] == 0) {
						echo "
							<script>
								alert('Este livro não está mais disponível.');
							</script>
						";
					}
				}

			}catch(PDOException $e){
				echo $e->getMessage();
			}

		}

		public function dev($idA, $idO, $qt){
			$con = new Conexao();
			$conn = $con->getConection();

				try{

					$sql = "DELETE FROM emprestimos WHERE idUsu = :id_emp";
					$lul = $conn -> prepare($sql);
					$lul -> bindValue(":id_emp", $idA);

					$lul -> execute();

					$sql2 = "UPDATE usuarios SET stt = :divida WHERE matricula = :mat";
					$lul2 = $conn -> prepare($sql2);
					$lul2 -> bindValue(":divida", 1);
					$lul2 -> bindValue(":mat", $idA);

					$lul2 -> execute();

					$sql3 = "UPDATE obras SET qt = :qt WHERE id_obra = :id_obra";
					$lul3 = $conn -> prepare($sql3);
					$lul3 -> bindValue(":qt", $qt+1);
					$lul3 -> bindValue(":id_obra", $idO);

					$lul3 -> execute();

					?>
								<script>
									alert('Devolução registrada com sucesso.');
									window.location.href = "index.php";
								</script>			
							<?php

				}catch(PDOException $e){
					echo $e -> getMessage();
				}
		
		}

		public function pagina($rpp, $tipP, $valP){
			$con = new Conexao();
			$conn = $con -> getConection();

			try {
				$sql = "SELECT * FROM obras";
				$lul = $conn->prepare($sql);
				$lul -> execute();

				$rC = $lul->rowCount();

				$nop = ceil($rC/$rpp);

				if (!isset($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }

                $tpfr = ($page-1)*$rpp;
                if ($tipP == "pesquisa") {
                	$sql1='SELECT t.id_obra, t.autor, t.link_img,t.genero, t.genero2,t.titulo,t.capasVar, t.qt, editoras.nomEdi,t.status, t.editora, g1.nomGen AS gen1, g2.nomGen AS gen2, a1.nomAut AS aut1, a2.nomAut AS aut2, a3.nomAut AS aut3 FROM obras t
                    INNER JOIN generos g1 ON t.genero = g1.id_genero 
                    INNER JOIN generos g2 ON t.genero2 = g2.id_genero 
                    INNER JOIN autor a1 ON t.autor = a1.id_autor
                    INNER JOIN autor a2 ON t.autor2 = a2.id_autor
                    INNER JOIN autor a3 ON t.autor3 = a3.id_autor
                    INNER JOIN editoras ON t.editora = id_editora WHERE t.titulo LIKE :valP ORDER BY titulo LIMIT ' . $tpfr . ',' .  $rpp;
                
                	$lul1 = $conn->prepare($sql1);
                	$lul1 -> bindValue(":valP", "%".$valP."%");

                	$sql10 = "SELECT * FROM obras WHERE titulo LIKE :valP";
                	$lul10 = $conn -> prepare($sql10);
                	$lul10 -> bindValue(':valP', "%".$valP."%");

                	$lul10 -> execute();

                	$xi = $lul10 -> rowCount();
                }elseif($tipP == "genero"){	
                	$sql1='SELECT t.autor,t.id_obra, t.link_img,t.genero, t.genero2,t.titulo,t.capasVar, t.qt, editoras.nomEdi,t.status, t.editora, g1.nomGen AS gen1, g2.nomGen AS gen2, a1.nomAut AS aut1, a2.nomAut AS aut2, a3.nomAut AS aut3 FROM obras t
                    INNER JOIN generos g1 ON t.genero = g1.id_genero 
                    INNER JOIN generos g2 ON t.genero2 = g2.id_genero 
                    INNER JOIN autor a1 ON t.autor = a1.id_autor
                    INNER JOIN autor a2 ON t.autor2 = a2.id_autor
                    INNER JOIN autor a3 ON t.autor3 = a3.id_autor
                    INNER JOIN editoras ON t.editora = id_editora WHERE t.genero = :valP1 OR t.genero2 = :valP2 ORDER BY titulo LIMIT ' . $tpfr . ',' .  $rpp;
                
                	$lul1 = $conn->prepare($sql1);
                	$lul1 -> bindValue(":valP1", $valP);
                	$lul1 -> bindValue(":valP2", $valP);

                	$sql10 = "SELECT * FROM obras WHERE genero = :valP1 OR genero2 = :valP2";
                	$lul10 = $conn -> prepare($sql10);
                	$lul10 -> bindValue(":valP1", $valP);
                	$lul10 -> bindValue(":valP2", $valP);

                	$lul10 -> execute();

                	$xi = $lul10 -> rowCount();
                }elseif($tipP == "autor"){	
                	$sql1='SELECT t.id_obra, t.autor,t.link_img,t.genero, t.genero2,t.titulo,t.capasVar, t.qt, editoras.nomEdi,t.status, t.editora, g1.nomGen AS gen1, g2.nomGen AS gen2, a1.nomAut AS aut1, a2.nomAut AS aut2, a3.nomAut AS aut3 FROM obras t
                    INNER JOIN generos g1 ON t.genero = g1.id_genero 
                    INNER JOIN generos g2 ON t.genero2 = g2.id_genero 
                    INNER JOIN autor a1 ON t.autor = a1.id_autor
                    INNER JOIN autor a2 ON t.autor2 = a2.id_autor
                    INNER JOIN autor a3 ON t.autor3 = a3.id_autor
                    INNER JOIN editoras ON t.editora = id_editora WHERE t.autor = :valP1 OR t.autor2 = :valP2 OR t.autor3 = :valP3 ORDER BY titulo LIMIT ' . $tpfr . ',' .  $rpp;
                
                	$lul1 = $conn->prepare($sql1);
                	$lul1 -> bindValue(":valP1", $valP);
                	$lul1 -> bindValue(":valP2", $valP);
                	$lul1 -> bindValue(":valP3", $valP);

                	$sql10 = "SELECT * FROM obras WHERE autor = :valP1 OR autor2 = :valP2 OR autor3 = :valP3";
                	$lul10 = $conn -> prepare($sql10);
                	$lul10 -> bindValue(":valP1", $valP);
                	$lul10 -> bindValue(":valP2", $valP);
                	$lul10 -> bindValue(":valP3", $valP);

                	$lul10 -> execute();
					
					$xi = $lul10 -> rowCount();                	
                }else{
	               	$sql1='SELECT t.id_obra, t.autor, t.link_img,t.genero, t.genero2,t.titulo,t.capasVar, t.qt, editoras.nomEdi,t.status, t.editora, g1.nomGen AS gen1, g2.nomGen AS gen2, a1.nomAut AS aut1, a2.nomAut AS aut2, a3.nomAut AS aut3 FROM obras t
	                    INNER JOIN generos g1 ON t.genero = g1.id_genero 
	                    INNER JOIN generos g2 ON t.genero2 = g2.id_genero 
	                    INNER JOIN autor a1 ON t.autor = a1.id_autor
	                    INNER JOIN autor a2 ON t.autor2 = a2.id_autor
	                    INNER JOIN autor a3 ON t.autor3 = a3.id_autor
	                    INNER JOIN editoras ON t.editora = id_editora ORDER BY titulo LIMIT ' . $tpfr . ',' .  $rpp;
	                
	                $lul1 = $conn->prepare($sql1);

	                $sql10 = "SELECT * FROM obras";
                	$lul10 = $conn -> prepare($sql10);

                	$lul10 -> execute();
					
					$xi = $lul10 -> rowCount();    
	            }

				$lul1 -> execute();
				$counVal = $lul1 -> rowCount();
				$a = 1;

					foreach($lul1 as $row) {

	                    if ($a == 1) {
		                    ?>
		                        <div class="row">
		                            <div class="col-md-4">
		                                <div class="sermon-wrap ftco-animate">                           
		                                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url('<?php echo $row['link_img']; ?>');">
		                                        
		                                        <div class="text-content p-4 text-center" style="background-color: white;">
		                                            <span style="color: black;">Escrito por:</span>
		                                                <h3 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;">
		                                                	<a  class='text text-dark' href="AlunoLogado.php?aut_pesq=<?php echo $row['autor']; ?>&page=1"><?php echo $row['aut1']; ?></a>	
		                                                </h3>
		                                                
		                                                <p class="" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;">
		                                                    
		                                                    <a href='AlunoLogado.php?gen_pesq=<?php echo $row['genero']; ?>&page=1' class='text text-dark'><?php echo $row['gen1'];?></a>
		                                                                         | 
		                                                    <a href='AlunoLogado.php?gen_pesq=<?php echo $row['genero2']; ?>&page=1' class='text text-dark'><?php echo $row['gen2'];?></a>        
		                                                </p>
		                                        </div>
		                                    </div>
		                                    <div class="text pt-3 text-center">
		                                        <h2 class="mb-0" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;"><a href="livro.php?livro=<?php echo $row['id_obra']; ?>"><?php echo $row['titulo']; ?></a></h2>
		                                    </div>
		                                </div>
		                            </div>

		                    <?php
		                    
		                    $a = $a + 1;
	                    
	                    }elseif ($a == 2) {
		                    ?>
		                        <div class="col-md-4">
		                            <div class="sermon-wrap ftco-animate">
		                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url('<?php echo $row['link_img']; ?>');">

		                                    <div class="text-content p-4 text-center" style="background-color: white;">
		                                            <span style="color: black;">Escrito por:</span>
		                                                <h3 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;">
		                                                	<a  class='text text-dark' href="AlunoLogado.php?aut_pesq=<?php echo $row['autor']; ?>&page=1"><?php echo $row['aut1']; ?></a>	
		                                                </h3>
		                                                
		                                                <p class="" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;">
		                                                    
		                                                    <a href='AlunoLogado.php?gen_pesq=<?php echo $row['genero']; ?>&page=1' class='text text-dark'><?php echo $row['gen1'];?></a>
		                                                                         | 
		                                                    <a href='AlunoLogado.php?gen_pesq=<?php echo $row['genero2']; ?>&page=1' class='text text-dark'><?php echo $row['gen2'];?></a>        
		                                                </p>
		                                        </div>
		                                </div>
		                                <div class="text pt-3 text-center">
		                                    <h2 class="mb-0" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;"><a href="livro.php?livro=<?php echo $row['id_obra']; ?>"><?php echo $row['titulo']; ?></a></h2>
		                                </div>
		                            </div>
		                        </div>
		                    
		                    <?php
		                    
		                    $a = $a + 1;
	                    
	                    }else{
		                    ?>  
		                       	<div class="col-md-4">
		                            <div class="sermon-wrap ftco-animate">
		                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url('<?php echo $row['link_img']; ?>');">

		                                    <div class="text-content p-4 text-center" style="background-color: white;">
		                                            <span style="color: black;">Escrito por:</span>
		                                                <h3 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;">
		                                                	<a  class='text text-dark' href="AlunoLogado.php?aut_pesq=<?php echo $row['autor']; ?>&page=1"><?php echo $row['aut1']; ?></a>	
		                                                </h3>
		                                                
		                                                <p class="" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;">
		                                                    
		                                                    <a href='AlunoLogado.php?gen_pesq=<?php echo $row['genero']; ?>&page=1' class='text text-dark'><?php echo $row['gen1'];?></a>
		                                                                         | 
		                                                    <a href='AlunoLogado.php?gen_pesq=<?php echo $row['genero2']; ?>&page=1' class='text text-dark'><?php echo $row['gen2'];?></a>        
		                                                </p>
		                                        </div>
		                                </div>
		                                <div class="text pt-3 text-center">
		                                    <h2 class="mb-0" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;"><a href="livro.php?livro=<?php echo $row['id_obra']; ?>"><?php echo $row['titulo']; ?></a></h2>
		                                </div>
		                            </div>
		                        </div>
		                		</div>
		                		
		                		<br>
		                	<?php
		                	
		                	$a = 1;
	                	}                  
	                }

                echo "</div>";

                $uuu = ceil($xi/$rpp);

	            if($counVal == 0){
	            	echo "
	            		<center>
	            			<h3 class='heading'>Não existe resultado para a pesquisa <span>".$valP."</span></h3>
	            			<h3 class='mt-4'><a style='color: blue;' href='AlunoLogado.php?page=1#sermons-section' class='heading'>Retornar</a></h3>
	            		</center>
	            	";
	            }else{
	            	if($tipP == "genero"){
	            		$geral = "AlunoLogado.php?gen_pesq=".$valP."&";
	            	}elseif ($tipP == "autor") {
	            		$geral = "AlunoLogado.php?aut_pesq=".$valP."&";
	            	}elseif($tipP == "pesquisa"){
	            		$geral = "AlunoLogado.php?text_pesq=".$valP."&";
	            	}else{
	            		$geral = "AlunoLogado.php?";
	            	}
	            	
	                ?>
	                <div style="overflow-x: scroll; width: 100%;"><center>
	                  	<ul class="pagination" style="width: 100%;">
	                	<?php
	                		if ($_GET['page'] == 1) {
	                    ?>
		                    	<li class="page-item disabled ml-4"><a class="page-link " href="<?php echo $geral; ?>page=1#sermons-section">Home</a></li>

		                    	<li class="page-item disabled"><a class="page-link " href="<?php echo $geral; ?>page=<?php echo $_GET['page'] - 1; ?>#sermons-section"><<</a></li>
	                    <?php
	                		}else{
	                    ?>
			                    <li class="page-item"><a class="page-link ml-4" href="<?php echo $geral; ?>page=1#sermons-section">Home</a></li>
			                    <li class="page-item"><a class="page-link " href="<?php echo $geral; ?>page=<?php echo $_GET['page'] - 1; ?>#sermons-section"><<</a></li>
	                    <?php
	                		}
	                    

	                	if($uuu < 10){
	                		for ($page = 1; $page <= $uuu; $page++) { 
	                			if ($page == $_GET['page']) {
	                            	echo '<li class="page-item active"><a class="page-link" href="'.$geral.'page='.$page.'#sermons-section">' . $page . '</a></li>&nbsp;';
	                        	}else{    
	                            	echo '<li class="page-item"><a class="page-link" href="'.$geral.'page='.$page.'#sermons-section">' . $page . '</a></li>&nbsp;';
	                        	}

	                		}
	                	}elseif($_GET['page'] + 9 > $nop){

	                    	for ($page = $nop-9; $page <= $nop; $page++) {
	                        	if ($page == $_GET['page']) {
	                            	echo '<li class="page-item active"><a class="page-link" href="'.$geral.'page='.$page.'#sermons-section">' . $page . '</a></li>&nbsp;';
	                        	}else{    
	                            	echo '<li class="page-item"><a class="page-link" href="'.$geral.'page='.$page.'#sermons-section">' . $page . '</a></li>&nbsp;';
	                        	}
	                    	}

	                	}elseif($_GET['page'] >= 10){

		                    for ($page = $_GET['page'] - 1; $page <= $_GET['page'] + 8; $page++) {
		                        if ($page == $_GET['page']) {
		                            echo '<li class="page-item active"><a class="page-link" href="'.$geral.'page='.$page.'#sermons-section">' . $page . '</a></li>&nbsp;';
		                        }else{    
		                            echo '<li class="page-item"><a class="page-link" href="'.$geral.'page='.$page.'#sermons-section">' . $page . '</a></li>&nbsp;';
		                        }
		                    }

		                }else{

		                    for ($page = 1; $page <= 10; $page++) {
		                        if ($page == $_GET['page']) {
		                            echo '<li class="page-item active"><a class="page-link" href="'.$geral.'page='.$page.'#sermons-section">' . $page . '</a></li>&nbsp;';
		                        }else{    
		                            echo '<li class="page-item"><a class="page-link" href="'.$geral.'page='.$page.'#sermons-section">' . $page . '</a></li>&nbsp;';
		                        }
		                    }

	                	}


	                	if ($_GET['page'] == $uuu) {
	                    ?>
			                    <li class="page-item disabled"><a class="page-link " href="<?php echo $geral; ?>page=<?php echo $_GET['page'] + 1; ?>">>></a></li>
			                    <li class="page-item disabled"><a class="page-link mr-3" href="<?php echo $geral; ?>page=<?php echo $nop; ?>">Last</a></li>
	                    <?php
	                }else{
	                   ?>
	                    		<li class="page-item"><a class="page-link " href="<?php echo $geral; ?>page=<?php echo $_GET['page'] + 1; ?>">>></a></li>
	                    		<li class="page-item"><a class="page-link mr-3" href="<?php echo $geral; ?>page=<?php echo $nop; ?>">Last</a></li>
	                		</ul>
	                	<?php
	                }
	                	?>
	            	</center>
	        		</div>
	                    <?php
	            }                
				
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		
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

		public function att(){
			$con = new Conexao();
			$conn = $con->getConection();

			try {
				$sql = "SELECT * FROM emprestimos INNER JOIN usuarios ON idUsu = matricula";
				$lul = $conn -> prepare($sql);

				$lul -> execute();

				$ar = $lul -> fetchAll();

				foreach ($ar as $value) {
					if($value['ven_dia'] == date('z')){
						$sql1 = "UPDATE emprestimos SET STATUS = :stt WHERE id_emp = :emp";
						$lul1 = $conn -> prepare($sql1);
						$lul1 -> bindValue(':stt', 2);
						$lul1 -> bindValue(':emp', $value['id_emp']);

						$lul1 -> execute();

						$sql2 = "UPDATE usuarios SET stt = :stt WHERE matricula = :usu";
						$lul2 = $conn -> prepare($sql2);
						$lul2 -> bindValue(':stt', 3);
						$lul2 -> bindValue(':usu', $value['idUsu']);

						$lul2 -> execute();						
					}
				}

			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		}
	}


/*
			$con = new Conexao();
			$conn = $con -> getConection();

			try {
				
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
*/
?>