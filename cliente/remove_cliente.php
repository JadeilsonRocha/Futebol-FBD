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

if($_GET['ano_copa']) {
	$ano_copa = $_GET['ano_copa'];
	$sql = "SELECT * FROM copa WHERE ano_copa = {$ano_copa}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();
?>
<br><br><br> &emsp; &emsp;
<h2><center> Tem certeza de que gostaria de apagar? </center></h2>
<form action="../php_action/copa/remove_copa.php" method="post">
<script>alert('Atenção, ao DELETAR uma copa será apagado automaticamente os registros que estiverem em uma tabela cujo tenha uma restrição de integridade ON DELETE. Nesse caso especifico há uma restrição na tabela COPA_EQUIPE!')</script>
	<input type="hidden" name="ano_copa" value="<?php echo $data['ano_copa'] ?>" />
	<center><button type="submit">Apagar</button></center><br>
	<center><a href="delete_copa.php"><button type="button">Voltar</button></a></center>
</form>

</body>
</html>

<?php
}
?>