<?php require_once '../php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	
	<link type="text/css" rel="stylesheet" href="../php_action/stylesheet.css"/>
	<title>Farmácia Popular</title>

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
<h1> <center> Área do Cliente  </center> </h1>
<form method="post" action="../index.php">
	<fieldset>
		<img src="../imagem_menu_cliente.png"  align="right"
		<legend> <h3> &nbsp; &nbsp; Selecione uma Opção: </legend>
		<br>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="./update_cliente.php"><button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Atualizar</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="./delete_cliente.php"> <button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Deletar</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="./create_cliente.php"><button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Inserir</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="./view_cliente.php"><button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Visualizar</button></a>
		</h3>
		<br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</fieldset>
</form>

</body>
</html>