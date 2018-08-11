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
	</style>
	<title>Futebol ONE</title>
</head>
<body>

<?php 

require_once '../db_connect.php';

if($_POST) {
	$cod_equipe = $_POST['cod_equipe'];
	$ano_copa= $_POST['ano_copa'];
	$sql = "DELETE FROM copa_equipe WHERE `copa_equipe`.`cod_equipe` = {$cod_equipe} and `copa_equipe`.`ano_copa` = {$ano_copa} ";
	if($connect->query($sql) === TRUE) {
		echo "<h2><br><br><center>Removido com Sucesso do Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../copa_equipe/delete_copa_equipe.php'><button type='button'>Sair</button></a></center>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();
}

?>
<div class= "position">
	<img src="../ball.gif" align="center"
</div>
</body>
</html>