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
<h1> <center> Menu: Inserir Jogo  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/jogo/create_jogo.php" method="post">
		<table cellspacing="1" cellpadding="1">
			<tr>
				<th>Número do Jogo</th>
				<td><br><input type="number_format" name="numero_jogo" placeholder="Número do jogo" /></td>
			</tr>		
			<tr>
				<th>Estádio do Jogo</th>
				<td><br><input type="text" name="estadio_jogo" placeholder="Estádio do jogo" /></td>
			</tr>
			<tr>
				<th>Data do Jogo</th>
				<td><br><input type="date" name="data_jogo" placeholder="Data do jogo" /></td>
				
			</tr>
			<tr>
				<th>&nbsp; &nbsp;Hora do Jogo &nbsp; &nbsp; &nbsp; &nbsp; </th>
				<td><br><input type="Time" name="hora_jogo" placeholder="Hora do jogo" /></td>
			</tr>

				<th>Código da Equipe 1</th>
				<td><br><input type="number_format" name="cod_equipe1" placeholder="Código da equipe 1" /></td>
			</tr>
				<tr>
				<th>Gols da Equipe 1</th>
				<td><br><input type="number_format" name="gols_equipe1" placeholder="Número de gols da equipe 1" /></td>
			</tr>
				<tr>
				<th>Código da Equipe 2</th>
				<td><br><input type="number_format" name="cod_equipe2" placeholder="Código da equipe 2" /></td>
			</tr>
				<tr>
				<th>&emsp; &emsp; Gols da Equipe 2 &emsp; &emsp;</th>
				<td><br><input type="number_format" name="gols_equipe2" placeholder="Número de gols da equipe 2 " /></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
			<tr>
		</table>
	</form>
	<form method="post" action="../jogo/crud_jogo.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>
</fieldset>

</body>
</html>

