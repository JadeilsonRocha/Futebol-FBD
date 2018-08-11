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
	$data_inicio = $_POST['data_inicio_copa'];
	$data_fim = $_POST['data_fim_copa'];
	$cidade = $_POST['cidade_abertura'];
	
	$ano_copa = $_POST['ano_copa'];
	
	$sql = "UPDATE copa SET ano_copa= '$ano_copa', data_inicio_copa= '$data_inicio', data_fim_copa= '$data_fim', cidade_abertura= '$cidade' WHERE ano_copa = {$ano_copa}";
	if($connect->query($sql) === TRUE) {
		echo "<h2><br><br><center>Atualizado com Sucesso no Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../copa/update_copa.php'><button type='button'>sair</button></a></center>";
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