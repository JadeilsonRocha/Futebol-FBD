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
	<script>alert('Atenção ao DELETAR! Uma equipe será apagada juntamente com os registros que tiverem uma restrição de integridade ON DELETE. Nesse caso especifico há restrição nas tabelas JOGO, COPA_EQUIPE!')</script>
<body>
	<h1><center>Menu: Deletar Equipe</center></h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Código Equipe</th>
				<th>Sigla Equipe</th>
				<th>Código Treinador</th>
				<th>Opção</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM equipe WHERE cod_equipe >= 1";
			$result = $connect->query($sql);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['cod_equipe']."</td>
						<td>".$row['sigla_pais']."</td>
						<td>".$row['cod_treinador']."</td>
						<td>
							<a href='remove_equipe.php?cod_equipe=".$row['cod_equipe']."'><button type='button'>Remover Dados</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
			
		</tbody>

	</table>
	<form method="post" action="./crud_equipe.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>
</div>
</body>
</html>