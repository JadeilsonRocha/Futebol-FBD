<?php 

require_once '../php_action/db_connect.php';

if($_GET['ano_copa']) {
	$ano_copa = $_GET['ano_copa'];
	$sql = "SELECT * FROM copa WHERE ano_copa = {$ano_copa}";
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
<script>alert('Atenção ao ATUALIZAR! Uma copa será atualizada juntamente com os registros que tiverem uma restrição de integridade ON UPDATE. Nesse caso especifico há uma restrição na tabela COPA_EQUIPE!')</script>

<h1> <center> Menu: Editar Copa  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/copa/update_copa.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Ano da Copa</th>
				<td><br><input type="number_format" readonly="readonly" name="ano_copa" placeholder="" value="<?php echo $data['ano_copa'] ?>" /></td>
			</tr>		
			<tr>
				<th>Inicio da Copa</th>
				<td><br><input type="date" name="data_inicio_copa" placeholder="Data de Inicio da Copa" value="<?php echo $data['data_inicio_copa'] ?>" /></td>
			</tr>
			<tr>
				<th>Final da Copa</th>
				<td><br><input type="date" name="data_fim_copa" placeholder="Data do Fim da Copa" value="<?php echo $data['data_fim_copa'] ?>" /></td>
			</tr>
			<tr>
				<th>&nbsp; &nbsp; Cidade de Abertura &nbsp; &nbsp; &nbsp; &nbsp; </th>
				<td><br><input type="text" name="cidade_abertura" placeholder="Cidade de Abertura" value="<?php echo $data['cidade_abertura'] ?>" /></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../copa/update_copa.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>