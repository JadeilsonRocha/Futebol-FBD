<?php 

require_once '../db_connect.php';

if($_POST) {
	$ano_copa = $_POST['ano_copa'];
	$cod_equipe = $_POST['cod_equipe'];
	
	if (strlen($ano_copa) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../copa_equipe/create_copa_equipe.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sql = "INSERT INTO copa_equipe (ano_copa, cod_equipe) VALUES ('$ano_copa', '$cod_equipe')";
		if($connect->query($sql) === TRUE) {
			echo "<p>New Record Successfully Created</p>";
			echo "<a href='../../copa_equipe/create_copa_equipe.php'><button type='button'>Sair</button></a>";
			echo "<a href='../../copa_equipe/crud_copa_equipe.php'><button type='button'>Home</button></a>";
		} else {
			$sql = "SELECT * FROM copa_equipe WHERE cod_equipe = {$cod_equipe}";
			$result = $connect->query($sql);
			if($result->num_rows > 0){
				echo "<h2> <br><br> <center> Erro, copa_equipe já existente! </center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../copa_equipe/create_copa_equipe.php'><button type='button'>Voltar</button></a>";
			}else {
				echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../copa_equipe/create_copa_equipe.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>