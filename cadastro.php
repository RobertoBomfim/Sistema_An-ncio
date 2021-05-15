<?php include_once"config.php";?>

<html>
	<body>
		<?php

			$nome = $_POST["nome"];
			$cliente = $_POST["cliente"];
			$data_inicio = $_POST["data_inicio"];
			$data_termino = $_POST["data_termino"];
			$investimento = $_POST["investimento"];
			$conexao = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

			mysqli_select_db($conexao, '$dbname');
			$sql = "INSERT INTO tbanuncio (nome, cliente, data_inicio, data_termino, investimento) VALUES ('$nome', '$cliente', '$data_inicio', '$data_termino', '$investimento')";
			
			if (mysqli_query($conexao, $sql)) {
				echo "<script>alert('Anúncio cadastrado com sucesso!'); window.location = 'index.php';</script>";
			}

			else{
				echo "Erro ao cadastrar o anúncio, tente novamente!" . $sql . "<br>" . mysqli_error($conexao);
			}
			mysqli_close($conexao);

		?>
	</body>
</html>