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
	<script>alert('Atenção ao DELETAR! Uma pessoa será apagado juntamente com os registros que tiverem uma restrição de integridade ON DELETE. Nesse caso especifico há restrição nas tabelas TREINADOR, EQUIPE, JOGADOR!')</script>
<body>
	<h1><center>Menu: Deletar Pessoa</center></h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Código da Pessoa</th>
				<th>Nome da Pessoa</th>
				<th>Data de nascimento da Pessoa (ANO/ MÊS/ DIA) </th>
				<th>Sigla do país de nascimento da Pessoa </th>
				<th>Opção</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM pessoa WHERE cod_pessoa >= 1";
			$result = $connect->query($sql);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['cod_pessoa']."</td>
						<td>".$row['nome_pessoa']."</td>
						<td>".$row['data_nascimento']."</td>
						<td>".$row['sigla_pais_Nasc']."</td>
						<td>
							<a href='remove_pessoa.php?cod_pessoa=".$row['cod_pessoa']."'><button type='button'>Remover Dados</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Não há dados para serem excluídos.</center></td></tr>";
			}
			?>
			
		</tbody>

	</table>
	<form method="post" action="./crud_pessoa.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>
</div>
</body>
</html>