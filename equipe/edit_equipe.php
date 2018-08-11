<?php 

require_once '../php_action/db_connect.php';

if($_GET['cod_equipe']) {
	$cod_equipe = $_GET['cod_equipe'];
	$sql = "SELECT * FROM equipe WHERE cod_equipe = {$cod_equipe}";
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
<script>alert('Atenção ao ATUALIZAR! Uma equipe será atualizada juntamente com os registros que tiverem uma restrição de integridade ON UPDATE. Nesse caso especifico há restrições nas tabelas TREINADOR, COPA_EQUIPE, JOGADOR!')</script>
<h1> <center> Menu: Editar Equipe  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/equipe/update_equipe.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Código Equipe &nbsp; &nbsp; &nbsp; &nbsp; </th>
				<td><br><input type="number_format" name="cod_equipe" placeholder="" value="<?php echo $data['cod_equipe'] ?>" /></td>
			</tr>		
			<tr>
				<th>Sigla País &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
				<td><br><input type="text" name="sigla_pais" placeholder="Sigla País" value="<?php echo $data['sigla_pais'] ?>" /></td>
			</tr>
			<tr>
				<th>&nbsp; Código do Treinador</th>
				<td><br><input type="number_format" name="cod_treinador" placeholder="Código do Treinador" /></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../equipe/update_equipe.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>