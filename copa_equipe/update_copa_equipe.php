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
	<h1><center>Menu: Atualizar Copa_Equipe</center></h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Ano Copa</th>
				<th>Código da Equipe</th>
				<th>Sigla da Equipe</th>
				<th>Opção</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT cp.ano_copa, cp.cod_equipe, equipe.sigla_pais  FROM copa_equipe as cp, equipe 
					where cp.cod_equipe = equipe.cod_equipe";
			$result = $connect->query($sql);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['ano_copa']."</td>
						<td>".$row['cod_equipe']."</td>
						<td>".$row['sigla_pais']."</td>
						<td>
							<a href='edit_copa_equipe.php?cod_equipe=".$row['cod_equipe']." & ano_copa=".$row['ano_copa']."'><button type='button'>Editar Dados</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
			
		</tbody>

	</table>
	<form method="post" action="./crud_copa_equipe.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>
</div>
</body>
</html>