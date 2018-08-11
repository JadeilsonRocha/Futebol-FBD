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
	<script>alert('Atenção ao DELETAR! Um jogador será apagado juntamente com os registros que tiverem uma restrição de integridade ON DELETE. Nesse caso especifico não há NENHUMA restrição em outras tabelas!')</script>
	<h1><center>Menu: Deletar um Jogador</center></h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Nome do Jogador </th>
				<th>Código do Jogador </th>
				<th>Nome da Equipe </th>
				<th>Código da Equipe </th>
				<th>Opção </th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM jogador";
			$result = $connect->query($sql);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>Nome do Jogador	</td>
						<td>".$row['cod_pessoa']."</td>
						<td>Nome da Equipe </td>
						<td>".$row['cod_equipe']."</td>
						<td></td>
						<td>
							<a href='remove_jogador.php?cod_pessoa=".$row['cod_pessoa']."'><button type='button'>Remover Dados</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Não há jogadores atualmente.</center></td></tr>";
			}
			?>
			
		</tbody>

	</table>
	<form method="post" action="./crud_jogador.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>
</div>
</body>
</html>