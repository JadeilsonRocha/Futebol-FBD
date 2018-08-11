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
<h1> <center> Menu: Inserir Pessoa  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/pessoa/create_pessoa.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Código da Pessoa</th>
				<td><br><input type="number_format" name="cod_pessoa" placeholder="Código da pessoa" /></td>
			</tr>		
			<tr>
				<th>Nome da Pessoa</th>
				<td><br><input type="text" name="nome_pessoa" placeholder="Nome da pessoa" /></td>
			</tr>
			<tr>
				<th>Data de nascimento da Pessoa</th>
				<td><br><input type="date" name="data_nascimento" placeholder="Data de nascimento" /></td>
			</tr>
				<th>&nbsp; &nbsp; Sigla do País da Pessoa &nbsp; &nbsp; &nbsp; &nbsp;</th>
				<td><br><input type="text" name="sigla_pais_Nasc" placeholder="Sigla do país de Nascimento" /></td>
			</tr>

			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	<form method="post" action="../pessoa/crud_pessoa.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>
</fieldset>

</body>
</html>

