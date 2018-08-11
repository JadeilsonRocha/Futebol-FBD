<?php 

require_once '../db_connect.php';

if($_POST) {
	$numero_jogo = $_POST['numero_jogo'];
	$estadio_jogo = $_POST['estadio_jogo'];
	$data_jogo = $_POST['data_jogo'];
	$hora_jogo = $_POST['hora_jogo'];
	$cod_equipe1 = $_POST['cod_equipe1'];
	$gols_equipe1 = $_POST['gols_equipe1'];
	$cod_equipe2 = $_POST['cod_equipe2'];
	$gols_equipe2 = $_POST['gols_equipe2'];
	
	if (strlen($numero_jogo) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../jogo/create_jogo.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sql = "INSERT INTO jogo (numero_jogo, estadio_jogo, data_jogo, hora_jogo, cod_equipe1, gols_equipe1, cod_equipe2, gols_equipe2) VALUES ('$numero_jogo', '$estadio_jogo', '$data_jogo', '$hora_jogo', '$cod_equipe1', '$gols_equipe1', '$cod_equipe2', '$gols_equipe2')";
		if($connect->query($sql) === TRUE) {
			echo "<p>Novo dado inserido com sucesso.</p>";
			echo "<a href='../../jogo/create_jogo.php'><button type='button'>Sair</button></a>";
			echo "<a href='../../jogo/crud_jogo.php'><button type='button'>Home</button></a>";
		} else {
			$sql = "SELECT * FROM jogo WHERE numero_jogo = {$numero_jogo}";
			$result = $connect->query($sql);
			if($result->num_rows > 0){
				echo "<h2> <br><br> <center> Erro, jogo já existente! </center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../jogo/create_jogo.php'><button type='button'>Voltar</button></a>";
			}else {
				echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../jogo/create_jogo.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>