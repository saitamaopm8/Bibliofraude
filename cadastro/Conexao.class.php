<?php 

	Class Conexao{

		public function getConection(){
			$local="mysql:host=localhost;dbname=biblioteca";
			$user="root";
			$pass="";

			try{
				$pdo = new PDO($local,$user,$pass,
					array(
                	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                	PDO::ATTR_PERSISTENT => false,
                	PDO::ATTR_EMULATE_PREPARES => false,
                	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',)
				);

				return $pdo;
			}catch(PDOException $ex){
				echo "erro= ". $ex->getMessage();

			}
			}

	}

?>