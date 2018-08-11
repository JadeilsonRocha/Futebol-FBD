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
	<h1><center>Menu: Atualizar Copa</center></h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Ano Copa</th>
				<th>Inicio da Copa (ANO/ MÊS/ DIA)</th>
				<th>Fim da Copa (ANO/ MÊS/ DIA)</th>
				<th>Cidade de Abertura</th>
				<th>Opção</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM copa WHERE ano_copa >= 1";
			$result = $connect->query($sql);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['ano_copa']."</td>
						<td>".$row['data_inicio_copa']."</td>
						<td>".$row['data_fim_copa']."</td>
						<td>".$row['cidade_abertura']."</td>
						<td>
							<a href='edit_copa.php?ano_copa=".$row['ano_copa']."'><button type='button'>Editar Dados</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
			
		</tbody>

	</table>
	<form method="post" action="./crud_copa.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>
</div>
</body>
</html>