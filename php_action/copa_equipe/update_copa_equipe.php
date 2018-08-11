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
	$ano_copa = $_POST['ano_copa'];
	$cod_equipe = $_POST['cod_equipe'];	
	$sql = "UPDATE copa_equipe SET  cod_equipe= '$cod_equipe' WHERE ano_copa= {$ano_copa} and cod_equipe= {$cod_equipe}";
	if($connect->query($sql) === TRUE) {
		echo "<h2><br><br><center>Atualização sem sucesso no Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../copa_equipe/update_copa_equipe.php'><button type='button'>sair</button></a></center>";
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