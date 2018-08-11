<?php require_once '../php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	
	<link type="text/css" rel="stylesheet" href="../php_action/stylesheet.css"/>
	<title>Futebol ONE</title>

	<style type="text/css">
	body{
		background: #DCDCDC;
	}
		.manageMember {
			width: 60%;
			margin: auto;
		}

		table {
			width: 110%;
			margin-top: 20px;
		}
	</style>
	
</head>
<body>
<h1> <center> Menu: Copa_Equipe  </center> </h1>
<form method="post" action="../index.php">
	<fieldset>
		<img src="../Futbol.png"  align="right"
		<legend> <h3> &nbsp; &nbsp; Selecione uma Opção: </legend>
		<br>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="./update_copa_equipe.php"><button class="MeuInput" type="button">_Atualizar_ </button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="./delete_copa_equipe.php"> <button class="MeuInput" type="button">___Deletar___</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="./create_copa_equipe.php"><button class="MeuInput" type="button">_____Inserir_____</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="./view_copa_equipe.php"><button class="MeuInput" type="button">______Visualizar______</button></a>
		</h3>
		<br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</fieldset>
</form>

</body>
</html>