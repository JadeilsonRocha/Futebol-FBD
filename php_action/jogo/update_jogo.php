<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background: #DCDCDC;
		}
			.position {
				width: 70%;
				margin: 80px 30px 30px 620px;
			}
			button{
				width:7%;
				height: 30px;
				font-size: 11pt;
				color: white;
				background: blue;
			}
		}
	</style>
	<title>Futebol ONE</title>
</head>
<body>

<?php 
require_once '../db_connect.php';

if($_POST) {
	$numero_jogo = $_POST['numero_jogo'];
	$estadio_jogo = $_POST['estadio_jogo'];
	$data_jogo = $_POST['data_jogo'];
	$hora_jogo = $_POST['hora_jogo'];
	$cod_equipe1 = $_POST['cod_equipe1'];
	$gols_equipe1 = $_POST['gols_equipe1'];
	$cod_equipe2 = $_POST['cod_equipe2'];
	$gols_equipe2 = $_POST['gols_equipe2'];

	$sql = "UPDATE jogo SET numero_jogo= '$numero_jogo', estadio_jogo= '$estadio_jogo', data_jogo= '$data_jogo', hora_jogo= '$hora_jogo', cod_equipe1= '$cod_equipe1', gols_equipe1= '$gols_equipe1', cod_equipe2= '$cod_equipe2', gols_equipe2= '$gols_equipe2'  WHERE numero_jogo = {$numero_jogo}";
	if($connect->query($sql) === TRUE) {
		echo "<h2><br><br><center>Atualizado com Sucesso no Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../jogo/update_jogo.php'><button type='button'>sair</button></a></center>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}
	$connect->close();
}
?>
<div class= "position">
	<img src="../ball.gif" align="center"
</div>
</body>
</html>