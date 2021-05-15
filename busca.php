<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="AnuncioEstilo.css" rel="stylesheet" media="all" />
	<title>Sistema de Anúncios</title>
</head>
<body>
	<form action="listar.php" method="post" name="relatorio anuncio" class="center-form"> 
		<h1>Relatórios</h1>
			<label for="cliente">Cliente</label>
			<p></p>
			<input type="text" id="nomeid" placeholder="Insira o nome do cliente" name="cliente" required />
			<p></p>

			<label for="data_inicio">Data de início</label>
			<p></p>
			<input type="date" id="dataid" placeholder="Insira a data inicial"  name="data_inicio" required />
			<p></p>

			<label for="data_termino">Data de término</label>
			<p></p>
			<input type="date" id="dataid" placeholder="Insira a data final" name="data_termino" required />
			<p></p>

			<input type="submit" class="emitir" onclick="Emitir();" value="Emitir" name="filtro" />
			
	</form>



</body>
</html>