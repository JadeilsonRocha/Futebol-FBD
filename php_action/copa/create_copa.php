<?php 

require_once '../db_connect.php';

if($_POST) {
	$ano_copa = $_POST['ano_copa'];
	$data_inicio = $_POST['data_inicio_copa'];
	$data_fim = $_POST['data_fim_copa'];
	$cidade = $_POST['cidade_abertura'];
	
	if (strlen($ano_copa) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../copa/create_copa.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sql = "INSERT INTO copa (ano_copa, data_inicio_copa, data_fim_copa, cidade_abertura) VALUES ('$ano_copa', '$data_inicio', '$data_fim', '$cidade')";
		if($connect->query($sql) === TRUE) {
			echo "<p>New Record Successfully Created</p>";
			echo "<a href='../../copa/create_copa.php'><button type='button'>Sair</button></a>";
			echo "<a href='../../copa/crud_copa.php'><button type='button'>Home</button></a>";
		} else {
			$sql = "SELECT * FROM copa WHERE ano_copa = {$ano_copa}";
			$result = $connect->query($sql);
			if($result->num_rows > 0){
				echo "<h2> <br><br> <center> Erro, copa já existente! </center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../copa/create_copa.php'><button type='button'>Voltar</button></a>";
			}else {
				echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../copa/create_copa.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>