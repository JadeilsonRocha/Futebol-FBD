<?php 

require_once '../db_connect.php';

if($_POST) {
	$cod_treinador = $_POST['cod_treinador'];
	$cod_pessoa = $_POST['cod_pessoa'];
	
	if (strlen($cod_treinador) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../treinador/create_treinador.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sql = "INSERT INTO treinador (cod_treinador, cod_pessoa) VALUES ('$cod_treinador', '$cod_pessoa')";
		if($connect->query($sql) === TRUE) {
			echo "<p>New Record Successfully Created</p>";
			echo "<a href='../../treinador/create_treinador.php'><button type='button'>Sair</button></a>";
			echo "<a href='../../treinador/crud_treinador.php'><button type='button'>Home</button></a>";
		} else {
			$sql = "SELECT * FROM treinador WHERE cod_treinador = {$cod_treinador}";
			$result = $connect->query($sql);
			if($result->num_rows > 0){
				echo "<h2> <br><br> <center> Erro, treinador já existente! </center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../treinador/create_treinador.php'><button type='button'>Voltar</button></a>";
			}else {
				echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../treinador/create_treinador.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>