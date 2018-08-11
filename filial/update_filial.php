<?php require_once '../php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="../php_action/stylesheet.css"/>
	<title>Farmácia Popular</title>
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
	<h1><center>Atualizar Filial</center></h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Codigo </th>
				<th>Nome</th>
				<th>Rua</th>
				<th>Numero</th>
				<th>Complemento</th>
				<th>Bairro</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>CEP</th>
				<th>Fone</th>
				<th>Editar Dados</th>
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
						<td></td>
						<td></td>
						<td>
							<a href='edit_jogo.php?numero_jogo=".$row['numero_jogo']."'><button type='button'>Editar Dados</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Não há jogos atualmente.</center></td></tr>";
			}
			?>
			
		</tbody>

	</table>
	<form method="post" action="./crud_filial.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>
</div>
</body>
</html>