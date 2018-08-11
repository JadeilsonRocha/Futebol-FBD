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

if($_GET['cod_equipe']) {
	$cod_equipe = $_GET['cod_equipe'];
	$ano_copa= $_GET['ano_copa'];
	$sql = "SELECT * FROM copa_equipe WHERE cod_equipe = {$cod_equipe} and ano_copa={$ano_copa}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();
?>
<br><br><br> &emsp; &emsp;
<h2><center> Tem certeza de que gostaria de apagar? </center></h2>
<form action="../php_action/copa_equipe/remove_copa_equipe.php" method="post">
	<input type="hidden" name="cod_equipe" value="<?php echo $data['cod_equipe'] ?>" />
	<input type="hidden" name="ano_copa" value="<?php echo $data['ano_copa'] ?>" />
	<center><button type="submit">Apagar</button></center><br>
	<center><a href="delete_copa_equipe.php"><button type="button">Voltar</button></a></center>
</form>

</body>
</html>

<?php
}
?>