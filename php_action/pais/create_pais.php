<?php 

require_once '../db_connect.php';

if($_POST) {
	$sigla_pais = $_POST['sigla_pais'];
	$nome_pais = $_POST['nome_pais'];

	if (strlen($sigla_pais) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../pais/create_pais.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sql = "INSERT INTO pais (sigla_pais, nome_pais) VALUES ('$sigla_pais', '$nome_pais')";
		if($connect->query($sql) === TRUE) {
			echo "<p>Novo dado inserido com sucesso.</p>";
			echo "<a href='../../pais/create_pais.php'><button type='button'>Sair</button></a>";
			echo "<a href='../../pais/crud_pais.php'><button type='button'>Home</button></a>";
		} else {
			$sql = "SELECT * FROM pais WHERE sigla_pais = {$sigla_pais}";
			$result = $connect->query($sql);
			if($result->num_rows > 0){
				echo "<h2> <br><br> <center> Erro, país já existente! </center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../pais/create_pais.php'><button type='button'>Voltar</button></a>";
			}else {
				echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../pais/create_pais.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>