<?php 

require_once '../db_connect.php';

if($_POST) {
	$cod_pessoa = $_POST['cod_pessoa'];
	$nome_pessoa = $_POST['nome_pessoa'];
	$data_nascimento = $_POST['data_nascimento'];
	$sigla_pais_Nasc = $_POST['sigla_pais_Nasc'];
	
	if (strlen($cod_pessoa) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../pessoa/create_pessoa.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sql = "INSERT INTO pessoa (cod_pessoa, nome_pessoa, data_nascimento, sigla_pais_Nasc) VALUES ('$cod_pessoa', '$nome_pessoa', '$data_nascimento', '$sigla_pais_Nasc')";
		if($connect->query($sql) === TRUE) {
			echo "<p>Nova pessoa inserido no banco com Sucesso.</p>";
			echo "<a href='../../pessoa/create_pessoa.php'><button type='button'>Sair</button></a>";
			echo "<a href='../../pessoa/crud_pessoa.php'><button type='button'>Home</button></a>";
		} else {
			$sql = "SELECT * FROM pessoa WHERE cod_pessoa = {$cod_pessoa}";
			$result = $connect->query($sql);
			if($result->num_rows > 0){
				echo "<h2> <br><br> <center> Erro, pessoa já existente! </center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../pessoa/create_pessoa.php'><button type='button'>Voltar</button></a>";
			}else {
				echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../pessoa/create_pessoa.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>