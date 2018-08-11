
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
	<h1> <center> Menu: Visualizar Jogador  </center> </h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Nome do Jogador </th>
				<th>Código do Jogador </th>
				<th>Nome da Equipe </th>
				<th>Código da Equipe </th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT pessoa.nome_pessoa, j.cod_pessoa, equipe.sigla_pais, j.cod_equipe FROM jogador as j, pessoa, equipe
					where j.cod_equipe = equipe.cod_equipe and j.cod_pessoa = pessoa.cod_pessoa";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['nome_pessoa']."</td>
						<td>".$row['cod_pessoa']."</td>
						<td>".$row['sigla_pais']."</td>
						<td>".$row['cod_equipe']."</td>
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