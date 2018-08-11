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

if($_GET['cod_pessoa']) {
	$cod_pessoa = $_GET['cod_pessoa'];
	$sql = "SELECT * FROM pessoa WHERE cod_pessoa = {$cod_pessoa}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();
?>
<br><br><br> &emsp; &emsp;
<h2><center> Tem certeza de que gostaria de apagar? </center></h2>
<form action="../php_action/pessoa/remove_pessoa.php" method="post">
	<script>alert('Atenção, ao DELETAR uma pessoa será apagado automaticamente os dados que estiverem em uma tabela cujo tenha uma restrição de integridade ON DELETE. Nesse caso especifico há restrição nas tabelas TREINADOR, EQUIPE, JOGADOR!')</script>
	<input type="hidden" name="cod_pessoa" value="<?php echo $data['cod_pessoa'] ?>" />
	<center><button type="submit">Apagar</button></center><br>
	<center><a href="delete_pessoa.php"><button type="button">Voltar</button></a></center>
</form>

</body>
</html>

<?php
}
?>