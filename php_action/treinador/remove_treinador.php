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
	$cod_treinador = $_POST['cod_treinador'];

	$sql = "DELETE FROM treinador WHERE `treinador`.`cod_treinador` = {$cod_treinador}";
	if($connect->query($sql) === TRUE) {
		echo "<h2><br><br><center>Removido com Sucesso do Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../treinador/delete_treinador.php'><button type='button'>Sair</button></a></center>";
	} else {
		echo "<script>alert('Error não será possível apagar esse trinador, pois ele tem uma relação com equipe!');</script>";
		echo "<center><a href='../../treinador/delete_treinador.php'><button type='button'>Sair</button></a></center>";
		# "Error não será possível apagar esse trinador, pois ele tem uma relação com equipe!" . $connect->error;
	}

	$connect->close();
}

?>
<div class= "position">
	<img src="../ball.gif" align="center"
</div>
</body>
</html>