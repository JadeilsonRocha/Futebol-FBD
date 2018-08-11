<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="../php_action/stylesheet.css"/>
	<title>Farmácia Popular</title>

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
				width:85%;
				height: 30px;
				font-size: 11pt;
				color: white;
				background: blue;
		}
	</style>

</head>
<body>
<h1> <center> Adicionar Cliente  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/copa/create_copa.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Nome Completo</th>
				<td><br><input type="text" name="nome" placeholder="Nome Completo" /></td>
			</tr>		
			<tr>
				<th>Endereço</th>
				<td><br><input type="text" name="rua" placeholder="Av / Rua / Travessa" /></td>
			</tr>
			<tr>
				<th>Numero</th>
				<td><br><input type="number_format" name="numero" placeholder="Número" /></td>
			</tr>
			<tr>
				<th>Complemento</th>
				<td><br><input type="text" name="complemento" placeholder="Complemento"></td>
			</tr>
			<tr>
				<th>Bairro</th>
				<td><br><input type="text" name="bairro" placeholder="Bairro"></td>
			</tr>
			<tr>
				<th>Cidade</th>
				<td><br><input type="text" name="cidade" placeholder="Cidade"></td>
			</tr>
			<tr>
				<th>Estado</th>
				<td><select class="w3-select" name="opcion">
						<option value="" disabled selected>Escolha seu estado</option>
						<option value="1">Acre</option>
						<option value="2">Alagoas</option>
						<option value="3">Amapá</option>
						<option value="4">Amazonas</option>
						<option value="5">Bahia</option>
						<option value="6">Ceará</option>
						<option value="7">Distrito Federal</option>
						<option value="8">Espírito Santo</option>
						<option value="9">Goiás</option>
						<option value="10">Maranhão </option>
						<option value="11">Mato Grosso</option>
						<option value="12">Mato Grosso do Sul</option>
						<option value="13">Minas Gerais</option>
						<option value="14">Pará</option>
						<option value="15">Paraíba</option>
						<option value="16">Paraná</option>
						<option value="17">Pernambuco</option>
						<option value="18">Piauí</option>
						<option value="19">Rio de Janeiro</option>
						<option value="20">Rio Grande do Norte</option>
						<option value="21">Rio Grande do Sul</option>
						<option value="22">Rondônia</option>
						<option value="23">Roraima</option>
						<option value="24">Santa Catarina</option>
						<option value="25">São Paulo</option>
						<option value="26">Sergipe </option>
						<option value="27">Tocantins </option>
					</select>
				</td>
			</tr>
			<tr>
				<th>CEP</th>
				<td><br><input type="text" name="cep" placeholder="Ex.: 00000 000"></td>
			</tr>
			<tr>
				<th>&nbsp; &nbsp; Telefone &nbsp; &nbsp; &nbsp; &nbsp; </th>
				<td><br><input type="text" name="fone" placeholder="Ex.: 00 0000 0000" /></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	<form method="post" action="../cliente/crud_cliente.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>
</fieldset>

</body>
</html>

