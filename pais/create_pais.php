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
<h1> <center> Menu: Inserir um País  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/pais/create_pais.php" method="post">
		<table cellspacing="1" cellpadding="1">
			<tr>
				<th>Sigla do País </th>
				<td><br><input type="text" name="sigla_pais" placeholder="Sigla do país" /></td>
			</tr>		
			<tr>
				<th>&emsp; &emsp; Nome do País &emsp; &emsp;</th>
				<td><br><input type="text" name="nome_pais" placeholder="Nome do país" /></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
			<tr>
		</table>
	</form>
	<form method="post" action="../pais/crud_pais.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>
</fieldset>

</body>
</html>

