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
	$cod_treinador = $_POST['cod_treinador'];
	$cod_pessoa = $_POST['cod_pessoa'];
	
	$sql = "UPDATE treinador SET cod_treinador= 8, cod_pessoa= {$cod_pessoa} WHERE cod_treinador = {$cod_treinador}";
	if($connect->query($sql) === TRUE) {
		echo "<h2><br><br><center>Atualizado com Sucesso no Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../treinador/update_treinador.php'><button type='button'>sair</button></a></center>";
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