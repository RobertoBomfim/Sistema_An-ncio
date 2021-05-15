<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="AnuncioEstilo.css" rel="stylesheet" media="all" />
	<title>Sistema de Anúncios</title>
</head>
<body>
	<form action="cadastro.php" method="post" name="cadastro anuncio" class="center-form"> 
		<h1>Cadastro de Anúncio</h1>
			<label for="nome">Nome</label>
			<p></p>
			<input type="text" id="nomeid" placeholder="Insira o nome do anúncio" required="required" name="nome" />
			<p></p>

			<label for="cliente">Cliente</label>
			<p></p>
			<input type="text" id="nomeid" placeholder="Insira o nome do cliente" required="required" name="cliente" />
			<p></p>

			<label for="data_inicio">Data de início</label>
			<p></p>
			<input type="date" id="dataid" placeholder="Insira a data inicial" required="required" name="data_inicio" />
			<p></p>

			<label for="data_termino">Data de término</label>
			<p></p>
			<input type="date" id="dataid" placeholder="Insira a data final" required="required" name="data_termino" />
			<p></p>

			<label for="investimento">Investimento por dia</label>
			<p></p>
			<input type="text" id="investimentoid" placeholder="Informe o valor" required="required" name="investimento" />
			<p></p>

			<input type="submit" class="cadastrar" value="Cadastrar" />
			<input type="submit" class="buscar" onclick="location.href='busca.php';" value="Relatório" />

		</form>
</body>
</html>