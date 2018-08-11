<?php 

require_once '../php_action/db_connect.php';

if($_GET['cod_pessoa']) {
	$cod_pessoa = $_GET['cod_pessoa'];
	$sql = "SELECT * FROM pessoa WHERE cod_pessoa = {$cod_pessoa}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../php_action/stylesheet.css"/>
	<title>Futebol ONE</title>

	<style type="text/css">
		body{
			background: #DCDCDC;
		}
		fieldset {
			margin: 35px;
			margin-top: 110px;
			width: 93%;
			height: 90%;
		}

		table tr th {
			align: right;
			valiagn: right;
			padding-top: 15px;
			margin-top: 0px;
		}
		button{
				width:85%;
				height: 30px;
				font-size: 11pt;
				color: white;
				background: blue;
		}
			
	</style>

</head>
<body>
<script>alert('Atenção ao ATUALIZAR! Uma pessoa será atualizada juntamente com os registros que tiverem uma restrição de integridade ON UPDATE. Nesse caso especifico há restrições nas tabelas TREINADOR, EQUIPE, JOGADOR!')</script>

<h1> <center> Menu: Editar Pessoa  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/pessoa/update_pessoa.php" method="post">
		<table cellspacing="2" cellpadding="3">
			</tr>
				<th>Código da Pessoa</th>
				<td><br><input type="hidden" name="cod_pessoa" placeholder="Código da pessoa" value="<?php echo $data['cod_pessoa'] ?>"/></td>
			</tr>		
			<tr>
				<th>Nome da Pessoa</th>
				<td><br><input type="text" name="nome_pessoa" placeholder="Nome da pessoa" value="<?php echo $data['nome_pessoa'] ?>"/></td>
			</tr>
			<tr>
				<th>Data de nascimento da Pessoa</th>
				<td><br><input type="date" name="data_nascimento" placeholder="Data de nascimento" value="<?php echo $data['data_nascimento'] ?>"/></td>
			</tr>
				<th>Sigla do País da Pessoa</th>
				<td><br><input type="text" name="sigla_pais_Nasc" placeholder="Sigla do país de Nascimento" value="<?php echo $data['sigla_pais_Nasc'] ?>"/></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../pessoa/update_pessoa.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>