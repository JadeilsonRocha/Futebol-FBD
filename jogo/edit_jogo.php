<?php 

require_once '../php_action/db_connect.php';

if($_GET['numero_jogo']) {
	$numero_jogo = $_GET['numero_jogo'];

	$sql = "SELECT * FROM jogo WHERE numero_jogo = {$numero_jogo}";
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
<script>alert('Atenção ao ATUALIZAR! Um jogo será atualizado juntamente com os registros que tiverem uma restrição de integridade ON UPDATE. Nesse caso especifico não há restrições em nenhuma tabela!')</script>
<h1> <center> Menu: Editar Jogo  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/jogo/update_jogo.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Número do Jogo</th>
				<td><br><input type="hidden" name="numero_jogo" placeholder="Número do jogo" value="<?php echo $data['numero_jogo'] ?>"/></td>
			</tr>		
			<tr>
				<th>Estádio do Jogo</th>
				<td><br><input type="text" name="estadio_jogo" placeholder="Estádio do jogo" value="<?php echo $data['estadio_jogo'] ?>"/></td>
			</tr>
			<tr>
				<th>Data do Jogo</th>
				<td><br><input type="date" name="data_jogo" placeholder="Data do jogo" value="<?php echo $data['data_jogo'] ?>"/></td>
				
			</tr>
			<tr>
				<th>&nbsp; &nbsp;Hora do Jogo &nbsp; &nbsp; &nbsp; &nbsp; </th>
				<td><br><input type="Time" name="hora_jogo" placeholder="Hora do jogo" value="<?php echo $data['hora_jogo'] ?>"/></td>
			</tr>

				<th>Código da Equipe 1</th>
				<td><br><input type="number_format" name="cod_equipe1" placeholder="Código da equipe 1" value="<?php echo $data['cod_equipe1'] ?>"/></td>
			</tr>
				<tr>
				<th>Gols da Equipe 1</th>
				<td><br><input type="number_format" name="gols_equipe1" placeholder="Número de gols da equipe 1" value="<?php echo $data['gols_equipe1'] ?>"/></td>
			</tr>
				<tr>
				<th>Código da Equipe 2</th>
				<td><br><input type="number_format" name="cod_equipe2" placeholder="Código da equipe 2" value="<?php echo $data['cod_equipe2'] ?>"/></td>
			</tr>
				<tr>
				<th>&emsp; &emsp; Gols da Equipe 2 &emsp; &emsp;</th>
				<td><br><input type="number_format" name="gols_equipe2" placeholder="Número de gols da equipe 2 " value="<?php echo $data['gols_equipe2'] ?>"  /></td>
			</tr>
	
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../jogo/update_jogo.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>