<?php 

include_once"config.php"; 

//SE ACIONAR O FILTRO

$param = '';

if(isset($_POST['filtro'])){
	
	$data_inicio = $_POST['data_inicio'];
	$data_termino = $_POST['data_termino'];
	$cliente = $_POST['cliente'];
	
	$param .= " where DATE(data_inicio) BETWEEN '$data_inicio' AND '$data_termino'";
	$param .= " and cliente = '".$cliente."' ";

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="AnuncioEstilo.css" rel="stylesheet" media="all" />
	<title>Sistema de Anúncios</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<h3>Relatório</h3>
<table class="table">
	<tr>
		<td>Cliente</td>
		<td>Valor Total Investido</td>
		<td>Qtd. Máx. Visualizações</td>
		<td>Qtd. Máx. Cliques</td>
		<td>Qtd. Máx de Compartilhamentos</td>


	</tr>
	
	<?php $sql = "select cliente, sum(investimento) as 'TotalInvestimento' from tbanuncio ".$param." group by cliente order by id desc"; 
             $cont = 0;
             $total = 0;
            if ($result = $conexao->query($sql)) {

    $ValorInvestido = 0;
    $TotalVisualizacoes = 0;
    $TotalCliques = 0;
    $TotalCompartilhamento = 0;
    $visualizacoes = 0;

    while ($row = $result->fetch_assoc()) { 
    	echo "<tr>";
        $cont++;
        $ValorInvestido=$row['TotalInvestimento'];

    if($ValorInvestido>=1)
	{
		$visualizacoes = $ValorInvestido * 30;
		
		if($visualizacoes>=100)
		{
			$TotalCliques = ($visualizacoes/100) * 12;
			
			if($TotalCliques>=20)
			{
				$TotalCompartilhamento = ($TotalCliques/20) * 3;
				$TotalVisualizacoes = ($TotalCompartilhamento * 40) + $visualizacoes;
				
			}
			
			else
			{
				$TotalVisualizacoes = $ValorInvestido * 30;		
			}
		}
		
		else
		{
			$TotalVisualizacoes = $ValorInvestido * 30;
		}
	}
	

        ?>

	<td><?php echo $row['cliente']; ?></td>
	<td>R$ <?php echo number_format($row['TotalInvestimento'],2,",","."); ?></td>
	<td><?php echo $TotalVisualizacoes; ?></td>
	<td><?php echo $TotalCliques; ?></td>
	<td><?php echo $TotalCompartilhamento; ?></td>

<?php echo "</tr>"; } } ?>



</table>

</body>
</html>