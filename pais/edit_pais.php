<?php 

require_once '../php_action/db_connect.php';

if($_GET['sigla_pais']) {
	$sigla_pais = $_GET['sigla_pais'];
	$sql = "SELECT * FROM pais WHERE sigla_pais = '$sigla_pais'";
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
	<script>alert('Atenção ao ATUALIZAR, Um país será atualizado juntamente com os registros que tiverem uma restrição de integridade ON UPDATE. Nesse caso especifico há uma restrição na tabela PESSOA e EQUIPE!')</script>

<h1> <center> Menu: Editar País  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/pais/update_pais.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Sigla do País</th>
				<td><br><input type="hidden" name="sigla_pais" placeholder="Sigla do país" value="<?php echo $data['sigla_pais'] ?>"/></td>
			</tr>		
			<tr>
				<th>&emsp; &emsp; Nome do País &emsp; &emsp;</th>
				<td><br><input type="text" name="nome_pais" placeholder="Nome do país" value="<?php echo $data['nome_pais'] ?>"/></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../pais/update_pais.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>