
<?php require_once '../php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="../php_action/stylesheet.css"/>
	<title>Futebol ONE</title>
	<style>
	body{
		background: #DCDCDC;
	}
		.manageMember {
			width: 70%;
			margin: 10px 30px 30px 50px;
		}

		table {
			width: 130%;
			height: 20%;
			margin-top: 10px;
		}

	</style>
</head>
<body>
	<h1> <center> Menu: Visualizar Jogo  </center> </h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Número do Jogo </th>
				<th>Estádio do Jogo</th>
				<th>Data do Jogo (ANO/ MÊS/ DIA)</th>
				<th>Hora do Jogo (HORA/ MINUTO)</th>
				<th>Código da Equipe </th>
				<th>Gols da Equipe 1 </th>
				<th>Código da Equipe 2</th>
				<th>Gols da Equipe 2 </th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM jogo WHERE numero_jogo >= 1";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['numero_jogo']."</td>
						<td>".$row['estadio_jogo']."</td>
						<td>".$row['data_jogo']."</td>
						<td>".$row['hora_jogo']."</td>
						<td>".$row['cod_equipe1']."</td>
						<td>".$row['gols_equipe1']."</td>
						<td>".$row['cod_equipe2']."</td>
						<td>".$row['gols_equipe2']."</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Não há jogos atualmente.</center></td></tr>";
			}
			?>
		
		</tbody>

	</table>
	<form method="post" action="./crud_jogo.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>	
</div>
</body>
</html>