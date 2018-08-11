<?php
#maneiras de referenciar um pasta
/*Cada um desses muda a forma como um diretório é referenciado.

Suponhamos um arquivo teste.txt:

/teste.txt: significa que o arquivo teste.txt está na pasta raiz do sistema;

./teste.txt: significa que o arquivo teste.txt está na mesma pasta que o script está rodando;

../teste.txt: significa que o arquivo teste.txt está na pasta imediatamente acima da pasta em que o script PHP está rodando
*/
?>
<?php require_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="php_action/stylesheet.css"/>
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
<h1> <center> Sistema Geral "Futebol One" </center> </h1>
<form method="post" action="">
	<fieldset>
		<img src="futbolista.gif" align="right"
		<legend> <h3> &nbsp; &nbsp; Selecione uma Opção:</legend>
		<br>
		<br>
		<br>		
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="copa/crud_copa.php"><button class="MeuInput" type="button">__Copa__ </button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="jogo/crud_jogo.php"> <button class="MeuInput" type="button">___Jogo___</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="pais/crud_pais.php"><button class="MeuInput" type="button">____Pais____</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="equipe/crud_equipe.php"><button class="MeuInput" type="button">____Equipe____</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="pessoa/crud_pessoa.php"><button class="MeuInput" type="button">_____Pessoa_____</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="jogador/crud_jogador.php"><button class="MeuInput" type="button">______Jogador______</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="treinador/crud_treinador.php"><button class="MeuInput" type="button">______Treinador______</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="copa_equipe/crud_copa_equipe.php"><button class="MeuInput" type="button">_____Copa-Equipe_____</button></a>
		<br>
		</h3><br>
	</fieldset>
</form>

</body>
</html>