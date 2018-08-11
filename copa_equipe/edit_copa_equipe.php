<?php 

require_once '../php_action/db_connect.php';

if($_GET['ano_copa'] AND $_GET['cod_equipe']) {
	$ano_copa = $_GET['ano_copa'];
	$cod_equipe = $_GET['cod_equipe'];
	$sql = "SELECT * FROM copa_equipe WHERE ano_copa = {$ano_copa} and cod_equipe= {$cod_equipe}";
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
<h1> <center> Menu: Editar Copa_Equipe  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/copa_equipe/update_copa_equipe.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Ano da Copa</th>
				<td><br><input type="number_format" readonly="readonly"  name="ano_copa" placeholder="Ano da copa" value="<?php echo $data['ano_copa'] ?>" /></td>
			</tr>		
			<tr>
				<th>Código da Copa_Equipe</th>
				<td><br><input type="number_format" readonly="readonly" name="cod_equipe" placeholder="Código da equipe" value="<?php echo $data['cod_equipe'] ?>" /></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
				<script>alert('Atenção não será possível atualizar esses atributos, pois eles são chaves primárias e estrangeiras!')</script>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../copa_equipe/update_copa_equipe.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>