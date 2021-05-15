<?php
	$servidor = "localhost";
	$dbname = "anuncio";
	$dbusuario = "root";
	$dbsenha = "";
	$conexao = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
	if (!$conexao) {
		die("Conexão falhou: " . mysql_connect_error());
	}
?>