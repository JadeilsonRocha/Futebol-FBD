<?php 

require_once '../db_connect.php';

if($_POST) {
	$cod_equipe = $_POST['cod_equipe'];
	$sigla_pais_equipe = $_POST['sigla_pais_equipe'];
	$cod_treinador = $_POST['cod_treinador'];
	
	if (strlen($cod_equipe) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../equipe/create_equipe.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sql = "INSERT INTO equipe (cod_equipe, sigla_pais, cod_treinador) VALUES ('$cod_equipe', '$sigla_pais_equipe', '$cod_treinador')";
		if($connect->query($sql) === TRUE) {
			echo "<p>Nova Equipe Criada com Sucesso!</p>";
			echo "<a href='../../equipe/create_equipe.php'><button type='button'>Sair</button></a>";
			echo "<a href='../../equipe/crud_equipe.php'><button type='button'>Home</button></a>";
		} else {
			$sql = "SELECT * FROM copa WHERE cod_equipe = {$cod_equipe} and ano_copa_equipe = {$ano_copa_equipe}";
			$result = $connect->query($sql);
			if($result->num_rows > 0){
				echo "<h2> <br><br> <center> Erro, equipe já existente! </center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../equipe/create_equipe.php'><button type='button'>Voltar</button></a>";
			}else {
				echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../equipe/create_equipe.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>