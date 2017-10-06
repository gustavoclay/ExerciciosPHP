<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 5</title>
	<meta charset="utf-8" lang="pt-BR">
</head>
<body>
	<h1>Exercicio de Maria</h1>
	<p>Maria quer viajar até a casa de sua irmã, de carro, e gostaria de saber, antecipadamente, quantos litros de gasolina irá gastar e qual o valor que terá de desembolsar pelo combustível gasto na viagem. Faça um script em PHP que receba via formulário: </p>
	<ul>
		<li>A distância da casa de Maria até a casa de sua irmã, em km; </li>
		<li> O consumo de seu carro, em km/litro; </li>
		<li>O preço da gasolina no posto onde Maria abastece. </li>
	</ul>
	<p>Em seguida, mostre para Maria o valor que a mesma gastará com combustível na viagem e quantos litros o carro consumirá;</p>
	<br>
	<form action="Exercicio5.php" method="GET">
		Distancia (Km): <input type="number" name="distancia"><br>
		Consumo (km/litro): <input type="number" name="consumo"><br>
		Preço (por litro): <input type="number" name="valor"><br>
		<button type="submit">Calcular</button>
	</form>
	<br>
	<h2>Resultado</h2>
	<?php =
	$distancia = @$_REQUEST["distancia"];
	$consumo = @$_REQUEST["consumo"];
	$valor = @$_REQUEST["valor"];
	$consumoFinal = $distancia / $consumo;
	$valorFinal = $consumoFinal * $valor;

	echo "O carro de Maria vai consumir $consumoFinal litros de combustível ao final da viagem.<br>";
	echo "Maria gastará $valorFinal R$ de combustível em sua viagem.<br>";


	?>


</body>
</html>