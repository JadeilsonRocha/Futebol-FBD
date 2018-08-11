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
<h1> <center> Menu: Treinador  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/treinador/create_treinador.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Código do Treinador</th>
				<td><br><input type="number_format" name="cod_treinador" placeholder="Código do treinador" /></td>
			</tr>		
			<tr>
				<th>&emsp; &emsp; Código da Pessoa &emsp; &emsp;</th>
				<td><br><input type="number_format" name="cod_pessoa" placeholder="Código da pessoa" /></td>
			</tr>		
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	<form method="post" action="../treinador/crud_treinador.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>
</fieldset>

</body>
</html>

