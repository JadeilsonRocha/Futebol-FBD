<!DOCTYPE html>
<html>
<head>
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
				width:7%;
				height: 30px;
				font-size: 11pt;
				color: white;
				background: blue;
		}
	</style>
</head>
<body>
<?php 

require_once '../php_action/db_connect.php';
if($_GET['cod_treinador']) {
	$cod_treinador = $_GET['cod_treinador'];
	$sql = "SELECT * FROM treinador WHERE cod_treinador = {$cod_treinador}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();
?>
<br><br><br> &emsp; &emsp;
	<script>alert('Atenção, ao DELETAR um trinador será apagado automaticamente os dados que estiverem em uma tabela cujo tenha uma restrição de integridade ON DELETE. Nesse caso especifico há restrição nas tabelas  EQUIPE!')</script>
<h2><center> Tem certeza de que gostaria de apagar? </center></h2>
<form action="../php_action/treinador/remove_treinador.php" method="post">
	<input type="hidden" name="cod_treinador" value="<?php echo $data['cod_treinador'] ?>" />
	<center><button type="submit">Apagar</button></center><br>
	<center><a href="delete_treinador.php"><button type="button">Voltar</button></a></center>
</form>
</body>
</html>
<?php
}
?>