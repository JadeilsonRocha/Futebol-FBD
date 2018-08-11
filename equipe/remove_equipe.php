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
	<script>alert('Atenção, ao DELETAR uma equipe será apagado automaticamente os dados que estiverem em uma tabela cujo tenha uma restrição de integridade ON DELETE. Nesse caso especifico há restrição nas tabelas JOGO, COPA_EQUIPE!')</script>
	$sql = "SELECT * FROM equipe WHERE cod_equipe = {$cod_equipe}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();

	$connect->close();
?>
<br><br><br> &emsp; &emsp;
<h2><center> Tem certeza de que gostaria de apagar? </center></h2>
<form action="../php_action/equipe/remove_equipe.php" method="post">

	<input type="hidden" name="cod_equipe" value="<?php echo $data['cod_equipe'] ?>" />
	<center><button type="submit">Apagar</button></center><br>
	<center><a href="delete_equipe.php"><button type="button">Voltar</button></a></center>
</form>

</body>
</html>

<?php
}
?>