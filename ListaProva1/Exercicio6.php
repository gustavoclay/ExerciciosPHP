<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 6</title>
	<meta charset="utf-8" lang="pt-BR">
</head>
<body>
	<h1>Exercicio - Fumantes</h1>
	<p>Calcular a quantidade de dinheiro gasta por um fumante. Dados: o número de anos que ele fuma, o nº de cigarros fumados por dia e o preço de uma carteira.</p>
	<br>
	<form action="Exercicio6.php" method="GET">
		Número de anos que ele fuma: <input type="number" name="anos"><br>
		Número de cigarros fumados por dia: <input type="number" name="cigarrosDia"><br>
		Preço de uma cateira de cigarros: <input type="number" name="valorCarteira"><br>
		<button type="submit">Calcular</button>
	</form>
	<br>
	<h2>Resultado</h2>

	<?php
	$anos = @$_REQUEST["anos"] * 365;
	$cigarrosDia = @$_REQUEST["cigarrosDia"];
	$valorCarteira = @$_REQUEST["valorCarteira"];
	$valorFinal = (($cigarrosDia * $anos)/20)*$valorCarteira;

	echo "Valor gasto em cigarros: $valorFinal R$ <br>";


	?>


</body>
</html>