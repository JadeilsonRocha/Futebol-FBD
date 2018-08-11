<?php 

require_once '../php_action/db_connect.php';

if($_GET['cod_pessoa']) {
	$cod_pessoa = $_GET['cod_pessoa'];
	$sql = "SELECT * FROM jogador WHERE cod_pessoa = '$cod_pessoa'";
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
<script>alert('Atenção ao ATUALIZAR! Um jogador será atualizado juntamente com os registros que tiverem uma restrição de integridade ON UPDATE. Nesse caso especifico não há restrições em nenhuma tabela!')</script>
<h1> <center> Menu: Editar um Jogador  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/jogador/update_jogador.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Código do Jogador</th>
				<td><br><input type="hidden" name="cod_pessoa" placeholder="Código do jogador" value="<?php echo $data['cod_pessoa'] ?>"/></td>
			</tr>		
			<tr>
				<th>&emsp; &emsp; Código da Equipe &emsp; &emsp;</th>
				<td><br><input type="number_format" name="cod_equipe" placeholder="Código da equipe" value="<?php echo $data['cod_equipe'] ?>"/></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../jogador/update_jogador.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>