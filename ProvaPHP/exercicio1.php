<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 1</title>
	<meta  charset="utf-8" lang="pt-BR">

	<!--
		Gustavo Clay - rgm 15588921
		1 – Faça um programa que receba 3 números. Informe qual é o maior e o menor dos dois. Se a soma dos dois (maior e menor) for maior que 50. Então o sistema deverá apresentar o resultado somando 20. Se for menor ou igual a 50. Deverá apresentar subtraindo 10. [IF/ELSE] -->

	</head>
	<body>
		<h1>Comparador</h1>
		<form action="exercicio1.php" method="GET">
			A <input type="number" name="a">
			B <input type="number" name="b">
			C <input type="number" name="c">
			<button type="submit">Enviar</button>
		</form>
		<br>
		<h1>Resultados</h1>
		<?php
		$a = @$_REQUEST["a"];
		$b = @$_REQUEST["b"];
		$c = @$_REQUEST["c"];
		$maior = max(array($a, $b, $c));
		$menor = min(array($a, $b, $c));

		echo "Maior: $maior <br>";
		echo "Menor: $menor <br>";

		if (($maior + $menor) <= 50) {
			echo "Soma menor que 50(resultado subtraindo 10): ".($maior + $menor - 10)."<br>";
		} elseif (($maior + $menor) > 50) {
			echo "Soma maior que 50(resultado somando 20): ".($maior + $menor + 20)."<br>";
		};

		?>
	</body>
	</html>