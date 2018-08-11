<?php 

require_once '../db_connect.php';

if($_POST) {
	$cod_pessoa = $_POST['cod_pessoa'];
	$cod_equipe = $_POST['cod_equipe'];

	if (strlen($cod_pessoa) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../jogador/create_jogador.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sql = "INSERT INTO jogador (cod_pessoa, cod_equipe) VALUES ('$cod_pessoa', '$cod_equipe')";
		if($connect->query($sql) === TRUE) {
			echo "<p>Novo jogador inserido com sucesso.</p>";
			echo "<a href='../../jogador/create_jogador.php'><button type='button'>Sair</button></a>";
			echo "<a href='../../jogador/crud_jogador.php'><button type='button'>Home</button></a>";
		} else {
			$sql = "SELECT * FROM jogador WHERE cod_pessoa = {$cod_pessoa}";
			$result = $connect->query($sql);
			if($result->num_rows > 0){
				echo "<h2> <br><br> <center> Erro, jogador já existente em uma equipe! </center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../jogador/create_jogador.php'><button type='button'>Voltar</button></a>";
			}else {
				echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../jogador/create_jogador.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>