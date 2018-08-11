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

if($_GET['numero_jogo']) {
	$numero_jogo = $_GET['numero_jogo'];

	$sql = "SELECT * FROM jogo WHERE numero_jogo = {$numero_jogo}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();

	$connect->close();
?>
<br><br><br> &emsp; &emsp;
<h2><center> Tem certeza de que gostaria de apagar? </center></h2>
<form action="../php_action/jogo/remove_jogo.php" method="post">
	<script>alert('Atenção, ao DELETAR um jogo será apagado automaticamente os dados que estiverem em uma tabela cujo tenha uma restrição de integridade ON DELETE. Nesse caso especifico há uma nenhuma restrição em outras tabelas!')</script>
	<input type="hidden" name="numero_jogo" value="<?php echo $data['numero_jogo'] ?>" />
	<center><button type="submit">Apagar</button></center><br>
	<center><a href="delete_jogo.php"><button type="button">Voltar</button></a></center>
</form>

</body>
</html>

<?php
}
?>